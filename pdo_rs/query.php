<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 8/12/2017
 * Time: 6:45 PM
 */

require 'connection.php';

foreach ($db->query("SELECT * FROM names") as $details){
    echo htmlentities($details['firstname'])." ".htmlentities($details['lastname'])." ".htmlentities($details['postcode'])."<br>";
}