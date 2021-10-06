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

            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate provident voluptates architecto iure vel maxime qui odit fugit temporibus deserunt cum, tenetur tempore molestiae nemo voluptatem quidem itaque quod dolores.
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