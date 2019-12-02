<?php

$mysqli = new mysqli('localhost', 'root', '', 'oleinik');
$mysqli->set_charset("utf8");

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}

$firstname = $_POST['firstname']; $lastname = $_POST['lastname']; $date_born = $_POST['date_born']; $group_id = $_POST['group_id']; 

$sql = "INSERT INTO student (id, first_name, last_name, date_born, group_id) VALUES ('', '$firstname', '$lastname', '$date_born', '$group_id')";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


$mysqli->close();

include("showStudent.php")
?>
