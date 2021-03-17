<div id="Sidebar" class="sidebar">
    <div class="top-nav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">☰</a>
        <span class="haiyu-sidebar">HAiYU</span>
    </div>
    <span>
        <?php if (session('foto') != null) { ?>
            <img src="/uploads/<?php echo session('foto') ?>" alt="" class="profilePhoto">
        <?php } else { ?>
            <img src="/uploads/avatar.png" alt="" class="default">
        <?php } ?>
    </span>
    <div class="user-info">
        <p id="welcome">Welcome! <br> <?= session('username') ?></p>
    </div>
    <div class="navUser">
        <div class="home">
            <img src="/images/homepage.png" alt="">
            <a href="/">Home</a>
        </div>
        <?php if (session('log')) : ?>
        <div class="subject">
            <img src="/images/language.png" alt="">
            <a href="/user/subject">Subject</a>
        </div>
        <div class="profile">
            <img src="/images/user.png" alt="">
            <a href="/user/edit/<?= session('username') ?>">Profile</a>
        </div>
        <?php endif; ?>
        <div class="aboutUser">
            <img src="/images/about.png" alt="" style="width: 32px;height: 32px">
            <a href="/about">About</a>
        </div>
    </div>

    <div class="bottom-nav">
        <!-- <a href="#">Settings</a> -->
        <?php if (session('log')) : ?>
        <a href="/user/logout">Log out</a>
        <?php else : ?>
        <a href="/signin">Sign in</a>
        <a href="/signup">Sign up</a>
        <?php endif; ?>
    </div>
</div>