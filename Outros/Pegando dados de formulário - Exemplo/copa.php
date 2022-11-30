<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php 'Torcida na copa';?></title>
    <!-- <link rel="stylesheet" href="estilo.css"></link> -->
</head>
<body>
    
    <form action="receba.php" method="get" id="receba">
        <label for="pais">Por qual país você vai torcer na Copa?</label><br>
        <input name="pais" id="pais" type="text">
        <p>
            <input type="submit" value="Enviar">
        </p>
    </form>
    
    
    
    <style>
        @import url('http://fonts.cdnfonts.com/css/qatar2022-arabic');
        *{
            box-sizing: border-box !important;
            font-family: 'Qatar2022 Arabic',Helvetica, Arial,  sans-serif;
            text-align: center;
        }
        body{
            background-image: linear-gradient(to top right, #640619, #7a042c, #2b070e);
            background-image: url(https://raw.githubusercontent.com/LucasAntunes06/copa-do-mundo-2022/84967c7ef352365425e45d41834b2a91759c0695/Imgs/Background.svg);
            height: calc(100vh - (58px));
            background-size:100%;
            /* height: 100%; */
            color:whitesmoke;
            text-align:center;
        }
        form{
            font-size: 2em;
            margin-top:50px;
        }
        input{
            padding: 10px;
            border-radius: 15px;
            color: #640619;
            background-color: whitesmoke;
            border:none;
        }
        button{
            color: var(--qatar);;
            border: none;
        }
    </style>
</body>
</html>