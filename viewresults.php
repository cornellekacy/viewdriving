








<!DOCTYPE html>
<!--[if lt IE 9]><html class="lte-ie8" lang=en><![endif]-->
    <!--[if gt IE 8]><!--><html lang=en><!--<![endif]-->
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <!-- Google chrome should not attempt to translate languages automatically -->

    <meta name="google" value="notranslate">
    <meta name="robots" content="noindex, nofollow, noodp, noydir">
    <meta name="googlebot" content="noindex, nofollow, noarchive, nosnippet">
    
    <title>View your driving licence information</title>


    <!--[if gt IE 8]><!--><link href='css2/l1.css' media="screen" rel="stylesheet" /><!--<![endif]-->
    <!--[if IE 6]><link href='/assets/govuk-template-ie6.css' media="screen" rel="stylesheet" /><![endif]-->
    <!--[if IE 7]><link href='/assets/govuk-template-ie7.css' media="screen" rel="stylesheet" /><![endif]-->
    <!--[if IE 8]><link href='/assets/govuk-template-ie8.css' media="screen" rel="stylesheet" /><![endif]-->


    <!--[if gt IE 8]><!--><!-- <link href='css2/l2.css' media="screen" rel="stylesheet" /> --><!--<![endif]-->
    <!--[if IE 6]><link href='/assets/application-ie6.css' media="screen" rel="stylesheet" /><![endif]-->
    <!--[if IE 7]><link href='/assets/application-ie7.css' media="screen" rel="stylesheet" /><![endif]-->
    <!--[if IE 8]><link href='/assets/application-ie8.css' media="screen" rel="stylesheet" /><![endif]-->
<link href='css2/l3.css' media="print" rel="stylesheet" />

    <!--[if IE 8]><link href='/assets/digital-licence/stylesheets/fonts-ie8.css' media="all" rel="stylesheet" /><![endif]-->
    <!--[if gte IE 9]><!--><link href='css2/fonts.css' media="all" rel="stylesheet" /><!--<![endif]-->
    <!--[if lt IE 9]><script src='/assets/digital-licence/javascripts/ie.js'></script><![endif]-->

    <link rel="shortcut icon" href='/assets/images/favicon.ico' type="image/x-icon" />
    <link rel="mask-icon" href='/assets/images/govuk-logotype-crown.svg' color="#0b0c0c">
    <link rel="apple-touch-icon" sizes="152x152" href='/assets/images/apple-touch-icon-152x152'>
    <link rel="apple-touch-icon" sizes="120x120" href='/assets/images/apple-touch-icon-120x120'>
    <link rel="apple-touch-icon" sizes="76x76" href='/assets/images/apple-touch-icon-76x76'>
    <link rel="apple-touch-icon" href='/assets/images/apple-touch-icon-60x60'>


    <script src='css2/1.js'></script>
    <script src='css2/2.js' type="text/javascript"></script>
    <script src='css2/3.js'></script>

    <link title="Search" rel="search" type="application/opensearchdescription+xml" href="/search/opensearch.xml">

    <meta name="theme-color" content="#0b0c0c" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:image" content='/assets/images/opengraph-image.png'>

    <style type="text/css">
        .b1{
            font-size: 18px;
            font-weight: bolder;
        }
    </style>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    var pageStart = new Date();

    ga('create', 'UA-44719962-6', {
        'cookieDomain': '.www.viewdrivingrecord.service.gov.uk',
        'allowLinker': true
    });

    ga('set','anonymizeIp', true);
    ga('send', 'pageview');

/*    ga('create', 'UA-145652997-1', 'auto', 'govuk_shared', {'allowLinker': true});
    ga('govuk_shared.require', 'linker');
    ga('govuk_shared.linker.set', 'anonymizeIp', true);
    ga('govuk_shared.linker:autoLink', ['www.gov.uk']);
    ga('govuk_shared.send', 'pageview'); */

</script>
</head>


<body class="">
    <script>document.body.className = ((document.body.className) ? document.body.className + ' js-enabled' : 'js-enabled');</script>

    

<header role="banner" id="global-header" class="with-proposition">
    <div class="header-wrapper">
        <div class="header-global">
            <meta name="google" value="notranslate">
            <meta name="robots" content="noindex, nofollow, noodp, noydir">
            <meta name="googlebot" content="noindex, nofollow, noarchive, nosnippet">
            <div class="header-logo">
                <a href="https://www.gov.uk" title="Go to the gov.uk homepage" id="logo" class="content">
                    <img src="https://assets.publishing.service.gov.uk/static/images/gov.uk_logotype_crown-ea874a79e09423d63420aff44f016fd0b92dc6dec0cc2668d63b150c8669875e.png" width="36" height="32" alt=""> GOV.UK
                </a>
            </div>

        </div>

        <div class="header-proposition">
            <div class="content">
                <a href="/" id="proposition-name">View your driving licence information</a>
            </div>
        </div>


    </div>
</header>



    <div id="global-header-bar"></div>

    <main id="content" role="main">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    
                </div>
                  <div class="col-md-6">
                    <br><br>
                         <?php
        include 'admin/conn.php';
// Check connection
        if (!$link) {
            die("Connection failed: " . mysqli_connect_error());
        }
        if(isset($_POST['term'])){
            $name = $_POST['term'];
            if (empty($name)) {
                echo "<div class='alert alert-danger'>
                <strong>Failed!</strong> Tracking Id Cannot Be Empty.
                </div>";
            }else{

                $sql = "SELECT * FROM licence where lisencenumber LIKE '%$name%'";
                $result = mysqli_query($link, $sql);

                if (mysqli_num_rows($result) > 0) {
    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {?>

                        <p align="center">Full Name</p>
                        <h3 align="center"><strong><?php echo $row["name"] ?></strong></h3> <br>
                        <p align="center">Date Of Birth </p>
                        <h3 align="center"><?php echo $row["dob"] ?></h3> <br>
                        <p align="center">Address</p>
                        <h3 align="center"><?php echo $row["address"] ?></h3> <br>
                        <p align="center">licence Details</p>
                        <p align="center">Driving Status</p>
                        <h3 align="center"><?php echo $row["drivingstatus"] ?></h3> <br>
                        <p align="center">Licence Valid From</p>
                        <h3 align="center"><?php echo $row["validfrom"] ?></h3> <br>
                        <p align="center">Licence Valid To</p>
                        <h3 align="center"><?php echo $row["validto"] ?></h3> <br>
                        <p align="center">Driving Licence Number</p>
                        <h3 align="center"><?php echo $row["lisencenumber"] ?></h3> <br>
                            <p align="center">Lisence issue number</p>
                             <h3 align="center"><?php echo $row["issuenumber"] ?></h3>

                        


                                         <?php       
                                        }
                                    } else {
                                        echo "<div class='alert alert-danger'>
                                        <strong>Failed!</strong> No Search Done Yet Or Tracking Id Doesnt Exist.
                                        </div>";
                                    }
                                }
                            }

                            ?>
                </div>
                <br><br>
                <p align="center">To update or renew your driving licence details visit the driving licence</p>
                  <div class="col-md-3">
                    
                </div>
            </div>
            
        </div>
    </main>




