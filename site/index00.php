<html>
<head>
    <title>

    </title>
</head>
<?php
    $dsn="mysql:host=localhost;charset=utf8;dbname=school";
    $pdo= new PDO($dsn,'root','');

    $sql="SELECT * FROM `students` WHERE 'id'<20;";
    $db=$pdo->query($sql); //sql進→ 查詢

    // $rows=$db->fetch(); // 查詢->取出一筆 結果
    // echo "<pre>";
    // print_r($rows);
    // echo "</pre>";

    

    $rows=$db->fetchAll(); //查詢->取出所有筆 結果
    echo "<pre>";
    print_r($rows);
    echo "</pre>";

?>
</html>