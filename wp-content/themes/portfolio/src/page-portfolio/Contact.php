<?php
get_header();
?>
<!doctype html>
<html lang="fr-be">
<head>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/contact.css">
    <title>Formulaire__contacte</title>
</head>
<body class="contact__me">
<h2 class="titile">Une question ?</h2>
<p>Je me ferai un plaisir de vous r&eacute;pondre.</p>
<section class="contact">
    <form class="form">
        <p class="form__elements">
            <label class="lastName" for="lastName">Nom<span>*</span></label>
            <input class="lastName" type="text" name="lastName" id="lastName">
        </p>

        <p class="form__elements">
            <label class="firstName" for="firstName">Prenom<span>*</span></label>
            <input class="firstName" type="text" name="firstName" id="firstName">
        </p>

        <p class="form__elements">
            <label class="email" for="email">Email<span>*</span></label>
            <input class="email" type="text" name="email" id="email">
        </p>

        <p class="form__elements">
            <label class="subjectMessage" for="subjetMessage">Sujet de votre message</label>
            <select class="subjectMessage" id="subjetMessage" name="subjetMessage">
                <option>Proposition de projet ou collaboration</option>
                <option>Demande d’informations suppl&eacute;mentaires</option>
                <option>Opportunit&eacute; d’embauche(CDI, CDD, stage…)</option>
                <option>Autre(pr&eacute;cisez dans le message)</option>
            </select>
        </p>

        <p class="form__elements">
            <label  class="message" for="message">Message</label>
            <input  class="message" type="text" id="message" name="message">
        </p>
        <p class="form__elements"><span>*</span>Eements obligatoires</p>

        <button class="submit" id="submit" type="submit">Envoyer</button>
    </form>

    <section class="coordonnees">
        <h2 class="coordonnee">Coordonn&eacute;es</h2>
        <ul>
            <li class="coordonnee__info">jgasoar&commat;oginformatique.be</li>
            <li class="coordonnee__info">&#43;32 486 95 77 22</li>
            <li class="coordonnee__info">Rue d'evremont 318 4801 Stembert</li>
        </ul>
        <h2 class="folow__me">Me suivre sur</h2>
        <ul class="apps">
            <li class="app"><img src="./src/img/facebook-icone.png" alt="app icone de facebook"></li>
            <li class="app"><img src="./src/img/twitter-icone.png" alt="app icone de twitter"></li>
            <li class="app"><img src="./src/img/ln-icone.png" alt="app icone de linked"></li>
        </ul>
    </section>
</section>

</body>
</html>
<?php
get_footer();
?>

