<?php

    session_start();
    require_once("../models/data_base.php");

    if(isset($_REQUEST['delete']))
    {
        $productID = $_REQUEST['productid'];
        $sql = "DELETE FROM `products` WHERE `product_id` = '{$productID}'";
        $result = sqlWriteQuery($sql);

        if($result)
            {
                header('location: ../views/product_list.php?msg=deletesuccess');
            }

        else
            {
                header('location: ../views/product_list.php?msg=deletefailed');   
            }
    }

        else
        {
            header('location: ../views/delete_Product.php');
        }

?>