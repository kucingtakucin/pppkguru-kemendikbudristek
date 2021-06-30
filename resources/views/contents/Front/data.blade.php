@extends('layouts.template-front')

@push('styles')

    <!-- dataTables Css -->
    <link rel="stylesheet" href="{{ asset('assets-front/css/jquery.dataTables.min.css') }}">

    <style>
        #mapdiv {
            height: 500px; 
            min-width: 310px; 
            max-width: 100%; 
            margin: 0 auto; 
        }

        #chartdiv {
          width: 100%;
          height: 350px;
        }

        #chartdiv2 {
          width: 100%;
          height: 350px;
        }
    </style>
@endpush

@section('content')
    
    <!-- Hero Start -->
    <section class="bg-half w-100 cust" id="data-counter">
        <img src="{{ asset('assets-front/img/bg-top-right.png') }}" class="olay-top-right">
        <img src="{{ asset('assets-front/img/bg-left-lg.png') }}" class="olay-top-left">
        <div class="container bg-left-sm bg-right-sm">
            <div class="row">
                <div class="col-lg-8" id="live-data">
                    <div class="title-data text-secondary">
                        <i class="fa fa-desktop"></i>
                        <span>Live Data</span>
                    </div>
                    <!-- <div class="live-data" id="content"> -->
                    <div class="live-data">
                        <div class="row">
                            <div class="col-sm-6 mt-md-0">
                                <div class="card">
                                    <div class="card-body body">
                                        <div class="counter-wrapper">
                                            <span class="live-title text-primary-darker">Jumlah Suara Masuk</span>
                                            <div class="live-counter bg-jumlah-suara text-primary-darker">
                                                <span id="jml_suara_masuk2">{{ round($jml_suara) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mt-md-0 mt-2">
                                <div class="card">
                                    <div class="card-body body">
                                        <div class="counter-wrapper">
                                            <span class="live-title text-primary-darker">Total Suara Masuk</span>
                                            <div class="live-counter bg-total-suara text-primary-darker">
                                                <span id="total_suara_masuk2">{{ $persen_suara }}%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mt-md-3 mt-2">
                                <div class="card">
                                    <div class="card-body body">
                                        <div class="counter-wrapper">
                                            <span class="live-title text-primary-darker">Total Partisipan</span>
                                            <div class="live-counter bg-total-partisipan text-primary-darker">
                                                <span id="total_partisipan">{{ round($jml_partisipan) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mt-md-3 mt-2">
                                <div class="card">
                                    <div class="card-body body">
                                        <div class="counter-wrapper">
                                            <span class="live-title text-primary-darker">Sekolah Partisipan</span>
                                            <div class="live-counter bg-sekolah-partisipan text-primary-darker">
                                                <span id="jml_sekolah_partisipan">1</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 mt-md-0 mt-3 mb-md-0 mb-5" id="informasi">
                    <div class="title-data text-secondary">
                        <i class="fa fa-desktop"></i>
                        <span>Informasi</span>
                    </div>
                    <div class="info-card d-none" id="content">
                        <div class="row">
                            <div class="col-12">
                                <div class="card bg-info-guru">
                                    <div class="card-body">
                                        <div class="avatar">
                                            <div class="avatar-img">
                                                <img src="{{ asset('assets-front/img/background/avatar-sementara.png') }}" alt="">
                                            </div>
                                            <div class="avatar-info text-primary-darker">
                                                <span class="title">Nama Pemenang Ditaruh sini, S.Ag</span>
                                                <div class="detail">
                                                    <span>SMAN 1 Surakarta</span>
                                                    <span>Nanggroe Aceh Darussalam</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="penghitungan-suara-countdown" id="content">
                        <div class="row">
                            <div class="col-12">
                                <div class="card bg-info-counter">
                                    <div class="card-body">
                                        <div class="counter">
                                            <div class="day text-primary-darker">
                                                <span class="title">3042</span>
                                                <span class="day-detail">Hari</span>
                                            </div>
                                            <div class="detail text-primary-darker">
                                                <span class="title">Menuju Penghitungan Suara</span>
                                                <hr class="counter-ruler">
                                                <span class="footnote">Dirjen GTK Dikmen Kemdikbud RI</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex mt-md-2 mt-3 mb-md-0 mb-3">
                        <div class="txt-update">
                            Terakhir diperbarui:
                        </div>
                        <div class="time-update">
                            20:23 WIB. Senin, 10 Mei 2021
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-md-5 mt-5" id="jenjang-sekolah">
                    <div class="title-data text-secondary">
                        <i class="fas fa-align-left"></i>
                        <span>Detail Sekolah Sasaran</span>
                    </div>
                    <div class="jenjang-sekolah">
                        <div class="row">
                            <div class="col-sm-4 mt-md-4 mt-2">
                                <div class="card">
                                    <div class="card-body body">
                                        <div class="counter-wrapper">
                                            <span class="live-title text-primary-darker">Jenjang SMA</span>
                                            <div class="live-counter bg-sekolah-partisipan text-primary-darker">
                                                <span>2.582</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 mt-md-4 mt-2">
                                <div class="card">
                                    <div class="card-body body">
                                        <div class="counter-wrapper">
                                            <span class="live-title text-primary-darker">Jenjang SMK</span>
                                            <div class="live-counter bg-sekolah-partisipan text-primary-darker">
                                                <span>2.582</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 mt-md-4 mt-2">
                                <div class="card">
                                    <div class="card-body body">
                                        <div class="counter-wrapper">
                                            <span class="live-title text-primary-darker">Jenjang SLB</span>
                                            <div class="live-counter bg-sekolah-partisipan text-primary-darker">
                                                <span>2.582</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-md-5 mt-5" id="jenjang-sekolah">
                    <div class="title-data text-secondary">
                        <i class="fas fa-align-left"></i>
                        <span>Sebaran Sekolah Sasaran</span>
                    </div>
                    <div id="mapdiv">

                    </div>
                </div>
                <div class="col-12 mt-md-5 mt-5" id="grafik-data">
                    <div class="title-data text-secondary">
                        <i class="fas fa-align-left"></i>
                        <span>Grafik Tabel / Skor Responden Siswa</span>
                    </div>
                    <div class="jenjang-sekolah">
                        <div class="row">
                            <div class="col-sm-6 mt-md-6 mt-2">
                                <div class="card">
                                    <div class="card-body body">
                                        <div class="counter-wrapper">
                                            <div id="chartdiv"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mt-md-6 mt-2">
                                <div class="card">
                                    <div class="card-body body">
                                        <div class="counter-wrapper">
                                            <div id="chartdiv2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-md-5 mt-5" id="ringkasan-data">
                    <div class="title-data text-secondary">
                        <i class="fas fa-align-left"></i>
                        <span>Data Guru Inspiratif</span>
                    </div>
                    <div class="ringkasan-table table-res-2">
                        <table id="tabel-ringkasan" class="dataTable">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>2011/07/25</td>
                                    <td>$170,750</td>
                                </tr>
                                <tr>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    <td>2009/01/12</td>
                                    <td>$86,000</td>
                                </tr>
                                <tr>
                                    <td>Cedric Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2012/03/29</td>
                                    <td>$433,060</td>
                                </tr>
                                <tr>
                                    <td>Airi Satou</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>33</td>
                                    <td>2008/11/28</td>
                                    <td>$162,700</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero End -->

@endsection


@push('scripts')

    <script src="https://code.highcharts.com/maps/highmaps.js"></script>
    <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/mapdata/countries/id/id-all.js"></script>

    <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>

    <!-- dataTable Js -->
    <script src="{{ asset('assets-front/js/jquery.dataTables.min.js') }}"></script>
    <!-- Main Js -->
    <script src="{{ asset('assets-front/js/plugins.init.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#tabel-ringkasan').DataTable();
        } );

        var data = [
            ['id-3700', 0],
            ['id-ac', 1],
            ['id-jt', 2],
            ['id-be', 3],
            ['id-bt', 4],
            ['id-kb', 5],
            ['id-bb', 6],
            ['id-ba', 7],
            ['id-ji', 8],
            ['id-ks', 9],
            ['id-nt', 10],
            ['id-se', 11],
            ['id-kr', 12],
            ['id-ib', 13],
            ['id-su', 14],
            ['id-ri', 15],
            ['id-sw', 16],
            ['id-ku', 17],
            ['id-la', 18],
            ['id-sb', 19],
            ['id-ma', 20],
            ['id-nb', 21],
            ['id-sg', 22],
            ['id-st', 23],
            ['id-pa', 24],
            ['id-jr', 25],
            ['id-ki', 26],
            ['id-1024', 27],
            ['id-jk', 28],
            ['id-go', 29],
            ['id-yo', 30],
            ['id-sl', 31],
            ['id-sr', 32],
            ['id-ja', 33],
            ['id-kt', 34]
        ];

        // Create the chart
        Highcharts.mapChart('mapdiv', {
            chart: {
                map: 'countries/id/id-all'
            },

            title: {
                text: 'Data Sekolah Sasaran berdasarkan Lokasi'
            },

            mapNavigation: {
                enabled: true,
                buttonOptions: {
                    verticalAlign: 'bottom'
                }
            },

            colorAxis: {
                min: 0
            },

            series: [{
                data: data,
                name: 'Jumlah Sekolah',
                states: {
                    hover: {
                        color: '#BADA55'
                    }
                },
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }]
        });
    </script>

    <script>
        am4core.ready(function() {

        // Themes begin
        am4core.useTheme(am4themes_animated);
        // Themes end

        // Create chart instance
        var chart = am4core.create("chartdiv2", am4charts.PieChart);

        // Add data
        chart.data = [ {
        "country": "Selalu",
        "litres": 80
        }, {
        "country": "Sering",
        "litres": 10
        }, {
        "country": "Jarang",
        "litres": 8
        }, {
        "country": "Tidak Pernah",
        "litres": 2
        }
        ];

        // Add and configure Series
        var pieSeries = chart.series.push(new am4charts.PieSeries());
        pieSeries.dataFields.value = "litres";
        pieSeries.dataFields.category = "country";
        pieSeries.slices.template.stroke = am4core.color("#fff");
        pieSeries.slices.template.strokeOpacity = 1;
        pieSeries.labels.template.maxWidth = 130;
        pieSeries.labels.template.wrap = true;

        var title = chart.titles.create();
        title.text = "Cara mengajarnya menyenangkan";
        title.fontSize = 20;
        title.marginBottom = 30;

        // This creates initial animation
        pieSeries.hiddenState.properties.opacity = 1;
        pieSeries.hiddenState.properties.endAngle = -90;
        pieSeries.hiddenState.properties.startAngle = -90;

        chart.hiddenState.properties.radius = am4core.percent(0);


        }); // end am4core.ready()
        </script>

        <script>
        am4core.ready(function() {

        // Themes begin
        am4core.useTheme(am4themes_animated);
        // Themes end

        // Create chart instance
        var chart = am4core.create("chartdiv", am4charts.PieChart);

        // Add data
        chart.data = [ {
        "country": "Selalu",
        "litres": 75
        }, {
        "country": "Sering",
        "litres": 15
        }, {
        "country": "Jarang",
        "litres": 7
        }, {
        "country": "Tidak Pernah",
        "litres": 3
        }
        ];

        // Add and configure Series
        var pieSeries = chart.series.push(new am4charts.PieSeries());
        pieSeries.dataFields.value = "litres";
        pieSeries.dataFields.category = "country";
        pieSeries.slices.template.stroke = am4core.color("#fff");
        pieSeries.slices.template.strokeOpacity = 1;
        pieSeries.labels.template.maxWidth = 130;
        pieSeries.labels.template.wrap = true;

        var title = chart.titles.create();
        title.text = "Suka memotivasi saya dan teman sekelas";
        title.fontSize = 20;
        title.marginBottom = 30;

        // This creates initial animation
        pieSeries.hiddenState.properties.opacity = 1;
        pieSeries.hiddenState.properties.endAngle = -90;
        pieSeries.hiddenState.properties.startAngle = -90;

        chart.hiddenState.properties.radius = am4core.percent(0);


        }); // end am4core.ready()
    </script>

    <script>
        setInterval(function() {
            var jml_suara_masuk = $("#jml_suara_masuk").text();
            var jml_suara_masuk = jml_suara_masuk.replace(".", "");
            var total_suara_masuk = $("#total_suara_masuk").text();
            var total_suara_masuk = total_suara_masuk.replace("%", "");
            /*var total_partisipan = $("#total_partisipan").text();
            var total_partisipan = total_partisipan.replace(".", "");
            var jml_sekolah_partisipan = $("#jml_sekolah_partisipan").text();
            var jml_sekolah_partisipan = jml_sekolah_partisipan.replace(".", "");*/

            jml1 = (parseInt(jml_suara_masuk) + (Math.floor(Math.random() * 7) + 1)).toString();
            jml2 = ((parseFloat(total_suara_masuk)+parseFloat((Math.random() * 0.05) + 0.01)).toFixed(2)).toString();
            /*jml3 = (parseInt(total_partisipan) + (Math.floor(Math.random() * 7) + 1)).toString();
            jml4 = (parseInt(jml_sekolah_partisipan) + (Math.floor(Math.random() * 3) + 1)).toString();*/

            $("#jml_suara_masuk").text(formatNumber(jml1));
            $("#total_suara_masuk").text(jml2+'%');
            /*$("#total_partisipan").text(formatNumber(jml3));
            $("#jml_sekolah_partisipan").text(formatNumber(jml4));*/

        }, 15000);

        function formatNumber(angka) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split   = number_string.split(','),
            sisa    = split[0].length % 3,
            rupiah  = split[0].substr(0, sisa),
            ribuan  = split[0].substr(sisa).match(/\d{3}/gi);
            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }
            // rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            // return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
            return rupiah;
        }
    </script>
@endpush

