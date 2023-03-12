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
        <main>
            <div class="archive">
                <div class="archive__author">
                    <?php
                    $author = false;
                    if ($author) { ?>
                        <div class="author column-gap-8 my-5">
                            <div>
                                <img src="assets/img/author.jpg" width="150" class="author__img">
                            </div>
                            <div class="w-100">
                                <span class="d-flex justify-center justify-md-initial align-center column-gap-2">
                                    <h4 class="mb-0">Nathan Wilcox</h6>
                                    <a href=""><i class="bi-twitter color-twitter"></i></a>
                                    <a href=""><i class="bi-envelope-fill color-white"></i></a>
                                </span>
                                <p class="text-center text-md-left">Founding Editor</p>
                                <small class="d-block mb-3">
                                Nate Wilcox is the founding editor of BloodyElbow.com. As such he has hired every editor and writer to work for the site. Wilcox’s writing for BE is known for its emphasis on MMA history, the evolution of fighting techniques and strong opinions. Before founding BE, Wilcox was a political operative working for such figures as John Kerry and Mark Warner and an early political blogger. He is the co-author of Netroots Rising, a history of the political blogosphere.
                                </small>
                            </div>
                        </div>
                <?php } else { ?>
                    <div class="archive__content">
                        <h3>Archive/Tag/Author/Category</h3>
                    </div>
                <?php } ?>
                </div>

            </div>
            <div class="d-flex column-gap-2">

                <!-- Regular feed -->
                <div class="feed">
                    <?php
                    for ($i = 1; $i < 6; $i++) { ?>
                        <div class="feed--single">
                            <a href="#" class="feed__image">
                                <img src="assets/img/feed-<?= $i ?>.jpg">
                            </a>
                            <div class="feed__content">
                                <a href="">
                                    <div class="feed__content--heading">
                                        Lorem ipsum dolor sit amet, conse ctetur adipi scing elit.
                                    </div>
                                </a>
                                <div class="feed__content--excerpt">Consectetur adipisicing elit. Nam ad animi, totam
                                    quas
                                    corporis obcaecati perspiciatis provident natus esse facere soluta tenetur delectus
                                    a
                                    unde veniam officia velit porro nobis.</div>
                                <div class="feed__content--author d-flex justify-between">
                                    <span>Nate Wilcox | 16 hours ago</span>
                                    <a href="#" class="feed__content--count d-flex">
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