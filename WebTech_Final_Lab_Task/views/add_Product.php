<html>
    <head>
        <title>
            Add Product
        </title>
    </head>

    <body>

        <form method="POST" action="../controllers/add_Product_Check.php" enctype="">

        <fieldset align="center">

            <legend><b> Add Product </b></legend>

                <b>Product Name: </b><input type="text" name="productname" id="productname" value=""/>
                <br/><br/>
                <b>Buying Price: </b><input type="number" name="buyingprice" id="buyingprice" value=""/>
                <br/><br/>
                <b>Selling Price: </b><input type="number" name="sellingprice" id="sellingprice" value=""/>
                <br>
                <hr>
                <input type="checkbox" name="display" id="display" value=""/>
                <label for="display">Display</label> <br/>
                <hr>
                <input type="submit" name="submit" id="submit" value="Save"/>
                <br/><br/>

                <?php

                    if(isset($_REQUEST['msg']))
                    {
                        if($_REQUEST['msg'] == 'nullInputs')
                        {
                            echo("Fill all the fileds.");
                        }
                        elseif($_REQUEST['msg'] == 'invalidInputs')
                        {
                            echo("Selling price must be higher.");
                        }
                        elseif($_REQUEST['msg'] == 'success')
                        {
                            echo("Product added");
                        }
                        elseif($_REQUEST['msg'] == 'failed')
                        {
                            echo("Fail to add");
                        }
                    }

                ?>
            </fieldset>

            <br/><br/>

            <h2 align="center"> Back to <a href="home_page.php "> Home Page </a></h2>

        </form>
    </body>
</html>