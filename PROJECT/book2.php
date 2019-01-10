<html>
<head>
<title>PROJECT</title>
    <link rel="stylesheet" type="text/css" href="style.css">
<body>
    <div class="loginbox">
    <img src="index.png" class="avatar">
        <h1>
        <?php
session_start();

$w=$_POST['a'];
$x=$_POST['b'];

$e=$_SESSION['name'];
if($w==""||$x=="")
{
echo "Please Fill All Details ";
}
else
{
mysql_connect("localhost","root","");
mysql_select_db("project");
$query1="SELECT * FROM movie WHERE movie='$w'";
$result =mysql_query($query1);
$con=mysql_num_rows($result);
if($con)
{
    if($x<seats)
    {
        $query="UPDATE  movie SET seats= seats - '$x' WHERE movie='$w' ";

   mysql_query($query);
   
$query2="INSERT INTO booking (name,movie,seats) VALUES('$e','$w','$x')";
    mysql_query($query2);
         header("location:book3.php");
}
    else
    {
        echo"NO.OF SEATS available are less";
    }
}
else
{

    echo "NO SUCH MOVIE NAME FOUND";
}
 
}

?>
</h1>
        <p><a href='welcome.php'>WANT TO BOOK AGAIN?</a></p>
        
    </div>

</body>
</head>
</html>
