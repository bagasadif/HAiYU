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

</head>

<body>
    <main>
        <div class="Isi">
            <div class="row" style="margin-top: 20%;">
                <div class="col-6 col-md-4 column">
                    <div class="cardMath">
                        <img src="../images/us.png" alt="English" id="icon" onclick="location.href = '/language/english'">
                        <h3 id="titleSub">English</h3>
                    </div>
                </div>
                <div class="col-6 col-md-4 column">
                    <div class="titlePage">
                        <h1 id="title">EXPLORE<br>
                            YOUR<br>
                            LANGUAGE<br>
                            HARDSKILL
                        </h1>
                    </div>
                </div>
                <div class="col-6 col-md-4 column">
                    <div class="cardPhysics">
                        <img src="../images/indonesia.png" alt="Indonesian" id="icon" onclick="location.href = '/language/indonesian'">
                        <h3 id="titleSub">Indonesian</h3>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>

    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <h1>Do you want to enroll 
                <br>    
                <?= $title ?> ? </h1>
            </div>

            <div>
                <form action="/subject/enroll" method="POST">
                    <input type="hidden" name="id_mapel" value="<?= $id ?>">
                    <input type="hidden" id="page" name="page" value="/language">  

                    <button type="submit" name="submit" value="yes">YES</button>
                    <button type="submit" name="submit" value="no">NO</button>
                    <br>
                </form>
            </div>
        </div>

    </div>

    <h6>© HAiYU Developer Team. All Rights Reserved</h6>
</body>

</html>