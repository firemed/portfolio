<!doctype html>
<html>
<?php
    require_once(dirname(__FILE__).'/templates/header.html');
?>

<body>
<nav>
    <a href=""><img id="logo" src="img/logo_mehdi.png" width="250px" alt="logo"></a>
    <ul>
        <li><a href="#presentation">PRÉSENTATION</a></li>
        <li><a href="#travaux">MES TRAVAUX</a></li>
        <li><a href="#contact">CONTACT</a></li>
    </ul>
    <div id="facebook">
    </div>
    <div id="twitter">
    </div>
    <div id="linkedin">
    </div>
</nav>
<div id="content">
    <div id="presentation" class='section'>
        <img id="profil" src="img/profil.png" alt="profil" width="300">
        <h1 class="grands_titres">Mehdi AKNOUCH</h1>
        <h2 class="sous-titres"><em>Infographiste & Webdesigner</em></h2>
        <p class="text_pres">Bonjour et Bienvenue sur mon Portfolio !

            Je me présente, je m'appelle Mehdi Aknouch, je suis <strong>âgé de 20 ans</strong> et viens du Sud de la France, dans l'<strong>Aveyron</strong> pour être plus précis !
            Mon <strong>parcours</strong> vous vous demandez ? Et bien le voilà ! Après avoir obtenu mon <strong>Baccalauréat Scientifique</strong>, j'ai effectué une <strong>Mise à Niveau en Arts Appliqués (MANAA)</strong> puis une première année de <strong>Licence Informatique</strong>.
            Finalement j'ai décidé de réaliser une formation afin de devenir <strong>Infographiste/Webdesigner</strong> que je suis à présent !</p>

        <div id="telecharger_cv">
            <span id="cv"><strong><a href="">Télécharger mon CV</a></strong></span>
        </div>
    </div>
    <?php
        require_once(dirname(__FILE__).'/templates/travaux.html');
    ?>

    <?php
        require_once(dirname(__FILE__).'/templates/contact.html');
    ?>
</div>

</body>
</html>