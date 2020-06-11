<?php
if(isset($_POST['submit'])){
	$ime=$_POST['ime']; 
	$emailOd=$_POST['email'];
	$poruka=$_POST['poruka'];
	$mailZa='eminaisic444@gmail.com';
	
	$headers ="Od: ".$emailOd;
	$txt ="Dobili ste e-mail od".$ime."\n\n".$poruka;
	
	if(mail($mailZa, $txt, $headers,$poruka)){
		echo"Mail je poslan";
	}
	
    else{
		echo"Error";
	}
				  
	
}
?>



