<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte</title>
    <style>
        @page {
            /*margin-top: 2.5cm;*/
            margin-left: 1.0cm;
            margin-bottom: 1.0cm;
            margin-right: 1.0cm;
            line-height: 1.5;
            font-size: 12;
            text-align: justify;
            font-family: Arial, Helvetica, sans-serif;
        }

        th,td {
            border-style: hidden;
        }

        table {
            table-layout: fixed;
            width: 100%;
            border-collapse: collapse;

        }

        tr:not(:last-child) {
            display: none;
        }

        .header {
            text-align: center;
            margin-bottom: 5px;
            font-size: 25px;
        }

        .header_2 {
            text-align: left;
            margin-bottom: 5px;
            font-size: 15px;
            text-align: center;
        }

        .form-label {
            font-style: italic;
            padding: 4px;
            caption-side: bottom;
            text-align: left;
            letter-spacing: 1px;
            background-color: #E2474B;
            color: white;
        }
        .header-container {
            display: flex;
            align-items: center;
        }
        .logo {
            margin-right: 10px;
        }
        img {
            width: 100px;
            height: 100px;
        }

    </style>
</head>

<body>
    <div class="header-container">
        <h1 class="logo">
            <img src="{{ public_path('/assets/img/logoUMG.png') }}">
        </h1>
        <h1 class="header">Universidad Mariano Galvez de Guatemala</h1>
    </div>

    <h3 class="header_2">Coban, Alta Verapaz</h3>
    <h3 class="header_2">Ingenieria en Sistemas y Ciencias de la Computación</h3>
    <table border="1">
        <tr>
            <th class="form-label">Catedrático</th>
            <th class="form-label">Curso</th>
            <th class="form-label">Fecha/Horario</th>
            <th class="form-label">Tema a trabajar</th>
            <th class="form-label">Código</th>
            <th class="form-label">Observaciones</th>
        </tr>
        <tr>
            <td>Anthony Alexander Morales
                <div>

                </div>
            </td>
            <td>Curso A</td>
            <td>11/10/2023 10:00AM-12:00PM</td>
            <td>Tema 1</td>
            <td>001</td>
            <td>Observación 1</td>
        </tr>
        <tr>
            <td>Profesor B</td>
            <td>Curso B</td>
            <td>Miércoles 2:00 PM - 4:00 PM</td>
            <td>Tema 2</td>
            <td>002</td>
            <td>Observación 2</td>
        </tr>
        <tr>
            <td>Profesor C</td>
            <td>Curso C</td>
            <td>Viernes 8:00 AM - 10:00 AM</td>
            <td>Tema 3</td>
            <td>003</td>
            <td>Observación 3</td>
        </tr>
    </table>
</body>

</html>
