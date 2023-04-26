<?php

    session_start();
    require_once("../models/data_base.php");

    if(isset($_REQUEST['edit']))
    {
        $productID = $_REQUEST['productid'];

        $sql = "SELECT `product_name`, `buying_price`, `selling_price` FROM `products` WHERE `product_id` = '{$productID}'";
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
            Edit Product
        </title>
        <script type="text/javascript" src="../scripts/edit_Product_Check_Script.js"></script>
    </head>

    <body>
        <form method="POST" action="../controllers/edit_Product_Check.php" enctype="">
            <input type="hidden" name="productid" id="productid" value="<?php echo($productID) ?>"/>
            <fieldset align="center">

                <legend><b> Edit Product </b></legend>

                <b>Product Name:</b> <input type="text" name="productname" id="productname" value="<?php echo($productData['product_name']) ?>"/>
                
                <br/><br/>

                <b>Buying Price:</b> <input type="number" name="buyingprice" id="buyingprice" value="<?php echo($productData['buying_price']) ?>"/>
                
                <br/><br/>

                <b>Selling Price:</b> <input type="number" name="sellingprice" id="sellingprice" value="<?php echo($productData['selling_price']) ?>"/>
                
                <br/><br/>

                <hr>

                <input type="checkbox" name="display" id="display" value=""/>
                <label for="display">Display</label>
                
                <br/>
                <hr>

                <input type="submit" name="submit" id="submit" value="Save"/>
                <br/>

                <?php

                    if(isset($_REQUEST['msg']))
                    {
                        if($_REQUEST['msg'] == 'nullInputs')
                        {
                            echo("Fillup all the fileds.");
                        }
                        elseif($_REQUEST['msg'] == 'invalidInputs')
                        {
                            echo("Selling price must be higher.");
                        }

                    }

                ?>

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
            echo("<h3 align='center'>Product Doesn't Exsist</h3>");
        }
    }
    else
    {
        header('location: ../views/product_list.php');
    }

?>