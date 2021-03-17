<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="../css/news.css">
    <link rel="stylesheet" href="../css/sidebar.css">
    <link href="https://fonts.googleapis.com/css2?family=Asap&family=Open+Sans&family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../images/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../js/sidebar_script.js"></script>
</head>

<body>
    <?php include 'sidebar.php'?>
    <div id="main">
        <a id="backButton" href="/">&#8678</a>
        <div class="menu">
            <a class="openbtn" onclick="openNav()"><img src="../images/open-menu.png" alt="" style="width: 32px;height: auto"></a>
            <span class="haiyu">HAiYU</span>
        </div>
        <br>
        <br>
        <br>
        <h1>Latest News</h1>
        <div class="news">
            <h3><?= $title1; ?></h3>
            <p><?= $content1; ?></p>
        </div><br>
        <div class="news">
            <h3><?= $title2; ?></h3>
            <p><?= $content2; ?></p>
        </div><br>
        <div class="news">
            <h3><?= $title3; ?></h3>
            <p><?= $content3; ?></p>
        </div><br>
        <div class="news">
            <h3><?= $title4; ?></h3>
            <p><?= $content4; ?></p>
        </div><br>
        <div class="news">
            <h3><?= $title5; ?></h3>
            <p><?= $content5; ?></p>
        </div>
    </div>
</body>