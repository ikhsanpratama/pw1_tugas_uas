/**
 * Created by ichan Pratama on 11/02/2024.
 */
function excelDownload() {
    var tahun   =   document.getElementById('tahun').value;
    getTahun(tahun)
        .then(response => {
            var data    =   response.data;
            const wsheet=   XLSX.utils.json_to_sheet(data);
            const wbook =   XLSX.utils.book_new();
            XLSX.utils.book_append_sheet(wbook, wsheet, "Report");
            XLSX.writeFile(wbook, "report_excel_"+tahun+".xlsx", { compression: true });
    })
    .catch(error =>{
        console.error("Error Fetching Data for Excel",error);
    })
}

function pdfDownload() {
    var canvas  =   document.getElementById('chartBerita');
    var imgData =   canvas.toDataURL('image/png');
    var tahun   =   document.getElementById('tahun').value;
    var docDef  =   {
        content:[
            {text: 'Report Tahun'+ tahun, style:'header'},
            {image: imgData, width:500},
        ],
        styles:{
            header:{
                fontSize:18,
                bold:true,
                margin:[0,0,0,10],
            },
        },
    };
    pdfMake.createPdf(docDef).download('report_pdf_' + tahun +'.pdf');
}