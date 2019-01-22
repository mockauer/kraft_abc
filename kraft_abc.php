       <h2>kraft-abc.</h2>
               <div id="uberschrift"><strong>kraft-abc</strong></div>
<?php
$alphabet = array("A", "B", "C", "D","E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", " ");
$ubung = array("5 Liegest&uuml;tze", "10 Burpees", "3 Klimmz&uuml;ge", "15 Situps", "10 Bridges", "25 Kniebeuge", "10 Ausfallschritte", "10 asynchrone Liegest&uuml;tze", "5 Dips", "10 Situps", "15 Kniebeuge", "15 Burpees", "10 Dips", "16 asynchrone Liegest&uuml;tze", "5 Klimmz&uuml;ge", "5 Burpees", "20 Bridges", "20 Ausfallschritte", "15 Liegest&uuml;tze", "15 Situps", "20 Kniebeuge", "10 Liegest&uuml;tze", "10 Ausfallschritte", "6 asynchrone Liegest&uuml;tze", "10 Bridges", "15 Dips", "20 Sek. Pause");


echo "<form action='#' method='post'>";
echo "<input type='input' placeholder='Wort' pattern='[a-zA-Z]+' title='Keine Umlaute oder Sonderzeichen!' name='wort' /><br/>";
echo "<input type='submit' name='absenden' value='Kraft-ABC' />";
echo "</form>";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //something posted

    if (isset($_POST['wort'])) {
		$string = trim($_POST['wort']);
		$string = strtoupper($string);
		      
		for($i = 0; $i<strlen($string); $i++){
	
			echo $string[$i]." - ";
			echo $ubung[array_search($string[$i],$alphabet)]."<br/>";
	
		}
	}
}
echo "<br/>";
echo "<form action='#' method='post'><label style='font-size: 10px;'>&copy;mockauer ".date('Y')."</label> <input type='submit' name='version' class='app' value='Version 1.2'/></form>";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //something posted

    if (isset($_POST['version'])){
		echo "<strong class='footer'>Versionsgeschichte</strong>";
		echo "<ul class='footer'><u>Version 1.2</u>";
		echo "<li class='footer'>Benutzerdefinierte Fehlerseite, wenn kein Internet vorhanden ist</li></ul>";
		echo "<ul class='footer'><u>Version 1.1</u>";
		echo "<li class='footer'>Drehen Bildschirm verhindern</li></ul>";
		echo "<ul class='footer'><u>Version 1.0</u>";
		echo "<li class='footer'>26 &Uuml;bungen f&uuml;r 26 Buchstaben</li>";
		echo "<li class='footer'>Umlaute & Sonderzeichen abfangen</li></ul>";
	}
}


?>
<br/>
     

