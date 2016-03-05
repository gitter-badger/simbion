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
                font-family: 'Lato';
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
                <p>Simulador de Dano, Threat e Heal pro Albion Online</p>
                <p>Work in Progress</p>
                <table>
                    <tr>
                        <th>Arma</th>
                        <th>DPS Físico</th>
                        <th>DPS Mágico</th>
                        <th>Spell 1</th>
                        <th>Spell 2</th>
                        <th>Spell 3</th>
                        <th>Spell 4</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="arma"> </td>
                        <td><input type="number" name="phydmg"> </td>
                        <td><input type="number" name="magdmg"></td>
                    </tr>

                </table>
            </div>
        </div>
    </body>
</html>
