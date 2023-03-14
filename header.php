<?php
$banner = true;
if ($banner) {
    include('banner.php');
}
?>

<header class="d-flex justify-between align-center">
    <span class="d-none d-md-block" style="flex: 1"></span>
    <a href="/">
        <img src="assets/img/logo.png" class="img-logo" alt="Bloody Elbow Logo" style="flex: 1">
    </a>
    <div class="d-flex align-center justify-end" style="flex: 1">
        <a href="#" class="btn btn-primary">Subscribe</a>
        <div class="menu-btn d-md-none">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</header>

<nav class="d-none d-md-flex justify-center column-gap-10">
    <ul class="d-flex justify-between column-gap-8">
        <li>
            <a href="">UFC News</a>
        </li>
        <li>
            <a href="">Features</a>
        </li>
        <li>
            <a href="">Boxing</a>
        </li>
        <li>
            <a href="">Grappling</a>
        </li>
        <li>
            <a href="">Search</a>
        </li>
    </ul>
    <ul class="d-flex justify-between column-gap-5">
        <li>
            <a href=""><i class="bi-twitter"></i></a>
        </li>
        <li>
            <a href=""><i class="bi-facebook"></i></a>
        </li>
        <li>
            <a href=""><i class="bi-instagram"></i></a>
        </li>
    </ul>
</nav>

<!-- <?php include('search.php'); ?> -->