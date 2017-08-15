<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 8/12/2017
 * Time: 10:59 PM
 */

#connecting

//print_r(PDO::getAvailableDrivers());
try{
    $db = new PDO('mysql:host=localhost;dbname=pdo_ca;charset=utf8','root','dbbl96811');
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    //echo $e->getMessage();
    //die();
    die("Sorry database problem");
}
//echo "The rest of our page";

//$query = $db->query("SELECT * FROM posts");

// fetch associative array
//while($data = $query->fetch(PDO::FETCH_ASSOC)){
//    echo $data['name']." ".$data['message']."<br>";
//}

//fetch object
//while($data = $query->fetch(PDO::FETCH_OBJ)){
//    echo $data->name ."<br>";
//}


//class fetch
//class GuestBook{
//    public $name, $message,$create_at,$entry;
//    public function __construct(){
//        $this->entry = "{$this->name} posted: {$this->message}";
//    }
//}
//
//$query->setFetchMode(PDO::FETCH_CLASS,'GuestBook');
//while($data = $query->fetch()){
//    //echo "<pre>", print_r($data) ,"</pre>";
//    echo $data->entry,"<br>";
//};

//fetch all
//$data = $query->fetchAll(PDO::FETCH_ASSOC);
////echo "<pre>", print_r($query->fetchAll(PDO::FETCH_ASSOC)) , "</pre>";
//
//if(count($data)) {
//    echo "There are result";
//}else{
//    echo "There are no result";
//}

//prepared statement
//$name = "Kamal";
//$message = "Test";

//$query = "INSERT INTO posts (name,message,created_at) VALUES (:name,:message,NOW())";
//$query = "INSERT INTO posts (name,message,created_at) VALUES (?,?,NOW())";
//$data = $db->prepare($query);
//
//$data->execute(array(
//    ':name' => $name,
//    ':message' => $message
//));
//$data->execute(array($name,$message));

//echo $db->lastInsertId();

//getting row count using fetch

$query = $db->query('SELECT * FROM posts');
if($query->rowCount()){
    //echo "Result";
    while($data = $query->fetch(PDO::FETCH_OBJ)){
        echo $data->name, '<br>';
    }
}else{
    echo "No Result";
}