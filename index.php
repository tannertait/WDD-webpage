<!DOCTYPE html>
<html lang='en-us'>

<head>
    <meta charset='UTF-8'>
    <title>Home Page | tannertait.net</title>
    <meta http-equiv="X-UA-Compatible" content='ie=edge'>
    <meta name="viewport" content='width=device-width, initial scale=1'>
    <link rel="stylesheet" href="finalproject/fdefender.css" type="text/css" media="screen">
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <script src="finalproject/javascript/jquery.sticky.js"></script>

    <script>
        $(document).ready(function () {
            $("header").sticky({
                topSpacing: 10

            });
        });
    </script>


</head>

<body>
    <header>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/finalproject/modules/headerf.php');  ?>
    </header>
    <!--front porch-->
    <nav>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/finalproject/modules/navigationf.php');  ?>
    </nav>
    <!--entry way into house, contains links to where we want to go-->
    <main>

        <h3>Movie Reviews</h3>
        <h6>The beef of our site! Wanna know if the new movie is worth the ticket fair? Interested in the layman's critique of movie making? Click here, wanderer.</h6>
        <p>Check out the reviews for our highest rated movies! </p>
        <div id="imone">

            <p>
                <a href="finalproject/moviereviews.php">The Lord of the Rings: The Return of the King</a></p>

            <figure class="kkjj">
                <picture>

                    <source srcset="/finalproject/pics/rotk.jpg" media="(min-width: 720px)" />
                    <source srcset="/finalproject/pics/rotkmed.jpg" media="(min-width: 480px)" />

                    <source srcset="/finalproject/pics/rotkmed.jpg" />

                    <!-- fallback -->
                    <img src="/finalproject/pics/rotkmed.jpg" alt="The Lord of the Rings" />

                </picture>

            </figure>
        </div>

        <div id="imtwo">
            <p><a href="finalproject/moviereviews.php">A River Runs Through It</a></p>
            <figure class="kkjj">
                <picture>

                    <source srcset="/finalproject/pics/rivrun.jpg" media="(min-width: 720px)" />
                    <source srcset="/finalproject/pics/rivrunmed.jpg" media="(min-width: 480px)" />

                    <source srcset="/finalproject/pics/rivrunmed.jpg" />

                    <!-- fallback -->
                    <img src="/finalproject/pics/rivrunsm.jpg" alt="A River Runs Through It" />

                </picture>

            </figure>
        </div>
        <div id="imthree">
            <p><a href="finalproject/moviereviews.php">Signs</a></p>
            <figure class="kkjj">
                <picture>

                    <source srcset="/finalproject/pics/signs.jpg" media="(min-width: 720px)" />
                    <source srcset="/finalproject/pics/signsmed.jpg" media="(min-width: 480px)" />

                    <source srcset="/finalproject/pics/signsmed.jpg" />

                    <!-- fallback -->
                    <img src="/finalproject/pics/signsmed.jpg" alt="Signs" />

                </picture>

            </figure>
        </div>

        <h3>Popular Discussion Posts</h3>
        <h6>What is the consensus on our reviews? We offer full access to post your own ideas and side with fellow users!</h6>
        <h3>New Trailers</h3>
        <h6>Hot or not? Has it revealed too much or got you salivating at the jowls? Vote now!</h6>
        <h3>Learn About the Team of FilmDefender!</h3>
        <h6>We're regular old joe's, the original movie-goers. Discover our heritage and love for the lost art of film-making.</h6>


    </main>
    <footer>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/finalproject/modules/footerf.php');  ?>

    </footer>
</body>

</html>
