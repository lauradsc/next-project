<?php 
    class Body {
        public function header($style = "./assets/css/style.css", $title = "test", $favicon = "") {
            echo '<!doctype html>
            <html lang="en">
              <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>'.$title.'</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
                <link rel="stylesheet" href="'.$style.'">              
                </head>
              <body class="text-dark">
                <nav class="navbar">
                <div class="container">
                  <a class="navbar-brand" href="#">
                    <img src="" alt="" class="w-75">
                  </a>
                </div>
              </nav>
            ';
        }

        public function footer() {
            echo '
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
          </body>
        </html>';
        }
    }

?>