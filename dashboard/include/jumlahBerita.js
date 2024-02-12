/**
 * Created by ichan Pratama on 10/02/2024.
 */
axios.get("script/jumlah_berita.php")
.then(function (response) {
    var jumlah  =   response.data;
    var jum     =   document.getElementById('jml_berita');
    jum.innerHTML = jumlah[0].jumlah_berita;
})
.catch(function (error) {
    console.log('Error Fetching Data : ', error);
})