<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <title>Contact Author</title>
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

        <!--[if lt IE 9]>
                <script src="js/html5.js"></script>
        <![endif]-->

    </head>

    <body class="contact page page-template-default">
        
        <?php include 'assets/files/header.php'; ?>


        <div id="content" class="site-content">

            <div class="header-image">
                <h1 class="entry-title">Contact</h1>
                <img src="images/background.jpg" alt="">
            </div>
            <article class="content-1170 center-relative">
                <div class="content-wrapper">
                    <div class="entry-content">
                        <div class="one_half ">
                            <p><strong>Stay in touch</strong></p>
                            <br>
                            <p>
                                <span style="color: #cdc8c1;">Address : </span>&nbsp;Bekasi Utara, Kaliabang Nangka
                                <br>
                                <span style="color: #cdc8c1;">Phone : </span> +62 857-8031-0476
                                <br>
                                 <span style="color: #cdc8c1;">Email : </span> zamsyh.work@gmail.com
                                <br>
                                 <span style="color: #cdc8c1;">Whatsapp : </span> <a href="https://api.whatsapp.com/send?phone=6289602362015"> Klik Disini</a>
                                <br>
                            </p>
                        </div>
                        <div class="one_half last ">
                            <div class="contact-form">
                                <form method="post" action="">
                                    <p><input id="name" type="text" name="your-name" placeholder="Name" required="" required=""></p>
                                    <p><input id="contact-email" type="email" name="your-email" placeholder="Email" required=""></p>
                                    <p><input id="subject" type="text" name="your-subject" placeholder="Subject" required=""></p>
                                    <p><textarea id="message" name="your-message" placeholder="Message" required=""></textarea></p>
                                    <p><input type="submit" name="send" value="SEND"></p>
                                </form>

                                <?php if (isset($_POST['send']) === true): ?>

                                    <p style="color: green;">Pesan Berhasil Dikirim..</p>
                                <?php endif ?>

                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </article>

        </div>

        <!--Footer-->

       <?php include 'assets/files/footer.php'; ?>

    </body>
</html>
