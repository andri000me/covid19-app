<?php 

   // include 'assets/files/api.php';
   error_reporting(0);
   $data = file_get_contents('http://corona.bekasikota.go.id/public/api/informasikelurahan/get');
   $jsonParser = json_decode($data, true);

   //By Zami

   $dataObj = count($jsonParser['Data']);
   $sum = 0;
   foreach ($jsonParser['Data'] as $value) {
      $dataObj * $jsonParser['Data']['0']['odp'] / $dataObj;
      $sumOdp += $value['odp'];
      $sumPdp += $value['pdp'];
      $sumSuspect += $value['terkonfirmasi'];

   }
   
   $dataChartStacked = file_get_contents('http://corona.bekasikota.go.id/public/api/case/get');
   $jsonParserStacked = json_decode($dataChartStacked, true);


?>

<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <title>Live Statistik Data Kota Bekasi</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="" />
        <meta name="keywords" content="Virus Corona, Covid19, Corona Virus" />
        <meta name="author" content="Zamzam Saputra" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="shortcut icon" href="../images/favicon2.png" />
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css"  href='../css/clear.css' />
        <link rel="stylesheet" type="text/css"  href='../css/common.css' />
        <link rel="stylesheet" type="text/css"  href='../css/font-awesome.min.css' />
        <link rel="stylesheet" type="text/css"  href='../css/carouFredSel.css' />
        <link rel="stylesheet" type="text/css"  href='../css/sm-clean.css' />
        <link rel="stylesheet" type="text/css"  href='../style.css' />
        <link rel="stylesheet" type="text/css" href="highchart.css">
        <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">
        <link rel="stylesheet" type="text/css" href=""> -->
        <link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">



        <!--[if lt IE 9]>
                <script src="js/html5.js"></script>
        <![endif]-->

    </head>


    <body class="home blog">
        
       <div class="doc-loader"></div>

        <div class="content-1170 header-holder center-relative">
            <div class="header-logo left">
                <a href="../index">
                    <img src="../images/favicon2.png" alt="Katt">
                </a>
            </div>

            <div class="header-menu">
                <div class="toggle-holder relative">
                    <div id="toggle">
                        <div class="one"></div>
                        <div class="two"></div>
                        <div class="three"></div>
                    </div>
                </div>

                <nav id="header-main-menu" class="big-menu">
                    <ul class="main-menu sm sm-clean">
                        <li><a href="../index">Home</a></li>
                        <li><a href="../about" class="current">Tentang Corona</a></li>
                        <li><a href="../nasional">Statistik Di Indonesia</a></li>
                        <li><a href="../internasional">Statistik Di Dunia</a></li>
                        <li><a href="../daerah">Daerah</a></li>
                        <li><a href="../api">API</a></li>
                        <li><a href="../contact">Contact</a></li>
                    </ul>
                </nav>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>


        <div class="block content-1170 center-relative">
            <div class="blog-holder block center-relative">

                <article id="post-1" class="relative blog-item-holder">
                    <div class="post-thumb thumb-html one_thumb relative">
                        <script>
                            var slider1_speed = "500";
                            var slider1_auto = "true";
                            var slider1_pagination = "true";
                            var slider1_hover = "true";
                        </script>
                        <div class="image-slider-wrapper">
                            <div class="caroufredsel_wrapper">
                                <ul id="slider1" class="image-slider slides center-text">
                                    <li><img src="../images/corona2.jpg" alt=""></li>
                                    <li><img src="../images/corona3.jpg" alt=""></li>
                                    <li><img src="../images/corona4.jpg" alt=""></li>
                                </ul>
                            </div>
                            <div class="slider1_pagination carousel_pagination left"></div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="post-title-holder one_title absolute">
                        <h2 class="entry-title excerpt">
                            <a href="#">
                                Data ODP dan PDP berbasis laporan dari fasilitas kesehatan Kota Bekasi dan Telah Di Laporkan ke Kementerian Kesehatan.
                            </a>
                        </h2>
                        <div class="cat-links">
                            <ul>
                                <li>
                                    <a href="#">Corona Virus</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="clear"></div>
                </article>


                <article id="post-2" class="relative blog-item-holder">
                    <div class="only-post-title-holder">
                        <h2 class="entry-title excerpt">
                            <a href="">
                                Keterangan Orang Dalam Pemantauan (ODP) : Pasien yang dipulangkan untuk dipantau kesehatannya selama 14 hari oleh Puskesmas diwilayah domisili Pasien Dalam Pengawasan (PDP) : Pasien dirujuk ke RS Rujukan Covid-19 untuk mendapatkan perawatan dan pemeriksaan swab tenggorokan dan memastikan positif atau negatif Covid-19
                            </a>
                        </h2>
                        <div class="cat-links">
                            <ul>
                                <li>
                                    <a href="">Laporan dari fasilitas kesehatan Kota Bekasi </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="zigzag absolute" style="bottom: 30px; left: -90px;">
                        <img src="../images/zigzag.png" alt="">
                    </div>
                </article>


             <article id="post-3" class="relative blog-item-holder">
                    <h2 style="text-align: center; margin: 40px;">Live Statistik Data Corona Virus Kota Bekasi</h2>
                    <figure class="highcharts-figure" style="margin-top: 5%;">
                        <div id="container-area"></div>
                    </figure>
                    <div class="clear"></div>
                </article>
            <div class="clear"></div>

            <article id="post-4" class="relative blog-item-holder">
                    <h2 style="text-align: center; margin: 40px;">Kasus Virus Corona (Pemantuan, Sembuh, Sehat dan dll)</h2>

                    <figure class="highcharts-figure" style="margin-top: 5%;">
                        <div id="container-unica"></div>
                    </figure>

                    <div class="clear"></div>
                </article>            
        
            <article id="post-5" class="relative blog-item-holder">
                    <h2 style="text-align: center; margin: 40px;"> Serangkaian waktu kasus Virus Corona (Pemantuan, Sembuh, Sehat dan dll)</h2>

                    <div class="container" style="text-align: center; background-color: #F8F8FF; ">
                        PP = Proses Pemantuan<br>
                        SS = Selesai Pemantauan<br>
                        MD = Masih Dirawat<br>
                        PS = Pulang Sehat<br>
                        D = Dirawat<br>
                        S = Sembuh<br>
                        M = Meninggal<br>
                        IM = Isolasi Mandiri<br>
                    </div>

                    <table id="myTable">
                        <thead>
                            <tr>
                                <th>Tgl</th>
                                <th>PP</th>
                                <th>SS</th>
                                <th>MD</th>
                                <th>PS</th>
                                <th>D</th>
                                <th>S</th>
                                <th>M</th>
                                <th>IM</th>

                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php foreach ($jsonParserStacked['Data'] as $value): ?>
                                <tr>
                                    <td><?= $value['tanggal'] ?></td>
                                    <td><?= $value['proses_pemantauan'] ?></td>
                                    <td><?= $value['selesai_pemantauan'] ?></td>
                                    <td><?= $value['masih_dirawat'] ?></td>
                                    <td><?= $value['pulang_sehat'] ?></td>
                                    <td><?= $value['dirawat'] ?></td>
                                    <td><?= $value['sembuh'] ?></td>
                                    <td><?= $value['meninggal'] ?></td>
                                    <td><?= $value['isolasi_mandiri'] ?></td>
                                </tr>
                            <?php endforeach ?>


                        </tbody>
                    </table>


                    <div class="clear"></div>
                </article>            

              <article id="post-6" class="relative blog-item-holder">
                    <h2 style="text-align: center; margin: 40px;"> Serangkaian waktu kasus Virus Corona (ODP Dan PDP)</h2>

                    <table id="myTable2">
                        <thead>
                            <tr>
                                <th>Kecamatan</th>
                                <th>ODP</th>
                                <th>PDP</th>
                                <th>Suspect</th>
                                <th>Update</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php foreach ($jsonParser['Data'] as $value): ?>
                                <tr>
                                    <td><?= $value['kecamatan'] ?></td>
                                    <td><?= $value['odp'] ?></td>
                                    <td><?= $value['pdp'] ?></td>
                                    <td><?= $value['terkonfirmasi'] ?></td>
                                    <td><?= $value['update_at'] ?></td>
                                </tr>
                            <?php endforeach ?>


                        </tbody>
                    </table>


                    <div class="clear"></div>
                </article>
            <div class="clear"></div>
        </div>



        <!--Footer-->
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/data.js"></script>
        <script src="https://code.highcharts.com/modules/drilldown.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
        <script src="https://code.highcharts.com/modules/accessibility.js"></script>
        <script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>

        <script type="text/javascript">
            var dataTable = new DataTable("#myTable");
            var dataTable = new DataTable("#myTable2");
        </script>

        <!-- Pie Chart -->
        <script type="text/javascript">
            Highcharts.chart('container-area', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                title: {
                    text: 'Update Terakhir : <?= date('d F Y', strtotime('-1 days')) ?>'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.y:1f}</b>'
                },
                accessibility: {
                    point: {
                        valueSuffix: ''
                    }
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.y:1f} '
                        }
                    }
                },
                series: [{
                    name: 'Brands',
                    colorByPoint: true,
                    data: [{
                        name: 'Orang Dalam Pemantauan (ODP)',
                        y: <?= $sumOdp ?>,
                        sliced: true,
                        selected: true
                    }, {
                        name: 'Pasien Dalam Pengawasan (PDP)',
                        y: <?= $sumPdp ?>,
                        sliced: true,
                        selected: true
                    },
                    {
                        name: 'Suspect Corona',
                        y: <?= $sumSuspect ?>,
                        sliced: true,
                        selected: true
                    }]
                }]
            });
        </script>
        
        <!-- Chart Unica -->
        <script>
        Highcharts.chart('container-unica', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Update Terakhir : <?= $jsonParserStacked['Data']['0']['tanggal'] ?>'
            },
            subtitle: {
                text: 'Source: <a href="http://corona.bekasikota.go.id">corona.bekasikota.go.id</a>'
            },
            xAxis: {
                type: 'category',
                labels: {
                    rotation: -45,
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Laporan Kasus Corona Kota Bekasi'
                }
            },
            legend: {
                enabled: false
            },
            tooltip: {
                pointFormat: 'Laporan Hari Ini: <b>{point.y:,1f} Orang</b>'
            },
            series: [{
                name: 'Orang',
                data: [
                    ['Proses Pemantauan', <?= $jsonParserStacked['Data'][0]['proses_pemantauan'] ?>],
                    ['Selesai Pemantauan', <?= $jsonParserStacked['Data'][0]['selesai_pemantauan'] ?>],
                    ['Masih Dirawat', <?= $jsonParserStacked['Data'][0]['masih_dirawat'] ?>],
                    ['Pulang Sehat', <?= $jsonParserStacked['Data'][0]['pulang_sehat'] ?>],
                    ['Dirawat', <?= $jsonParserStacked['Data'][0]['dirawat'] ?>],
                    ['Sembuh', <?= $jsonParserStacked['Data'][0]['sembuh'] ?>],
                    ['Meninggal', <?= $jsonParserStacked['Data'][0]['meninggal'] ?>],
                    ['Isolasi Mandiri', <?= $jsonParserStacked['Data'][0]['isolasi_mandiri'] ?>]
                ],
                dataLabels: {
                    enabled: true,
                    rotation: -90,
                    color: '#FFFFFF',
                    align: 'right',
                    format: '{point.y:,1f}', // one decimal
                    y: 10, // 10 pixels down from the top
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            }]
        });
        </script>


          <footer class="footer">
            <div class="content-1170 center-relative">
                <ul>
                    <li class="left-footer-content">
                        © 2020 All rights reserved. | Global Data Provided by <a href="https://systems.jhu.edu/"> CSSE Johns Hopkins University.</a> <i class="fa fa-heart"></i> Made with Zamzam Saputra
                    </li>
                    <li class="center-footer-content">
                        <a href="index">
                            <img src="../images/katt_default_footer_logo.png" alt="Katt">
                        </a>
                    </li>
                    <li class="right-footer-contnet">
                        <a href="daerah">Daerah</a>
                        <a href="api">API</a>
                        <a href="https://twitter.com/zamisyh">Twitter</a>
                        <a href="https://github.com/zamisyh/">Github</a>
                        <a href="https://web.facebook.com/zamzam.sweat.3">Facebook</a>
                        <a href="https://www.instagram.com/zamsyhptr_/">Instagram</a>
                    </li>
                    <li class="left-footer-content mobile">
                        © 2020 All rights reserved. | Global Data Provided by <a href="https://systems.jhu.edu/"> CSSE Johns Hopkins University.</a> <i class="fa fa-heart"></i> Made with Zamzam Saputra
                    </li>
                </ul>
            </div>
        </footer>



        <div class="fixed scroll-top">
            <img src="../images/back_to_top.png" alt="Go Top">
        </div>


        <script type="text/javascript" src="../js/jquery.js"></script>
        <script type="text/javascript" src="../js/jquery.smartmenus.min.js"></script>
        <script type="text/javascript" src="../js/queryloader2.min.js"></script>
        <script type="text/javascript" src="../js/jquery.carouFredSel-6.0.0-packed.js"></script>
        <script type="text/javascript" src="../js/jquery.mousewheel.min.js"></script>
        <script type="text/javascript" src="../js/jquery.touchSwipe.min.js"></script>
        <script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="../js/jquery.nicescroll.min.js"></script>
        <script type="text/javascript" src="../js/main.js"></script>

    </body>
</html>