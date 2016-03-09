<!DOCTYPE html>
<html>
    <head>
        <title>Simbion</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato', serif;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        @include("analyticstracking")
        <div class="container">
            <div class="content">
                <div class="title">Simbion</div>
                <p>Albion Online Weapon Decision Helper</p>
                <hr>
                <p>Choose your path:</p>
                <a href="">Warrior</a>
                <a href="">Hunter</a>
                <a href="">Mage</a>
            </div>
        </div>
    </body>
</html>
