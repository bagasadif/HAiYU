<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAiYU - Sign In</title>
    <link rel="stylesheet" href="../css/signin.css">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../images/favicon.ico" />
    <link rel="stylesheet" href="/css/sidebar.css">
    <script src="/js/sidebar_script.js"></script>
    <script src="../js/signin.js" defer></script>
</head>

<body>
    <?php include 'sidebar.php'?>
    <div class="main">
        <div class="menu">
            <a class="openbtn" onclick="openNav()"><img src="/images/open-menu.png" alt="" style="width: 32px;height: auto"></a>
            <span class="haiyu">HAiYU</span>
        </div>
    </div>
    <div class="grid-container">

        <div class="item1">
            <h1 style="margin-bottom: 0%;padding-bottom: 0;">HAiYU</h1>
            <h2 id="subjudul">Hard Skill for You</h2>
        </div>

        <div class="item2">
            <img src="../images/people.png" alt="people">

            <h2>Sign in</h2>
            <form action="/user/login" method="POST">
                <?= session()->get('pesan'); ?>
                <br>
                <input class="login" type="text" name="email_username" id="email" placeholder="email/username" required>
                <br>
                <input class="login" type="password" name="password" name="password" placeholder="password" required>
                <br>
                <!-- <a href="" id="forgetPW">Forget password</a> -->
                <br>
                <label for="rm">Remember me</label>
                <input type="checkbox" id="rm" name="rm">

                <br>
                <br>

                <button class="loginButton">Login</button>
            </form>
                <br>
                <button id="myBtn">Doesn't have an account?</button>


        </div>


    </div>

    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times</span>
                <h1>Sign Up</h1>
            </div>

            <div>
                <form action="/user/regis" method="POST">
                    <?= session()->get('pesan'); ?>
                    <br>
                    <input type="text" id="username" name="username" placeholder="Create your username" required>
                    <br>
                    <input type="email" id="emailregis" name="email" placeholder="Enter your valid email" required>
                    <br>
                    <input type="password" id="password" name="password" placeholder="Make the password" required>
                    <br>
                    <br>
                    <!-- <button class="regis" type="submit" name="submit" value="teacher">AS TEACHER</button>
                    <span style="display: inline-block; width: 20px;"></span> -->
                    <button class="regis" type="submit" name="submit" value="student">REGISTER</button>
                    <br>
                    <a href="/signin" id="signin">Already have an account</a>
                    <br>
                    <br>

                </form>
            </div>
        </div>

    </div>

    <h6>© HAiYU Developer Team. All Rights Reserved</h6>
</body>

</html>