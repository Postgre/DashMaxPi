<header class="main-header">
    <!-- Logo -->
    <a href="/" class="logo">
        <span class="logo-mini"><b>D</b>M<b>Pi</b></span>
        <span class="logo-lg"><b>Dash</b>MAX<b>Pi</b></span>
    </a>
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <?php
                    if($logged_in != true){
                        echo "<li><a href='login.php'><i class='fa fa-sign-in'></i> Sign In</a></li>";
                    } else {
                        echo "<li><a href='logout.php'><i class='fa fa-sign-out'></i> Logout</a></li>";
                    }
                ?>
            </ul>
        </div>
    </nav>
</header>
                                                