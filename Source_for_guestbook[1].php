  Source for guestbook.php
 Database information required to connect to database
$host=localhost;
$name = dbuser;
$pass = dbpass;
$dbname = yourdatabase;

 Connect to Database and select the database to use
$dbi = mysql_connect($host, $name,$pass) or
     die(I cannot connect to the database. Error  . mysql_error());
mysql_select_db($dbname,$dbi);

 Display the top of the page for the guestbook
echo  centerh1 A Simple Guestbook in PHP & MYSQL h1centerbr;
echo  a href=comments.phpClick here to Leave us a messageabrbr;
echo  bComments from Visitors bhr;

 Fetch and Display the Results from the Database
$result = mysql_query(select name, email, country, v_comment from guest_book ORDER BY id,$dbi);

while ($myrow = mysql_fetch_array($result))
{
   echo bnameb $myrow[0]br bemail b$myrow[1]br bCountryb $myrow[2] brbmessageb $myrow[3] ;
}

echo(hr This guest book is coded in PHP and uses MySQL to store data );


