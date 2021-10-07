<?php
require '../src/form.php';
require '../src/script.php';
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
                <h3>A propos</h3>
                <p>Bob l'éponge</p>
                <p>21 ans d'expérience dans le domaine de la restauration, spongieux et dynamique.Motivé à l'idée de rejoindre un établissement spécialisé dans la gastronomie de crabe ou de l'huitre,
                    je suis à la recherche d'une expérience qui permettra de mettre en avant ma passion et mes connaissances en pâté de crabe. Passioné d'humour , j'ai le contact facile avec les gens et je pourrais donc facilement m'intégrer dans une équipe de travail.
                </p>
            </div>
        </div>
    </section>

    <section class="trainings">
        <h3>
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
            </svg>
            Formation
        </h3>

        <?php
        foreach ($formations as $formation) { ?>

            <div class="trainings-info">
                <h4><?= $formation['title'] ?></h4>
                <p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                    </svg>
                    <?= $formation['place'] ?>
                </p>

                <p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-calendar-date" viewBox="0 0 16 16">
                        <path d="M6.445 11.688V6.354h-.633A12.6 12.6 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61h.675zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82h-.684zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23z" />
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                    </svg>
                    <?= $formation['date'] ?>
                </p>
                <p><?= $formation['description'] ?></p>
            </div>
        <?php } ?>

    </section>
    <section class="experience">

        <h3>
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-briefcase" viewBox="0 0 16 16">
                <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z" />
            </svg>
            Experience
        </h3>

        <?php
        foreach ($experiences as $experience) { ?>
            <div class="experience-info">
                <h4><?= $experience['title'] ?></h4>
                <p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                    </svg>
                    <?= $experience['place'] ?>
                </p>
                <p> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-calendar-date" viewBox="0 0 16 16">
                        <path d="M6.445 11.688V6.354h-.633A12.6 12.6 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61h.675zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82h-.684zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23z" />
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                    </svg>

                    <?= $experience['date'] ?>
                </p>
                <p><?= $experience['description'] ?></p>
            </div>


        <?php } ?>

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
                
                <ul>
                    <h3 id="interests">Centres d'intérêt</h3>
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
            <input type="text" name="lastname" id="lastname" placeholder="Bob" value="<?= $data['lastname'] ?? '' ?>">
            <?php if (!empty($errors)) : ?>
                <?php if (isset($errors['lastnameEmpty'])) : ?>
                    <p class="error"><?= $errors['lastnameEmpty'] ?></p>
                <?php endif ?>
                <?php if (isset($errors['toLongLastname'])) : ?>
                    <p class="error"><?= $errors['toLongLastname'] ?></p>
                <?php endif ?>
            <?php endif ?>


            <label for="firstname">Prénom</label>
            <input type="text" id="firstname" name="firstname" placeholder="L'Éponge" value="<?= $data['firstname'] ?? '' ?>">
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
                <?php foreach ($reasons as $key => $reason) : ?>
                    <option value="<?= $key ?>"><?= $reason ?></option>
                <?php endforeach ?>
            </select>
            <?php if (!empty($errors)) : ?>
                <?php if (isset($errors['notInSelect'])) : ?>
                    <p class="error"><?= $errors['notInSelect'] ?></p>
                <?php endif ?>
            <?php endif ?>

            <label for="message">Message</label>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Inscrivez d'autre renseignement utile"><?= $data['message'] ?? '' ?></textarea>
            <?php if (!empty($errors)) : ?>
                <?php if (isset($errors['noMessage'])) : ?>
                    <p class="error"><?= $errors['noMessage'] ?></p>
                <?php endif ?>
            <?php endif ?>
            <?php if (empty($errors) && $_SERVER['REQUEST_METHOD'] !== 'GET') : ?>
                <p class="success">Succès !</p>
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