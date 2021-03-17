<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap for grid -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="/css/profileEdit.css">
    <link href="https://fonts.googleapis.com/css2?family=Asap&family=Open+Sans&family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="/images/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/sidebar.css">
    <script src="/js/sidebar_script.js"></script>
    <title>Edit Materi - HAiYU</title>
</head>

<body>
    <?php include 'sidebar.php'?>
    <div class="main">
        <div class="menu">
            <a class="openbtn" onclick="openNav()"><img src="/images/open-menu.png" alt="" style="width: 32px;height: auto"></a>
            <span class="haiyu">HAiYU</span>
        </div>
    </div>
    <div class="main">
        <div class="menu">
            <a class="openbtn" onclick="openNav()"><img src="/images/open-menu.png" alt="" style="width: 32px;height: auto"></a>
            <span class="haiyu">HAiYU</span>
        </div>
    </div>

    <div class="content">
        <h2>Edit Materi</h2>
        <form action="" method="POST" enctype="mulipart/form-data">
            <div class="col">
                <div class="form-control">
                    <input type="hidden" name="id" id="id" value="<?= $id_chapter ?>"><br>
                </div>
                <div class="form-control">
                    <input type="hidden" name="id" id="id" value="<?= $id_mapel ?>"><br>
                </div>
                <div class="form-control">
                    <label for="judul">Judul : </label>
                    <input type="text" name="judul" id="judul" value="<?= $judul ?>"><br>
                </div>
                <div class="form-control">
                    <label for="konten">Konten : </label>
                    <textarea name="konten" id="konten" cols="30" rows="10"><?= $konten?></textarea>
                </div>
            </div>
    <button class="submit" id="submit" value="submit">Submit</button>
    </form>
    </div>
</body>

</html>