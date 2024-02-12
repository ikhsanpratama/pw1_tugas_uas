$('#formCari').submit(function (e) {
    var keyword     =   $('#cari').val();
    var formData    =   new FormData();
    formData.append('keyword',keyword);
    axios.post('pages/search.php', formData)
        .then(function (response) {
            var data    =   response.data;
            $.each(data, function(index, item) {
                var judul   =   item.judul;
                var desk    =   item.deskripsi;
                var pic     =   '<img src="dashboard/'+ item.gambar + '" class="img-thumbnail" width="200px"/>';
                var tgl     =   item.tanggal;
                tgl = tgl.split("-").reverse().join("-");
                var id      =   item.id;

                $('#kontenInformasi').html("");
                $('#cariInformasi').html(
                    '<div class="card card-danger"><div class="card-header"><h3 class="card-title">'+judul+'</h3></div><div class="card-body"><p class="small">'+ tgl +'</p><p class="text-center">'+ pic +'</p><p class="text-justify">'+desk+'</p></div><div class="card-footer"><i class="fa fa-arrow-alt-circle-left"></i> <a href=""><span class="small font-italic">Kembali</span></a></div></div>'
                );
            });
        })
        .catch(function (error) {
            console.log('Error Fetching Data : ', error);
        })
    e.preventDefault();
})