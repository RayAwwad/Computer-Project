<?php
    include(dirname(__FILE__)."/../connection_Sql.php");
    $query=$connection->prepare("SELECT  `name` FROM `type` where del<>1 ");
    $query->execute();
    $result = $query->setFetchMode(PDO::FETCH_ASSOC);
    $type=$query->fetchAll();
      
?>