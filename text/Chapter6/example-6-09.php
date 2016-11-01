<?php

// $_POST配列に _submitキーがあれば
// サブミットされている
if (array_key_exists('_submit_check', $_POST)) {
    // validate_fromから返されるエラーメッセージの配列が
  //空でなければ、エラーメッセージ引数として、フォーム表示
    if ($form_errors = validate_form()) {
        show_form($form_errors);
    } else {
      //処理を実行
        process_form();
    }
} else {
    //サブミットされえいない場合はフォームを表示
    show_form();
}

// Do something when the form is submitted
function process_form() {
    print "Hello, ". $_POST['my_name'];
}

// Display the form
function show_form($errors = '') {
    // If some errors were passed in, print them out
    if ($errors) {
        print 'Please correct these errors: <ul><li>';
        print implode('</li><li>', $errors);
        print '</li></ul>';
    }

    print<<<_HTML_
<form method="POST" action="$_SERVER[PHP_SELF]">
Your name: <input type="text" name="my_name">
<br/>
<input type="submit" value="Say Hello">
<input type="hidden" name="_submit_check" value="1">
</form>
_HTML_;
}

// Check the form data
function validate_form() {
    // Start with an empty array of error messages
    $errors = array();

    // Add an error message if the name is too short
    if (strlen($_POST['my_name']) < 3) {
        $errors[] = 'Your name must be at least 3 letters long.';
    }

    // Return the (possibly empty) array of error messages
    return $errors;
}