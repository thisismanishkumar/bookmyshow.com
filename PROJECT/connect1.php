<?php
$w=$_POST['a'];
$x=$_POST['b'];
$y=$_POST['c'];
$z=$_POST['d'];
$l=$_POST['e'];
if($w==""||$x==""||$y==""||$z==""||$l=="")
{
echo "Please Fill All Details ";
}
else
{
mysql_connect("localhost","root","");
mysql_select_db("project");
$query1="SELECT * FROM manish1 WHERE name='$w' && password='$x'";
$result =mysql_query($query1);
$con=mysql_num_rows($result);
if($con==0)
{
    if($l==987)
    {
$query="INSERT INTO manish1 (name,password,email,phone) VALUES('$w','$x','$y','$z')";
mysql_query($query);
echo "MISSION COMPLETED";
    header("location:agent.php");
}
    else
    {
        echo "WRONG AGENT PASSWORD";
    }
}
else
{

    echo "User already exits";
}

}

?>
