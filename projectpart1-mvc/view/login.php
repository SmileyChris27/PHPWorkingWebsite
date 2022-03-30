<html><head><meta http-equiv='content-type' content='text/html; charset=iso-8859-1'>
<title>CIS485 PORTAL LOGIN</title>
<link rel='stylesheet' type='text/css' href='view/css/loginsession.css' />
<link rel="stylesheet" type="text/css" href="view/css/menu.css" />

</head>
<body>

     <center>
	<div style='width:600px' >
	<span id="menu">
	<table align=center>
	<tr>
		<td width='100' align=center><a href='index.php'>Login</a></td> 
		<td width='100' align=center><a href='index.php?choice=home'>Home</a></td>
		<td width='100' align=center><a href='index.php?choice=about'>About</a></td>
		<td width='100' align=center><a href='index.php?choice=contact'>Contact</a></td>
	</tr>
	</table>
	</span>	
	</div>	
	</center>
	
	<center>	
	<form action='index.php' method='get'>	
	<div style='width:600px'>	
	<table>
	<tr><td width='100'>Username:</td><td width='200'>
		<?php
			echo "<input type='text' name='username' value='$user' />"; 
		?>
		</td></tr>
	<tr><td width='100'>Password:</td><td width='200'>
		<?php
			echo "<input type='password' name='password' value='$pass' />"; 
		?>
		</td></tr>
	<tr><td colspan='2' align='center'><input type='submit' value='Login'></td></tr>
	</table>
	<input type='hidden' name='choice' value='logon' />
	<?php
	if(isset($_GET['messsage'])) echo "<div style='color:red;width:330px'>".$_GET['message']."</div>";
	if(isset($message)) echo "<div style='color:red;width:330px'>".$message."</div>";
	?>
	</div>	
	</form>
	
	</center>
</body>
</html>
