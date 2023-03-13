<?php

    $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
    $search = 5;
    $found = false;

      echo("The Number list is: ");
        for ($i = 0; $i < count($numbers); $i++) 
        {
          echo($numbers[$i]." ");
        }

        for ($i = 0; $i < count($numbers); $i++) 
        {
          if ($numbers[$i] == $search) 
          {
            $found = true;
            break;
          }
        }

        if ($found) 
        {
          echo("The number {$search} is found in array");
        } 
        else 
        {
          echo "The number {$search} isn't found in array.";

        }