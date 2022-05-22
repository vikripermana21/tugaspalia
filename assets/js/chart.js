var ctx = document.getElementById('myChart');
var chart = new Chart(ctx, {
    type: 'bar',
    data:{
        datasets:[{
            backgroundColor: "#FFDAB9"
        }
    ]},
    plugins: [ChartDataSource],
    options: {
        title : {
            display : true,
            fontsize:35,
            text: 'Jumlah Peserta per Tahun'

        },
        plugins :{
            datasource: {
                url: 'assets/xlsx/b5.xlsx',
                rowMapping: 'index',
                datasetLabels: "'Jumlah Peserta'!C3",
                indexLabels: "'Jumlah Peserta'!B4:B8",
                data: "'Jumlah Peserta'!C4:C8"
            }
        }
        
    }
});

//chart 2
var ctx2 = document.getElementById('myChart2');
var chart2 = new Chart(ctx2, {
    type: 'doughnut',
    data:{
        datasets:[{
            backgroundColor: ["#B0C4DE", "#B0E0E6", "#ADD8E6", "#87CEEB", "#87CEFA"]
        }
    ]},
    plugins: [ChartDataSource],
    options: {
        title : {
            display : true,
            fontsize:30,
            text: 'Jumlah Peserta Terbanyak'

        },
        plugins :{
            datasource: {
                url: 'assets/xlsx/b5.xlsx',
                rowMapping: 'index',
                datasetLabels: "'Jumlah Peserta'!C23",
                indexLabels: "'Jumlah Peserta'!B24:B28",
                data: "'Jumlah Peserta'!C24:C28"
            }
        }
        
    }
});

//chart 3
var ctx3 = document.getElementById('myChart3');
var chart3 = new Chart(ctx3, {
    type: 'line',
    data:{
        datasets:[{
            borderColor: "#0000FF"
        }
    ]},
    plugins: [ChartDataSource],
    options: {
        title : {
            display : true,
            fontsize:35,
            text: 'Perusahaan yang sering Menang per Tahun'

        },
        plugins :{
            datasource: {
                url: 'assets/xlsx/b5.xlsx',
                rowMapping: 'index',
                datasetLabels: "'sering menang'!D3",
                indexLabels: "'sering menang'!C4:C8",
                data: "'sering menang'!D4:D8"
            }
        }
        
    }
});

//chart 4
var ctx4 = document.getElementById('myChart4');
var chart4 = new Chart(ctx4, {
    type: 'pie',
    data:{
        datasets:[{
            backgroundColor: ["#D8BFD8", "#DDA0DD", "#EE82EE", "#DA70D6", "#E6E6FA"]
        }
    ]},
    plugins: [ChartDataSource],
    options: {
        title : {
            display : true,
            fontsize:30,
            text: 'Jumlah Tender Selesai'

        },
        plugins :{
            datasource: {
                url: 'assets/xlsx/b5.xlsx',
                rowMapping: 'index',
                datasetLabels: "'tender'!C3",
                indexLabels: "'tender'!B4:B8",
                data: "'tender'!C4:C8"
            }
        }
        
    }
});

//chart 5
var ctx5 = document.getElementById('myChart5');
var chart5 = new Chart(ctx5, {
    type: 'pie',
    data:{
        datasets:[{
            backgroundColor: ["#FFF8DC", "#FFEBCD", "#FFE4C4", "#FFDEAD", "#F5DEB3"]
        }
    ]},
    plugins: [ChartDataSource],
    options: {
        title : {
            display : true,
            fontsize:30,
            text: 'Jumlah Tender Batal'

        },
        plugins :{
            datasource: {
                url: 'assets/xlsx/b5.xlsx',
                rowMapping: 'index',
                datasetLabels: "'tender'!C22",
                indexLabels: "'tender'!B23:B27",
                data: "'tender'!C23:C27"
            }
        }
        
    }
});

