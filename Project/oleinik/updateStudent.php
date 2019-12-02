<?php

$mysqli = new mysqli('localhost', 'root', '', 'oleinik');
$mysqli->set_charset("utf8");

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}


$id = $_POST['id']; $firstname = $_POST['firstname']; $lastname = $_POST['lastname']; $date_born = $_POST['date_born']; $group_id = $_POST['group_id']; 

$sql = "UPDATE student SET first_name='$firstname', last_name='$lastname', date_born='$date_born', group_id='$group_id' WHERE id='$id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


$mysqli->close();

include("showStudent.php")
?>
