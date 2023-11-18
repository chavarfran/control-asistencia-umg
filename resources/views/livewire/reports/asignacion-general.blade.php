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
            padding: 0.15rem
            text-align: center;
            font-size: 14px;
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
        <thead>
            <tr>
                <th>
                    Nombre
                </th>
                <th>
                    Curso
                </th>
                <th>
                    Semestre y Ciclo</th>
                <th>
                    Sección</th>
                <th>
                    Estado</th>
                <th>
                    Creado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($assignments as $assignment)
                <tr>
                    <td>
                        {{ $assignment->primer_nombre }}
                        {{ $assignment->segundo_nombre }}
                        {{ $assignment->primer_apellido }}
                        {{ $assignment->segundo_apellido }}

                    </td>
                    <td>
                        {{ $assignment->nombre_curso }}

                    </td>
                    <td>
                        {{ $assignment->nombre_semestre }} {{ $assignment->ciclo }}

                    </td>
                    <td>
                        {{ $assignment->nombre_seccion }}

                    </td>
                    @switch($assignment->activo)
                        @case(1)
                            <td>
                                Activo
                            </td>
                        @break

                        @case(0)
                            <td>
                                Inactivo
                            </td>
                        @break

                        @default
                    @endswitch
                    <td>
                        23/04/18
                    </td>
                </tr>
            @endforeach
        </tbody>
</body>

</html>
