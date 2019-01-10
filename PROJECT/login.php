<?php
session_start();
$w=$_POST['a'];
$v=$_POST['b'];
if($w==""||$v=="")
{
echo "Fill All";
header("location:form.php");
}
else
{
mysql_connect("localhost","root","");
mysql_select_db("project");
$query1="SELECT * FROM manish WHERE name='$w' && password='$v'";
$result=mysql_query($query1);
$con=mysql_num_rows($result);
if($con==0)
{
echo "MisMatch &nbsp; &nbsp;&nbsp;";
header("location:form.php");
}
else
{
$_SESSION['name']=$w;
header("location:welcome.php");

}


}