<?php


    function validatePassword($password) 
        {
            if (strlen($password) < 8) 
                {
                    return 0;
                } 
            else 
                {
                    $hasNumber = false;
                    $hasSymbol = false;



        for ($i = 0; $i < strlen($password); $i++) 
            {
                $char = $password[$i];

            if ($char == '|') 
                {
                    return 0;
                }

                else if (is_numeric($char)) 
                    {
                        $hasNumber = true;
                    }

                else if (!ctype_alpha($char) && !is_numeric($char)) 
                    {
                        $hasSymbol = true;
                    }
            }



            if (!$hasNumber) 
                {
                    return 0;
                }

                else if (!$hasSymbol) 
                    {
                        return 0;
                    } 

                else 
                    {
                        return 1;
                    }
            }
    }



    function validateEmail($email) 
        {
            if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) 
                {
                    return 0;
                } 

            else 
                {
                    return 1;
                }
        }
      
?>
