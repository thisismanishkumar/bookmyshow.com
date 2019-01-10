<?php
$w=$_POST['a'];
$x=$_POST['b'];
$y=$_POST['c'];
$z=$_POST['d'];
if($w==""||$x==""||$y==""||$z=="")
{
echo "Please Fill All Details ";
}
else
{
mysql_connect("localhost","root","");
mysql_select_db("project");
$query1="SELECT * FROM manish WHERE name='$w' && password='$x'";
$result =mysql_query($query1);
$con=mysql_num_rows($result);
if($con==0)
{
$query="INSERT INTO manish (name,password,email,phone) VALUES('$w','$x','$y','$z')";
mysql_query($query);
echo "MISSION COMPLETED";
    header("location:form.php");
}
else
{

    echo "User already exits";
}

}

?>
