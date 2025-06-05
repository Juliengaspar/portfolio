<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['envoyer'])) {
    $lastName     = sanitize_text_field($_POST['lastName']);
    $firstName  = sanitize_text_field($_POST['firstName']);
    $email   = sanitize_email($_POST['email']);
    $sujet   = sanitize_text_field($_POST['subjetMessage']);
    $message = sanitize_textarea_field($_POST['message']);

    $to = "jgaspar@oginformatique.be"; // 👉 Mets ici ton email personnel
    $subject = "Nouveau message de $firstName $lastName : $sujet";
    $headers = "From: $firstName $lastName <$email>\r\nReply-To: $email\r\n";
    $body = "Nom : $lastName\nPrénom : $lastName\nEmail : $email\nSujet : $sujet\n\nMessage :\n$message";

    if (wp_mail($to, $subject, $body, $headers)) {
        echo "<p style='color:green;'>✅ Votre message a bien été envoyé !</p>";
    } else {
        echo "<p style='color:red;'>❌ Une erreur est survenue. Merci de réessayer plus tard.</p>";
    }
}
?>





<?php
/*
Template Name: Contact
*/
get_header();
?>
<!doctype html>
<html lang="fr-be">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <meta name="description" content=" Premiers pages aceuille du projet portfolio fait avec woordpresse ">
    <meta name="keywords" content="portfolio, Projet-web, Julien, woordpresse, formation hepl"/>
    <meta name="author" content="Julien Gaspar"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/portfolios-small.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/portfolios-medium.png">
    <link rel="icon" type="image/png" sizes="162x162" href="../img/portfolios-big.png">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/contact.css">
    <title>Formulaire__contacte</title>
</head>
<body class="contact__me">
<section>
    <h1>Contact</h1>
    <section>
    <h2 class="titile"><?php  the_field("titile__page__form"); ?></h2>
    <p><?php  the_field("text__form"); ?></p>
    <section class="contact">
       <form class="form" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="post">
           <div class="form__elements">
               <label class="lastName" for="lastName">Nom<span>*</span></label>
               <input class="lastName" type="text" name="lastName" id="lastName">
               <?php if(isset($errors['lastName'])): ?>
               <p class="field__error"><?= $errors['lastName']; ?></p>
               <?php endif; ?>
           </div>

           <div class="form__elements">
               <label class="firstName" for="firstName">Prenom<span>*</span></label>
               <input class="firstName" type="text" name="firstName" id="firstName">
               <?php if(isset($errors['firstName'])): ?>
               <p class="field__error"><?= $errors['firstName']; ?></p>
               <?php endif; ?>
           </div>

           <div class="form__elements">
               <label class="email" for="email">Email<span>*</span></label>
               <input class="email" type="text" name="email" id="email">
               <?php if(isset($errors['firstName'])): ?>
                   <p class="field__error"><?= $errors['firstName']; ?></p>
               <?php endif; ?>
           </div>

           <div class="form__elements">
               <label class="subjectMessage" for="subjetMessage">Sujet de votre message</label>
               <select class="subjectMessage" id="subjetMessage" name="subjetMessage">
                   <option>Proposition de projet ou collaboration</option>
                   <option>Demande d’informations suppl&eacute;mentaires</option>
                   <option>Opportunit&eacute; d’embauche(CDI, CDD, stage…)</option>
                   <option>Autre(pr&eacute;cisez dans le message)</option>
               </select>
               <?php if(isset($errors['subjetMessage'])): ?>
                   <p class="field__error"><?= $errors['subjetMessage']; ?></p>
                    <?php endif; ?>
           </div>

           <div class="form__elements">
               <label  class="message" for="message">Message</label>
               <input  class="message" type="text" id="message" name="message">
               <?php if(isset($errors['message'])): ?>
                   <p class="field__error"><?= $errors['message']; ?></p>
                   <?php endif; ?>
           </div>
           <p class="form__elements"><span>*</span>Eements obligatoires</p>

           <button class="submit" id="submit" type="submit" name="envoyer">Envoyer</button>
       </form>

       <section class="coordonnees">
           <h2 class="coordonnee">Coordonn&eacute;es</h2>
           <ul>
               <li class="coordonnee__info"><?php the_field("email");?>></li>
               <li class="coordonnee__info"><?php the_field("number__tel");?>></li>
               <li class="coordonnee__info"><?php the_field("adresse");?></li>
           </ul>
    </section>
</section>
<?php
get_footer();
?>
</body>
</html>

