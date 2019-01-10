<?php
session_start();
if(isset($_SESSION['name']))
{
echo"<font color=red>YOU HAVE SUCCESSFULLY REGISTER Agent &nbsp;</font>";
echo $_SESSION['name'];
echo"<p align ='right'><font color=red size='5pt'><a href='logout.php'> LOGOUT</a></font></p>";
}
else
{
header("location:form.php");
}
?>
<html>
<head>
<title>PROJECT</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
<body>
     <div class="loginbox">
    <img src="index.png" class="avatar">
        <h1>ADD Movies</h1>
        <form method="POST" action ="movies.php">
            <p>Movie</p>
            <input type="text" name="a" placeholder="Enter Movie Name">
            <p>GOLD</p>
            <input type="number" name="b" placeholder="Enter Gold Seat Price">
            <p>PREMIUM</p>
            <input type="number" name="c" placeholder="Enter Premium Price">
            <p>Show Time</p>
            <input type="time" name="d" placeholder="Enter Show time">
            <p>Seats</p>
            <input type="text" name="e" placeholder="Enter No. of Seats">
            
            <input type="submit"  value="SUBMIT" >
            
            
        </form>
         </div>
 </body>
</head>
</html>
