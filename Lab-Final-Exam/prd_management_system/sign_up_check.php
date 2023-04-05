<?php

    session_start();
    require_once('user_list.php');
    require_once('validations.php');

    if(isset($_REQUEST['submit']))
    {
        $userName = $_REQUEST['username'];
        $userEmail = $_REQUEST['email'];
        $userPassword = $_REQUEST['password'];
        $userRetypePassword = $_REQUEST['retypepassword'];
        $validEmail = validateEmail($userEmail);
        $validPassword = validatePassword($userPassword);

        if($userName == "" || $userEmail == "" || $userPassword == "" || $userRetypePassword == "")
        {
          header('location:sign_up.php?msg=nullInputs');
        }

        elseif($validEmail == 0)
        {
          header('location:sign_up.php?msg=invalidEmail');
        }

        elseif($validPassword == 0)
        {
          header('location:sign_up.php?msg=invalidPassword');
        }

        elseif($userPassword != $userRetypePassword)
        {
          header('location:sign_up.php?msg=mismatchPass');
        }

        else
        {
            $user = ['username'=> $userName, 'email'=> $userEmail, 'password'=> $userPassword];
            $status = sign_up_sql($user);

            if($status)
            {
              header('location: sign_in.php?msg=signupSuccess');
            }
            else
            {
              header('location: sign_up.php?msg=signupFailed');
            }
        }
    }
    else
    {
        header('location: sign_up.php');
    }

?>