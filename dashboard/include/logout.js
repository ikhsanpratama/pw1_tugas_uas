function logout() {
    const sessionToken = localStorage.getItem('session_token');
    const formData      =   new FormData();
    formData.append('session_token', sessionToken);

    axios.post('account/logout.php', formData)
        .then(response =>{
            if(response.data.status === 'success'){
                localStorage.removeItem('nama');
                localStorage.removeItem('session_token');
                window.location.href = '../';
            }else{
                alert('Logout Error. Silakan dicoba kembali.');
            }
        })
    .catch (error =>{
        console.error('Logout Error', error);
    })
}