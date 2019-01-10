<html>
<head>
<title>PROJECT</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
<body>
    <?php
session_start();
if(isset($_SESSION['name']))
{
echo"YOU HAVE SUCCESSFULLY BOOKED YOUR MOVIE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo $_SESSION['name'];
echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='logout.php'> LOGOUT</a>";
}
else
{
header("location:form.php");
}
?>
    <div class="loginbox">
    <img src="index.png" class="avatar">
        <h1>YOUR BOOKINGS</h1>
        <table border='5' >
         <tr>
<th>MOVIE</th>

<th >NO. OF SEATS</th>

</tr>
        <?php
session_start();
    $w=$_SESSION['name'];
mysql_connect("localhost","root","");
mysql_select_db("project");
$query="SELECT movie,seats FROM booking WHERE name='$w'";
$result=mysql_query($query);
while($row=mysql_fetch_array($result))
{

echo "<tr>";
echo"<td>".$row[0]."</td>";
echo"<td>".$row[1]."</td>";
echo "</tr>";

}

?>
     </table>   
    </div>

</body>
</head>
</html>
