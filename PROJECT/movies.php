<?php
$x=$_POST['a'];
$y=$_POST['b'];
$z=$_POST['c'];
$l=$_POST['d'];
$m=$_POST['e'];


mysql_connect("localhost","root","");
mysql_select_db("project");


$query="INSERT INTO movie(movie,gold,premium,showtime,seats) VALUES ('$x','$y','$z','$l','$m')";
mysql_query($query);
echo"&nbsp;Movie is Added&nbsp;<a href='welcome1.php'> click here to ADD more MOVIES
&nbsp;<a href='form.php'>LOG OUT";


?>