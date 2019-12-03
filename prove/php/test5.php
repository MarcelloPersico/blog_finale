<?php
$students = ["Luigi","Mario","Luca"];
$studenti = [
    ['name' => "Fabio", 'grade' => 22],
    ['name' => "Luigi", 'grade' => 30],
    ['name' => "Mario", 'grade' => 27],
];
 $media = array_sum(array_column($studenti, 'grade' )) /  count($studenti) ; 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Lista studenti:</h1>
    <table border=1>
        <tr>
            <th>ID</th>
            <th>Name</th>

        </tr>
        <?php
          foreach ($students as $i => $n ){ ?>
              <tr>
              
             <td> <?= $i +1 ?></td>
             <td> <?=  $n ?>  </td>
               
               
               </tr>
           <?php } ?>
               
    </table>
    <h1> Totale studenti: <?=   count($students) ?> </h1>
    <p>Ultimo aggiornamento: </br> <?= date('H:i') . " " .  date('d/m/Y') ?>
    </p>
    <h1>Lista studenti:</h1>
    <table border=1 style="border: 1px solid lightgrey    ">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Grade</th>
        </tr>
        <?php foreach($studenti as $h => $v) { ?>
              <tr>
            <td> <?= $h +1 ?></td>
            <td> <?=  $v['name'] ?>  </td>
            <td> <?= $v['grade'] ?></td>
        </tr>
        <?php }?>
    </table>
    <h1>Media voto: <?= round($media, 2) ?></h1>
        </br>
        Ultimo aggiornamento: </br> <?= date('H:i') . " " .  date('d/m/Y') ?>



  
</body>
</html>
