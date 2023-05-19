<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>{{ config('app.name', 'Laravel') }}</title>

    <style>
        #evacuees {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #evacuees th {
            border: 1px solid #ddd;
            padding: 5px 8px;
        }
        #evacuees td {
            border: 1px solid #ddd;
            padding: 10px 8px;
        }
        #evacuees tr:nth-child(even){background-color: #f2f2f2;}

        #evacuees tr:hover {background-color: #ddd;}

        #evacuees th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
            font-weight: 500;
        }

        #logo {
            text-align: center;
            margin-bottom: 40px;
        }

        #logo img {
            width: 150px;
        }
        .t-center {
            text-align: center;
        }
    </style>
</head>
<body>
    <div id="logo">
        <img src="./img/logo.jpg">
        <p class="t-center">Republic of the Philippines<br/>
            Province of Bohol<br/>
            Municipality of Buenavista<br/>
            Municipal Disaster Risk Reduction Management Office<br/>
            Buenavista Unit Office
        </p>
    </div>

    <h2>{{ $title }}</h2>
    <table id="evacuees">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Sex</th>
                <th scope="col">Signature</th>
            </tr>
        </thead>
        <tbody>
            @for($i = 0; $i < $num_rows; $i++)
                <tr>
                    <td scope="row"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            @endfor
        </tbody>
    </table>
    <div style="display: block; width: 300px; margin-top: 40px;">
        Approved by:<br/>
        <div class="t-center" style="width: 250px;">
            <strong style="text-decoration: underline;">CHERRY G. MERIN</strong><br/>
            LDRRMO II
        </div>
    </div>
</body>
</html>