<!-- resources/views/products.blade.php -->
<html>
<head>
   <title>KHULNA SCOUT SHOP</title>
   
   <link rel="Icon" type="Images/x-icon" href="{{ asset('images/logo.png') }}">
   <!-- <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> -->
</head>
<body>
    <a href="{{ url('add_product') }}">Product Add in this list</a> | <a href="{{ url('main_page') }}">Home Page</a><br/><br/>

    <table width="100%" border="0">
        <tr bgcolor='#cccccc'>
            <td>Product Name</td>
            <td>Description</td>
            <td>Price</td>
            <td>Stock Quantity</td>
            <td>Update</td>
        </tr>
        @foreach($result as $res)
            <tr>
                <td>{{ $res['product_name'] }}</td>
                <td>{{ $res['description'] }}</td>
                <td>{{ $res['price'] }}</td>
                <td>{{ $res['stock_quantity'] }}</td>
                <td>
                    <a href="{{ url("individual_Product?id=$res[id]") }}">Read</a> | 
                    <a href="{{ url("edit?id=$res[id]") }}">Edit</a> | 
                    <a href="{{ url("delete?id=$res[id]") }}" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
