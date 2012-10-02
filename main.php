<html lang="en">
     <head>
           <meta charset="utf-8" />
           <title>Impressionist App for ownCloud</title>
           <link href="http://fonts.googleapis.com/css?family=Armata" rel="stylesheet">
           <link href="http://fonts.googleapis.com/css?family=Lustria" rel="stylesheet">
           <link href="<?php echo OCP\Util::linkToAbsolute('impressionist', 'css/bootstrap.css'); ?>" rel="stylesheet" />           <script src=<?php echo OCP\Util::linkToAbsolute('impressionist', 'js/jquery.js'); ?> type="text/javascript"></script>
           <link href="<?php echo OCP\Util::linkToAbsolute('impressionist', 'css/landingpage.css'); ?>" rel="stylesheet" />
           <script>
               $(document).ready(
                   function(e)
                   {
                       if(Utilities.isSupportedUA())
                       {
                           //alert("Webkit");
                           $("#errorMessage").css("visibility", "hidden");
                           $("#goBtn").css("visibility","visible");
                       }
                       else
                       {
                           $("#errorMessage").css("visibility", "visible");
                           $("#goBtn").css("visibility","hidden");
                       }
                    }
               )
           </script>
    </head>
    <body>
            <div class="hero-unit" id="container">
                <h1>Impressionist<sup id="smallsup">0.1</sup></h1>
                <p></p>
                <p class="descr" id="moz">Impressionist is a WSIWYG (like) tool to create <a href="http://bartaz.github.com/impress.js/">impress.js</a> presentations. This is an early preview and has stability issues. Please do help me fix them by logging the issues you find at impressionist project on <a href="https://github.com/hsivaramx/Impressionist">github.</a> <span id="errorMessage">
                    At the moment, this preview of Impressionist works only with webkit based browsers (Chrome / Safari). Apologize the inconvenience.
                    </span>
                </p>
                 <p class="descr">
                        A project by Harish Sivaramakrishnan (<a href="http://www.twitter.com/hsivaram">@hsivaram</a>).
                 <p>
                     <a class="btn btn-info btn-large" id="goBtn" href="<?php echo OCP\Util::linkToAbsolute('impressionist', 'app.php'); ?>">
                         Create Presentation
                     </a>
                    </p>
                </div>
           <script type="text/javascript" src="<?php OCP\Util::linkToAbsolute("impressionist", "js/utilities.js"); ?>"></script>
    </body>            