<?php
include 'add.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dice</title>
    <link rel="stylesheet" href="styles.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Indie+Flower|Lobster"
      rel="stylesheet"
    />
</head>

<body>
    
    <div class="container">
      <h1>Refresh Me</h1>

      <div class="dice">
		
      <form name = "roll" action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">

      <div class="dice">
        <p>Player 1</p>
        <img class="img1" src=<?php echo $randomImgSource1 ?> name="img1"/>
      </div>

      <div class="dice">
        <p>Player 2</p>

        <img class="img2" src="<?php if (isset ($_POST['submit'])){
          echo $randomImgSource2;}
          else { echo 'images/dice6.png';}?>"
         name="img2" />
      </div>

      <input type="submit" name="submit" class="button" value="Roll the dice">
      
    </form>    
   
       
    </div>


  </body>
</html>