<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prepare Your Future - HAiYU</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
    <!--Bootstrap css URL-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styleScience.css">
    <link rel="shortcut icon" href="../images/favicon.ico" />
    <link rel="stylesheet" href="../css/sidebar.css">
    <script src="/js/sidebar_script.js"></script>

</head>

<body>
    <?php include 'sidebar.php'?>
    <div class="main">
        <div class="menu">
            <a class="openbtn" onclick="openNav()"><img src="/images/open-menu.png" alt="" style="width: 32px;height: auto"></a>
            <span class="haiyu">HAiYU</span>
        </div>
    </div>
    <main>
        <div class="Isi">
            <div class="row" id="backRow">
                <br>
                <br>
                <a id="backButton" href="/user/subject">&#8678</a>
            </div>
            <div class="row">
                <div class="col-6 col-md-4 column">
                    <div class="cardMath">
                        <img src="../images/edu/044-stationery.png" alt="Math" id="icon" onclick="location.href = '/science/math'">
                        <h3 id="titleSub">Math</h3>
                    </div>
                </div>
                <div class="col-6 col-md-4 column">
                    <div class="titlePage">
                        <h1 id="title">EXPLORE<br>
                            YOUR<br>
                            SCIENCE<br>
                            HARDSKILL
                        </h1>
                    </div>
                </div>
                <div class="col-6 col-md-4 column">
                    <div class="cardPhysics">
                        <img src="../images/edu/030-newtons-cradle.png" alt="Physics" id="icon" onclick="location.href = '/science/physics'">
                        <h3 id="titleSub">Physics</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-md-4 column">
                    <div class="cardChemistry">
                        <img src="../images/edu/018-molecule.png" alt="Chemistry" id="icon" onclick="location.href = '/science/chemistry'">
                        <h3 id="titleSub">Chemistry</h3>
                    </div>
                </div>
                <div class="col-6 col-md-4 column" style="visibility: hidden;">
                    <div class="cardLanguage">
                        <img src="../images/edu/013-conversation.png" alt="Language" id="icon" onclick="location.href = '/language'">
                        <h3 id="titleSub">Language</h3>
                    </div>
                </div>
                <div class="col-6 col-md-4 column">
                    <div class="cardBiology">
                        <img src="../images/edu/014-dna.png" alt="Biologi" id="icon" onclick="location.href = '/science/biology'">
                        <h3 id="titleSub">Biology</h3>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
    <h6>© HAiYU Developer Team. All Rights Reserved</h6>
</body>

</html>