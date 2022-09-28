<?php
$poids =70;
$taille=1.57;

$bmi=$poids/($taille*$taille);
number_format($bmi,2);

 $personne=[
    'Filali' ,
     'Xavier',
     1.57,
     70,
     'H123',
     $bmi,
 ];

 var_dump($personne);

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css.css">
    <title>ex1.2</title>
</head>
<body>

<h1>exercice 1.2</h1>
<table class="tb1">
    <thead>
    <tr>
        <th>Code</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Taille</th>
        <th>Poids</th>
        <th>Bmi</th>
    </tr>
    </thead>
<!--affichage du tableau sans boucle-->

<!--    <tbody>-->
<!--    <tr>-->
<!---->
<!--        <td>--><?php //echo $personne[0]?><!--</td>-->
<!--        <td>--><?php //echo $personne[1]?><!--</td>-->
<!--        <td>--><?php //echo $personne[2]?><!--</td>-->
<!--        <td>--><?php //echo $personne[3]?><!--</td>-->
<!--        <td>--><?php //echo $personne[4]?><!--</td>-->
<!--        <td>--><?php //echo $personne[5]?><!--</td>-->
<!--    </tr>-->
<!--    <tbody\>-->

    <!--affichage du tableau avec boucle-->
    <tbody>
      <tr>

   <?php for ($i=0 ; $i<count($personne);$i++) { ?>
       <td><?php echo $personne[$i]?></td>
  <?php } ?>
    </tr>
    <tbody\>

</table>

</body>
</html>
