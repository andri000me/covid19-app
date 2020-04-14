<?php 
    
    include 'assets/files/api.php';

    error_reporting(0);

    $positifReplace = preg_replace('/[^0-9\  ]/', '', $positif);
    $sembuhReplace = preg_replace('/[^0-9\  ]/', '', $sembuh);
    $meninggalReplace = preg_replace('/[^0-9\  ]/', '', $meninggal);



    $date = date('n-j-Y', strtotime('-1 days'));

    $contentDaily = file_get_contents("https://www.itszami.my.id/covid19/api/v1/globalData/");
    $jsonDaily = json_decode($contentDaily, true);


 ?>

<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <title>Live Statistik Global Data Corona Virus</title>
       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="Mengetahui Apa Itu Corona" />
        <meta name="keywords" content="Virus Corona, Covid19, Corona Virus" />
        <meta name="author" content="Zamzam Saputra" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="shortcut icon" href="images/favicon2.png" />
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css"  href='css/clear.css' />
        <link rel="stylesheet" type="text/css"  href='css/common.css' />
        <link rel="stylesheet" type="text/css"  href='css/font-awesome.min.css' />
        <link rel="stylesheet" type="text/css"  href='css/carouFredSel.css' />
        <link rel="stylesheet" type="text/css"  href='css/sm-clean.css' />
        <link rel="stylesheet" type="text/css"  href='style.css' />
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
        
        <?php include 'assets/files/header.php'; ?>

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
                                    <li><img src="images/corona2.jpg" alt=""></li>
                                    <li><img src="images/corona3.jpg" alt=""></li>
                                    <li><img src="images/corona4.jpg" alt=""></li>
                                </ul>
                            </div>
                            <div class="slider1_pagination carousel_pagination left"></div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="post-title-holder one_title absolute">
                        <h2 class="entry-title excerpt">
                            <a href="#">
                                Laporan terkait pasien yang terkena Virus Corona (Internasional)
                                menurut data CSSE Johns Hopkins University
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
                                Laporan terkait jumlah jiwa yang terkena positif, sembuh dan meninggal menurut <b>CSSE Johns Hopkins University</b><br><br>
                                Positif Corona : <?= $positif ?><br> Sembuh <?= $sembuh ?><br> Meninggal : <?= $meninggal ?>
                            </a>
                        </h2>
                        <div class="cat-links">
                            <ul>
                                <li>
                                    <a href="https://systems.jhu.edu">CSSE Johns Hopkins University</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="zigzag absolute" style="bottom: 30px; left: -90px;">
                        <img src="images/zigzag.png" alt="">
                    </div>
                </article>


                <article id="post-3" class="relative blog-item-holder">
                    <h2 style="text-align: center; margin: 40px;">Live Statistik Global Data Corona Virus</h2>
                    <figure class="highcharts-figure" style="margin-top: 5%;">
                        <div id="container"></div>
                    </figure>
                    <div class="clear"></div>
                </article>
            <div class="clear"></div>

              <article id="post-4" class="relative blog-item-holder">
                    <h2 style="text-align: center; margin: 40px;"> Negara-negara yang terkena Corona Virus</h2>

                    <table id="myTable">
                        <thead>
                            <tr>
                                <th>Negara</th>
                                <th>Positif</th>
                                <th>Sembuh</th>
                                <th>Meninggal</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($jsonGlobal as $value): ?>
                          <?php foreach ($value as $attr): ?>
                            
                            <tr>
                                <td><?= $attr['Country_Region'] ?></td>
                                <td><?= $attr['Confirmed'] ?></td>
                                <td><?= $attr['Recovered'] ?></td>
                                <td><?= $attr['Deaths'] ?></td>
                            </tr>

                          <?php endforeach ?>
                        <?php endforeach ?>

                        </tbody>
                    </table>


                    <div class="clear"></div>
                </article>
                <article id="post-5" class="relative blog-item-holder">
                    <h2 style="text-align: center; margin: 40px;"> Update Harian</h2>
                    <p style="text-align: center;">Update Terakhir <?= date('j F Y', strtotime('-1 days')); ?></p>

                    <table id="myTable2">
                        <thead>
                            <tr>
                                <th>Provinsi</th>
                                <th>Negara</th>
                                <th>Positif</th>
                                <th>Sembuh</th>
                                <th>Meninggal</th>
                            </tr>
                        </thead>
                        <tbody>        
                            
                         <?php foreach ($jsonDaily as $value): ?>
                            <tr>
                               <?php 

                                if ($value['provinceState']) {
                                    echo "<td>" .$value['provinceState']. "</td>";
                                }else{
                                    echo "<td>-</td>";
                                }

                                ?>
                               <td><?= $value['countryRegion'] ?></td> 
                               <td><?= $value['confirmed'] ?></td> 
                               <td><?= $value['recovered'] ?></td>
                               <td><?= $value['deaths'] ?></td> 

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


        <?php include 'assets/files/scriptChart.php'; ?>

        <?php include 'assets/files/footer.php'; ?>

    </body>
</html>
