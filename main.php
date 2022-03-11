<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="flex-container">

        <div class="header">
            <?php include 'logo.inc.php'; ?>
            <?php include 'menu.inc.php'; ?>
        </div> 

        <div class="about_me">
            <h1> <?php echo $p; ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php echo '<img src="img/photo.JPG" width="200px"; >'; ?>
                </div>
            </div>

            <div class="fullName">
                <p> My name is 
                    <?php echo $name, ' ', $surname, "<br>";
                    echo 'City: ', ' ', $city, "<br>"; ?> 
                    I`m  <?php echo $age, ' '; ?> years old.<br> 
                    I learned to create variables. <br> 
                    I learned simple operations with variables.</p>
            </div>
        </div>
     <br>

        <div class="article">
            <p class="text">I am passionate Web Developer seeking to gain a new and rewarding position where
                I can implement the latest customer support and workflow processes. 
                As an organised and highly service driven individual, I love to champion brilliant customer support and deliver first class results within dynamic and fast paced working environments. </p>
        </div>
<br>
        <div class="knowledge">

<?php include 'knowledge.inc.php'; ?>
<?php 
echo $a, ' ', $b, ' ', $c;
?> <br>

<?php
    $a = 10;
    $b = 20;
    $c = $a + $b;
    echo $c;
?>
    <br>
<?php
echo $d;
?>
</div>
</div>
<br>

<div class="calc"> <h3>Simple mathematical operations</h3>
    <?php include 'calculator.inc.php' ?> 
</div>



  
<?php include 'footer.inc.php'; ?>
</body>
</html>