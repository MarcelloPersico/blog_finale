<?php 
$username = "root";
$password = "";
$title = "suca";
try {
    $pdo = new PDO('mysql:host=localhost;dbname=ped-academy', $username, $password);
    echo "yas" . PHP_EOL . "</br>";
    $pdo = new PDO('mysql:host=localhost;dbname=ped-academy' , $username,$password);
    $rows = $pdo->query('SELECT id, title, content, creation_date from post');
    $item = $rows->fetchAll(PDO::FETCH_ASSOC);
    // 1.preparare lo statement SQL
 $statement = $pdo->prepare("INSERT INTO post (title, content, creation_date) VALUES (:title, :content, NOW())");
 // 2.binding dei parametri
 $statement->bindParam(':title', $title);
 $statement->bindParam(':content', $content);
 // 3.esecuzione della query
 $statement->execute();
 // 4.return last inserted id
 $lastId = $pdo->lastInsertId();
 echo $lastId;   

    
}
catch (PDOException $e) {
    print "Error!:" . $e->getMessage() . PHP_EOL . "</br>";
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table class="  table table-dark">
        <?php foreach ($item as $item): ?>
        <tr>
            <td > <?= $item['id']?> </td>
            <td> <?= $item['title']?> </td>
            <td> <?= $item['content']?> </td>
            <td> <?= $item['creation_date']?> </td>
        </tr>
        <?php endforeach ?> 
    
    </table>
</body>
</html>