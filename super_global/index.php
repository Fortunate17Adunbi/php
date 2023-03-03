<?php
    #   $_SERVER : THIS HOLD INFORMATION ABOUT headers, paths, and script locations.
    echo $_SERVER['PHP_SELF']; // retuns file name of th current working directory
    echo "<br>";
    echo $_SERVER['SERVER_NAME']; // returns the name of the host sever
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    // echo $_SERVER['HTTP_REFERER'];
    // echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];

    //  the $_get can be used to colect data sent to the url
    echo "<a href='index.php?subject=PHP&web=W3schools.com' name='link'>Test</a>";

    

    // echo "Study " . $_GET['subject'] . " at " . $_GET['web'];

    #   post and get
    // both post and get creates an array. the array treats the name of the field as 'key' of the array and the input as the 'value' of the array
    // $_GET is passed to the script using the url
    // while $_POST is passed to the script via the HTTP post method

    // variable for displaying error messsage if the field is empty
    $nameErr = $emailErr = $genderErr = $commentErr = $websiteErr = "";

    // name for the variable
    $name = $email = $gender = $comment = $website = "";
    // if($_SERVER["REQUEST_METHOD"] == "POST")
    // {
    //     // makes sure every input that the user enters pass through the function 'test_input()' ...
    //     // so as to prevent any injection of code in it which can be dangerous and also remove unnecessay characters and back slash
        
    //     $name = test_input($_POST['name']);
    //     $email = test_input($_POST['email']);
    //     $gender = test_input($_POST['gender']);
    //     $comment = test_input($_POST['comment']);
    //     $website = test_input($_POST['website']);
    // }




    // to check if the required field is empty 
    // if it is empty it throws an error message
    // and if it is  not required it returns an empty string incase it is empty but return the valur if it is filled
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST['name'])) {
            $nameErr = "Name is required"; 
        }
        else {
            $name = test_input($_POST['name']);
            // validating name
            // makes sure that the input only contains character within this
            if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                // if charactered entered does not contain the above range of characters
                // it must only contain letters and spaces
                $nameErr = "Only letters and white spaces are allowed";

            }
        }
        if (empty($_POST['email'])) {
            $emailErr = "Email is required";
        }
        else {
            $email = test_input($_POST['email']);
            // if email is not valid it returns this value as $emailErr
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }
        if (empty($_POST['website'])) {
            $website = "";
        }
        else {
            $website = test_input($_POST['website']);
            // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
            $websiteErr = "Invalid URL";
            }
        }
        if (empty($_POST['comment'])) {
            $comment = "";
        }
        else {
            $comment = test_input($_POST['comment']);
        }
        if (empty($_POST['gender'])) {
            $genderErr = "Gender is required";
        }
        else {
            $gender = test_input($_POST['email']);
        }
    }

    // definning function to check every input
    // every user input goes through this function
    function test_input($data) {
        // this checks the input and removes unnecessary characters (extra space, tab, newline)
        $data = trim($data);
        // Remove backslashes (\)
        $data = stripslashes($data);
        // remove and prevent injection of code into file input and also special charaters
        $data = htmlspecialchars($data);
        
        return $data;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form validation</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        Name: <input type="text" name="name" value = '<?php echo $name; ?>'><br><br>
        <span name="error">*<?php echo $nameErr; ?></span><br>
        E-mail: <input type="text" name="email" value = '<?php echo $email; ?>'><br><br>
        <span name="error">*<?php echo $emailErr; ?></span><br>
        Website: <input type="text" name="website" value = '<?php echo $website; ?>'><br><br>
        <span name="error">*<?php echo $websiteErr; ?></span><br>
        Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment; ?></textarea><br><br>
        Gender:
        <input type="radio" name="gender" value="female" <?php if(isset($_POST['gender']) && $_POST['gender'] == "female") { echo "checked";} ?>>Female

        <input type="radio" name="gender" value="male" <?php if(isset($_POST['gender']) && $_POST['gender'] == "male") { echo "checked";} ?>>Male
        <input type="radio" name="gender" value="other" <?php if(isset($_POST['gender']) && $_POST['gender'] == "other") { echo "checked";} ?>>Other
        <span name="error">*<?php echo $genderErr; ?></span><br>
        <button type="submit">submit</button>
    </form>
</body>
</html>