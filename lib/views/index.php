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
        <link href="https://fonts.googleapis.com/css?family=Catamaran" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/bulma-modal-fx/dist/css/modal-fx.min.css" />
    </head>
    <body>
        <section class="hero is-<?php echo $page['PageTheme'];?> is-medium is-bold">
            <div class="hero-head">
                <nav class="navbar">
                    <div class="container">
                        <div class="navbar-brand">
                            <a class="navbar-item" href="../">
                                <h1 style="font-size:29px;font-family: 'Catamaran', sans-serif;font-weight:900px;"><strong><?php echo $page['PageTitle']; ?>&nbsp;<small><?php echo $page['PageDomain']; ?></small></strong></h1>
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
                                        <li><a href="/community">Community</a></li>
                                        <li><a href="">Members</a></li>
                                        <li><a href="">Team</a></li>
                                        <li><a href="">Help</a></li>
                                    </ul>
                                    <?php if(Account::isLoggedIn()) { ?>
                                      <span class="navbar-item">
                                        <a class="button is-white is-outlined" href="profile/?id=<?php echo $_SESSION['AccountID'];?>">
                                            <span title="View your profile"><?php echo $Account['Username'];?></span>
                                        </a>&nbsp;
                                        <a class="button is-white is-outlined" href="/?page=logout">
                                            <span title="Log out">
                                            Log out</span>
                                        </a>
                                    </span>
                                    <?php } else {?>
                                    <span class="navbar-item">
                                        <a class="button is-white is-outlined" href="login/">
                                            <span title="Log into your account">Log in</span>
                                        </a>
                                    </span>
                                  <?php }?>
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
                    <br />
                    <?php if(Account::isLoggedIn()) { ?>
                    <a href="/community" class="button is-large is-warning is-rounded is-active">View our Community</a>
                    <?php } else { ?>
                    <a href="/signup" class="button is-large is-<?php echo $page['PageTheme'];?> is-rounded is-active">Create Your Account</a><br />
                    <small><?php echo $page['PageTitle']; ?> is free and always will be.</small>
                    <?php } ?>
                </div>
            </div>
        </section>
        <div class="box cta">
            <p class="has-text-centered" style="font-size:19px;">
                <span class="tag is-<?php echo $page['PageTheme'];?>">NEWS</span>&nbsp;&nbsp; We are currently under development
            </p>
        </div>
        <footer class="footer">
            <div class="container">
            <h1 class="title">Got any questions?</h1>
            <h2 class="subtitle">We would be happy to answer them! Just <a href="/contact">send us a ticket</a> or <a href="/faq">check out our FAQ</a>!</h2> 
          </div>
          <br />
          <br />
            <div class="container">
                <div class="columns">
                    <div class="column is-3 is-offset-2">
                        <h2><strong>Account</strong></h2>
                        <ul>
                            <li><a href="/login">Log in</a></li>
                            <li><a href="/signup">Create a new account</a></li>
                            <li><a href="/settings">Manage your settings</a></li>
                            <li><a href="#">View your profile</a></li>
                        </ul>
                    </div>
                    <div class="column is-3">
                        <h2><strong>Community</strong></h2>
                        <ul>
                            <li><a href="/community">View topics and posts</a></li>
                            <li><a href="/announcements">Go to our announcements</a></li>
                            <li><a href="/rules">Read our community rules</a></li>
                            <li><a href="/search">Search for a member</a></li>
                        </ul>
                    </div>
                    <div class="column is-4">
                        <h2><strong>Others</strong></h2>
                        <ul>
                            <li><a href="/terms">Terms & Privacy</a></li>
                            <li><a href="/contact">Contact our team</a></li>
                            <li><a href="/about">More about <?php echo $page['PageTitle']; ?></a></li>
                            <li><a href="/help">Help & Support</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <script src="../js/bulma.js"></script>
        </footer>
    </body>
</html>