<div class="container-fluid contact">
    <div id="secondCercle2" class="deuxiemeCercle">
        <span class="char1"></span>
        <span class="char2">06</span>
        <span class="char3"></span>
        <span class="char4">22</span>
        <span class="char5"></span>
        <span class="char6">81</span>
        <span class="char7"></span>
        <span class="char8">61</span>
        <span class="char9"></span>
        <span class="char10">61</span>
        <span class="char11"></span>
        <span class="char12">•</span>
        <span class="char13"></span>
        <span class="char14">s</span>
        <span class="char15">p</span>
        <span class="char16">a</span>
        <span class="char17"></span>
        <span class="char18">p</span>
        <span class="char19">r</span>
        <span class="char20">a</span>
        <span class="char21">t</span>
        <span class="char22">i</span>
        <span class="char23">c</span>
        <span class="char24">i</span>
        <span class="char25">e</span>
        <span class="char26">n</span>
        <span class="char27">n</span>
        <span class="char28">e</span>
        <span class="char29"></span>
        <span class="char30">•</span>
    </div>
    <div class="navbar">
        <div class="row" style="width: 100%; margin-top: 3vh;">
            <div class="col-md-4 nav">
                <a href="<?= $routes['home'] ?>">Prestations</a>
            </div>
            <div class="col-md-4 nav">
                <a href="<?= $routes['home'] ?>">Katia</a>
            </div>
            <div class="col-md-4 nav">
                <a href="<?= $routes['contact'] ?>">Contact</a>
            </div>
        </div>
    </div>
    <div class="navbarMobile">
        <input type="checkbox" class="toggler" id="toogler">
        <div class="menu">
            <div class="hamburger">
                <div></div>
            </div>
            <a href="<?= $routes['home'] ?>">Accueil</a>
            <a href="<?= $routes['home'] ?>">Prestations</a>
            <a href="<?= $routes['contact'] ?>">À propos</a>
            <div id="troisiemeCercle" class="troisiemeCercle">
                <span class="char1"></span>
                <span class="char2">06</span>
                <span class="char3"></span>
                <span class="char4">22</span>
                <span class="char5"></span>
                <span class="char6">81</span>
                <span class="char7"></span>
                <span class="char8">61</span>
                <span class="char9"></span>
                <span class="char10">61</span>
                <span class="char11"></span>
                <span class="char12">•</span>
                <span class="char13"></span>
                <span class="char14">s</span>
                <span class="char15">p</span>
                <span class="char16">a</span>
                <span class="char17"></span>
                <span class="char18">p</span>
                <span class="char19">r</span>
                <span class="char20">a</span>
                <span class="char21">t</span>
                <span class="char22">i</span>
                <span class="char23">c</span>
                <span class="char24">i</span>
                <span class="char25">e</span>
                <span class="char26">n</span>
                <span class="char27">n</span>
                <span class="char28">e</span>
                <span class="char29"></span>
                <span class="char30">•</span>
            </div>
        </div>
    </div>
    <div class="container-fluid formulaire">
        <form action="" method="POST">
            <div class="row">
                <input type="text" name="nom" placeholder="nom" required>
                <input type="text" name="prenom" placeholder="prénom" required>
            </div>
            <div class="row">
                <input type="text" name="sujet" placeholder="manucure, maquillage.." required>
                <input type="mail" name="email" placeholder="email" required>
            </div>
            <div class="row">
                <textarea name="message" placeholder="Message" id="textMessage" cols="20" rows="7" required></textarea>
            </div>
            <div class="row">
                <button id="btnSend" type="submit" name="submit">Envoyé</button>
            </div>
        </form>
    </div>
</div>
<?php

require 'mail/vendor/autoload.php';
require 'mail/functions.php';
require 'mail/config.php';

$mail = new PHPMailer\PHPMailer\PHPMailer(true);

//check query is execute successfully or not
$email = 'misskatiagaspar77130@gmail.com';
//Server settings
$mail->SMTPDebug = CONTACTFORM_PHPMAILER_DEBUG_LEVEL;
$mail->isSMTP();
$mail->Host = CONTACTFORM_SMTP_HOSTNAME;
$mail->SMTPAuth = true;
$mail->Username = CONTACTFORM_SMTP_USERNAME;
$mail->Password = CONTACTFORM_SMTP_PASSWORD;
$mail->SMTPSecure = CONTACTFORM_SMTP_ENCRYPTION;
$mail->Port = CONTACTFORM_SMTP_PORT;

// Recipients
$mail->setFrom('misskatiagaspar77130@gmail.com', 'Contact Portfolio');
$mail->addAddress($email);
$mail->addReplyTo('yourmail@gmail.com');

// Content
$mail->isHTML(true); 
    
$result='<div id="message" style="border: 1px solid var(--change-color);width: 19vw; min-width: 246px; top: 10%;position: absolute;border-radius: 15px;position: absolute;margin-left: auto;margin-right: 59px;left: 0;right: 0;">
            <h6 style="color: var(--second-bg-color);font-weight: 500;text-align: center;padding: 7px 13px;margin: 0px; font-size: 1.5vh;">(FR) Votre message a bien été envoyé ! <br>(EN) Your message has been sent !</h6>
         </div>';

$result1="<div id='message' style='border: 1px solid var(--change-color);width: 19vw; min-width: 246px; top: 10%;position: absolute;border-radius: 15px;position: absolute;margin-left: auto;margin-right: 59px;left: 0;right: 0;'>
            <h6 style='color: var(--second-bg-color);font-weight: 500;text-align: center;padding: 7px 13px;margin: 0px; font-size: 1.5vh;'>(FR) Erreur lors de l'envoi du message ! <br>(EN) Error when sending the message !</h6>
          </div>";
  
if(isset($_POST['submit'])){
    $Nom = $_POST['nom'];
    $Prenom = $_POST['prenom'];
    $Sujet = $_POST['sujet'];
    $Email = $_POST['email'];
    $Message = $_POST['message'];
    $mail->Subject = $Subject;
    $mail->Body='   
               <div style="margin-left: 20px;">
  <h1 style="text-align: center;">Nouveau mail :</h1>
  <div class="row" style="margin: 30px 0px">
    <h4 style="margin-bottom: 10px;">Nom client :</h4>
    <p style="margin-top: 0px;">'.$Nom.'</p>
  </div>
  <div class="row" style="margin: 30px 0px">
    <h4 style="margin-bottom: 10px;">Prénom du client :</h4>
    <p style="margin-top: 0px;">'.$Prenom.'</p>
  </div>
  <div class="row" style="margin: 30px 0px">
    <h4 style="margin-bottom: 10px;">Email :</h4>
    <p style="margin-top: 0px;">'.$Email.'</p>
  </div>
  <div class="row" style="margin: 30px 0px">
    <h4 style="margin-bottom: 10px;">Sujet :</h4>
    <p style="margin-top: 0px;">'.$Sujet.'</p>
  </div>
  <div class="row" style="margin: 30px 0px">
    <h4 style="margin-bottom: 10px;">Message du client :</h4>
    <p style="margin-top: 0px;">'.$Message.'</p>
  </div>
</div>';
                $delayTime = 3;
    if($mail->send()) {
        echo $result;
    }else{
        echo $result1;
    }
}    

?>

<script>
setTimeout(function() {
    document.getElementById("message").style.display = 'block';
}, 2000);
</script>