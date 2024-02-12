<?
header("Access-Control-Allow-Origin");
require_once "../conf/db.php";
$token      =    $_POST['token'];
if(isset($token)){
    $query  =   $koneksi->prepare("SELECT nama_depan, nama_belakang FROM t_user WHERE session_token = ?");
    $query->execute([$token]);
    $user   =   $query->fetch(PDO::FETCH_ASSOC);
    $nama   =   $user['nama_depan']." ".$user['nama_belakang'];
    if($user){
        echo json_encode(['status' => 'success', 'nama' => $nama]);
    }else{
        echo json_encode(['status' => 'error', 'pesan' => 'Session Invalid']);
    }
}else{
    echo json_encode(['status' => 'error', 'pesan' => 'Request Invalid']);
}