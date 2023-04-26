<?php

    session_start();
    require_once("../models/data_base.php");

    if(isset($_REQUEST['searchname']))
    {
        $searchResult = $_REQUEST['search'];

?>

<html>
    <head>
        <title> Product Lists </title>
    </head>

    <body>
        <h1 align="center"> Product Lists </h1>
        <form  align="center" method="GET" action="../controllers/product_list_check.php" enctype="">
            <b>Search: </b> <input type="text" name="search" id="search" placeholder="" value=""/><br/><br/>
            <input type="submit" name="searchname" id="searchname" value="Search"/>
        </form>
        <?php

            $sql = "SELECT * FROM products WHERE product_name LIKE '%$searchResult%' ORDER BY product_name ASC";
            $result = sqlReadQuery($sql);

            if($result > 0)
            {

        ?>

        <table border="1" align="center">
            <tr>
                <th width="250px">Product</th>
                <th width="250px">Profit</th>
                <th colspan="2" width="250px"></th>
            </tr>

            <?php
                
                $sql = "SELECT * FROM `products` WHERE product_name LIKE '%$searchResult%' AND `displayable` = 'Yes'";
                $result = sqlgetTableData($sql);

                if($result)
                {
                    
                    while($productData = mysqli_fetch_assoc($result))
                    {

            ?>

            <tr align="center">
                <td width="250px"><?php echo($productData['product_name']) ?></td>
                <td width="250px"><?php echo($productData['profit']) ?></td>

                <form action="edit_Product.php" method="GET">
                    <input type="hidden" name="productid" id="productid" value="<?php echo($productData['product_id']) ?>">
                    <td width="250px"><button type="submit" name="edit">edit</button></td>
                </form>

                <form action="../views/delete_Product.php" method="GET">
                    <input type="hidden" name="productid" id="productid" value="<?php echo($productData['product_id']) ?>">
                    <td width="250px"><button type="submit" name="delete">delete</button></td>
                </form>
            </tr>

            <?php
                    }
                }

            ?>
        </table>

        <br/> <br/>

        <?php

                if(isset($_REQUEST['msg']))
                {
                    if($_REQUEST['msg'] == 'editsuccess')
                    {
                        echo("<h3 align='center'><b>Product Info Updated.</b></h3>");
                    }
                    elseif($_REQUEST['msg'] == 'editfailed')
                    {
                        echo("<h3 align='center'><b>Edit Failed.</b></h3>");
                    }
                    elseif($_REQUEST['msg'] == 'deletesuccess')
                    {
                        echo("<h3 align='center'><b>Product Deleted.</b></h3>");
                    }
                    elseif($_REQUEST['msg'] == 'deletefailed')
                    {
                        echo("<h3 align='center'><b>Delete Failed.</b></h3>");
                    }
                }

            }
            else
            {
                echo("<p><b>The List is Empty</b></p>");
            }

        ?>
            <h2 align="center"> Back to <a href="home_page.php "> Home Page </a></h2>
    </body>
</html>

<?php

    }
    else
    {
        header('location: ../views/product_list.php');
    }

?>