function login(){
    const username  =   document.getElementById('username').value;
    const password  =   document.getElementById('password').value;

    const formData  =   new FormData();
    formData.append('user', username);
    formData.append('pass', password);

    axios.post('check.php', formData)
        .then(response => {
            if(response.data.status === 'success'){
                const sessionToken  = response.data.session_token;
                const sessionID     = response.data.id;
                localStorage.setItem('session_token', sessionToken);
                localStorage.setItem('session_id', sessionID);
                window.location.href = '../';
            }else{
                const pesan = response.data.pesan;
                document.getElementById('pesan').innerHTML = pesan;
            }
    })
    .catch (error =>{
        console.error("Login Error", error);
    });
}