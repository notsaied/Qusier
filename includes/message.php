<?php

require_once 'vendor.php';

$inputs = ['name','email','csrf_token','message'];

    foreach($inputs as $input){

        if(empty($_POST[$input])){

            $errors[] = 'the '.$input.' is required !';

        }else{

            $fields[$input] = filterinput($_POST[$input]);

        }


    }

    if(strval(@$TOKEN) !== strval(@$_POST['csrf_token'])){
        $errors[] = 'please try again';
    }

    if(!filter_var(@$fields['email'], FILTER_VALIDATE_EMAIL) && !empty($fields['email'])) {

        @$errors[] = filterinput(@$fields['email']).' Not Email';

    }

    if(isset($errors)){

        echo '
        <div class="container">
            <div class="alert alert-danger" role="alert">';
            foreach($errors as $error){
                echo $error.'<br>';
            }
        echo '</div></div>';

    }else{

       $b = new backend();

       $b->insert($fields['name'],$fields['email'],$fields['message']);

        echo '<div class="container">

                <div class="alert alert-success" role="alert">

                    <p class="lead">
                       تم ارسال رسالتك بنجاح 😍
                    </p>

                </div>
             </div>';
    }

?>