<?php
$is_home = true;
require_once('./inc/head.php') 
?>

<main class="home">
    <div class="hero">
        <div class="content">
            <div class="illu-hero">
                <img src="./assets/img/illu-hero.png" alt="illustration d'un bateau avec un rappel du logo des p'tits doudous sur la voile">
            </div>
            <div class="main-content">
                <p class="suptitle">L’évènement du moment</p>
                <h1>Le Vendée Globe 2024</h1>
                <p>Armel Tripon met les voiles ! Cap sur son deuxième Vendée Globe. Cette fois-ci ce sont les p’tits doudous qui embarquent avec lui pour cette aventure solitaire et solidaire. Bon vent Armel et bon vent les p’tits doudous.</p>  
                <a href="#" class="btn btn_blue">Découvrir le projet</a> 
            </div>
            <div class="count-down">
                <p>Cap sur le 10 NOVEMBRE</p>
                <div class="time-container">
                    <div class="days-container">
                        <p>Jours</p>
                        <span class="time-days"></span>
                    </div>
                    <div class="hours-container">
                        <p>Heures</p>
                        <span class="time-hours"></span>
                    </div>
                    <div class="minutes-container">
                        <p>Minutes</p>
                        <span class="time-minutes"></span>
                    </div>
                    <div class="secs-container">
                        <p>Secondes</p>
                        <span class="time-secs"></span>
                    </div>
                </div>
            </div>
            <div class="more-news">
                <div class="cta-new">
                    <p>Voir plus d'actus</p>
                    <svg width="28" height="16" viewBox="0 0 28 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.15981 0.440002L0.799804 2.8L13.9998 16L27.1998 2.8L24.8398 0.440001L13.9998 11.28L3.15981 0.440002Z" fill="#3163AC"/>
                    </svg>
                </div>
            </div>
        </div>
        <div class="split-screen-cta">
            <p>Participez au projet</p>
        </div>
    </div>
</main>

<?php require_once('./inc/footer.php') ?>