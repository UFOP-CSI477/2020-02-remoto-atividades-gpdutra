<?php
    
    require_once "connection.php";

    $estados = $connection->query("SELECT * FROM ESTADOS");

    include_once "estadosView.php";