//chart 6
var ctx6 = document.getElementById('myChart6');
var chart6 = new Chart(ctx6, {
    type: 'bar',
    data:{
        datasets:[{
            backgroundColor: "#7B68EE"
        }
    ]},
    plugins: [ChartDataSource],
    options: {
        title : {
            display : true,
            fontsize:35,
            text: 'Nilai Pagu Terbesar'

        },
        plugins :{
            datasource: {
                url: 'assets/xlsx/b5.xlsx',
                rowMapping: 'index',
                datasetLabels: "'Pagu & HPS'!C3",
                indexLabels: "'Pagu & HPS'!B4:B8",
                data: "'Pagu & HPS'!C4:C8"
            }
        }
        
    }
});

//chart 7
var ctx7 = document.getElementById('myChart7');
var chart7 = new Chart(ctx7, {
    type: 'bar',
    data:{
        datasets:[{
            backgroundColor: "#DB7093"
        }
    ]},
    plugins: [ChartDataSource],
    options: {
        title : {
            display : true,
            fontsize:35,
            text: 'Nilai Pagu Terkecil'

        },
        plugins :{
            datasource: {
                url: 'assets/xlsx/b5.xlsx',
                rowMapping: 'index',
                datasetLabels: "'Pagu & HPS'!C22",
                indexLabels: "'Pagu & HPS'!B23:B27",
                data: "'Pagu & HPS'!C23:C27"
            }
        }
        
    }
});

//chart 8
var ctx8 = document.getElementById('myChart8');
var chart8 = new Chart(ctx8, {
    type: 'bar',
    data:{
        datasets:[{
            backgroundColor: "#87CEFA"
        }
    ]},
    plugins: [ChartDataSource],
    options: {
        title : {
            display : true,
            fontsize:35,
            text: 'Nilai HPS Terbesar'

        },
        plugins :{
            datasource: {
                url: 'assets/xlsx/b5.xlsx',
                rowMapping: 'index',
                datasetLabels: "'Pagu & HPS'!C40",
                indexLabels: "'Pagu & HPS'!B41:B45",
                data: "'Pagu & HPS'!C41:C45"
            }
        }
        
    }
});

//chart 9
var ctx9 = document.getElementById('myChart9');
var chart9 = new Chart(ctx9, {
    type: 'bar',
    data:{
        datasets:[{
            backgroundColor: "#B0C4DE"
        }
    ]},
    plugins: [ChartDataSource],
    options: {
        title : {
            display : true,
            fontsize:35,
            text: 'Nilai Selisih Pagu & HPS Terbesar'

        },
        plugins :{
            datasource: {
                url: 'assets/xlsx/b5.xlsx',
                rowMapping: 'index',
                datasetLabels: "'Pagu & HPS'!C59",
                indexLabels: "'Pagu & HPS'!B60:B64",
                data: "'Pagu & HPS'!C60:C64"
            }
        }
        
    }
});

//chart 10
var ctx10 = document.getElementById('myChart10');
var chart10 = new Chart(ctx10, {
    type: 'line',
    data:{
        datasets:[{
            borderColor: "#808080"
        }
    ]},
    plugins: [ChartDataSource],
    options: {
        title : {
            display : true,
            fontsize:35,
            text: 'Perusahaan yang sering ikut Tender per Tahun'

        },
        plugins :{
            datasource: {
                url: 'assets/xlsx/b5.xlsx',
                rowMapping: 'index',
                datasetLabels: "'sering ikut tender'!D3",
                indexLabels: "'sering ikut tender'!C4:C8",
                data: "'sering ikut tender'!D4:D8"
            }
        }
        
    }
});

//chart 11
var ctx11 = document.getElementById('myChart11');
var chart11 = new Chart(ctx11, {
    type: 'bar',
    data:{
        datasets:[{
            backgroundColor: "#2f4f4f"
        }
    ]},
    plugins: [ChartDataSource],
    options: {
        title : {
            display : true,
            fontsize:35,
            text: 'Harga Penawaran Tertinggi'

        },
        plugins :{
            datasource: {
                url: 'assets/xlsx/b5.xlsx',
                rowMapping: 'index',
                datasetLabels: "'harga penawaran'!C3",
                indexLabels: "'harga penawaran'!B4:B8",
                data: "'harga penawaran'!C4:C8"
            }
        }
        
    }
});