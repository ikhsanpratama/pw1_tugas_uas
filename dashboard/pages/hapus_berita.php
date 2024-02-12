<?
require_once "../conf/db.php";
$id     =    $_POST['id'];

try{

    $gambar =   "SELECT gambar FROM berita WHERE id = $id";
    $sql    =   $koneksi->prepare($gambar);
    $sql->execute();
    $nm_gbr =   $sql->fetch();
    $path   =   "../";


    $query  =   "DELETE FROM berita WHERE id = $id";
    $sql    =   $koneksi->prepare($query);
    $sql->execute();
    unlink($path.$nm_gbr['gambar']);
    echo json_encode(['status'=>'success', 'pesan'=>'Hapus Berita Berhasil.']);
}catch (PDOException $error){
    die("Hapus Berita Gagal : ". $error->getMessage());
    echo json_encode(['status'=>'error', 'pesan'=>'Hapus Berita Gagal.']);
}