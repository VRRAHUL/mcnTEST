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

		session_start();
		$result=mysql_query("select * from reg ");
if(mysql_num_rows($result)>0)
	{
?>
<head>
<title></title>
</head>

<body>
<h1>Welcome</h1>
<?php
				  while($row=mysql_fetch_array($result))
		{
?>
<br /><h4>Name:<?php echo $row[1] ?></h4>
<h4>Address:<?php echo $row[2] ?></h4>
<h4>Pin:<?php echo $row[3] ?></h4>
<h4>Phone:<?php echo $row[4] ?></h4>
<?php
}
?>
</body>
<?php
}
?>
</html>
