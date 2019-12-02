<?php

$mysqli = new mysqli('localhost', 'root', '', 'oleinik');
$mysqli->set_charset("utf8");

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}

$group_name = $_POST['group_name']; $kurator = $_POST['kurator']; $starosta_id = $_POST['starosta_id']; $speciality = $_POST['speciality']; $predmet_id = $_POST['predmet_id']; 

$sql = "INSERT INTO groupa (id, group_name, kurator, starosta_id, speciality, predmet_id) VALUES ('', '$group_name', '$kurator', '$starosta_id', '$speciality', '$predmet_id')";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


$mysqli->close();

include("showGroupa.php")
?>
