<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><h1><img src="images/logo.png" alt=""/></h1></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <div class="top-search">
                <form class="navbar-form navbar-right">
                    <input type="text" class="form-control" placeholder="Search...">
                    <input type="submit" value=" ">
                </form>
            </div>

            <div class="header-top-right">
                <div class="file">
                    <a href="upload.php" class="<?php echo isset($upload_btn)? $upload_btn : '';?>">Upload</a>
                </div>
                <div class="file">
                    <a href="logout.php" class="<?php echo isset($logout_btn)? $logout_btn : '';?>">Logout</a>
                </div>

                <div class="signin">
                    <a href="register.php" class="<?php echo isset($visb_signup)? $visb_signup : '';?> play-icon popup-with-zoom-anim">Sign Up</a>

                    <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
                    <!--//pop-up-box -->
                    <div id="small-dialog2" class="mfp-hide">
                        <h3>Create Account</h3>
                        <div class="signup">
                            <form method="post">
                                <input type="text" class="name" placeholder="Full name" maxlength="50" required="required"
                                       name="name"/>
                                <input type="email" class="email" placeholder="Email" required="required"/>
                                <input type="text" class="email" placeholder="Mobile Number" maxlength="10"
                                       pattern="[1-9]{1}\d{9}" title="Enter a valid mobile number"/>

                                <div class="continue-button">
                                    <input type="submit" class="hvr-shutter-out-horizontal play-icon popup-with-zoom-anim" value="Register"/>
                                </div>
                            </form>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="small-dialog3" class="mfp-hide">
                        <h3>Create Account</h3>
                        <div class="signup">
                            <form>
                                <input type="text" class="email" placeholder="Email" required="required"
                                       pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?" title="Enter a valid email"/>
                                <input type="password" placeholder="Password" required="required" pattern=".{6,}"
                                       title="Minimum 6 characters required" autocomplete="off"/>
                                <input type="text" class="email" placeholder="Mobile Number" maxlength="10"
                                       pattern="[1-9]{1}\d{9}" title="Enter a valid mobile number"/>
                                <input type="submit" value="Sign Up"/>
                            </form>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="small-dialog7" class="mfp-hide">
                        <h3>Create Account</h3>
                        <div class="social-sits">
                            <div class="facebook-button">
                                <a href="#">Connect with Facebook</a>
                            </div>
                            <div class="chrome-button">
                                <a href="#">Connect with Google</a>
                            </div>
                            <div class="button-bottom">
                                <p>Already have an account? <a href="#small-dialog"
                                                               class="play-icon popup-with-zoom-anim">Login</a></p>
                            </div>
                        </div>
                        <div class="signup">
                            <form action="upload.php">
                                <input type="text" class="email" placeholder="Email" required="required"
                                       pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?" title="Enter a valid email"/>
                                <input type="password" placeholder="Password" required="required" pattern=".{6,}"
                                       title="Minimum 6 characters required" autocomplete="off"/>
                                <input type="submit" value="Sign In"/>
                            </form>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="small-dialog4" class="mfp-hide">
                        <h3>Feedback</h3>
                        <div class="feedback-grids">
                            <div class="feedback-grid">
                                <p>Suspendisse tristique magna ut urna pellentesque, ut egestas velit faucibus. Nullam
                                    mattis lectus ullamcorper dui dignissim, sit amet egestas orci ullamcorper.</p>
                            </div>
                            <div class="button-bottom">
                                <p><a href="#small-dialog" class="play-icon popup-with-zoom-anim">Sign in</a> to get
                                    started.</p>
                            </div>
                        </div>
                    </div>
                    <div id="small-dialog5" class="mfp-hide">
                        <h3>Help</h3>
                        <div class="help-grid">
                            <p>Suspendisse tristique magna ut urna pellentesque, ut egestas velit faucibus. Nullam
                                mattis lectus ullamcorper dui dignissim, sit amet egestas orci ullamcorper.</p>
                        </div>
                        <div class="help-grids">
                            <div class="help-button-bottom">
                                <p><a href="#small-dialog4" class="play-icon popup-with-zoom-anim">Feedback</a></p>
                            </div>
                            <div class="help-button-bottom">
                                <p><a href="#small-dialog6" class="play-icon popup-with-zoom-anim">Lorem ipsum dolor sit
                                        amet</a></p>
                            </div>
                            <div class="help-button-bottom">
                                <p><a href="#small-dialog6" class="play-icon popup-with-zoom-anim">Nunc vitae rutrum
                                        enim</a></p>
                            </div>
                            <div class="help-button-bottom">
                                <p><a href="#small-dialog6" class="play-icon popup-with-zoom-anim">Mauris at volutpat
                                        leo</a></p>
                            </div>
                            <div class="help-button-bottom">
                                <p><a href="#small-dialog6" class="play-icon popup-with-zoom-anim">Mauris vehicula
                                        rutrum velit</a></p>
                            </div>
                            <div class="help-button-bottom">
                                <p><a href="#small-dialog6" class="play-icon popup-with-zoom-anim">Aliquam eget ante non
                                        orci fac</a></p>
                            </div>
                        </div>
                    </div>

                    <div id="small-dialog6" class="mfp-hide">
                        <div class="video-information-text">
                            <h4>Video information & settings</h4>
                            <p>Suspendisse tristique magna ut urna pellentesque, ut egestas velit faucibus. Nullam
                                mattis lectus ullamcorper dui dignissim, sit amet egestas orci ullamcorper.</p>
                            <ol>
                                <li>Nunc vitae rutrum enim. Mauris at volutpat leo. Vivamus dapibus mi ut elit fermentum
                                    tincidunt.
                                </li>
                                <li>Nunc vitae rutrum enim. Mauris at volutpat leo. Vivamus dapibus mi ut elit fermentum
                                    tincidunt.
                                </li>
                                <li>Nunc vitae rutrum enim. Mauris at volutpat leo. Vivamus dapibus mi ut elit fermentum
                                    tincidunt.
                                </li>
                                <li>Nunc vitae rutrum enim. Mauris at volutpat leo. Vivamus dapibus mi ut elit fermentum
                                    tincidunt.
                                </li>
                                <li>Nunc vitae rutrum enim. Mauris at volutpat leo. Vivamus dapibus mi ut elit fermentum
                                    tincidunt.
                                </li>
                            </ol>
                        </div>
                    </div>

                </div>

                <div class="signin">
                    <a href="signin.php" class="<?php echo isset($visb_signin)? $visb_signin : '';?> play-icon popup-with-zoom-anim">Sign In</a>
                    <div id="small-dialog" class="mfp-hide">
                        <h3>Login</h3>
                        <div class="social-sits">
                            <div class="facebook-button">
                                <a href="#">Connect with Facebook</a>
                            </div>
                            <div class="chrome-button">
                                <a href="#">Connect with Google</a>
                            </div>
                            <div class="button-bottom">
                                <p>New account? <a href="#small-dialog2"
                                                   class="play-icon popup-with-zoom-anim">Signup</a></p>
                            </div>
                        </div>
                        <div class="signup">
                            <form>
                                <input type="text" class="email" placeholder="Enter email / mobile" required="required"
                                       pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?"/>
                                <input type="password" placeholder="Password" required="required" pattern=".{6,}"
                                       title="Minimum 6 characters required" autocomplete="off"/>
                                <input type="submit" value="LOGIN"/>
                            </form>
                            <div class="forgot">
                                <a href="#">Forgot password ?</a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

        </div>
        <div class="clearfix"></div>
    </div>
</nav>
