<?php include "header.php" ?>

<?php 
    $age = $_POST['age'];
    if ($age >= 18){
    echo "You're eligible to vote.";
    }
    else{
    echo "You're not eligible to vote.";
    }
?>

<? include "footer.php" ?>