<?php
get_header();
?>
<!doctype html>
<html lang="fr-be">
<head>
    <title></title>
</head>
<body>
    <h2>Une question ?</h2>
        <p>Je me ferai un plaisir de vous répondre.</p>
    <form>
        <label for="lastName">Nom<span>*</span></label>
        <input type="text" name="lastName" id="lastName">

        <label for="firstName">Prenom<span>*</span></label>
        <input type="text" name="firstName" id="firstName">

        <label for="email">Email<span>*</span></label>
        <input type="text" name="email" id="email">

        <label for="subjetMessage">Sujet de votre message</label>
        <select id="subjetMessage" name="subjetMessage">
            <option>Proposition de projet ou collaboration</option>
            <option>Demande d’informations supplémentaires</option>
            <option>Opportunité d’embauche(CDI, CDD, stage…)</option>
            <option>Autre(précisez dans le message)</option>
        </select>
        <label for="message">Message</label>
        <input type="text" id="message" name="message">
        <p><span>*</span>Eements obligatoires</p>

        <button type="submit">Envoyerr</button>
    </form>

    <h2>Coordonnées</h2>
    <ul>
        <li>jgasoar@oginformatique.be</li>
        <li>+32 486 95 77 22</li>
        <li>Rue d'evremont 318 4801 Stembert</li>
    </ul>
    <h2>Me suivre sur</h2>
    <ul>
        <li><img src=""alt=""></li>
    </ul>
</body>
</html>
<?php
get_footer();
?>

