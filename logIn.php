<!-- I honor Parkland's core values by affirming that i have followed all academic integrity guidelines for this work.
Tristan Heath
Class 155 -->
<html>
<head>
<title>LogInPhp</title>
<?php

//php library loading first
require("library/phpfunctions.php");

//local php functions go here

function writtenBy() {
    echo "Written by Tristan Heath";
}

function getPost( $name ) #version 1
{
# check to see if it been used, it it has, return it
    if ( isset($_POST[$name]) )
    {
       return htmlspecialchars($_POST[$name]);
    }
    return "";
}


//local php startup code goes here

//are we reloading this page or not?
if ( isset($_POST["submit"]) )
{
   if ( $_POST["155username"] == "tristan" and $_POST["155password"] == "1234" )
   {
   header("Location: welcome.php");
   }
   else
   {
   echo "Invalid username and/or password, use 'tristan' with the password '1234'";
   }
}

?>
<h1>LogIn Page</h1>
</head>
<body>
<h3>Warning: This is not a real login, please do not use any real passwords!</h3>
<form method='POST'>
Username: <input type='text' name='155username' value='<?php echo getPost("155username");?>'> <br>
Password: <input type='password' name='155password' value='<?php echo getPost("155password");?>'> Dont' use real passwords!<br>
<input type='submit' name='submit' value='Log In'>
</form>
<p>Hint the user is 'tristan' and the password is '1234'</p>

<!-- HTML with a PHP injection -->
<p>Thank you <?php writtenBy(); ?> for signing into our page</p>


<?php footer(); ?>
</body>
</html>
