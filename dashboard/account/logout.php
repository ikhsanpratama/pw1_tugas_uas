<?
header("Access-Control-Allow-Origin");
require "../conf/db.php";

$session_token      =   $_POST['session_token'];
if(isset($session_token)){
    $query  =   "UPDATE t_user SET session_token = NULL WHERE session_token = '$session_token'";
    $sql    =   $koneksi->prepare($query);
    $sql->execute();

    $status =   $sql->rowCount();
    if($status > 0){
        echo json_encode(['status'=>'success', 'pesan'=>'Logout Berhasil']);
    }else{
        echo json_encode(['status'=>'error', 'pesan'=>'Logout Error, Token tidak valid']);
    }
}else{
    echo json_encode(['status'=>'error', 'pesan'=>'Invalid Request']);
}
