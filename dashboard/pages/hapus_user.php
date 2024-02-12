<?
require_once "../conf/db.php";
$id     =    $_POST['id'];

try{

    $query  =   "DELETE from t_user WHERE id = $id";
    $sql    =   $koneksi->prepare($query);
    $sql->execute();

    echo json_encode(['status'=>'success', 'pesan'=>'Hapus User Berhasil.']);
}catch (PDOException $error){
    die("Hapus Data Gagal : ". $error->getMessage());
    echo json_encode(['status'=>'error', 'pesan'=>'Hapus User Gagal.']);
}