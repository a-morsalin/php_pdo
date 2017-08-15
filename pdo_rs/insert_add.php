<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 8/12/2017
 * Time: 10:42 PM
 */

require 'connection.php';

$query = $db->prepare("INSERT INTO names(firstname,lastname,postcode) VALUES (:firstname,:lastname, :postcode)");

$query->bindValue(':firstname','Sajid');
$query->bindValue(':lastname','Israq');
$query->bindValue(':postcode','1201');
$query->execute();
