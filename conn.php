<?php

    //Authentication Credentials
    $host = "localhost";
    $port = "5432";
    $dbname = "teams";
    $user = "postgres";
    $password = "";

    //Connection String
    $dsn = "pgsql:host=$host;dbname=$dbname"; //DataDriver

    try{       
        //Session Start
        $instance = new PDO($dsn,$user,$password);

        //Setting Error Alert
        $instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //Echo Messages
        echo "Successfully connected to the database";

    } catch (PDOException $e)
    {
        echo "Connection Failed: " / $e->getMessage();
           
    }

?>