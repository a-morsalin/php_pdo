<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 8/12/2017
 * Time: 7:00 PM
 */

require 'connection.php';

$query = $db->query("SELECT * FROM names");

while($data = $query->fetch(PDO::FETCH_ASSOC)){
    echo "<pre>". var_dump($data) ."</pre>";
}
