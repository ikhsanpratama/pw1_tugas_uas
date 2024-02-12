/**
 * Created by ichan Pratama on 11/02/2024.
 */


function getTahun(tahun) {
    var formData    =   new FormData();
    formData.append('tahun',tahun);

    return axios({
        method:'post',
        url:'script/tahunBerita.php',
        data:formData,
        headers:{'Content-Type':'multipart/form-data'}
    });
}

function createChart(data) {
    var beritaChart =   document.getElementById('chartBerita').getContext('2d');
    new Chart(beritaChart, {
        type: 'bar',
        data: {
            labels:data.map(item => item.bulan),
            datasets:[{
                label:'Jumlah Berita',
                data: data.map(item => item.jumlah_berita),
                backgroundColor     :   'rgba(229, 8, 20, 0.8)',
                borderColor         :   'rgba(0, 0, 0, 0.8)',
                borderWidth         :   1,
            }]
        },
        options: {
            scales:{
                y:{
                    beginAtZero: true,
                    ticks:{
                        stepSize:1
                    }
                }
            }
        }
    })
}

function populateTahun(data) {
    var selectTahun =   document.getElementById('tahun');
    data.forEach(item =>{
        var option  =   document.createElement('option');
        option.value    =   item.tahun;
        option.text     =   item.tahun;
        selectTahun.add(option);
    });

    var latestYear  =   data[0].tahun;
    document.getElementById('tahun').value  =   latestYear;

    getTahun(latestYear)
        .then(response =>{
            var chartData   =   response.data;
            createChart(chartData);
    })
    .catch (error =>{
        console.error('Error Fetching Data', error);
    })
}

document.getElementById('tahun').addEventListener('change', function () {
    var pilihTahun = this.value;
    getTahun(pilihTahun)
        .then(response =>{
            var chartData = response.data;
            createChart(chartData);
    })
    .catch(error =>{
        console.error('Errof Fetching Data', error);
    })
})

axios.get('script/tahun.php')
.then(response =>{
    var tahunData   =   response.data;
    populateTahun(tahunData);
})
.catch(error =>{
    console.error('Error Fetching Data', error);
})