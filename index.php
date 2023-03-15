<!DOCTYPE html>
<html>

<head>
    <title>MOCKUP Bloody Elbow</title>
    <meta data-n-head="ssr" name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <div class="container">
        <?php include('header.php') ?>

        <main class="home-page">
            <div class="home-page__top featured dark">
                <!-- Featured Artcles -->
                <?php
                $feature = true;
                for ($i = 1; $i <= 6; $i++) { 
                    include('feed.php');
                 } 
                 ?>
            </div>

            <!-- Regular feed -->
            <div class="home-page__bottom">
                <div class="feed">
                    <?php
                    for ($i = 1; $i < 6; $i++) {
                        include('feed.php');
                    }
                    ?>

                    <div class="text-center py-5">
                        <a href="#" class="btn btn-secondary">Read more</a>
                    </div>
                </div>

                <?php include('aside.php'); ?>

            </div>


        </main>

        <?php include('footer.php') ?>

    </div>
    <script src="scripts.js"></script>
</body>


</html>