<?php include "header.php";
$user_agent = $_SERVER['HTTP_USER_AGENT'];
echo $user_agent;
?>

<h3>
1. Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:
It's August, so it's still holiday.
Not August, this is Month-name so I don't have any holidays
</h3>

<?php 
$month = date("F");
echo "$month <br>";

if ($month == 'August'){
    echo "It's $month so it's still holiday.";
   }
   else{
    echo "Not August, this is $month so I don't have any holidays";
   }
?>

<h3>
2. Assign color red to a variable name $color and check to print one the following responses (if else statement)
The color is red. 
The color is not red.
</h3>

<?php
$color = "red";
if ( $color == "red"){
     echo "The color is $color";
 } else {
     echo "The color is not red.";
 }
 ?>

<h3>
3. Write a program to grade students based on their total score for a subject. Use variable to hold the total score.
</h3>

<?php
$grade = 80;

switch($grade){
    case $grade >= 80;
    echo 'Excellent';
    break;

    case $grade >= 70 && $grade < 80;
    echo 'Great';
    break;

    case $grade >= 60 && $grade < 70;
    echo 'Good';
    break;

    case $grade >= 50 && $grade < 60;
    echo 'Pass';
    break;

    default: 
    echo 'Fail';
    break;
}
?>

<h3>
4. Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting.
</h3>

<form action="vote.php" method="post">
    <input type="txt" name="name" required placeholder="Name" class="form-control" required>
    <input type="number" name="age" required placeholder="Age" class="form-control" required>
    <input type="submit" value="Submit"> 
</form>


<h3>
5. Use Switch statement with strops function to print the name of the browser as below: 
If someone is using Chrome it should print, you are using Goolge Chrome….
</h3>

<?php
if (strpos($user_agent, 'Edg') == true) {
    echo 'You are using Microsoft Edge';
} elseif (strpos($user_agent, 'Firefox') == true) {
    echo 'You are using Microsoft Edge';
}elseif (strpos($user_agent, 'Chrome') == true) {
    echo 'You are using Chrome';
}
else {
    echo 'Your browser could not be determined';
}
 ?>


<?php include "footer.php" ?>