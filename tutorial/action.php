<!--   
    the htmlspecialchars() ensure that special character are well encoded people dont inject html or javascript code 
    people can use this code to get secrete information from the web page so we use htmlspecialchars() to prevent that 
-->
Hi <?php echo htmlspecialchars($_POST['name']);  // $_POST is a super global variable ?>.
<!-- // we can also use the int since we are only expecting integer and also get rid of strings -->
<!-- the $_POST stores all POST data -->
<!-- if we use the GET method it will be stored in the $_GET variable -->
You are <?php echo (int) $_POST['age'] ; ?> years old.
<!-- we can also use the $_REQUEST if we do not care about the source of thhe request data -->
You are <?php echo (int) $_REQUEST['age'] ; ?> years old.