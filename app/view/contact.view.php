<main>
    <div class="container">
        <h1>Nous contacter</h1>
        <form action="newContact.php" method="post">
            <div>
                <label for="mail">Adresse Mail</label>
                <input type="text" name="mail" id="mail" required>
            </div>    
            <div>
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" required>
            </div> 
            <div>
                <label for="prenom">Prénom</label>
                <input type="text" name="prenom" id="prenom" required>
            </div>
            <div>
                <label for="message">Message</label>
                <input type="text" name="message" id="message" required>
            </div>   
            <input type="submit" value="Envoyer">
        </form> 
    </div>
</main>


