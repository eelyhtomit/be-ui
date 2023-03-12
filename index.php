<!DOCTYPE html>
<html>

<head>
    <title>MOCKUP Bloody Elbow</title>
    <meta data-n-head="ssr" name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <div class="container">
        <?php include('header.php') ?>

        <main class="home-page">
            <div class="home-page__top">
                <!-- Featured Artcles -->
                <?php
                for ($i = 1; $i <= 6; $i++) { ?>
                    <div class="featured">
                        <a href="single.php" class="featured__image">
                            <img src="assets/img/feature-<?= $i ?>.jpg">
                        </a>
                        <div class="featured__content">
                            <div class="tags">
                                <span class="tag">
                                    UFC230
                                </span>
                                <span class="tag">
                                    Power Slap
                                </span>
                                <span class="tag">
                                    Jon Jones
                                </span>
                            </div>
                            <a href="single.php" class="featured__title">Lorem ipsum dolor sit amet consectetur adipiscing elit,
                                Integer
                                in
                                pulvinar odio.</a>
                            <div class="featured__content--author d-flex justify-between">
                                <span>Nate Wilcox</span>
                                <a href="single.php" class="featured__content--count d-flex">
                                    <i class="bi bi-chat-left-fill pr-1"></i>

                                    214
                                </a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <!-- Regular feed -->
            <div class="home-page__bottom">
                <div class="feed">
                    <?php
                    for ($i = 1; $i < 6; $i++) { ?>
                        <div class="feed--single">
                            <a href="single.php" class="feed__image">
                                <img src="assets/img/feed-<?= $i ?>.jpg">
                            </a>
                            <div class="feed__content">
                                <a href="single.php">
                                    <div class="feed__content--heading">
                                        Lorem ipsum dolor sit amet, conse ctetur adipi scing elit.
                                    </div>
                                </a>
                                <div class="feed__content--excerpt">Consectetur adipisicing elit. Nam ad animi, totam quas
                                    corporis obcaecati perspiciatis provident natus esse facere soluta tenetur delectus a
                                    unde veniam officia velit porro nobis.</div>
                                <div class="feed__content--author d-flex justify-between">
                                    <span>Nate Wilcox | 16 hours ago</span>
                                    <a href="single.php" class="feed__content--count d-flex">
                                        <i class="bi bi-chat-left-fill pr-1"></i>
                                        214
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <aside class="d-none d-md-block">
                    <div style="width: 100%; height: 800px; background: #999"></div>
                </aside>
            </div>


        </main>

        <?php include('footer.php') ?>

    </div>
</body>

</html>