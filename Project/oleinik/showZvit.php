<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Звіт</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Звіт</h1>

    <?php

    $mysqli = new mysqli('localhost', 'root', '', 'oleinik');
    $mysqli->set_charset("utf8");
    
    if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
    }

    if($result = $mysqli->query('SELECT s.first_name, s.last_name, s.date_born, g.group_name, g.kurator, sp.name_s, p.name, p.number_hour FROM student AS s INNER JOIN groupa AS g ON (s.group_id=g.id) INNER JOIN speciality AS sp ON (g.speciality=sp.name_s) INNER JOIN student AS st ON (g.starosta_id=st.id) INNER JOIN predmet AS p ON (g.predmet_id=p.id)')) {

        printf("Список: <br><br>");
        printf("<table><tr><th>Ім'я студента</th><th>Прізвище</th><th>День народження</th><th>Назва групи</th><th>Куратор</th><th>Назва спеціальності</th><th>Назва предмету</th><th>Кількість годин</th></tr>"); 
        while( $row = $result->fetch_assoc() ){ 
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['first_name'], $row['last_name'], $row['date_born'], $row['group_name'], $row['kurator'], $row['name_s'], $row['name'], $row['number_hour']); 
        };
        printf("</table>");
        $result->close();
    }

    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
