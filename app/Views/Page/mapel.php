<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?> - HAiYU</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
    <!--Bootstrap css URL-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/mapel.css">
    <link rel="shortcut icon" href="../images/favicon.ico" />
    <script src="../js/mapel.js"></script>
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
        <a id="backButton" href="/<?= $subject ?>">&#8678</a>
        <br>
        <br>
        <h1 id="title"><?= $title; ?></h1>

        <br>
        <div id="pengajar">
            <h4 style="padding-left: 180px;">Pengajar : <?= $nama_pengajar ?></h4>
            <br>
            <img src="../images/telephone.jpg" alt="Telephone : ">
            <h4><?= $telepon_pengajar ?></h4>
        </div>

        <!-- Hanya siswa yang akan keluar tombol untuk unenroll         -->
        <?php
        if (session()->get('level') == 1) {
            echo "
        <button id='unenroll' name='unenroll' onclick='open_modal()'>unenroll</button>
        ";
        }
        ?>

        <div class="Isi">
            <div class="row" id="row1">
                <div class="col-6 col-md-4 column">
                    <div id="chapter1">
                        <img src="../images/edu/048-book-1.png" alt="image" id="icon" onclick="location.href = '/<?= $mapel; ?>/chapter1'">
                        <h3 id="titleSub">Chapter 1</h3>
                        <h3 id="titleSub2"><?= $chapter1; ?></h3>
                    </div>
                </div>
                <div class="col-6 col-md-4 column">
                    <div id="chapter2">
                        <img src="../images/edu/048-book-1.png" alt="image" id="icon" onclick="location.href = '/<?= $mapel; ?>/chapter2'">
                        <h3 id="titleSub">Chapter 2</h3>
                        <h3 id="titleSub2"><?= $chapter2; ?></h3>
                    </div>
                </div>
                <div class="col-6 col-md-4 column">
                    <div id="chapter3">
                        <img src="../images/edu/048-book-1.png" alt="image" id="icon" onclick="location.href = '/<?= $mapel; ?>/chapter3'">
                        <h3 id="titleSub">Chapter 3</h3>
                        <h3 id="titleSub2"><?= $chapter3; ?></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-md-4 column">
                    <div id="chapter4">
                        <img src="../images/edu/048-book-1.png" alt="image" id="icon" onclick="location.href = '/<?= $mapel; ?>/chapter4'">
                        <h3 id="titleSub">Chapter 4</h3>
                        <h3 id="titleSub2"><?= $chapter4; ?></h3>
                    </div>
                </div>
                <div class="col-6 col-md-4 column">
                    <div id="chapter5">
                        <img src="../images/edu/048-book-1.png" alt="image" id="icon" onclick="location.href = '/<?= $mapel; ?>/chapter5'">
                        <h3 id="titleSub">Chapter 5</h3>
                        <h3 id="titleSub2"><?= $chapter5; ?></h3>
                    </div>
                </div>
                <div class="col-6 col-md-4 column">
                    <div id="midtest">
                        <?php
                        if ($graded) {
                            echo
                                "<img src='../images/edu/027-loupe.png' alt='image' id='icon' onclick=\"location.href = '/$mapel/midTest'\">";
                        } else {
                            echo
                                '<img src="../images/edu/027-loupe.png" alt="image" id="icon" onclick="open_modal2()">';
                        }
                        ?>
                        <h3 id="titleSub">Mid Test</h3>
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
                <h1>Are you sure want to unenroll
                    <br>
                    <?= $title ?> ? </h1>
            </div>

            <div>
                <form action="/subject/unenroll" method="POST">
                    <input type="hidden" name="id_mapel" value="<?= $id ?>">
                    <input type="hidden" id="page" name="page" value="/<?= $mapel ?>">
                    <input type="hidden" id="subject" name="subject" value="/<?= $subject ?>">

                    <button type="submit" name="submit" value="yes">YES</button>
                    <button type="button" name="close" onclick="close_modal()" value="no">NO</button>
                    <br>
                </form>
            </div>
        </div>

    </div>

    <div id="myModal2" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <h1>Do you want to start Mid Test now ?</h1>
            </div>

            <div>
                <form action="/<?= $mapel ?>/midTest" method="POST">
                    <button type="submit" name="submit" value="yes">YES</button>
                    <button type="button" name="close" onclick="close_modal2()" value="no">NO</button>
                    <br>
                </form>
            </div>
        </div>

    </div>

    <h6>© HAiYU Developer Team. All Rights Reserved</h6>
</body>

</html>