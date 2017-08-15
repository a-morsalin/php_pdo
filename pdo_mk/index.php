<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 8/14/2017
 * Time: 1:57 PM
 */
try{
    $connection = new PDO('mysql:host=localhost; dbname=pdo_ca; charset=utf8','root','dbbl96811');
    echo "Database connected";
}catch(PDOException $e){
    echo "Error: ".$e->getMessage();

}