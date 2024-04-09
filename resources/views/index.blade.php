<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Products </h1>
    <div>
        @if(session()->has('success'))
        <div>
            {{session('success')}}
        </div>
        @endif
    </div>
    <a  href="{{route('products.create')}}">Create a new product</a>
    <table style="margin-top:3px" border=1>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Qty</th>
            <th>Price</th>
            <th>Description</th>
            <th>Edit</th>
            <th>Delet</th>
            <th>Show</th>
        </tr>
        @foreach($products as $product)
        <tr>
            <td>{{$product->id}} </td>
            <td>{{$product->name}}</td>
            <td>{{$product->qty}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->description}}</td>
            <td><a style="color:green" href="{{route('products.edit',['product'=>$product])}}">Edit</a></td>
            <td>
            <form action="{{route('products.destroy',['product'=>$product])}}" method="POST">
            @csrf
            @method('delete')
            
                <input style="color:red" type="submit" value="Delete"/>
            </form>
            </td>
            <td><a style="color:yellow" href="{{route('products.show',['product'=>$product])}}">show</a></td>
        </tr>
        @endforeach

       
    </table>
</body>
</html>