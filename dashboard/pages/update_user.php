<?
require_once "../conf/db.php";
$id     =   $_POST['user'];

try{
    $query  =   "SELECT * FROM t_user WHERE id = $id";
    $sql    =   $koneksi->prepare($query);
    $sql->execute();

    $data           = $sql->fetch(PDO::FETCH_ASSOC);
    $nama_depan     =   $data['nama_depan'];
    $nama_belakang  =   $data['nama_belakang'];
    $gambar         =   $data['pic'];
    if(empty($gambar)){
        $gambar = "assets/img/no_pic.png";
    }
}catch (PDOException $error){
    die("Tidak dapat memuat database $db_name ". $error->getMessage());
}
?>
<div class="card card-primary elevation-2">
    <div class="card-header">
        <h3 class="card-title"><i class="fas fa-user-edit"></i> Edit User</h3>
    </div>
    <form class="form-horizontal" id="formUpdate">
        <div class="card-body">
            <input type="hidden" class="form-control" id="id" value="<?=$id?>">
            <div class="form-group row">
                <label for="nm_dpn" class="col-sm-2 col-form-label">Gambar Profile</label>
                <div class="col-sm-10">
                    <img class="profile-user-img img-circle elevation-1" src="<?=$gambar?>"/>
                </div>
            </div>
            <div class="form-group row">
                <label for="nm_dpn" class="col-sm-2 col-form-label">Nama Depan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nm_dpn" value="<?=$nama_depan?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="nm_blk" class="col-sm-2 col-form-label">Nama Belakang</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nm_blk" value="<?=$nama_belakang?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" placeholder="Password" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="pic" class="col-sm-2 col-form-label">Ganti Gambar Profile</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="pic" name="pic" accept="image/*">
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success">Update</button>
            <button type="button" class="btn btn-danger float-right" onclick="batalUpdate()">Batal</button>
        </div>
    </form>
</div>
<script src="include/update_user.js"></script>
<script>
    function batalUpdate() {
        $('#konten').load('pages/user.php');
    }
</script>