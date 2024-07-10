<?php 
    require_once('header.php')
    ?>
    <div id="insertbgimg">
        <div id="insertcommande"></div>
        <form id="form" action="contactscript.php" method="post">
            <div class="container mt-3">
                <div class="row mb-3">
                    <div class="col-6 mb-3">
                        <label for="Nom" class="col-3 couleur form-label">Nom*:</label>
                        <input type="text" name="nom" class="form-control" id="Nom">
                        <p>Ce champs est obligatore</p>
                    </div>
                    <div class="col-6 mb-3">
                        <label for="Nom" class="col-3 couleur form-label">Prenom*:</label>
                        <input type="text" name="nom" class="form-control" id="Prenom">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="Email" class="col-3  couleur form-label">Email*:</label>
                        <input type="email" name="Email" class="form-control" id="Email">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="tel" class="col-3 couleur form-label">Téléphone*:</label>
                        <input type="text" name="tel" class="form-control" id="Tel">
                        <p>Ce champs est obligatore</p>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="demande" class="col-3 couleur form-label">Votre Demande*:</label>
                        <textarea cols="500" rows="4" name="demande" class="form-control" id="Demande"></textarea>
                    </div>
                    <div class="container">
                        <div class="container">
                            <div class="row justify-content-end mt-3">
                                <button class="btn btn-primary  rounded-pill col-3" type="submit"
                                    id="suivant">Envoyer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <?php require_once('footer.php') ?>
    
    <script src="assets/Js/contact.js"></script>
</body>

</html>