<?
require_once "../conf/db.php";

$id             =   $_POST['id'];
$nama_depan     =   $_POST['nama_depan'];
$nama_belakang  =   $_POST['nama_belakang'];
$password       =   SHA1($_POST['password']);
$pic            =   isset($_FILES['pic']['name'])?$_FILES['pic']['name']:"";

if(!empty($id)){
    if(empty($pic)){
        try{
            $query  =   "UPDATE t_user SET nama_depan = '$nama_depan', nama_belakang = '$nama_belakang', password = '$password' WHERE id = $id";
            $sql    =   $koneksi->prepare($query);
            $sql->execute();
            $status =   $sql->rowCount();
            if($status > 0){
                echo json_encode(['status'=>'success', 'pesan'=>'Update User Berhasil']);
            }else{
                echo json_encode(['status'=>'error', 'pesan'=>'Update User Gagal']);
            }

        }catch (PDOException $error){
            die("Koneksi Error : ". $error->getMessage());
        }
    }else{
        try{
            $temp           =   explode(".", $_FILES['pic']['name']);
            $nama_file      =   round(microtime(true)) . '.' . end($temp);
            $tmp_nama       =   $_FILES['pic']['tmp_name'];
            move_uploaded_file($tmp_nama, '../assets/img/'.$nama_file);
            $path   =   'assets/img/'.$nama_file;
            $query  =   "UPDATE t_user SET nama_depan = '$nama_depan', nama_belakang = '$nama_belakang', password = '$password', pic = '$path' WHERE id = $id";
            $sql    =   $koneksi->prepare($query);
            $sql->execute();
            $status =   $sql->rowCount();
            if($status > 0){
                echo json_encode(['status'=>'success', 'pesan'=>'Update User Berhasil']);
            }else{
                echo json_encode(['status'=>'error', 'pesan'=>'Update User Gagal']);
            }

        }catch (PDOException $error){
            die("Koneksi Error : ". $error->getMessage());
        }
    }

}else{
    echo json_encode(['status'=>'error', 'pesan'=>'ID User Kosong!']);
}
