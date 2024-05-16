<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hóa đơn bán hàng</title>
    <link rel="stylesheet" href="hoadonban.css">
    <style>
        /* Thêm CSS để định dạng cho PDF */
        body {
            font-family: DejaVu Sans;
        }
        .container {
            width: 90%;
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
            <h1 style="font-size: 30px">Cửa Hàng BaloOnline</h1>
        </div>
        <div class="invoice-header">
            <h2>Hóa Đơn Bán Hàng</h2>
            <p>Mã Hóa Đơn: {{$MaDonHang}}</p>
            <p>Ngày: {{$SalDate}}</p>
        </div>
        <div class="customer-info">
            <h2>Thông Tin Khách Hàng</h2>
            <p>Tên Khách Hàng: {{$SalName}}</p>
            <p>Địa Chỉ: {{$Address}}</p>
            <p>Số điện thoại: {{$Phone}}</p>
        </div>
        <div>
            <h1 style="text-align: center">Chi tiết đơn hàng</h1>
        </div>
        <table class="table table-striped table-bordered bootstrap-datatable datatable">
            <thead>
                <tr style="border-bottom: 1px solid #a2a2a2;">
                    <th style="width: 5%;text-align: center;">STT</th>
                    <th style="width: 40%;text-align: center;">Tên sản phẩm</th>
                    <th style="width: 18%;text-align: center;">Số lượng</th>
                    <th style="width: 15%;text-align: center;">Giá</th>
                    <th style="width: 22%;text-align: center;">Thành tiền</th>
                </tr>
            </thead>
            @php $i = 1; @endphp
            @foreach($ProIDs as $key => $ProID)
                <tbody>
                    <tr>
                        <td style="text-align: center;">{{ $i++ }}</td>      
                        <td style="text-align: center;">
                            @php
                                $product = App\Models\Product::find($ProID);
                                if($product) {
                                    echo $product->ProName;
                                } else {
                                    echo "Không tìm thấy sản phẩm";
                                }
                            @endphp
                        </td>          
                           
                        <td style="text-align: center;">{{$Quantities[$key]}}</td>        
                        <td style="text-align: center;">{{number_format($Prices[$key])}}đ</td>            
                        <td style="text-align: center;">{{number_format($Quantities[$key] * $Prices[$key]) }} đ</td>            
                    </td>
                </tbody>   
            @endforeach  
        </table>    
        <div style="float: right;margin-right:30px">
            <p><span style="color: blue; margin-right:15px">Tổng tiền:</span>{{ number_format($MoneyTotal) }} đ</p>          
        </div>
    </div>
</body>
</html>
