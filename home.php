<!-- Sætter denne del ind, så menuen kan se hvilken side den er på og den skal gøre den pågældende side aktiv-->
<?php 

$curpage = basename ($_SERVER['PHP_SELF']);

?>



<!-- Jeg bruger DIV, så jeg nemmere kan style den med CSS -->
<div class="menu">

<?php 
	$curpage='home.php';
	include 'menu.php';
	
?>

</div>

