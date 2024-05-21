<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Report</title>
</head>
<body>
    <h1>Product Report</h1>

    <table>
        <thead>
            <tr>
                <th>Product Type</th>
                <th>Total Quantity</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productReport as $report)
            <tr>
                <td>{{ $report->ProductType }}</td>
                <td>{{ $report->total_quantity }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
