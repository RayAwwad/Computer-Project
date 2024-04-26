<?php
    $Servername="localhost";
    $Username="root";
    $Password="";
    $dataBaseName="Car_detail";
    try{
        $connection=new PDO("mysql:host=$Servername;dbname=$dataBaseName",$Username,$Password);
        $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
    }catch(PDOException $error){
            echo "connection Problem".$error->getMessage();
    }
?>