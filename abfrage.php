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
            mysql_connect("localhost", "root");
            mysql_select_db("lager");

            switch ($_GET["kategorie"]) {
                case 1:
                    switch ($_GET["ort"]) {
                        case 1:
                            $x = mysql_query("SELECT * FROM `artikel` WHERE reserviert='0'");
                            break;
                        case 2:
                            $x = mysql_query("SELECT * FROM `artikel` WHERE OID='Dresden' AND reserviert='0'");
                            break;
                        case 3:
                            $x = mysql_query("SELECT * FROM `artikel` WHERE OID='Berlin' AND reserviert='0'");
                            break;
                    }
                    break;
                case 2:
                    switch ($_GET["ort"]) {
                        case 1:
                            $x = mysql_query("SELECT * FROM `artikel` WHERE KID='baumaterial' AND reserviert='0'");
                            break;
                        case 2:
                            $x = mysql_query("SELECT * FROM `artikel` WHERE KID='baumaterial' AND OID='Dresden' AND reserviert='0'");
                            break;
                        case 3:
                            $x = mysql_query("SELECT * FROM `artikel` WHERE KID='baumaterial' AND OID='Berlin' AND reserviert='0'");
                            break;
                    }
                    break;
                case 3:
                    switch ($_GET["ort"]) {
                        case 1:
                            $x = mysql_query("SELECT * FROM `artikel` WHERE KID='technik' AND reserviert='0'");
                            break;
                        case 2:
                            $x = mysql_query("SELECT * FROM `artikel` WHERE KID='technik' AND OID='Dresden' AND reserviert='0'");
                            break;
                        case 3:
                            $x = mysql_query("SELECT * FROM `artikel` WHERE KID='technik' AND OID='Berlin' AND reserviert='0'");
                            break;
                    }
                    break;
                default:
                        echo "ERROR";
                
            }
            


            echo "<table border=1><tr><td>Artikel</td><td>Kategorie</td><td>Lagerort</td><td>Reservieren</td></tr>";

            while ($dx = mysql_fetch_assoc($x)){
                
            echo "<tr><td>" . $dx["name"] . "</td><td>" . $dx["KID"] . "</td><td>" . $dx["OID"] . "</td><td>" . "<a href='reservieren.php?AID=" . $dx["AID"] . "&BID=" . $_GET["nutzer"] . "'>Reservieren</a>";
                
            }
            echo "</table>";
            mysql_close();
        ?>
                 
                    <a href="javascript:history.back()">zurück</a>
				</div>
			</div>
		</div>
		<div id="footer"><div id="copy">© 2015</div></div>
        </body>
</html>
