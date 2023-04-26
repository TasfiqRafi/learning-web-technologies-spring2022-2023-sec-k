<?php

    session_start();

    require_once("../models/data_base.php");
    require_once("../models/validations.php");

    if(isset($_REQUEST['submit']))
    {
        $productName = $_REQUEST['productname'];
        $buyingPrice = $_REQUEST['buyingprice'];
        $sellingPrice = $_REQUEST['sellingprice'];
        $profit = ($sellingPrice - $buyingPrice);
        $displayable = "";

        if(isset($_REQUEST['display']))
        {
            $displayable = "Yes";
        }

        else
        {
            $displayable = "No";
        }

            if($productName == "" && $buyingPrice == "" && $buyingPrice == "")
            {
                header('location: ../views/add_Product.php?msg=nullInputs');
            }

            elseif($sellingPrice < $buyingPrice)
            {
                header('location: ../views/add_Product.php?msg=invalidInputs');
            }

            else
            {   
                $productID = setProductCode();
                $sql = "INSERT INTO `products`(`product_id`, `product_name`, `buying_price`, `selling_price`, `profit`, `displayable`) 
                    VALUES ('{$productID}','{$productName}','{$buyingPrice}','{$sellingPrice}','{$profit}','{$displayable}')";
                $result = sqlWriteQuery($sql);

        if($result)
        {
            header('location: ../views/add_Product.php?msg=success');
        }

        else
        {
            header('location: ../views/add_Product.php?msg=failed');
        }
        }
        
    }
    else
    {
        header('location: ../views/add_Product.php');
    }

?>