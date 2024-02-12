<?
/**
 * Created by PhpStorm.
 * User: ichan Pratama
 * Date: 11/02/2024
 * Time: 01:35
 */
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json; charset=utf-8');
require_once "../conf/db.php";
$tahun  =   $_POST['tahun'];
$query  =   $koneksi->prepare("SELECT months.m AS bulan, COALESCE(COUNT(berita.id), 0) AS jumlah_berita FROM (SELECT 1 AS m UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5 UNION SELECT 6 UNION SELECT 7 UNION SELECT 8 UNION SELECT 9 UNION SELECT 10 UNION SELECT 11 UNION SELECT 12) AS months
LEFT JOIN berita ON MONTH(berita.tanggal) = months.m AND YEAR(berita.tanggal) = ? AND berita.tanggal IS NOT NULL GROUP BY months.m ORDER BY months.m;");
$query->execute([$tahun]);
$data = array();
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    $data[] = $row;
}
echo json_encode($data);