<?php
    include(dirname(__FILE__)."/../connection_Sql.php");
    $query=$connection->query("SELECT cd.imageLink,t.name FROM `car_detail` as cd INNER JOIN `type` as t on cd.id_type = t.`id-Type` where t.del<>1");
    $query->execute();
    $result = $query->setFetchMode(PDO::FETCH_ASSOC);
    $image=$query->fetchAll();
?>