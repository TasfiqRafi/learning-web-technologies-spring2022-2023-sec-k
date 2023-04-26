<?php

    function setConnection()
    {
        $localHost = "127.0.0.1";
        $dbUser = "root";
        $dbPass = "";
        $dbName = "product_db";

        return mysqli_connect($localHost, $dbUser, $dbPass, $dbName);
    }


    // To read the sql quary.
    function sqlReadQuery($sql)
    {
        $connected = setConnection();
        $result = mysqli_query($connected, $sql);

        return mysqli_num_rows($result);
    }


    // To write the sql quary.
    function sqlWriteQuery($sql)
    {
        $connected = setConnection();
        return mysqli_query($connected, $sql);
    }


    // To get access into the sql table data.
    function sqlgetTableData($sql)
    {
        $connected = setConnection();
        return mysqli_query($connected, $sql);
    }

?>