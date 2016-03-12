<!--html-->
<!doctype html>
<html lang="en">
    <!--meta information-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="icon" type="image/png" href="images/logo.png">
        <title>Live PHP - Web Based PHP Interpreter</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/skeleton.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/script.js"></script>
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>
    <!--content-->
    <body>
        <!--header-->
        <header>
            <div class="container">
                <div class="row">
                    <div class="nine columns">
                        <h5 style="font-weight:bold;"><span style="color:#35bcf2;"><i class="fa fa-cubes"></i></span> Live PHP</h5>
                        <p class="slogan margin-bottom-min">write and execute php from within your browser</p>
                    </div>
                </div>  
            </div>      
        </header>
        <!--main wrapper-->
        <div class="wrapper">

            <!--content placeholder-->
            @yield('content')
            
        </div>  
    </body>
</html>