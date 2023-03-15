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

        <main>
            <div class="featured long">
                <a href="single.php" class="featured__image long">
                    <img src="assets/img/long-1.jpg">
                </a>
                <div class="featured__content long w-md-70">
                    <div class="tags justify-center">
                        <span class="tag">
                            UFC Editorial
                        </span>
                    </div>
                    <h3 class="featured__title long">Feature: The rebellious roots of Conor McGregor’s walkout song</h3>
                    <p>‘The Foggy Dew’ is more than just a song for the people of Ireland. It’s a window into Éire’s history, identity, and perhaps the heart of one of her most famous fighters.</p>
                    <div class="featured__content--author d-flex justify-center">
                        <span>By: Nate Wilcox&nbsp;&nbsp;|&nbsp;&nbsp;Apr 1, 2023&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                        <a href="single.php" class="featured__content--count d-flex">
                            <i class="bi bi-chat-left-fill pr-1"></i>

                            214
                        </a>
                    </div>
                </div>
            </div>

            <div class="single">
                <div>
                    <article>
                        <!-- share SNS -->
                        <?php
                        $isTop = true;
                        include('share-icons.php');
                        ?>

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
                            <p>
                                <em>
                                    In order to prevent the further slaughter of Dublin citizens, and in the hope of saving the lives of our followers now surrounded and hopelessly outnumbered, the members of the Provisional Government present at headquarters have agreed to an unconditional surrender, and the commandants of the various districts in the City and County will order their commands to lay down arms. - Patrick Pearse, April 29th, 1916
                                </em>
                            </p>
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

                        <hr class="mb-5">

                        <!-- share SNS -->
                        <?php
                        $isTop = false;
                        include('share-icons.php');
                        ?>

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
                        for ($i = 1; $i < 6; $i++) {
                            include('feed.php');
                        }
                        ?>

                        <div class="text-center py-5">
                            <a href="#" class="btn btn-secondary">Read more</a>
                        </div>
                    </div>
                </div>
            </div>


        </main>

        <?php include('footer.php') ?>

    </div>
    <script src="scripts.js"></script>
</body>

<style>
    .single {
        max-width: 700px;
        margin: auto;
    }
</style>

</html>