<?php
/******************************************************
* connection2.php
* konfiguracja połączenia z bazą danych
function connection() {
    // serwer
    $mysql_server = "localhost";
    // admin
    $mysql_admin = "michal";
    // hasło
    $mysql_pass = "0";
    // nazwa baza
    $mysql_db = "baza_danych";
    // nawiązujemy połączenie z serwerem MySQL
    @mysql_connect($mysql_server, $mysql_admin, $mysql_pass)
    or die('Brak połączenia z serwerem MySQL.');
    // łączymy się z bazą danych
    @mysql_select_db($mysql_db)
    or die('Błąd wyboru bazy danych.');
}
******************************************************/

function connection() {
    
}

?>
