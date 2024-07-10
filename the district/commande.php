<?php 
    require_once('header.php')
    ?>
 <div class="container">
        <form id="form" action="commandescript.php" method="post" class="container mt-3">
            <div class="row justify-content-center">
                <div class="block_text-img col-12 col-lg-5 mt-3">
                    <div class="row card">
                        <img class="card-img-top imageplat img-fluid col-lg-6"
                            src="assets/images_the_district/food/cesar_salad.jpg" alt="platsalade1">
                        <div class="col-xl-4 card-body color">
                            <h3 class="card-title">Salade 1</h3>
                            <p class="card-text">Plat Plat Plat Plat</p>
                            <div class="col-6">
                            <select class="form-select color " id="quantite" aria-label="Default select example">
                                <option value="0" selected>0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="container mt-3">
                <div class="row mb-3">
                    <div class="col-12 mb-3">
                        <label for="Nom" class="col-3 couleur form-label">Nom et Prenom*:</label>
                        <input type="text" name="nomprenom" class="form-control" id="Nom">
                        <p class="texte">Ce champs est obligatore</p>
                    </div>
                    <div class="col-md-6 col-12 mb-3">
                        <label for="Email" class="col-6  couleur form-label">Email*:</label>
                        <input type="email" name="Email" class="form-control" id="Email">
                        <p class="texte">Ce champs est obligatore</p>
                    </div>
                    <div class="col-md-6 col-12 mb-3">
                        <label for="tel" class="col-3 couleur form-label">Téléphone*:</label>
                        <input type="text" name="tel" class="form-control" id="Tel">
                        <p class="texte">Ce champs est obligatore</p>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="demande" class="col-3 couleur form-label">Votre Adresse*:</label>
                        <textarea cols="500" rows="4" name="adresse" class="form-control" id="Adresse"></textarea>
                        <p class="texte">Ce champs est obligatore</p>
                    </div>
                    <div class="container">
                        <div class="row justify-content-end mt-3">
                            <button class="btn btn-primary  rounded-pill col-md-2 col-3" type="submit"
                                id="suivant">Envoyer</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <?php require_once('footer.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="assets/Js/commande1.js"></script>
</body>

</html>