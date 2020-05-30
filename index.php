<?php
 $cn=mysqli_connect('localhost','root');

mysqli_select_db($cn,'todo1');

if (isset($_POST['submit'])) {
 $task= $_POST['task'];
$deadLine=$_POST['deadLine'];
$query="insert into tasks (task,deadLine)
values('$task','$deadLine')";
echo"$query";
mysqli_query($cn,$query);
header('location: home.php');
}

?>