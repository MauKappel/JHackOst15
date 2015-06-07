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
	mysql_connect("localhost","root");
	mysql_select_db("lager");
	$x = mysql_query("SELECT * FROM nutzer WHERE name = '$a'");	
	$y = mysql_query("SELECT * FROM nutzer WHERE passwort = '$b'");	
	if (mysql_num_rows($x)== 0){
		echo "Falsche Eingabe. <a href='anmelden.html'>Zurück zum Login</a>";
	}
	else {
		if (mysql_num_rows($y)== 0){
			echo "Falsches Passwort";
		}
		else{
            $BID = mysql_query("SELECT BID FROM nutzer WHERE name = '" . $_POST["tf1"] . "'");
            $BID = mysql_fetch_assoc($BID);
			setcookie("mytext", $a, time() + (999999), "/");
			?>
            PRODUKT EINSTELLEN
        <form action="einstellen.php" method="post">
            <input type="text" name="name" id="name"><label for="name"> Produktname</label><br><br>Kategorie: 
            <select name="kategorie">
                <option value="2">Baumaterial</option>
                <option value="3">Technik</option>
            </select><br>
            Ort: 
            <select name="ort">
                <option value="2">Dresden</option>
                <option value="3">Berlin</option>
            </select><br>
            <input type="submit" value="Einstellen">
        </form>
        <hr>
        PRODUKT SUCHEN UND RESERVIEREN
        <form action="abfrage.php" method="get">
            <select name="kategorie">
                <option value="1">Katergorie wählen</option>
                <option value="2">Baumaterial</option>
                <option value="3">Technik</option>
            </select>
            <select name="ort">
                <option value="1">Ort wählen</option>
                <option value="2">Dresden</option>
                <option value="3">Berlin</option>
            </select>
            <input type="hidden" name="nutzer" value="<?php echo $BID["BID"]; ?>">
            <input type="submit" value="Suche">
        </form>
    <?php
		}
	}
	mysql_close();
?>
				</div>
			</div>
		</div>
		<div id="footer"><div id="copy">© 2015</div></div>
        </body>
</html>
