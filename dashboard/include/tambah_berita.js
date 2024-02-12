
$("#formTambahBerita").submit(function(e){
    var judul       =   $('#judul').val();
    var isi_berita  =   $('#isi_berita').val();
    var inputGambar =   document.getElementById('gambar');
    var gambar      =   inputGambar.files[0];
    var tanggal     =   new Date().toISOString().split('T')[0];

    const formData  =   new FormData();
    formData.append('judul', judul);
    formData.append('deskripsi', isi_berita);
    formData.append('gambar', gambar);
    formData.append('tanggal', tanggal);


    axios.post('script/tambah_berita.php', formData,{
        headers:{
            'Content-Type':'multipart/form-data',
        },
    }).then(response => {
        if(response.data.status === 'success'){
            $('#formTambahBerita').trigger('reset');
        $('#konten').load('pages/berita.php');
    }else{
        const pesan = response.data.pesan;
        document.getElementById('pesan').innerHTML = pesan;
    }
})
    .catch (error =>{
        console.error("Login Error", error);
});
    e.preventDefault();
})