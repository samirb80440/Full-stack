<?php
require_once('header.php');
?>
  <?php
                $stmt = $conn->prepare("SELECT * FROM disc d LEFT JOIN artist a ON d.artist_id = a.artist_id WHERE disc_id=?");
               
                $stmt->execute(array($_GET['nodiscs']));
               
                $result = $stmt->fetch();
                $stock = $_GET['nodiscs'];

                ?>
            <div class='container'>
                <div class='row justify-content-center'>
                    <img src="../../pictures/<?php echo $result['disc_picture'];?>" class="img-fluid rounded-start col-6">
                    <div class="col-6">
                        <h2><?php echo $result['disc_title'];?></h2>
                        <p>Artist : <?php echo $result['artist_name'];?></p>
                        <p>Label : <?php echo $result['disc_title'];?></p>
                        <p>Year : <?php echo $result['disc_year'];?></p>
                        <p>Genre : <?php echo $result['disc_genre'];?></p>
                    </div>
                <form action="page_update.php" method='POST' class='col-6 mt-5'>
                    <button type='SUBMIT' CLASS='btn btn-danger'>SUPPRIMER</button>
                </form>
                <form action="page_update.php" method='GET' class='col-6 mt-5'>
                    <button type='SUBMIT' name='modif' CLASS='btn btn-warning' value='<?php echo $result['disc_id']; ?>'>modifier</button>
                </form>
            </div>
        </div>

</body>
</html>