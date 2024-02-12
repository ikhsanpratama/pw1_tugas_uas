<?
require_once "../conf/db.php";
try{
    $query  =   "SELECT count(*) AS jumlah_berita FROM berita";
    $berita =   $koneksi->prepare($query);
    $berita->execute();

    $data   =   array();
    while($baris = $berita->fetch(PDO::FETCH_ASSOC)){
        $data[] = $baris;
    }
    echo json_encode($data);

}catch (PDOException $error){
    die("Tidak dapat memuat database $db_name ". $error->getMessage());
}
?>