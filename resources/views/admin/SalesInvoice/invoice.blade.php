<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
        /* Thêm CSS để định dạng cho PDF */
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 80%;
            margin: auto;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h1 {
            font-size: 24px;
            color: #333;
        }
        /* Định dạng cho table */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Invoice</h1>
        </div>
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
            @foreach ($invoice->products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->quantity }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->quantity * $product->price }}</td>
            </tr>
            @endforeach
            <tr>
                <td colspan="3" style="text-align: right;">Total:</td>
                <td>{{ $invoice->total }}</td>
            </tr>
        </table>
        <p><strong>Customer Name:</strong> {{ $SalName }}</p>
        <p><strong>Address:</strong> {{ $Address }}</p>
        <p><strong>Phone:</strong> {{ $Phone }}</p>
        <p><strong>Date:</strong> {{ $SalDate }}</p>
        <p><strong>Note:</strong> {{ $Note }}</p>
    </div>
</body>
</html>
