<!--============================================== menu-->
<div class="col-md-2 sidebar">
    <div class="top-navigation">
        <div class="t-menu">MENU</div>
        <div class="t-img">
            <img src="images/lines.png" alt=""/>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="drop-navigation drop-navigation">
        <ul class="nav nav-sidebar">
            <li class="<?php $tag = 'home'; echo $page == 'index' ? 'active' : ''; ?>"><a href="index.php" class="home-icon"><span
                            class="glyphicon glyphicon-home"
                            aria-hidden="true"></span>Home</a></li>
            <li class="<?php echo $page == 'music' ? 'active' : ''; ?>"><a href="music.php" class="song-icon"><span
                            class="glyphicon glyphicon-music"
                            aria-hidden="true"></span>Music</a></li>
            <li class="<?php echo $page == 'gossip' ? 'active' : ''; ?>"><a href="music.php" class="song-icon"><span
                            class="glyphicon glyphicon-bullhorn"
                            aria-hidden="true"></span>Gossip</a></li>
            <li class="<?php echo $page == 'sports' ? 'active' : ''; ?>"><a href="music.php" class="song-icon"><span
                            class="glyphicon glyphicon-time"
                            aria-hidden="true"></span>Sports</a></li>
            <li class="<?php $tag = 'fashion'; echo $page == 'fashion' ? 'active' : ''; ?>"><a href="music.php" class="song-icon"><span
                            class="glyphicon glyphicon-user"
                            aria-hidden="true"></span>Fashion</a></li>
            <li class="<?php echo $page == 'tech' ? 'active' : ''; ?>"><a href="music.php" class="song-icon"><span
                            class="glyphicon glyphicon-globe"
                            aria-hidden="true"></span>Tech</a></li>
            <li class="<?php echo $page == 'travel' ? 'active' : ''; ?>"><a href="music.php" class="song-icon"><span
                            class="glyphicon glyphicon-road"
                            aria-hidden="true"></span>Travel</a></li>
            <li class="<?php echo $page == 'culture' ? 'active' : ''; ?>"><a href="music.php" class="song-icon"><span
                            class="glyphicon glyphicon-heart-empty"
                            aria-hidden="true"></span>Culture</a></li>

<!--            <li class="--><?php //echo $page == 'about' ? 'active' : ''; ?><!--"><a href="about.php" class=""><span-->
<!--                            class="glyphicon glyphicon-home glyphicon-list"-->
<!--                            aria-hidden="true"></span>About Us</a></li>-->

            <li class="<?php echo $page == 'contact' ? 'active' : ''; ?>"><a href="contact.php" class="sub-icon"><span
                            class="glyphicon glyphicon-home glyphicon-comment"
                            aria-hidden="true"></span>Contact Us</a></li>

            <!--            <li class="-->
            <?php //echo $page=='faqs'?'active':''; ?><!--"><a href="faqs.php" class="sub-icon"><span class="glyphicon glyphicon-home glyphicon-hourglass"-->
            <!--                                                          aria-hidden="true"></span>FAQs</a></li>-->
        </ul>
        <!-- script-for-menu -->
        <script>
            $(".top-navigation").click(function () {
                $(".drop-navigation").slideToggle(300, function () {
                    // Animation complete.
                });
            });
        </script>
        <div class="side-bottom">
            <div class="side-bottom-icons">
                <ul class="nav2">
                    <li><a href="#" class="facebook"> </a></li>
                    <li><a href="#" class="facebook twitter"> </a></li>
                </ul>
            </div>
            <div class="copyright">
                <p>Copyright © 2019 UgaBuzz. All Rights Reserved | Powered by <a
                            href="http://autosoft-ug.com">Autosoft</a></p>
            </div>
        </div>
    </div>
</div>
