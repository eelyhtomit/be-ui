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

        <main class="single py-5">
            <div class="d-flex justify-between">
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

                <a href="#" class="d-flex color-primary font-weight-bold">
                    <i class="bi bi-chat-left-fill pr-1"></i>
                    214
                </a>
            </div>

            <div>
                <h3>Lorem ipsum dolor sit amet integer in pulvinar odio, ut venenatis eros. Aenean ac leo ante.</h3>
                </a>
                <p>Consectetur adipisicing elit. Nam ad animi, totam quas
                    corporis obcaecati perspiciatis provident natus esse facere soluta tenetur delectus a
                    unde veniam officia velit porro nobis.</p>
                <div class="d-flex justify-between mb-5">
                    <span>By:
                        <a href="" class="color-primary">Nathan Wilcox</a>
                        <a href=""><i class="bi-twitter color-twitter"></i></a>
                        | Apr 1, 2023</span>

                </div>
            </div>

            <div class="d-flex column-gap-4">
                <div>
                    <article>
                        <img src="assets/img/long-1.jpg" class="w-100" alt="">

                        <!-- share SNS placeholder -->
                        <img src="assets/img/share.jpg" width="250" class="py-3">

                        <p>
                            Strawweight Tabatha Ricci scored her first finish in the Octagon just last Saturday. Paired
                            up against veteran Jessica Penne, ‘Baby Shark’ locked in a tight armbar in the second round
                            of their fight in the preliminary portion of UFC 285. With the win, the Brazilian hopes to
                            enter the division’s rankings.
                        </p>

                        <p>
                            In an interview with this media, abatha revealed that her intention was to become a top 15
                            fighter last year, but moved the goal to 2023. Furthermore, Ricci sent a message to the rest
                            of the division, claiming she is ready to take on and finish anybody the UFC pairs her up
                            against.
                        </p>

                        <div class="action">
                            <a href="#" class="text-d">
                                <h4 class="action__heading">WATCH LIVE! UFC 285 PPV: JONES VS GANE & SHEVCHENKO vs. GRASSO
                                </h4>
                            </a>

                            <p>
                                <strong>Plus, Viviane ARAUJO vs. Amanda RIBAS</strong>, Derek BRUNSON vs Dricus DU
                                PLESSIS, Geoff NEAL vs Shavkat RAKHMONOV, & MORE! | <strong>Stream all the fights
                                    broadcast</strong> <a href="#">LIVE RIGHT HERE</a> — don’t miss a single second
                                of face-punching action! | Stay tuned to <a href="#">BloodyElbow.com</a> for more
                                details!
                            </p>

                            <a href="#" class="btn btn-primary">Stream UFC Now!</a>
                        </div>

                        <p>
                            “I hope I can join the rankings after this win, but I can’t control that. It was one of my
                            goals for last year, but I couldn’t achieve it. I want let everyone know that the Baby Shark
                            era has begun. I can’t wait to return and be ranked soon. I don’t have anyone in mind yet,
                            but I believe in my team and in the UFC. Whatever they think is best for me, I will trust
                            it. I’m ready to fight at any moment. That’s my way of life. I love what I do and I’m just
                            waiting. You can expect more from the Baby Shark. Smelling blood, dragging everyone to the
                            ocean and finishing them.”
                        </p>

                        <!-- share SNS placeholder -->
                        <img src="assets/img/share.jpg" width="250" class="py-3">

                        <span class="tag">
                            About the author
                        </span>

                        <div class="author column-gap-3 my-5">
                            <div>
                                <img src="assets/img/author.jpg" width="150" class="author__img">
                            </div>
                            <div>
                                <span class="d-flex justify-center justify-md-initial align-center column-gap-2">
                                    <h6 class="mb-0">Nathan Wilcox</h6>
                                    <a href=""><i class="bi-twitter color-twitter"></i></a>
                                </span>
                                <small class="d-block mb-3">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in pulvinar odio,
                                    ut venenatis eros. Aenean ac leo ante. Praesent at ipsum varius, ultrices mi in,
                                    venenatis lectus.
                                </small>
                                <div>
                                    <a href="#" class="btn btn-secondary">More from the author</a>
                                </div>

                            </div>
                        </div>
                    </article>

                    <!-- Regular feed -->
                    <span class="tag">
                        Related Posts
                    </span>

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