<div class="card card-primary elevation-2">
    <div class="card-header">
        <h3 class="card-title"><i class="fa fa-users"></i> List User</h3>
        <button class="btn btn-warning btn-sm float-right" id="tambah_user"><i class="fa fa-user-plus"></i> Tambah User</button>
    </div>
    <div class="card-body table-responsive">
        <table class="table table-sm table-hover" id="tableUser">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>PIC</th>
                    <th>USERNAME</th>
                    <th>NAMA DEPAN</th>
                    <th>NAMA BELAKANG</th>
                    <th>TOKEN</th>
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
        var table   =   $('#tableUser').DataTable({
            "responsive": true,
            "processing":true,
            "serverSide":true,
            "ajax":function (data, callback, settings) {
                axios.get('script/user.php',{
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
                "data"  :   "pic",
                "render":   function (data, type, row) {
                    if(data === null){
                        data = "assets/img/no_pic.png";
                    }
                    return  '<img src="'+data+'" class="img-size-64 img-thumbnail"/>';
                }
            },{
                "data"  :   "username"
            },{
                "data"  :   "nama_depan"
            },{
                "data"  :   "nama_belakang"
            },{
                "data"  :   "session_token"
            },{
                "data"  :   "null",
                "render":   function (data, type, row) {
                    return  '<button class="btn btn-sm btn-outline-warning" onclick="edit(' + row.id + ')"><i class="far fa-edit"></i></button>'+' '+'<button class="btn btn-sm btn-outline-danger" onclick="hapus(' + row.id + ')"><i class="far fa-trash-alt"></i></button>';
                }
            }
            ]
        });
    });

    $('#tambah_user').on('click', function () {
        $('#konten').load('pages/tambah_user.php');
    })

    function edit(id){
        const user = id;
        $('#konten').load('pages/update_user.php',{user:user});
    }

    function hapus(id){
        const user = id;
        const client    =   localStorage.getItem('session_id');
        console.log('user = '+user+" client = "+client);
        if(user == client){
            alert('Tidak dapat menghapus diri sendiri!');
            return;
        }else{
            const formData  =   new FormData();
            formData.append('id', user);
            axios.post('pages/hapus_user.php', formData)
                .then(response => {
                if(response.data.status === 'success'){
                const pesan = response.data.pesan;
                alert(pesan);
                $('#konten').load('pages/user.php');
            }else{
                const pesan = response.data.pesan;
                alert(pesan);
            }
        })
        .catch (error =>{
                console.error("Login Error", error);
        });
        }
    }
</script>