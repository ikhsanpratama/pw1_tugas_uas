<?
require_once "../conf/db.php";

$nama_depan     =   $_POST['nama_depan'];
$nama_belakang  =   $_POST['nama_belakang'];
$username       =   $_POST['username'];
$password       =   SHA1($_POST['password']);
$temp           =   explode(".", $_FILES['pic']['name']);
$nama_pic       =   $username.'.'. end($temp);
$tmp_pic        =   $_FILES['pic']['tmp_name'];

if(!empty($nama_depan) && !empty($nama_belakang) && !empty($username) && !empty($password)){
    try{
        move_uploaded_file($tmp_pic, '../assets/img/'.$nama_pic);
        $path   =   'assets/img/'.$nama_pic;
        $query  =   "INSERT INTO t_user(nama_depan, nama_belakang, username, password, pic) VALUES ('$nama_depan','$nama_belakang','$username','$password','$path')";
        $sql    =   $koneksi->prepare($query);
        $sql->execute();
        $status =   $sql->rowCount();
        if($status > 0){
            echo json_encode(['status'=>'success', 'pesan'=>'Tambah User Berhasil']);
        }else{
            echo json_encode(['status'=>'error', 'pesan'=>'Tambah User Gagal']);
        }

    }catch (PDOException $error){
        die("Koneksi Error : ". $error->getMessage());
    }
}else{
    echo json_encode(['status'=>'error', 'pesan'=>'Data tidak boleh kosong!']);
}
