<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 8/12/2017
 * Time: 6:02 PM
 */
try{
    $db = new PDO('mysql:host=localhost;dbname=pdo_sr;charset=utf8','root','dbbl96811');
}catch (Exception $e){
    echo $e->getMessage();
    //echo "An error has been shown";
}


//var_dump($db);