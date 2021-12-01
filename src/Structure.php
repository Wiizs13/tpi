<?php

class Structure
{

    public static function printHeader()
    {
        return <<<HEADER
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                        <title>Web MVC</title>
                    </head>
                    <body>
                  HEADER;
    }

    public static function printFooter()
    {
        return <<<FOOTER
                    </body>
                    </html>
                  FOOTER;
    }

    public static function printNav()
    {
        include BASE_DIR . "views/menu.php";
    }
}
