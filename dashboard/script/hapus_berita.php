<?
require_once "../conf/db.php";
$id     =    $_POST['id'];

if(!empty($id)) {
    try {

        $gambar =   "SELECT gambar FROM berita WHERE id = $id";
        $sql    =   $koneksi->prepare($gambar);
        $sql->execute();
        $nm_gbr =   $sql->fetch();
        $path   =   "../";

        $query = "DELETE FROM berita WHERE id = $id";
        $sql = $koneksi->prepare($query);
        $sql->execute();

        $status = $sql->rowCount();
        if ($status > 0) {
            unlink($path.$nm_gbr['gambar']);
            echo json_encode(['status' => 'success', 'pesan' => 'Hapus Berita Berhasil']);
        } else {
            echo json_encode(['status' => 'error', 'pesan' => 'ID Berita tidak ditemukan!']);
        }
    } catch (PDOException $error) {
        echo json_encode(['status' => 'error', 'pesan' => 'Hapus Berita Gagal.']);
    }
}else{
    echo json_encode(['status'=>'error', 'pesan'=>'ID Berita Kosong!']);
}