<?
require_once "../conf/db.php";
try{
    $query  =   "SELECT count(*) AS jumlah_user FROM t_user";
    $user   =   $koneksi->prepare($query);
    $user->execute();

    $data   =   array();
    while($baris = $user->fetch(PDO::FETCH_ASSOC)){
        $data[] = $baris;
    }
    echo json_encode($data);

}catch (PDOException $error){
    die("Tidak dapat memuat database $db_name ". $error->getMessage());
}
?>