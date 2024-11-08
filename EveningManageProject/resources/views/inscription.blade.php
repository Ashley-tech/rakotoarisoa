<?php
    require __DIR__.'/../../../vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Evening Manage Project</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            body {
                background-color: #FF2200;
                color: white;
                font-family: Arial;
            }

            div {
                font-size: 25px;
                position: fixed;
                transform: translate(-50%, -50%);
                color:black;
                top: 50%;
                left: 50%;
                box-shadow: 0 5px 15px rgba(0,0,0,.5);
                height: 30%;
                background-color: #00FF00;
                float: right;
                overflow: auto;
                color: black;
                width: 50%;
                padding-left: 6px;
                height: 80%;
            }

            table {
                text-align: left;
            }

            button {
                background-color: #0000FF;
                color: #FFFF00;
                width: 100%;
                font-size: 25px;
                font-family: Arial;
            }
        </style>
    </head>
    <body>
        <div>
            <h2>Evening Manage Project</h2>
            <table>
                <tr>
                    <th colspan="2">Inscription :</th>
                </tr>
                <tr>
                    <th>Nom* :</th>
                    <td><input type='text' name='nom' placeholder="Nom   " /><td>
                </tr>
                <tr>
                    <th>Prénom* :</th>
                    <td><input type='text' name='prenom' placeholder="Prénom" /><td>
                </tr>
                <tr>
                    <th>Rue <i>(ne sera pas divulguée)</i> :</th>
                    <td><input type='text' name='rue' /><td>
                </tr>
                <tr>
                    <th>Numéro <i>(ne sera pas divulguée)</i> :</th>
                    <td><input type='text' name='num' /><td>
                </tr>
                <tr>
                    <th>Ville* :</th>
                    <td><input type='text' name='rue' /><td>
                </tr>
                <tr>
                    <th>Naissance* :</th>
                    <td><input type='date' name='nais' /><td>
                </tr>
                <tr>
                    <th>E-mail* :</th>
                    <td><input type='text' name='mel' placeholder="E-mail" /><td>
                </tr>
                <tr>
                    <th>Mot de passe* :</th>
                    <td><input type='password' name='pwd' placeholder="Mot de passe" /><td>
                </tr>
                <tr>
                    <th>Reconfirmation du mot de passe* :</th>
                    <td><input type='password' name='pwd2' placeholder="Mot de passe" /><td>
                </tr>
                <tr>
                    <td><button>Continuer</button></td>
                    <td><button onclick="retourner()">Retour</button></td>
                </tr>
            </table>
        </div>
        <script>
            function retourner(){
                location.href = '/'
            }
        </script>
    </body>
</html>
