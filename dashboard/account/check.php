<?
header("Access-Control-Allow-Origin");
require "../conf/db.php";

$username   =   $_POST['user'];
$password   =   sha1($_POST['pass']);

if(isset($username) && isset($password)){
    $query  =   "SELECT id, username, password FROM t_user WHERE username = '$username' AND password = '$password'";

    $sql    =   $koneksi->prepare($query);
    $sql->execute();

    $data   =   $sql->fetch(PDO::FETCH_ASSOC);

    if($data){
        $session_token = substr(str_shuffle("0123456789abcdefghijklmnopqrstvwxyzABCDEFGHIJKLMNOPQRSTVWXYZ"), 0, 16);;
        $id     =   $data['id'];
        //update token
        $query  =   "UPDATE t_user SET session_token = '$session_token' WHERE id = $id";
        $sql    =   $koneksi->prepare($query);
        $sql->execute();

        echo json_encode(['status'=>'success', 'session_token'=>$session_token, 'id'=>$id]);
    }else{
        echo json_encode(['status'=>'error', 'pesan'=> 'Login Tidak Valid']);
    }
}else{
    echo json_encode(['status'=>'error', 'pesan'=>'Invalid Request']);
}