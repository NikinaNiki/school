
<?php
include 'connection.php';

if (isset($_POST['id'])) {
    $student_id = $_POST['id'];

    $query = "SELECT * FROM studentreg WHERE id= $student_id ";
    $result = mysqli_query($con, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        echo $row['class']; // or whatever field you want to return
    } else {
        echo "No subcategory found";
    }
}
?>