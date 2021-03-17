<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="../css/materi.css">
    <link href="https://fonts.googleapis.com/css2?family=Asap&family=Open+Sans&family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../images/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../js/homepage_script.js"></script>
</head>

<body>
    <div id="Sidebar" class="sidebar">
        <div class="top-nav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">☰</a>
            <span class="haiyu-sidebar">HAiYU</span>
            <div class="search-container">
                <form name="Searchbar">
                  <input type="text" placeholder="Search.." name="search">
                </form>
            </div>
        </div>
        <div class="user-disp">
            <img src="../images/img-user.png" alt="user avatar">
            <div class="user-info">
                <p>User</p>
                <p>id : xxxxxx</p>
            </div>
        </div>
        <a href="../">Home</a>
        <a href="#">Subject</a>
        <a href="#">Profile</a>
        <a href="../about">About</a>
        <div class="bottom-nav">
            <a href="#">Settings</a>
            <a href="#">Log out</a>
        </div>    
    </div>
    <div id="main">
        <div class="menu">
            <button class="openbtn" onclick="openNav()">☰</button>
            <span class="haiyu">HAiYU</span>
        </div>
        <br><br>
        <div class="Content">
            <h1>Math</h1>
            <h2>Chapter 2 - <span style="color:orange">Logaritma</span></h2>
            <div class="isi">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.</p>
                <br>
                <p>Suspendisse ultricies consectetur sodales. Nunc vulputate, ipsum id fringilla semper, lorem nisi faucibus nisi, in commodo urna dolor in ligula. Ut vel sollicitudin odio, id porttitor ligula. Vestibulum pretium porta nisl, eget suscipit turpis. Nullam vitae nisl enim. Curabitur auctor, tortor fringilla laoreet convallis, felis ligula cursus mi, quis dignissim dolor enim non orci. Maecenas dictum justo massa, nec venenatis metus ullamcorper sit amet. Donec iaculis, lorem sed tristique porttitor, sem risus auctor velit, et facilisis dui mi eu magna. Vivamus feugiat diam orci, eu aliquam mi dapibus ut. Pellentesque rutrum vel ante nec dignissim.</p>
                <br>
                <a href="">next chapter</a>
            </div>
        </div>
    </div>
</body>

</html>