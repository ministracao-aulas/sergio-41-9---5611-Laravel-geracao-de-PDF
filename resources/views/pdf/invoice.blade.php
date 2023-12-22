<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Document</title>
    <style>
        .page-break {
            page-break-after: always;
        }
    </style>
    <style>
        .bg-table {
            background: #000; color: #fff;
        }
    </style>
</head>

<body>
    <h3>{{ date('c') }}</h3>
    {{-- <img src="data:image/svg+xml;base64,{{ base64_encode(file_get_contents(public_path('imgs/qr-code-bit.ly-dozeroaodeploy.svg'))) }}" /> --}}
    {{-- <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('imgs/qr-code-dzad.png'))) }}" /> --}}
    <img src="data:image/jpg;base64,{{ base64_encode(file_get_contents(public_path('imgs/qr-code-dzad.jpg'))) }}" />
    {{-- <img src="{{ public_path('imgs/qr-code-dzad.png') }}" /> --}}
    <table class="--bg-table list-group-item-danger">
        <thead>
            <tr>
                <th>ID</th>
                <td colspan="2">{{ $id ?? '-' }}</td>
            </tr>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiago</td>
                <td>tiago@tiago.com</td>
                <td>41 9844402628</td>
            </tr>
            <tr>
                <td>Sergio</td>
                <td>sergio@sergio.com</td>
                <td>1111 9999</td>
            </tr>
        </tbody>
    </table>
    <h1>Page 1</h1>
    <div class="page-break"></div>
    <h1>Page 2</h1>

    <table
        class="table table-dark table-hover"
    >
        <tbody>
            <tr>
                <td colspan="2"><strong>tytytyy</strong></td>
                <td><strong>tyty</strong></td>
                <td><strong>tyty</strong></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</body>

</html>
