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
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Catamaran" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/bulma-modal-fx/dist/css/modal-fx.min.css" />
    </head>
    <body>
        <section class="hero is-<?php echo $page['PageTheme'];?> is-small is-bold">
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
                                        <li><a href="/">Home</a></li>
                                        <li class="is-active"><a href="">Community</a></li>
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
                    <strong>Community</strong>
                    </h1>
                </div>
            </div>
        </section>
        <div class="box cta">
            <p class="has-text-centered" style="font-size:19px;">
                <span class="tag is-danger">IMPORTANT</span>&nbsp;&nbsp; Since we are under development, some bugs could occure. Please <a href="">report them</a>, thank you!</p>
            </p>
        </div>
        <div class="container">
            <h1 style="font-size:35px;">Forums</h1>
            <?php foreach($categories as $category) {?>
            <div class="topic">
                <div class="columns">
                    <div class="column">
                        <div class="box">
                            <article class="media">
                                <div class="media-left">
                                    <figure class="image">
                                        <i class="fas fa-pen-square" style="font-size:45px;"></i>
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <div class="content" style="margin-left:2%;">
                                        <p>
                                            <strong><?php echo $category['CategoryTitle'];?></strong>
                                        <br>
                                        <?php echo $category['CategoryDescription'];?>
                                        </p>
                                    </div>
                                </div>
                                <div class="box" style="margin-left:5%;width:370px;">
                                    <div class="media-content">
                                      <div class="content">
                                          <span class="tag is-<?php echo $page['PageTheme'];?> is-medium">0 Topics</span>
                                          <span class="tag is-<?php echo $page['PageTheme'];?> is-medium">0 Users</span>
                                          <span class="tag is-<?php echo $page['PageTheme'];?> is-medium">0 Moderators</span>
                                      </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                <br />
                </div>
            </div> 
            <?php } ?>  
        </div>    
    </div>
</div>
<br />
<br />  
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
                            <li><a href="/about">More about British Side</a></li>
                            <li><a href="/help">Help & Support</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <script src="../js/bulma.js"></script>
        </footer>
    </body>
</html>