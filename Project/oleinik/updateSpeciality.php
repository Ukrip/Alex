<?php

$mysqli = new mysqli('localhost', 'root', '', 'oleinik');
$mysqli->set_charset("utf8");

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}


$name_s = $_POST['name_s']; $code = $_POST['code'];

$sql = "UPDATE speciality SET name_s='$name_s' WHERE code = '$code'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


$mysqli->close();

include("showSpeciality.php")
?>
