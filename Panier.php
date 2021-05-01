<?php require 'navPanier.php'; ?>

<?php 
$req = $DB->db->prepare('SELECT * FROM product');
$req->execute();
var_dump($req->fetchAll());
?>

        <section class="Présentation">
            
            <h3>Contenue du panier :</h3>
            
            <php>
                
            </php> 

        </section>

<?php require 'footer.php'; ?>