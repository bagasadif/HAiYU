<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="../css/materi.css">
    <link rel="stylesheet" href="../css/sidebar.css">
    <link href="https://fonts.googleapis.com/css2?family=Asap&family=Open+Sans&family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../images/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../js/sidebar_script.js"></script>
</head>

<body>
    <?php include 'sidebar.php'?>
    <div id="main">
        <a id="backButton" href="/<?= $course ?>">&#8678</a>
        <div class="menu">
            <button class="openbtn" onclick="openNav()">☰</button>
            <span class="haiyu">HAiYU</span>
        </div>
        <br><br>
        <div class="Content">
            <h1><?= $course; ?></h1>
            <h2><?= $chapter; ?> - <span style="color:orange"><?= $materi; ?></span></h2>
            <?php if (session('level') == 2 && session('id') == $id_pengajar) : ?>
                <button id="buttonEdit" onclick='location.href="/editChapter/<?=$id_mapel?>/<?=$num?>"'>edit chapter</button>
                </form>
            <?php endif; ?>
            <div class="isi">
                <p><?= $isi; ?></p>
                <br>
                <?php if ($num == 1) : ?>
                    <span class="next">
                        <img src="../images/next.png" alt="->" onclick="location.href = '<?= $next; ?>'">
                        <a href="<?= $next; ?>">Next chapter</a><br>
                    </span>
                <?php elseif ($num != 1 && $num < 5) : ?>
                    <span class="prev">
                        <img src="../images/prev.png" alt="->" onclick="location.href = '<?= $next; ?>'">
                        <a href="<?= $prev; ?>">Previous chapter</a><br>
                    </span>
                    <span class="next">
                        <img src="../images/next.png" alt="->" onclick="location.href = '<?= $next; ?>'">
                        <a href="<?= $next; ?>">Next chapter</a><br>
                    </span>
                <?php else : ?>
                    <span class="prev">
                        <img src="../images/prev.png" alt="->" onclick="location.href = '<?= $next; ?>'">
                        <a href="<?= $prev; ?>">Previous chapter</a><br>
                    </span>
                    <span class="next">
                        <img src="../images/next.png" alt="->" onclick="location.href = '<?= $next; ?>'">
                        <a href="<?= $next; ?>">Mid Test</a><br>
                    </span>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>

</html>