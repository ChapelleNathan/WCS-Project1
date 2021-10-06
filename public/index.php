<?php
require '../src/script.php'
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