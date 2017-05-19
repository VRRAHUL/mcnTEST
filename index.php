<?php
$con=mysql_connect("localhost","root","");
if(!$con)
{
echo "error";
}
else
{
mysql_select_db("r",$con);
}
?>

<html>
<head>

<script language="javascript" type="text/javascript">



    function validateForm()

    {

     if(document.getElementById("username").value=="")

    {

     alert("Enter your username!");

     document.getElementById("username").focus();

     return false;

    }
	 if(document.getElementById("password").value=="")

    {

     alert("Enter your password!");

     document.getElementById("password").focus();

     return false;

    }
	 return true;
	}
	</script> 


<title></title>
</head>

<body>
<form method="post" >
<table>
<tr>
<td><input type="text" name="username" id="username" placeholder="username"></td>
</tr>
<tr>
<td><input type="password" name="password" id="password" placeholder="password"></td>
</tr>
<tr>
<td><input type="submit" name="login" id="login" value="Login" onClick="return validateForm();"></td>
</tr>
</table>
</form>
</body>
</html>

<?php

$t="";
if(isset($_POST['login']))
	{
	$a=$_POST['username'];
	$b=$_POST['password'];
	
$result=mysql_query("select * from login where username='$a' and password='$b'");

	while($row=mysql_fetch_array($result))
		{
		$t=$row[1];
		echo $row[1];
		session_start();
		

		$_SESSION['id']=$row[0];
		}
  		if($t=='aaa')
		{
		header("location:home.php");
		}
			else
			{ ?>
			<script type=text/javascript>
			
			alert("ERROR TO FIND YOUR ACCOUNT");
			window("location:index.php");
			</script>
	  <?php }
	}
		?>