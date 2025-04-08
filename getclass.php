<?php
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Connect to DB
    $conn= new mysqli("localhost", "root", "", "database_school");

    $stmt = $conn->prepare("SELECT class FROM studentreg WHERE id ='$id'");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($class);
    $stmt->fetch();

    echo $class;

    $stmt->close();
    $conn->close();
}
?>
