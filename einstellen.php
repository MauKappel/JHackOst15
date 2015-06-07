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
			<a href="http://localhost/suchen.html"><div id="reserv">Artikel suchen</div></a>
			<a href="http://localhost/anmelden.html"><div id="einst">Anmelden</div></a>
			<a href="http://jugendhackt.de"><div id="fiech1"></div></a><a href="http://jugendhackt.de"><div id="brille"></div></a><a href="http://jugendhackt.de"><div id="fiech2"></div></a>
		</div>
		<div id="body">
			<div id="mainframe">
				<div id="content" class="clearfix">
                   <?php
            if($_POST["name"] != "") {
                $name = $_POST["name"];
                switch ($_POST["kategorie"]) {
                    case 2:
                        $kategorie = "baumaterial";
                        break;
                    case 3:
                        $kategorie = "technik";#
                        break;
                }
                switch ($_POST["ort"]) {
                    case 2:
                        $ort = "Dresden";
                        break;
                    case 3:
                        $ort = "Berlin";#
                        break;
                }

                mysql_connect("localhost", "root");
                mysql_select_db("lager");

                mysql_query("INSERT INTO artikel (AID, name, KID, OID, reserviert) VALUES ('', '$name', '$kategorie', '$ort', '0')");
                mysql_close();
                echo "Eintrag erfolgreich. <a href='javascript:history.back()'>Zurück</a>";
            }
            else {
                echo "Eintrag leider nicht erfolgreich. <a href='javascript:history.back()'>Zurück</a>";
            }
        ?> 
				</div>
			</div>
		</div>
		<div id="footer"><div id="copy">© 2015</div></div>
        </body>
</html>
