<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 8/12/2017
 * Time: 7:17 PM
 */

require 'connection.php';

$query = $db->query("SELECT * FROM names");
$result = $query->fetchAll(PDO::FETCH_ASSOC);

foreach($result as $data){
    $firstname = htmlentities($data['firstname']);
    $lastname = htmlentities($data['lastname']);
    $postcode = htmlentities($data['postccode']);

    echo $firstname." ".$lastname." ".$postcode."<br>";
}
