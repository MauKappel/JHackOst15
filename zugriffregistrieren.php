<html>
        <head>
                <title>Willkommen auf EasyBay!</title>
            <meta charset="utf-8">
		<link rel="stylesheet" href="main.css" type="text/css">
		<link href="lightbox.css" rel="stylesheet" />
		<script src="jquery-2.1.4.min.js"></script>
		<script src="lightbox.min.js"></script>		
        </head>
        <body>
		<div id="header">
			<a href="http://localhost/index.html"><div id="logo"></div></a>
			<a href="http://localhost/index.html"><div id="tit">EasyBay</div></a>
			
			<a href="http://jugendhackt.de"><div id="fiech1"></div></a><a href="http://jugendhackt.de"><div id="brille"></div></a><a href="http://jugendhackt.de"><div id="fiech2"></div></a>
		</div>
		<div id="body">
			<div id="mainframe">
				<div id="content" class="clearfix">
                    <?php
	$a = $_POST["tf1"];
	$b = $_POST["tf2"];
	$c = $_POST["tf3"];
	if ($b == $c){
		mysql_connect("localhost","root");
		mysql_select_db("lager");
		$x = mysql_query("SELECT * FROM nutzer WHERE name = '$a'");
		if (mysql_num_rows($x)== 0){
			mysql_connect("localhost");
			mysql_select_db("lager");
			mysql_query("INSERT INTO nutzer VALUES ('', '$a','$b')");
			echo "Ihr Konto wurde erstellt. <a href='anmelden.html'>Login</a>" ;
			
		} 
		else{
			echo "Der Benutzer existiert bereits";
			
		} 
		mysql_close();
	}
	else {
		echo "Passwort falsch wiederholt";
	}
	
?>
				</div>
			</div>
		</div>
		<div id="footer"><div id="copy">© 2015</div></div>
        </body>
</html>
