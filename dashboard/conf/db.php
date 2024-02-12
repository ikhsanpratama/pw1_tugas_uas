<?

$db_hostname    =   "localhost";
$db_user        =   "root";
$db_pass        =   "";
$db_name        =   "pw1_db";
$db_port        =   3306;

try {
    $koneksi    =   new PDO('mysql:host=localhost;dbname=pw1_db', $db_user, $db_pass);
} catch (PDOException $e) {
    echo $koneksi->getMessage();
}