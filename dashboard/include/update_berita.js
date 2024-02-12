
$("#formUpdateBerita").submit(function(e){
    var id          =   $('#id').val();
    var judul       =   $('#judul').val();
    var isi         =   $('#isi').val();
    var inputGambar =   document.getElementById('gambar');
    var gambar      =   inputGambar.files[0];
    var tanggal     =   new Date().toISOString().split('T')[0];

    const formData  =   new FormData();
    formData.append('id', id);
    formData.append('judul', judul);
    formData.append('deskripsi', isi);
    formData.append('gambar', gambar);
    formData.append('edit', tanggal);


    console.log(id);
    axios.post('script/update_berita.php', formData,{
        headers:{
            'Content-Type':'multipart/form-data',
        },
    }).then(response => {
        if(response.data.status === 'success'){
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