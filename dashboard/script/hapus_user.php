<?
require_once "../conf/db.php";
$id     =    $_POST['id'];

if(!empty($id)) {
    try {

        $query = "DELETE from t_user WHERE id = $id";
        $sql = $koneksi->prepare($query);
        $sql->execute();

        $status = $sql->rowCount();
        if ($status > 0) {
            echo json_encode(['status' => 'success', 'pesan' => 'Hapus User Berhasil']);
        } else {
            echo json_encode(['status' => 'error', 'pesan' => 'ID User tidak ditemukan!']);
        }
    } catch (PDOException $error) {
        echo json_encode(['status' => 'error', 'pesan' => 'Hapus User Gagal.']);
    }
}else{
    echo json_encode(['status'=>'error', 'pesan'=>'ID User Kosong!']);
}