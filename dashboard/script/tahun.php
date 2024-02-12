<?
/**
 * Created by PhpStorm.
 * User: ichan Pratama
 * Date: 11/02/2024
 * Time: 01:28
 */
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json; charset=utf-8');
require_once "../conf/db.php";
$query  =   $koneksi->prepare("SELECT DISTINCT YEAR(tanggal) AS `tahun` FROM `berita`");
$query->execute();
$data   =   array();
while ($baris   =   $query->fetch(PDO::FETCH_ASSOC)) {
    $data[] =   $baris;
}
echo json_encode($data);
