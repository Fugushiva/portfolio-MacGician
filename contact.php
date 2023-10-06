<?php 
include'include/header.php';

$alert = "";
const LONGUEUR_MESSAGE = 10;
const LONGUEUR_NOM = 3;

//variable d'email
$destinataire = "mrmacgician@gmail.com";
$sujet = "test mail() PHP";
$headers = "Content-Type: text/plain; charset=utf-8  \r\n";






if(!empty($_POST["btSend"])){
    //vérification des valeurs
    if(!empty($_POST["nom"]) && !empty($_POST["email"]) && !empty($_POST["message"])){
        $nom = htmlspecialchars($_POST["nom"]);
        //vérification du mail
        $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
        $message = htmlspecialchars($_POST['message']);

        //Vérification de la taille du message
        if(strlen($message) > LONGUEUR_MESSAGE){
            //Vérification de la taille du nom
            if(strlen($nom) > 3){
                $headers .= "From: contact@webhost.com";
                mail($destinataire, $sujet, $message . " Adresse mail de contact " . $email, $headers);

            }
            else{
                $alert = "Votre nom doit contenir minimum " . LONGUEUR_NOM . " caractères";
            }
        }else{
            $alert = "Votre message doit faire minimum " . LONGUEUR_MESSAGE . " caractères";
        }

    }else{
        $alert = "Veuillez remplir tous les champs";

    }
}

?>

<div id="containerContact">
    <div id="contactForm">
        <form action="" method="post">
            <input type="text" class="input" placeholder="Nom" name="nom">
            <input type="email" class="input" placeholder="Email" name="email">
            <textarea class="input" id="textArea" placeholder="Message" name="message"></textarea>
            <input type="submit" class="input" id="btSend" value="Envoyer le message" name="btSend">
        </form>
        <div id="alertMessage">
            <?=$alert?>
        </div>
    </div>

</div>

<?php 
include'include/footer.php';
?>