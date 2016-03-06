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
                <hr>
                <table>
                    <tr>
                        <th>Item</th>
                        <th>Power</th>
                        <th>Damage</th>
                        <th>DPS</th>
                        <th>Max HitPoints</th>
                        <th>HP Regen</th>
                        <th>Quality</th>
                        <th>Weight</th>
                        <th>Spell Slot 1</th>
                        <th>Spell Slot 2</th>
                        <th>Spell Slot 3</th>
                        <th>Spell Slot 4</th>
                        <th>Total</th>
                    </tr>
                    <tr>
                        <td>Elder's Enchanted Broadsword</td>
                        <td>1701</td>
                        <td>165</td>
                        <td>165</td>
                        <td>135</td>
                        <td>5%</td>
                        <td>Normal</td>
                        <td>?</td>
                        <td><span title="125 DPS">Heroic Strike</span>, <span title="130 DPS">Cleave</span></td>
                        <td>Interrupt, Hamstring, Taunt, Charged Blade</td>
                        <td>Mighty Blow, Iron Will</td>
                        <td>-</td>
                        <td>295</td>
                    </tr>
                    <tr>
                        <td>Elder's Enchanted Claymore</td>
                        <td>1798</td>
                        <td>218</td>
                        <td>218</td>
                        <td>143</td>
                        <td>5%</td>
                        <td>Normal</td>
                        <td>?</td>
                        <td><span title="164 DPS">Heroic Strike</span>, <span title="170 DPS">Cleave</span></td>
                        <td>Interrupt, Hamstring, Taunt, Charged Blade</td>
                        <td>Mighty Swing, Sword Wall</td>
                        <td>Deep Cuts, Slow Poison</td>
                        <td>388</td>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>
