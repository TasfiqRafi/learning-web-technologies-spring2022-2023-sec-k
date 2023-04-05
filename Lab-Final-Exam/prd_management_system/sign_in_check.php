<?php

    session_start();
    require_once('user_list.php');

    if(isset($_REQUEST['submit']))
    {
        $userEmail = $_REQUEST['email'];
        $userPassword = $_REQUEST['password'];
        $user = ['email' => $userEmail, 'password' => $userPassword];
        $result= sign_in_sql($user);

        if($userEmail == "" || $userPassword == "")
        {
          header('location: sign_in.php?msg=nullInputs');
        }

        elseif(!$result){
          header('location: sign_in.php?msg=userNotFound');
        }

        else
        {
          if($result)
          {
            header('location: home_page.php');
          }
          else
          {
            header('location: sign_in.php?msg=userNotFound');
          }

        }
    }
    else
    {
      header('sign_in.php');
    }

?>