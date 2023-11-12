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

$dbconn = pg_connect("host=sheep port=5432 dbname=mary user=postgres password=")
or die('Brak połączenia z bazą danych: ' . pg_last_error());
$nr_p = 'SELECT nr_pytania  FROM pytania'
$r = 'SELECT pytanie FROM pytania'
$o1 = 'SELECT odp1 from pytania'
$o2 = 'SELECT odp2 from pytania'
$o3 = 'SELECT odp3 from pytania'
$o4 = 'SELECT odp4 from pytania'
$qg = 'SELECT * from gracze'

// Closing connection
pg_close($dbconn);
}

?>
