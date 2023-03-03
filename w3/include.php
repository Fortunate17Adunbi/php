<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>include and require</title>
</head>
<body>
    <div class='menu'>
       <?php include 'menu.php';  ?> 
    </div>
    <h1>Include and Require</h1>
    <h1>Welcome to my home page!</h1>
    <p>Some text.</p>
    <p>Some more text.</p>
    <?php include 'var.php';
        echo "I have a $color $car";  
    ?><br>
    <!--  it copies all the code/markup/text that exist in the specified file and copies it into the file that uses the include or require statement
    the include and require are the same execept the failure
    the require throws an error (E_COMPILE_ERROR)  and stop the script 
    ... while the include throws a warning (E_WARNING) and still continue the script
    this is the format 
    include 'filename';
    require 'filename'; -->
    <!-- if the file include is not seen the code continuing executing -->
    <?php include 'nonexistingfile.php';
        echo "I have a $color $car";
    ?><br>
    <!-- incase of require it stops the code and do not execute the echo statement if the file is not found -->
    <?php require 'nonexistingfile.php';
        echo "I have a $color $car";
    ?><br>
    <!-- so we use require if a file is important or necessary for executing a program and include if the file is not important -->
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>
</html>
