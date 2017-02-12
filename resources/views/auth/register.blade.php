<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <title>Reactor - Bootstrap Admin Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
        <!-- build:css({.tmp,app}) styles/app.min.css -->
        <link rel="stylesheet" href="styles/webfont.css">
        <link rel="stylesheet" href="styles/climacons-font.css">
        <link rel="stylesheet" href="vendor/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="styles/font-awesome.css">
        <link rel="stylesheet" href="styles/card.css">
        <link rel="stylesheet" href="styles/sli.css">
        <link rel="stylesheet" href="styles/animate.css">
        <link rel="stylesheet" href="styles/app.css">
        <link rel="stylesheet" href="styles/app.skins.css">
        <!-- endbuild -->
    </head>
    <body class="page-loading">
        <!-- page loading spinner -->
        <div class="pageload">
            <div class="pageload-inner">
                <div class="sk-rotating-plane"></div>
            </div>
        </div>
        <!-- /page loading spinner -->
        <div class="app signup usersession">
            <div class="session-wrapper">
                <div class="page-height-o row-equal align-middle">
                    <div class="column">
                        <div class="card bg-white no-border">
                            <div class="card-block">
                                <!-- FORM -->
                                <form role="form" class="form-layout" method="POST" action="{{ route('register') }}">
                                    {{ csrf_field() }}

                                    <div class="text-center m-b">
                                        <h4 class="text-uppercase">Register Now</h4>
                                    </div>
                                    
                                    <div class="form-inputs">

                                        <div class="name">
                                            <label class="text-uppercase">Name</label>
                                            <input type="text" class="form-control input-lg" placeholder="Name" name="name" value="{{ old('name') }}" required autofocus>
                                        </div>

                                        <label class="text-uppercase">Email address</label>
                                        <input type="email" class="form-control input-lg" placeholder="Email address" name="email" value="{{ old('email') }}" required>
                                        
                                        <label class="text-uppercase">Create a password</label>
                                        <input type="password" class="form-control input-lg" placeholder="Password" name="password" required>

                                        <label class="text-uppercase">Confirm your password</label>
                                        <input type="password" class="form-control input-lg" placeholder="Confirm password" name="password_confirmation" required>
                                    </div>
                                    <button class="btn btn-primary btn-block btn-lg m-b" type="submit">Create Account</button>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- bottom footer -->
        <footer class="session-footer">
            <nav class="footer-right">
                <ul class="nav">
                    <li>
                        <a href="javascript:;">Feedback</a>
                    </li>
                    <li>
                        <a href="javascript:;" class="scroll-up">
                            <i class="fa fa-angle-up"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <nav class="footer-left hidden-xs">
                <ul class="nav">
                    <li>
                        <a href="javascript:;"><span>About</span> Reactor</a>
                    </li>
                    <li>
                        <a href="javascript:;">Privacy</a>
                    </li>
                    <li>
                        <a href="javascript:;">Terms</a>
                    </li>
                    <li>
                        <a href="javascript:;">Help</a>
                    </li>
                </ul>
            </nav>
        </footer>
        <!-- /bottom footer -->
    </div>
    <!-- build:js({.tmp,app}) scripts/app.min.js -->
    <script src="scripts/helpers/modernizr.js"></script>
    <script src="vendor/jquery/dist/jquery.js"></script>
    <script src="vendor/bootstrap/dist/js/bootstrap.js"></script>
    <script src="vendor/fastclick/lib/fastclick.js"></script>
    <script src="vendor/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="scripts/helpers/smartresize.js"></script>
    <script src="scripts/constants.js"></script>
    <script src="scripts/main.js"></script>
    <!-- endbuild -->
</body>
</html>