<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 8/12/2017
 * Time: 10:29 PM
 */
require 'connection.php';

$query = $db->prepare("SELECT * FROM names WHERE firstname LIKE ?");
$query->bindValue(1,'Zimran');
$query->execute();

while($data = $query->fetch(PDO::FETCH_ASSOC)){
   // echo "<pre>". var_dump($data) ."</pre>";
    $firstname = htmlentities($data['firstname']);
    $lastname = htmlentities($data['lastname']);
    $postcode = htmlentities($data['postccode']);

    echo $firstname." ".$lastname." ".$postcode."<br>";
}