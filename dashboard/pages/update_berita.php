<?
require_once "../conf/db.php";
$id     =   $_POST['berita'];

try{
    $query  =   "SELECT * FROM berita WHERE id = $id";
    $sql    =   $koneksi->prepare($query);
    $sql->execute();

    $data   = $sql->fetch(PDO::FETCH_ASSOC);
    $judul  =   $data['judul'];
    $isi    =   $data['deskripsi'];
    $gambar =   $data['gambar'];
}catch (PDOException $error){
    die("Tidak dapat memuat database $db_name ". $error->getMessage());
}
?>
<div class="card card-primary elevation-2">
    <div class="card-header">
        <h3 class="card-title"><i class="fas fa-newspaper"></i> Edit berita</h3>
    </div>
    <form class="form-horizontal" id="formUpdateBerita">
        <div class="card-body">
            <input type="hidden" class="form-control" id="id" value="<?=$id?>">
            <div class="form-group row">
                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="judul" name="judul" value="<?=$judul?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="isi" class="col-sm-2 col-form-label">ISI Berita</label>
                <div class="col-sm-10">
                    <textarea id="isi" name="isi" rows="4" cols="50" class="form-control"><?=$isi?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="judul" class="col-sm-2 col-form-label">Gambar</label>
                <div class="col-sm-10">
                    <img src="<?=$gambar;?>" class="img-thumbnail img-size-64"/>
                </div>
            </div>
            <div class="form-group row">
                <label for="gambar" class="col-sm-2 col-form-label">Ganti Gambar</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success">Update</button>
            <button type="button" class="btn btn-danger float-right" onclick="batalUpdate()">Batal</button>
        </div>
    </form>
</div>
<script src="include/update_berita.js"></script>
<script>
    function batalUpdate() {
        $('#konten').load('pages/berita.php');
    }
</script>