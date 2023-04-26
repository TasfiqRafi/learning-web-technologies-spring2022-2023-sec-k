<?php

    session_start();
    require_once("../models/data_base.php");

    if(isset($_REQUEST['delete']))
    {
        $productID = $_REQUEST['productid'];

        $sql = "SELECT * FROM `products` WHERE `product_id` = '{$productID}'";
        $result = sqlReadQuery($sql);

        if($result == 1)
        {

            $result = sqlgetTableData($sql);

            if($result)
            {
                
                $productData = mysqli_fetch_assoc($result)
?>


<html>
    <head>
        <title>
            Delete Product
        </title>
    </head>

    <body>
        <form method="POST" action="../controllers/delete_Product_Check.php" enctype="">
            <input type="hidden" name="productid" id="productid" value="<?php echo($productData['product_id']) ?>">
            <fieldset align="center">
                <legend><b> Delete Product </b></legend>
                <b>Product Name:</b> <?php echo($productData['product_name']) ?>
                <br/>
                <b>Buying Price:</b> <?php echo($productData['buying_price']) ?>
                <br/>
                <b>Selling Price:</b> <?php echo($productData['selling_price']) ?>
                <br/>
                <b>Displable:</b> <?php echo($productData['displayable']) ?>
                <br/><br/>
                <hr>
                <input type="submit" name="delete" id="delete" value="Delete"/>
                <br/>
            </fieldset>

            <br/><br/>

        </form>
        <h2 align="center"> Back to <a href="home_page.php "> Home Page </a></h2>
    </body>
</html>

<?php

    }
        }
        else
        {
            echo("<h3 align='center'>Null Product</h3>");
        }
    }
    else
    {
        header('location: ../views/product_list.php');
    }

?>