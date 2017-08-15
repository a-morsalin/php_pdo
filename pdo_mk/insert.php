<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 8/14/2017
 * Time: 2:40 PM
 */
try {
    $connection = new PDO('mysql:host=localhost; dbname=pdo_ca; charset=utf8', 'root', 'dbbl96811');
    //echo "Database connected";

    if (isset($_POST['insert'])) {//isset start

        $name = $_POST['name'];
        $message = $_POST['message'];

        $query = $connection->prepare("INSERT INTO posts(name,message) VALUES (:name,:message)");

        $query->bindParam(':name', $name);
        $query->bindParam(':message', $message);


        $query->execute();
        header('Location:select.php');

    }//isset close
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();

}

?>
<?php include('inc/header.php'); ?>

    <div class="col-md-12">
        <h2>Insert Data</h2>

        <form method="post">
            <div class="form-group">
                <label for="">Name:</label>
                <input type="text" class="form-control" placeholder="Enter Name" name="name">
            </div>
            <div class="form-group">
                <label for="">Message:</label>
                <input type="text" class="form-control" placeholder="Enter Message" name="message">
            </div>
            <input type="submit" name="insert" value="Insert" class="btn btn-info">
        </form>

    </div>

<?php include('inc/footer.php'); ?>