<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Simple PHP App</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/2.2.2/css/bootstrap.min.css" rel="stylesheet">
        <style>body {margin-top: 40px; background-color: #333;}</style>
        <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>

    <body>
        <div class="container">
            <div class="hero-unit">
                <h1>Simple PHP App</h1>
                <h2>Congratulations!</h2>
                <p>Your PHP application is now running on the host: <?php echo gethostname(); ?></p>
                <p>This host is running PHP version <?php echo phpversion(); ?>.</p>
            </div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>

</html>
