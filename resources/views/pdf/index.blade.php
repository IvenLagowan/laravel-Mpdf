<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <table>
    <thead>
        <td>#</td>
        <td>Nama</td>
        <td>Email</td>
        <tbody>
            @foreach($pdfs as $pdf)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{pdf->name}}</td>
                <td>{{pdf->email}}</td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </thead>
 </table>
</body>
</html>