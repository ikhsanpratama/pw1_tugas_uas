<?
require_once "../conf/db.php";

$judul          =   $_POST['judul'];
$deskripsi      =   $_POST['deskripsi'];
$tanggal        =   $_POST['tanggal'];

$temp           =   explode(".", $_FILES['gambar']['name']);
$nama_file      =   round(microtime(true)) . '.' . end($temp);
$tmp_nama       =   $_FILES['gambar']['tmp_name'];


    try{
        move_uploaded_file($tmp_nama, '../gambar/'.$nama_file);
        $path   =   'gambar/'.$nama_file;
        $query  =   "INSERT INTO berita(judul, deskripsi, gambar, tanggal) VALUES ('$judul','$deskripsi','$path','$tanggal')";
        $sql    =   $koneksi->prepare($query);
        $sql->execute();
        $status =   $sql->rowCount();
        if($status > 0){
            echo json_encode(['status'=>'success', 'pesan'=>'Tambah Berita Berhasil']);
        }else{
            echo json_encode(['status'=>'error', 'pesan'=>'Tambah Berita Gagal']);
        }

    }catch (PDOException $error){
        die("Koneksi Error : ". $error->getMessage());
    }