<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
    <style>
        table
        {
            font-family: "Times New Roman";
            font-size : 25px;
        }
    </style>
</head>
<body>
    <?php

    echo "<table border=0 cellspacing=10 cellpadding=1 align=center>";
    error_reporting(0);
    $db = new PDO("mysql:host=localhost;dbname=denemee;charset=utf8", "root", "");
    $query = $db->query("select * from dene ", PDO::FETCH_ASSOC);
    foreach ($query as $row)
    {
        echo "<tr><td align=left>".$row["maas"]." "."<img src='bar.jpg' height=55 width=".$row["maas"].">"." ".$row["ad"]." ".$row[soyad]."</td></tr>";
        #valign=bottom ifadesi aşağıdan hizalama yapar
    }

    ?>
    </table>
</body>
</html>