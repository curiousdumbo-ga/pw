<?php
	session_start();
	$_SESSION["login_status"] = "logged_out";
 	function finish(){
 		redirect("redirects/final.html");
 	}
	function redirect($url){
		ob_start();
		header('Location: '.$url);
		ob_end_flush();
		die();
	}
    if($id=="ishu" && $pass=="forever"){		
		$_SESSION["login"]="kk21";
		redirect("pw/ishu/index.php");
	}
?>
