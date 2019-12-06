<header class="header-bar stickyy d-flex d-lg-block align-items-center" id="mySidebar" data-aos="fade-left">






    <nav id="sidebar">

        <ul class="js-clone-nav list-unstyled components" id="main-navs">

            <li class="<?php if($page=='home'){echo 'active';}?>">
                <a href="index.php">Home</a>
            </li>
            <li class="<?php if($page=='winners'){echo 'active';}?>">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">Winners</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li class="<?php if($page=='winners_2019'){echo 'active';}?>">
                        <a href="winners_2019.php">2019 Winners</a>
                    </li>
                    <li class="<?php if($page=='winners_2018'){echo 'active';}?>">
                        <a href="winners_2018.php">2018 Winners</a>
                    </li>
                    <li class="<?php if($page=='winners_201'){echo 'active';}?>">
                        <a href="winners_2017.php">2017 Winners</a>
                    </li>
                </ul>
            </li>

            <li class="<?php if($page=='gallery'){echo 'active';}?>">
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Gallery<span class="caret"></span></a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="gallery.php?year=2019">Year 2019 </a>
                    </li>
                    <li>
                        <a href="gallery.php">Year 2018 </a>
                    </li>
                    <li>
                        <a href="gallery.php">Year 2017 </a>
                    </li>
                </ul>
            </li>
            <li class="<?php if($page=='events'){echo 'active';}?>">
                <a href="events.php">Events</a>
            </li>
            <li class="<?php if($page=='posts'){echo 'active';}?>">
                <a href="posts.php">Posts</a>
            </li>
            <li class="<?php if($page=='about'){echo 'active';}?>">
                <a href="about.php">About</a>
            </li>
        </ul>
        <ul class="social js-clone-nav" >
            <li><a href="https://www.facebook.com/Siththam-1108151285981641/"><span class="icon-facebook"></span></a></li>
            <li><a href="https://www.facebook.com/Siththam-1108151285981641/"><span class="icon-twitter"></span></a></li>
            <li><a href="https://www.facebook.com/Siththam-1108151285981641/"><span class="icon-instagram"></span></a></li>
        </ul>

    </nav>
</header>