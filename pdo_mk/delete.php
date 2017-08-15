<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 8/14/2017
 * Time: 11:55 PM
 */

try {
    $connection = new PDO('mysql:host=localhost; dbname=pdo_ca; charset=utf8', 'root', 'dbbl96811');
    // echo "Database connected"

    $del_id = $_GET['del_id'];

    $query = $connection->prepare("DELETE FROM posts where id= '$del_id' ");

    $query->execute();
    header('Location:select.php');

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();

}