<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        .total {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Selamat Datang di Halaman Penjualan!</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Product</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Moisturizer</td>
                <td>2</td>
                <td>40.000</td>
                <td>80.000</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Paracetamol</td>
                <td>1</td>
                <td>15.000</td>
                <td>15.000</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Air Mineral</td>
                <td>1</td>
                <td>10.000</td>
                <td>10.000</td>
            </tr>
            <tr class="total">
                <td colspan="4">Total</td>
                <td>105.000</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
