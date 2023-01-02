<html>
<head>
<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="./css/contact.css" rel="stylesheet">
    <link href="./css/new.css" rel="stylesheet">


	<link href=
	"https://fonts.googleapis.com/css?family=Archivo+Narrow|Crimson+Text|Julius+Sans+One"
	rel="stylesheet">
</head>
<body>
	
<nav>
		<ul>
			<li >
				<a href="Home.html">Home</a>
			</li>
			<li>
				<a href="About.html">About</a>
                <ul>
                    <li><a href="About.html">Info</a></li>
                 <li><a href="Hobbies.html">Hobbies</a></li>
                </ul>
			</li>
			<li >
				<a href="portfolio.html">Portfolio</a>
			</li>
			<li >
				<a href="contact.html">Contact</a>
			</li>
		</ul>
    </nav>

<?php
$gender = $_POST['firstname'];
$size = $_POST['email'];
$color = $_POST['message'];

echo"<title>Form Results</title>";
echo "";
echo "<h2> Programmed by: Uwaguosa Aluyi-Osa </h2>";

?>
</body>
</html>