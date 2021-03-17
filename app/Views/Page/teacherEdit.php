<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap for grid -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="/css/profileEdit.css">
    <link rel="stylesheet" href="/css/sidebar.css">
    <link href="https://fonts.googleapis.com/css2?family=Asap&family=Open+Sans&family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="/images/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="/js/sidebar_script.js"></script>
    <title>HAiYU</title>
</head>

<body>
    <?php include 'sidebar.php' ?>
    <div class="main">
        <div class="menu">
            <a class="openbtn" onclick="openNav()"><img src="/images/open-menu.png" alt="" style="width: 32px;height: auto"></a>
            <span class="haiyu">HAiYU</span>
        </div>
    </div>
    <br>
    <div class="content">
        <h2>Edit Profile</h2>
        <form action="/user/updateTeacher/" method="POST" enctype="multipart/form-data">
            <div class="row1">
                <div class="col">
                    <div class="form-control1">
                        <label for="imgProfile">
                            <?php if ($teacher['foto'] != null) { ?>
                                <img src="/uploads/<?php echo $teacher['foto']; ?>" alt="" class="profilePhoto">
                                <h3>Tap photo for edit</h3>
                            <?php } else { ?>
                                <img src="/uploads/avatar.png" alt="" class="default">
                                <h3>Tap photo for change</h3>
                            <?php } ?>
                        </label>
                        <input type="file" id="imgProfile" name="foto">
                    </div>
                </div>
            </div>
            <div class="row2">
                <div class="col">
                    <div class="form-control">
                        <input type="hidden" name="id" id="id" value="<?php echo $teacher['id']; ?>" placeholder="id" readonly><br>
                    </div>
                    <div class="form-control">
                        <input type="text" name="email" id="email" value="<?php echo $teacher['email']; ?>" placeholder="email" readonly><br>
                    </div>
                    <div class="form-control">
                        <input type="text" name="username" id="username" value="<?php echo $teacher['username']; ?>" placeholder="username" readonly><br>
                    </div>
                    <div class="form-control">
                        <input type="text" name="nama" id="nama" value="<?php echo $teacher['nama_pengajar']; ?>" placeholder="Enter your name"><br>
                    </div>
                    <div class="form-control">
                        <select name="jenis_kelamin">
                            <option value="" name="jenis_kelamin">Select Gender</option>
                            <option value="L" name="jenis_kelamin" <?php if ($teacher['jenis_kelamin'] == 'L') : ?>selected="selected" <?php endif; ?>>Man</option>
                            <option value="P" name="jenis_kelamin" <?php if ($teacher['jenis_kelamin'] == 'P') : ?>selected="selected" <?php endif; ?>>Woman</option>
                        </select><br>
                    </div>
                    <div class="form-control">
                        <input type="date" name="tanggal_lahir" id="birthdate" value="<?php echo $teacher['tanggal_lahir']; ?>" placeholder="Choose your birthdate">
                    </div>
                    <div class="form-control">
                        <input type="number" name="telepon" id="telepon" value="<?php echo $teacher['telepon']; ?>" placeholder="Enter your phone number"><br>
                    </div>
                </div>
            </div>
            <button class="submit" id="submit" value="submit">Submit</button>
        </form>
    </div>
</body>

</html>