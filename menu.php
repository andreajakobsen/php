

<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="php_style.css">


<body>
<nav>
<ul class"menu">
	<li><a href="home.php"<?php if ($curpage=='home.php'){ echo "class='active'";}?>>Home</a></li>
	<li><a href="projects.php"<?php if ($curpage=='projects.php'){ echo "class='active'";}?>>Projects</a></li>
	<li><a href="contact.php"<?php if ($curpage=='contact.php'){ echo "class='active'";}?>>Contact</a></li>
  
</ul>
</nav>
</body>
</html>


