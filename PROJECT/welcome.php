
<html>
<head>
<title>PROJECT</title>
    <link rel="stylesheet" type="text/css" href="style3.css">

<body><?php
session_start();
if(isset($_SESSION['name']))
{
echo"<font color=red>YOU HAVE SUCCESSFULLY REGISTER &nbsp;</font>";
echo $_SESSION['name'];
echo"<p align ='right'><font color=red size='5pt'><a href='logout.php'> LOGOUT</a></font></p>";
}
else
{
header("location:form.php");
}
?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
  <center>   <div class="loginbox">
    <img src="index.png" class="avatar">
         <table border='5' >
         <tr>
<th valign="center" class="white" >MOVIE</th>
<th valign="center" class="white" >GOLD PRICE</th>
<th valign="center" class="white" >PREMIUM PRICE</th>
<th valign="center" class="white" >SHOW TIME</th>
<th valign="center" class="white" >NO. OF SEATS</th>

</tr>
<?php

mysql_connect("localhost","root","");
mysql_select_db("project");
$query="SELECT * FROM movie ";
$result=mysql_query($query);
        
      
while($row=mysql_fetch_array($result))
{
    echo"&nbsp; &nbsp; ";

echo '<tr>';
echo'<td valign="center" class="white" >'.$row[0].'</td>';
echo'<td valign="center" class="white" >'.$row[1].'</td>';
echo'<td valign="center" class="white" >'.$row[2].'</td>';
echo'<td valign="center" class="white" >'.$row[3].'</td>';
echo'<td valign="center" class="white" >'.$row[4].'</td>';

echo '</tr>';

}

?>
         </table>   
      </div></center>
    <br>
    
    
    
    
    <div class="loginbox1">
    <img src="index.png" class="avatar">
        <h1>BOOK HERE</h1>
        <form method="POST" action ="book2.php">
            <p>Name of Movie</p>
                        <input type="text" name="a" placeholder="Enter name of movie">

            <p>NO. OF SEATS </p>
            <input type="text" name="b" placeholder="Enter no. of seats you want to book">
            <p><a href='book3.php'>VIEW PREVIOUS BOOKING</a></p>
           
            <p><input type="submit"  value="BOOK"></p>
            
            
        </form>
        
    </div>



 
</body>
</head>
</html>
