$("#informasi:first").hide();
axios.get("pages/informasi.php")
    .then(function (response) {
        var data    =   response.data;
        $.each(data, function(index, item) {
            var cards   =   $("#informasi:first").clone() //clone first divs
            var judul   =   item.judul;
            var desk    =   item.deskripsi.substr(0, 200);
            var pic     =   item.gambar;
            var tgl     =   item.tanggal;
            var id      =   item.id;

            $(cards).find("#informasi-header").html(judul + '<span class="float-right">'+ tgl +'</span>');
            $(cards).find("#informasi-body").html('<img src="dashboard/'+ pic +'" class="img-size-64 img-thumbnail" />'+ '<br/> <p class="text-justify">'+ desk +' ... </p>');
            $(cards).find("#informasi-footer").html('<a class="small font-italic" onclick="detail('+ id +')" href="#"> <i class="fa fa-arrow-alt-circle-right"></i> Detail Informasi</a>');
            $(cards).show();
            $(cards).appendTo($("#kontenInformasi"))
        });
    })
    .catch(function (error) {
        console.log('Error Fetching Data : ', error);
    })