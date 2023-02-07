<?php include "header.php" ?>

<h3> Ex. 3 In-class Task Variable & Operators </h3>

<h2>
1. Create a simple html form to get Firstname and Lastname from the 
user and use echo echo statement to print using <h3> tag: Hello …., You are welcome to my site.
</h2>

<form action="action.php" method="post">
<div class"row">

    <div class="col">
    <input type="text" name="fname" required placeholder="First Name" class="form-control"> <br>
    </div>
    <div class="col">
    <input type="text" name="lname" required placeholder="Last Name" class="form-control"> <br>
    </div>
</div>
    Birth Date: <input type="date" name="bdate"> <br>
    Select fav Color: <input type="color" name="color"> <br>
    <input type="submit" value="submit">

</form>

<h2>
4. Write a PHP script with two string variables. Assign any text to these variables. Join them together. Print the length of the string.
</h2>

<?php
$name = "Sara-Sofia";
$country = "Finland";
echo $name . " " . $country; 
echo "<br> The length of " . $country . " is " . strlen($country);
?>

<h2>
5. Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and echo statement to output your answer.
</h2>

<?php
//arthmetic operators
$a = 298;
$b = 234;
$c = 46;
//adding numbers
echo $a + $b + $c;
?>

<h2>
6. Write a PHP script to detect the browser being used to view your pages.
</h2>

<?php
$host = $_SERVER['HTTP_USER_AGENT'];
echo $host;
?>

<?php include "footer.php" ?>
