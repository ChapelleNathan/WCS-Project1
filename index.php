<?php
include("script.php");
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,700;1,100&display=swap" rel="stylesheet">
</head>

<body>
    <div class="bloc">
        <div class="bobimage">
            <img src="https://casoar.org/wp-content/uploads/2020/10/Bob-leponge.png" alt="Jolie éponge">
        </div>

        <div class="title">
            <h1>A propos</h1>

            <p>Bob l'éponge</p>

            <p>21 ans d'expérience dans le domaine de la restauration, spongieux et dynamique.Motivé à l'idée de rejoindre un établissement spécialisé dans la gastronomie de crabe ou de l'huitre,
                je suis à la recherche d'une expérience qui permettra de mettre en avant ma passion et mes connaissances en pâté de crabe. Passioné d'humour , j'ai le contact facile avec les gens et je pourrais donc facilement m'intégrer dans une équipe de travail.
            </p>
        </div>

    </div>
  
<section class="trainings">

<?php
foreach($formations as $formation){?>
    <div class="trainings-info">
<p><?= $formation['title']?></p>

<p><?= $formation['place']?></p>

<p><?= $formation['description']?></p>

<p><?= $formation['date']?></p>


</div>
<?php   }   ?>

</section>


<section class="experience">

<?php
foreach($experiences as $experience){?>

<div class="experience-info">


<p><?= $experience['title']?></p>

<p><?= $experience['place']?></p>

<p><?= $experience['description']?></p>

<p><?= $experience['date']?></p>

    
    </div>
<?php  } ?>

    </section>

</body>

</html>