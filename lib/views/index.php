<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $page['PageTitle']; ?></title>
        <link rel="shortcut icon" href="../images/fav_icon.png" type="image/x-icon">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <!-- Bulma Version 0.7.2-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css" />
        <link rel="stylesheet" type="text/css" href="../css/hero.css">
        <link href="https://fonts.googleapis.com/css?family=Catamaran" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/bulma-modal-fx/dist/css/modal-fx.min.css" />
    </head>
    <body>
        <section class="hero is-primary is-medium is-bold">
            <div class="hero-head">
                <nav class="navbar">
                    <div class="container">
                        <div class="navbar-brand">
                            <a class="navbar-item" href="../">
                                <h1 style="font-size:29px;font-family: 'Catamaran', sans-serif;font-weight:900px;"><strong><?php echo $page['PageTitle']; ?></strong></h1>
                            </a>
                            <span class="navbar-burger burger" data-target="navbarMenu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </div>
                        <div id="navbarMenu" class="navbar-menu">
                            <div class="navbar-end">
                                <div class="tabs is-right">
                                    <ul>
                                        <li class="is-active"><a>Home</a></li>
                                        <li><a href="">Community</a></li>
                                        <li><a href="">Members</a></li>
                                        <li><a href="">Team</a></li>
                                        <li><a href="">Help</a></li>
                                    </ul>
                                    <span class="navbar-item">
                                        <a class="button is-white is-outlined" href="signup/">
                                            <span title="Create a new account for free">Sign Up</span>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="hero-body">
                <div class="container has-text-centered">
                    <h1 class="title">
                    <strong>Welcome on <?php echo $page['PageTitle']; ?></strong>
                    </h1>
                    <h2 class="subtitle">
                    <?php echo $page['PageDescription']; ?>
                    </h2>
                </div>
            </div>
        </section>
        <div class="box cta">
            <p class="has-text-centered" style="font-size:19px;">
                <span class="tag is-info">NEWS</span>&nbsp;&nbsp; We are currently under development
            </p>
        </div>
        
        <footer class="footer">
            <div class="container">
                <div class="columns">
                    <div class="column is-3 is-offset-2">
                        <h2><strong>Category</strong></h2>
                        <ul>
                            <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                            <li><a href="#">Vestibulum errato isse</a></li>
                            <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                            <li><a href="#">Aisia caisia</a></li>
                            <li><a href="#">Murphy's law</a></li>
                            <li><a href="#">Flimsy Lavenrock</a></li>
                            <li><a href="#">Maven Mousie Lavender</a></li>
                        </ul>
                    </div>
                    <div class="column is-3">
                        <h2><strong>Category</strong></h2>
                        <ul>
                            <li><a href="#">Labore et dolore magna aliqua</a></li>
                            <li><a href="#">Kanban airis sum eschelor</a></li>
                            <li><a href="#">Modular modern free</a></li>
                            <li><a href="#">The king of clubs</a></li>
                            <li><a href="#">The Discovery Dissipation</a></li>
                            <li><a href="#">Course Correction</a></li>
                            <li><a href="#">Better Angels</a></li>
                        </ul>
                    </div>
                    <div class="column is-4">
                        <h2><strong>Category</strong></h2>
                        <ul>
                            <li><a href="#">Objects in space</a></li>
                            <li><a href="#">Playing cards with coyote</a></li>
                            <li><a href="#">Goodbye Yellow Brick Road</a></li>
                            <li><a href="#">The Garden of Forking Paths</a></li>
                            <li><a href="#">Future Shock</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <script src="../js/bulma.js"></script>
        </footer>
    </body>
</html>