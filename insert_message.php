<?php 
include'connection.php';
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['phone'];
$d=$_POST['messages'];
$query="insert into contact set name='$a' , email='$b' , phone='$c' , messages='$d'";
if($query)
{
	mysqli_query($con,$query);
	echo'<script language="text/javascript">window.location=\'contact_link.php\';<script>';
}

?>
             
            