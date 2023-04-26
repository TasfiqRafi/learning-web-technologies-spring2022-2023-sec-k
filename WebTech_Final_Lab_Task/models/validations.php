<?php

  function setProductCode() 
    {
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $code = '';
  


  // To make 6 digit code.
  for ($i = 0; $i < 8; $i++) 
    {
      $index = rand(0, strlen($characters) - 1);
      $code .= $characters[$index];
    }
    

  $code = 'EPDT-' . $code;
  return $code;
}

?>