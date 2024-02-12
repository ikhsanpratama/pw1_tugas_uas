function check_session(){

    const formData  =    new FormData();
    formData.append('token', localStorage.getItem('session_token'));
    axios.post('account/session.php', formData)
    .then(response => {
        if(response.data.status === 'success'){
            const nama  =   response.data.nama || 'Default Name';
            localStorage.setItem('nama', nama);
            document.getElementById('nama').innerHTML = nama;
        }else{
            window.location.href = 'account/login.php';
        }
    })
    .catch (error =>{
        console.error('Session Check Error', error);
    })
}