
$("#formTambah").submit(function(e){
    var nama_depan  =   $('#nm_dpn').val();
    var nama_blk    =   $('#nm_blk').val();
    var username    =   $('#username').val();
    var password    =   ($('#password')).val();
    var inputPic    =   document.getElementById('pic');
    var pic         =   inputPic.files[0];

    const formData  =   new FormData();
    formData.append('nama_depan', nama_depan);
    formData.append('nama_belakang', nama_blk);
    formData.append('username', username);
    formData.append('password', password);
    formData.append('pic', pic);

    axios.post('script/tambah_user.php', formData,{
        headers:{
            'Content-Type':'multipart/form-data',
        },
    }).then(response => {
        if(response.data.status === 'success'){
            alert('Tambah User Berhasil!');
            $('#konten').load('pages/user.php');
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