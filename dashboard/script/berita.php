<?
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json; charset=utf-8');
require_once "../conf/db.php";

$keyword = isset($_GET["key"]) ? $_GET["key"] : '';

try{
    $query  =   "SELECT * FROM berita WHERE judul like ?";
    $sql    =   $koneksi->prepare($query);
    $sql->execute(["%$keyword%"]);

    $data   =   array();
    while($baris = $sql->fetch(PDO::FETCH_ASSOC)){
        $data[]   =   $baris;
    }
    echo json_encode($data);
}catch (PDOException $error){
    die("Tidak dapat memuat database $db_name ". $error->getMessage());
}