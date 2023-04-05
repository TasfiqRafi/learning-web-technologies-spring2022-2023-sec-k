<?php

    require_once('data_base.php');

    function sign_up_sql($user)
    {
        $connected = getconnection();

        $sql = "INSERT INTO `user`(`user_Name`, `user_Email`, `user_Password`) 
                VALUES ('{$user['username']}','{$user['email']}','{$user['password']}')";
        
        $result = mysqli_query($connected, $sql);
        return $result;
    }
    

    function sign_in_sql($user)
    {
        $connected = getconnection();

        $sql = "SELECT * FROM `user` WHERE user_Email='{$user['email']}' AND user_Password='{$user['password']}'";
        
        $result = mysqli_query($connected, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

?>