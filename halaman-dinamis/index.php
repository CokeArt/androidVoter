<html>
<head>
	<title>Halaman Dinamis by TUTORIALWEB.NET</title>
</head>
<body>
	
    <h1>Halaman Dinamis</h1>
    
	<div id="menu">
    	<a href="index.php?al=home">Home</a> /
        <a href="index.php?al=about">About</a> /
        <a href="index.php?al=contact">Contact</a> /
        <a href="index.php?al=is">is</a>
    </div>
    
    <div id="konten">
    	<?php
		$pages_dir = 'pages';
		if(!empty($_GET['al'])){
			$pages = scandir($pages_dir, 0);
			unset($pages[0], $pages[1]);
			
			$al = $_GET['al'];
			if(in_array($al.'.php', $pages)){
				include($pages_dir.'/'.$al.'.php');
			} else {
				echo 'Halaman tidak ditemukan! :(';
			}
		} else {
			include($pages_dir.'/home.php');
		}
		?>
    </div>
    
</body>
</html>