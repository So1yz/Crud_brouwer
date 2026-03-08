<?php
// auteur : Yusuf Simsek
// functie: verwijder een bier op basis van de id
include 'functions.php';

// Haal bier uit de database
if(isset($_GET['id'])){

    // test of insert gelukt is
    if(deleteRecord($_GET['brouwcode']) == true){
        echo '<script>alert("Brouwercode: ' . $_GET['id'] . ' is verwijderd")</script>';
        echo "<script> location.replace('index.php'); </script>";
    } else {
        echo '<script>alert("deze brouwer kan niet worden verwijderd omdat hij in gebruik is")</script>';
    }
}
?>


