<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula tester</title>
</head>
<body>
<meta charset="utf=8">
    <title>Html Intermediario</title>
    <style type="text/css">
        body {
            background-image: url;
            margin: 0;
            padding: 0;
        }

        .header {
            overflow: hidden;
            margin: auto;
            width: 80%;
            background: #475236;
            padding: 15px;
            font-size: 18px;
        }

        .menu {
            list-style: none;
            margin: 0;
            padding: 0;
            float: right;

        }

        li {
            /*display: inline-block;*/
            float: left;
            color: antiquewhite;
            margin-left: 15px;

        }

        .logo {
            float: left;

            color: antiquewhite;
        }

        @media screen and (max-width:700px) {
            .header {
                background-color: brown;

            }
        }

        @media screen and (max-width:500px) {
            .header {
                background: chartreuse;

            }

            .logo {
                float: none;
                text-align: center;
                color: crimson;
            }

            .menu {
                margin-top: 20px;
                float: none;
                text-align: center;

            }

            li {
                float: none;
                margin-bottom: 5px;
                padding: 10px;
                color: crimson;

            }
        }
    </style>
</head>

<body>
    <form method="GET" action="">

        <header class="header">
            <div class="logo">
                Logo
            </div>
            <nav>
                <ul class="menu">
                    <li>Home</li>
                    <li>Cursos</li>
                    <li>Contatos</li>
                    <li>Escit??rios</li>
                    <li>Localiza????o</li>

                </ul>
            </nav>
        </header>
        <br>
        <main>
        <input type="text" name="Email"> <br>Email<br>

        <input type="password" name="senha"><br>Senha<br>

        <input type="datetime-local" name="data" max="2018-05-26"><br><br>

        <input type="number" name="numero" min="5" max="10"><br><br>

        <input type="file" name="arquivo"><br><br>

        <input type="range" min="5" max="15" name="intervalo" value="6"><br><br>

        <input type="color" name="cor"><br><br>

        <input type="email" name="email"><br><br>

        <input type="checkbox" name="curso" value="01">React Native<br>

        <input type="checkbox" name="curso" value="02">React Js<br>

        <br>
        <input type="radio" name="gender" value="m"> Masc<br>
        <input type="radio" name="gender" value="f"> fem<br>


        <input type="submit" value="Enviar">
        <input type="reset" value="Limpar">
        <br><br><br><br><br><br><br><br><br><br><br>
        <h1>raquel</h1>
        <p>atualizando10</p>
        <h1>SABRINA</h1>
        <p>olaaaaa</p>
</body>
</html>