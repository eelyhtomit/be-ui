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
            <div class="featured long dark">
                <?php
                $i = 4;
                include('feed.php') ?>
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
                                <div class="d-flex justify-center justify-md-initial align-center column-gap-3">
                                    <div class="author__heading">Nathan Wilcox</div>
                                    <a href=""><i class="bi-twitter color-twitter"></i></a>
                                </div>
                                <small class="d-block mb-3">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in pulvinar odio,
                                    ut venenatis eros. Aenean ac leo ante. Praesent at ipsum varius, ultrices mi in,
                                    venenatis lectus.
                                </small>
                                <a href="#" class="btn btn-secondary">More from the author</a>

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