<? ?>
<div class="card card-primary elevation-2">
    <div class="card-header">
        <h3 class="card-title text-bold"><i class="far fa-newspaper"></i> Tambah Berita</h3>
    </div>
    <form class="form-horizontal" id="formTambahBerita">
        <div class="card-body">
            <div class="form-group row">
                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="judul" placeholder="Judul Berita" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="isi_berita" class="col-sm-2 col-form-label">Isi Berita</label>
                <div class="col-10">
                    <textarea class="form-control" rows="3" id="isi_berita" placeholder="Deskripsi Berita" required></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*" required>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success" id="tombol-tambah">Tambah</button>
            <button type="button" class="btn btn-danger float-right" onclick="batalTambah()">Batal</button>
        </div>
    </form>
</div>
<script src="include/tambah_berita.js"></script>
<script>
    function batalTambah() {
        $('#konten').load('pages/berita.php');
    }
</script>