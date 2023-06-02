<div class="container">
    <h1>Nous contacter - Alda</h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        
        $server = '{imap.gmail.com:993/imap/ssl}INBOX'; 
        $username = 'eijiyuki02@gmail.com'; 
        $password = 'Jevaisauxtoilettes02'; 
        $destinataire = 'aldacompany2023@gmail.com';
     
        $inbox = imap_open($server, $username, $password) or die('Impossible de se connecter à Gmail: ' . imap_last_error());

        $sujet = 'Nouveau message de contact - Alda';
        $corps_message = "Nom: $nom\n";
        $corps_message .= "Email: $email\n";
        $corps_message .= "Message:\n$message";

        $result = imap_mail($destinataire, $sujet, $corps_message);

        if ($result) {
            echo "<p class='success-message'>Votre message a été envoyé avec succès. Nous vous contacterons bientôt.</p>";
        } else {
            echo "<p class='error-message'>Une erreur s'est produite lors de l'envoi de votre message. Veuillez réessayer.</p>";
        }

        imap_close($inbox);
    }
    ?>

    <form method="post" action="">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" required>
        <br>
        <label for="email">Email :</label>
        <input type="email" name="email" id="email" required>
        <br>
        <label for="message">Message :</label>
        <textarea name="message" id="message" rows="5" required></textarea>
        <br>
        <input type="submit" value="Envoyer">
    </form>
</div>
