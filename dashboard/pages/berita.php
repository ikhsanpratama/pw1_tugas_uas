<div>

</div>
<div class="card card-primary elevation-2">
    <div class="card-header">
        <h3 class="card-title text-bold"><i class="fas fa-newspaper"></i> BERITA</h3>
        <button class="btn btn-success btn-sm float-right" id="tambah_berita"><i class="fa fa-plus"></i> Tambah Berita</button>
    </div>
    <div class="card-body table-responsive">
        <table class="table table-sm table-hover text-justify" id="tableBerita">
            <thead>
            <tr>
                <th>ID</th>
                <th>GAMBAR</th>
                <th>JUDUL</th>
                <th>ISI BERITA</th>
                <th>TANGGAL</th>
                <th>AKSI</th>
            </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</div>
<script src="assets/js/axios.min.js"></script>
<script>
    $(document).ready(function(){
        var table   =   $('#tableBerita').DataTable({
            "responsive": true,
            "processing":true,
            "serverSide":true,
            "ajax":function (data, callback, settings) {
                axios.get('script/berita.php',{
                    params:{
                        key: data.search.value
                    }
                })
                .then(function (response) {
                    response.data.forEach(function (row,index) {
                        row.no = index + 1;
                    })
                    callback({
                        draw:data.draw,
                        recordsTotal:response.data.length,
                        recordsFiltered:response.data.length,
                        data:response.data
                    });
                })
                    .catch(function (error) {
                        console.error(error);
                        alert('Error Memuat Berita!');
                    })
            },
            "columns":[{
                "data"  :   "no"
            },{
                "data"  :   "gambar",
                "render":   function (data, type, row) {
                    return  '<img src="'+data+'" class="img-size-64 img-thumbnail"/>';
                }
            },{
                "data"  :   "judul"
            },{
                "data"  :   "deskripsi"
            },{
                "data"  :   "tanggal"
            },{
                "data"  :   "null",
                "render":   function (data, type, row) {
                    return  '<button class="btn btn-sm btn-outline-warning" onclick="edit(' + row.id + ')"><i class="far fa-edit"></i></button>'+' '+'<button class="btn btn-sm btn-outline-danger" onclick="hapus(' + row.id + ')"><i class="far fa-trash-alt"></i></button>';
                }
            }
            ]
        });
    });

    $('#tambah_berita').on('click', function () {
        $('#konten').load('pages/tambah_berita.php');
    })

    function edit(id_berita){
        const berita = id_berita;
        $('#konten').load('pages/update_berita.php',{berita:berita});
    }

    function hapus(id_berita){
        const id = id_berita;
        const client    =   localStorage.getItem('session_id');
            const formData  =   new FormData();
            formData.append('id', id);
            axios.post('pages/hapus_berita.php', formData)
                .then(response => {
                if(response.data.status === 'success'){
                const pesan = response.data.pesan;
                alert(pesan);
                $('#konten').load('pages/berita.php');
            }else{
                const pesan = response.data.pesan;
                alert(pesan);
            }
        })
        .catch (error =>{
                console.error("Login Error", error);
        });
    }
</script>