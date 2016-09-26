<!-- Sætter denne del ind, så menuen kan se hvilken side den er på og den skal gøre den pågældende side aktiv-->
<?php 

$curpage = basename ($_SERVER['PHP_SELF']);

?>

<div class="menu">

<!-- Jeg bruger DIV, så jeg nemmere kan style den med CSS --> 
<?php 
	$curpage='contact.php';
	include 'menu.php';
?>

</div>

<h1>Contact</h1>
<p>Andrea Jakobsen </p>
