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
                <h1>Bob L'Eponge</h1>
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
                <a href="#">A propos</a>
                <a href="#">Formations</a>
                <a href="#">Experiences</a>
                <a href="#skills">Competences</a>
                <a href="#interests">Centre d'interet</a>
            </div>

        </nav>
    </header>
    <section class="presentation">
        <div class="bloc">

            <img src="https://casoar.org/wp-content/uploads/2020/10/Bob-leponge.png" alt="Jolie éponge">
            <div class="title">
                <h3>A propos</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate provident voluptates architecto
                    iure
                    vel maxime qui odit fugit temporibus deserunt cum, tenetur tempore molestiae nemo voluptatem quidem
                    itaque quod dolores.
                </p>
            </div>
        </div>
    </section>

    <section class="trainings">
        <h3>Formation</h3>
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
        <h3>Experience</h3>
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
                    <h3>Competences</h3>
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
            <hr>
            <div class="interests">
                <img class="fishing" src="images/bobMéduse.png" alt="Bob filet méduse">
                <ul>
                    <h3 id="interests">Centres d'interet</h3>
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
        <h2>Me contacter :</h2>
        <div class="contactMe">
            <a href="http://www.spontex.fr" target="_blank">
                <h3 class="linkedin">LinkedIn : <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                    </svg></h3>
            </a>
            <div class="mail">
                <a href="mailto:bobeponge@bikinibottom.eau">
                    <h3>Gmail : <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                            <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                        </svg></h3>
                </a>
            </div>
        </div>

    </footer>
</body>

</html>