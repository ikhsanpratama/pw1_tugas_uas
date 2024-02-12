/**
 * Created by ichan Pratama on 12/02/2024.
 */

$("#formRegistrasi").submit(function(e){
    var nama_depan  =   $('#nama_depan').val();
    var nama_blk    =   $('#nama_belakang').val();
    var username    =   $('#username').val();
    var password    =   ($('#password')).val();


    const formData  =   new FormData();
    formData.append('nama_depan', nama_depan);
    formData.append('nama_belakang', nama_blk);
    formData.append('username', username);
    formData.append('password', password);

    axios.post('regis_user.php', formData)
    .then(response => {
        if(response.data.status === 'success'){
            alert('Registrasi Berhasil!');
            $('#formRegistrasi')[0].reset();
        window.location.replace("../");
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