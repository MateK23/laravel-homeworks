<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>
                #
            </th>
            <th>
                name
            </th>
        </tr>
        @foreach($newdata as $var)
            <tr>
                <td>{{ ++$loop->index }}</td>
                <td>{{ $var["name"] }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
