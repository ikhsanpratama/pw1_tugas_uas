<?
require_once "../dashboard/conf/db.php";

$nama_depan     =   $_POST['nama_depan'];
$nama_belakang  =   $_POST['nama_belakang'];
$username       =   $_POST['username'];
$password       =   SHA1($_POST['password']);

try{
    $query  =   "INSERT INTO t_user(nama_depan, nama_belakang, username, password) VALUES ('$nama_depan','$nama_belakang','$username','$password')";
    $sql    =   $koneksi->prepare($query);
    $sql->execute();
    $status =   $sql->rowCount();
    if($status > 0){
        echo json_encode(['status'=>'success', 'pesan'=>'Registrasi Berhasil']);
    }else{
        echo json_encode(['status'=>'error', 'pesan'=>'Registrasi Gagal']);
    }
}catch (PDOException $error){
    die("Koneksi Error : ". $error->getMessage());
}
