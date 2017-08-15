<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 8/14/2017
 * Time: 2:05 PM
 */
try {
    $connection = new PDO('mysql:host=localhost; dbname=pdo_ca; charset=utf8', 'root', 'dbbl96811');
    //echo "Database connected";

    $query = $connection->prepare("SELECT * FROM posts");
    $query->setFetchMode(PDO::FETCH_ASSOC);
    $query->execute();
//    while ($data = $query->fetch()) {
////        echo $data['name'] . "<br>";
////        echo $data['message'] . "<br>";
//    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();

}

?>
<?php include ('inc/header.php'); ?>

<div class="col-md-12">
    <h2>User Table</h2>
    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Message</th>
            <th>Posted</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>

        <?php while ($data = $query->fetch()) {; ?>
        <tr>
            <td><?php  echo $data['name'];?></td>
            <td><?php  echo $data['message'];?></td>
            <td><?php  echo $data['created_at'];?></td>
            <td>
                <a class="btn btn-warning" href="update.php?edit_id=<?php echo $data['id']; ?>">Edit</a>
                <a class="btn btn-danger" href="delete.php?del_id=<?php echo $data['id']; ?>">Delete</a>
            </td>
        </tr>
        <?php  };?>

        </tbody>
    </table>
</div>

<?php include ('inc/footer.php'); ?>



