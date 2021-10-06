<?php
if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    require '../src/form.php';
    var_dump($data);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,700;1,100&display=swap" rel="stylesheet">
</head>

<body>
    <header>

        <nav>
            <a href="#" class="myCV" id="myCV">
                <h1>Bob L'Éponge</h1>
            </a>
            <a href="#navigation" class="linkList">

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
            </a>
            <div class="navigation" id="navigation">
                <a href="#" class="linkCloseBurger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="closeBurger" viewBox="0 0 16 16">
                        <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z" />
                    </svg></a>
                <a href="#">À propos</a>
                <a href="#">Formations</a>
                <a href="#">Expériences</a>
                <a href="#skills">Compétences</a>
                <a href="#interests">Centres d'intérêt</a>
            </div>

        </nav>
    </header>
    <section class="presentation">
        <div class="bloc">

            <img src="https://casoar.org/wp-content/uploads/2020/10/Bob-leponge.png" alt="Jolie éponge">
            <div class="title">
                <h3>À propos</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate provident voluptates architecto
                    iure
                    vel maxime qui odit fugit temporibus deserunt cum, tenetur tempore molestiae nemo voluptatem quidem
                    itaque quod dolores.
                </p>
            </div>
        </div>
    </section>

    <section class="trainings">
        <h3>Formations</h3>
        <div class="trainings-info">
            <h4>
                <!--Lieu en php-->
            </h4>
            <p>
                <!--description en php-->
            </p>
            <p>
                <!--date en php-->
            </p>
        </div>
    </section>
    <section class="experience">
        <h3>Expériences</h3>
        <div class="experience-info">
            <h4>
                <!--Lieu en php-->
            </h4>
            <p>
                <!--description en php-->
            </p>
            <p>
                <!--date en php-->
            </p>
        </div>
    </section>
    <section class="skillsAndInterests">


        <h2 class="mantra">"Quoi de mieux que de servir des sourires ?"</h2>
        <div class="personalStuff">
            <div class="skills" id="skills">

                <ul>
                    <h3>Compétences</h3>
                    <li class="skillsList">Pâtés de crabe
                        <div class="progressBar">
                            <div class="progressColor" id="crabSteak"></div>
                        </div>
                    </li>
                    <li class="skillsList">Faire pouet avec ses pieds
                        <div class="progressBar">
                            <div class="progressColor" id="pouet" max="100" value="82"></div>
                        </div>
                    </li>
                    <li class="skillsList">
                        Relation client
                        <div class="progressBar">
                            <div class="progressColor" id="client" max="100" value="67"></div>
                        </div>
                    </li>
                    <li class="skillsList">Changer de forme à volonté
                        <div class="progressBar">
                            <div class="progressColor" id="shapeChanger" max="100" value="88"></div>
                        </div>
                    </li>
                    <li class="skillsList">Faire repousser ses membres
                        <div class="progressBar">
                            <div class="progressColor" id="members" max="100" value="79"></div>
                        </div>
                    </li>
                </ul>
                <img class="bobBurger" src="images/emojipng.com-4981643.png" alt="Bob burger">
            </div>
            <div class="interests">
                <img class="fishing" src="images/bobMéduse.png" alt="Bob filet méduse">
                <h3 id="interests">Centres d'intérêt</h3>
                <ul>
                    <li>Faire des bulles de savon avec Patrick</li>
                    <li>Attraper des méduses</li>
                    <li>Faire du karaté avec Sandy</li>
                    <li>Faire de la musculation avec Sandy</li>
                    <li>Jouer avec Gary</li>
                </ul>
            </div>
        </div>

    </section>

    <div class="formulaire" id="formulaire">
        <form action="#formulaire" method="POST">
            <label for="lastname">Nom</label>
            <input type="text" name="lastname" id="lastname" placeholder="Bob">
            <?php if (!empty($errors)) : ?>
                <?php if (isset($errors['lastnameEmpty'])) : ?>
                    <p class="error"><?= $errors['lastnameEmpty'] ?></p>
                <?php endif ?>
                <?php if (isset($errors['toLongLastname'])) : ?>
                    <p class="error"><?= $errors['toLongLastname'] ?></p>
                <?php endif ?>
            <?php endif ?>


            <label for="firstname">Prénom</label>
            <input type="text" id="firstname" name="firstname" placeholder="L'Éponge">
            <?php if (!empty($errors)) : ?>
                <?php if (isset($errors['firstnameEmpty'])) : ?>
                    <p class="error"><?= $errors['firstnameEmpty'] ?></p>
                <?php endif ?>
                <?php if (isset($errors['toLongfirstName'])) : ?>
                    <p class="error"><?= $errors['toLongfirstName'] ?></p>
                <?php endif ?>
            <?php endif ?>


            <label for="select">Sujet</label>
            <select name="select" id="select">
                <option value="stage">Pour un stage</option>
                <option value="emploi">Pour un emploi</option>
                <option value="renseignement">Pour un renseignement</option>
            </select>
            <?php if (!empty($errors)) : ?>
                <?php if (isset($errors['notInSelect'])) : ?>
                    <p class="error"><?= $errors['notInSelect'] ?></p>
                <?php endif ?>
            <?php endif ?>

            <label for="message">Message</label>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Inscrivez d'autre renseignement utile"></textarea>
            <?php if (!empty($errors)) : ?>
                <?php if (isset($errors['noMessage'])) : ?>
                    <p class="error"><?= $errors['noMessage'] ?></p>
                <?php endif ?>
            <?php endif ?>


            <button>Envoyer</button>
        </form>
    </div>


    <footer>

        <h2><a href="http://www.spontex.fr"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bank" viewBox="0 0 16 16">
                <path d="M8 .95 14.61 4h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.379l.5 2A.5.5 0 0 1 15.5 17H.5a.5.5 0 0 1-.485-.621l.5-2A.5.5 0 0 1 1 14V7H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 4h.89L8 .95zM3.776 4h8.447L8 2.05 3.776 4zM2 7v7h1V7H2zm2 0v7h2.5V7H4zm3.5 0v7h1V7h-1zm2 0v7H12V7H9.5zM13 7v7h1V7h-1zm2-1V5H1v1h14zm-.39 9H1.39l-.25 1h13.72l-.25-1z" />
            </svg>
            Mentions Légales
        </a></h2>
    </footer>
</body>

</html>