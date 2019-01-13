<? // code for store_comment.php

// Database information required to connect to database
$host="localhost";
$name = "dbuser";
$pass = "dbpass";
$dbname = "yourdatabase";

// Connect to Database and select the database to use
$dbi = mysql_connect($host, $name,$pass) or
     die("I cannot connect to the database. Error :" . mysql_error());
mysql_select_db("iqbal");

// Get the values posted from the Form in comments.php
$name = $_POST["name"];
$email = $_POST["email"];
$country = $_POST["country"];
$comment = $_POST["comments"];

//Check if a name & comment have been entered

if ($name=="")
{
  die " You haven't Entered Your Name. Go back and Enter your Name"; 
}

if ($comment=="")
{
  die " You haven't Entered any comment. Go back and enter some
comment to be stored";
}

// Insert the Details into the Database

$sql = "INSERT INTO guestbook (name,email,v_comment,country) VALUES ('$name','$email','$comment','$country')";
$result = mysql_query($sql,$dbi);
If ($result)
   {
      echo "<center> Your Details have been added to the database<br>";

      echo " <a href="guestbook.php">Click here to go back to the guestbook</a></center>" ;
   } else
         echo " Your details were not added due to some database problem";

?>
