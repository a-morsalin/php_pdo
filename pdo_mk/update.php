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

    if (isset($_POST['submit'])) {//isset start

        $edit_id = $_GET['edit_id'];

        $name = $_POST['name'];
        $message = $_POST['message'];

        $query = $connection->prepare("UPDATE posts SET name = :name, message = :message where id ='$edit_id' ");
        $query->bindParam(':name', $name);
        $query->bindParam(':message', $message);

        $query->execute();
        header("Location:select.php");

    }//isset close
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();

}
?>
<?php include('inc/header.php'); ?>


    <div class="col-md-12">

        <h2>Update Table</h2>

        <form method="POST" action="">



            <div class="form-group">
                <label for="">Name:</label>
                <input type="text" class="form-control"  name="name" value="<?php echo 'name'=>$name; ?>">
            </div>
            <div class="form-group">
                <label for="">Message:</label>
                <input type="text" class="form-control"  name="message">
            </div>

            <input type="submit" name="submit" value="Insert" class="btn btn-info">
        </form>

    </div>

<?php include('inc/footer.php'); ?>