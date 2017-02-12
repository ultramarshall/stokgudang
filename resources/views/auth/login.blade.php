<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <title>{{ config('app.name', 'Laravel') }}</title>
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
        <div class="app signin usersession">
            <div class="session-wrapper">
                <div class="page-height-o row-equal align-middle">
                    <div class="column">
                        <div class="card bg-white no-border">
                            <div class="card-block">
                                <form role="form" class="form-layout" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                    <div class="text-center m-b">
                                        <img src="images\smi.png" style="width: 80px; height: 80px;">
                                    </div>

                                    <div class="text-center m-b">
                                        <h4 class="text-uppercase">Login</h4>
                                    </div>
                                    <div class="form-inputs">
                                        <label class="text-uppercase">Email address</label>
                                        <input type="email" class="form-control input-lg" placeholder="Email Address" name="email" value="{{ old('email') }}" required autofocus>
                                        <label class="text-uppercase">Password</label>
                                        <input type="password" class="form-control input-lg" placeholder="Password" name="password" required>
                                    </div>
                                    <button class="btn btn-primary btn-block btn-lg m-b" type="submit">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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