<?php

$mysqli = new mysqli('localhost', 'root', '', 'oleinik');
$mysqli->set_charset("utf8");

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}


$group_name = $_POST['group_name']; $kurator = $_POST['kurator']; $starosta_id = $_POST['starosta_id']; $speciality = $_POST['speciality']; $predmet_id = $_POST['predmet_id']; $id = $_POST['id']; 

$sql = "UPDATE groupa SET group_name='$group_name', kurator='$kurator', starosta_id='$starosta_id', speciality='$speciality', predmet_id='$predmet_id' WHERE id='$id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


$mysqli->close();

include("showGroupa.php")
?>
