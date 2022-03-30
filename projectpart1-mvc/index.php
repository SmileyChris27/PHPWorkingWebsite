<?php
include('library.php');
if(isset($choice));
else $choice=readValue('choice');

if($choice==null ||$choice=='login')
{    
		include('view/login.php');
}
else if($choice=="home")
{
		include( 'view/home.php' ) ;
}
else if($choice=="about")
{
		include( 'view/about.php' ) ;
}
else if($choice=="contact")
{
		include( 'view/contact.php' ) ;
}
else if($choice=="logoff")
{
	include('view/logoff.php' );
}
?>
