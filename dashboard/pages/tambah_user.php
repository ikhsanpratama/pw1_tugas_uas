<? ?>
<div class="card card-primary elevation-2">
    <div class="card-header">
        <h3 class="card-title"><i class="fas fa-user-plus"></i> Tambah User</h3>
    </div>
    <form class="form-horizontal" id="formTambah">
        <div class="card-body">
            <div class="form-group row">
                <label for="nm_dpn" class="col-sm-2 col-form-label">Nama Depan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nm_dpn" placeholder="Nama Depan" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="nm_blk" class="col-sm-2 col-form-label">Nama Belakang</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nm_blk" placeholder="Nama Belakang" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="username" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="username" placeholder="Username" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" placeholder="Password" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="pic" class="col-sm-2 col-form-label">Gambar Profile</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="pic" name="pic" accept="image/*" required>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success" id="tombol-tambah">Tambah</button>
            <button type="button" class="btn btn-danger float-right" onclick="batalTambah()">Batal</button>
        </div>
    </form>
</div>
<script src="include/tambah_user.js"></script>
<script>
    function batalTambah() {
        $('#konten').load('pages/user.php');
    }
</script>