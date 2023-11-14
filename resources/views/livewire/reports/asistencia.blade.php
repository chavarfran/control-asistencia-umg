<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte</title>
    <style>
        @page {
            margin-top: 1.5cm;
            margin-left: 2.0cm;
            margin-bottom: 1.5cm;
            margin-right: 2.0cm;
            line-height: 1.0;
            font-size: 12;
            text-align: justify;
            font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif ;
        }

        img {
            max-width: 100px;
            height: auto;
        }

        h5 {
            font-weight: normal;
            line-height: 0;
        }

        h4 {
            line-height: 0;
        }

        h3 {
            line-height: 0;
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .logo {
            position: absolute;
            max-width: 120px;
            height: auto;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .title-head {
            margin-left: 10px;
        }
    </style>
</head>

<body>
    <div class="header">
        <img src="{{ public_path('/assets/img/logoUMG.png') }}" class="logo">
        <div class="title-head">
            <h3>Universidad Mariano Gálvez de Guatemala</h3>
            <h5>ASISTENCIA CATEDRÁTICOS</h5>
            <h5>Centro universitario de:</h5>
            <h5><strong><u>COBÁN, ALTA VERAPAZ</u></strong></h5>
            <h5>INGENIERIA EN SISTEMAS PLAN FIN DE SEMANA</h5>
        </div>
    </div>
</body>

</html>
