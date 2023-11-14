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
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
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

        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 100%;
        }

        th,
        td {
            padding: 0.25rem;
            text-align: center;
            font-size: 12px;
        }

        th {
            padding: 5px;
            border-top: 2px solid black;
            border-bottom: 4px double black;
            font-size: 14px;
            font-weight: bold;
        }


        .header {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .logo {
            position: absolute;
            max-width: 110px;
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
    <br>
    <table>
        <tr>
            <th class="form-label">Código</th>
            <th class="form-label">Catedrático</th>
            <th class="form-label">Curso</th>
            <th class="form-label">Fecha/Horario</th>
            <th class="form-label">Tema a trabajar</th>

        </tr>
        <tr>
            <td>001</td>
            <td>Anthony Alexander Morales
                <div>

                </div>
            </td>
            <td>Curso A</td>
            <td>11/10/2023 10:00AM-12:00PM</td>
            <td>Tema 1</td>

        </tr>
        <tr>
            <td>002</td>
            <td>Profesor B</td>
            <td>Curso B</td>
            <td>Miércoles 2:00 PM - 4:00 PM</td>
            <td>Tema 2</td>

        </tr>
        <tr>
            <td>003</td>
            <td>Profesor C</td>
            <td>Curso C</td>
            <td>Viernes 8:00 AM - 10:00 AM</td>
            <td>Tema 3</td>

        </tr>
    </table>
</body>

</html>
