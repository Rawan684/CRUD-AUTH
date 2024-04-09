<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Show A Product </h1>
<div>
<p> <h3>{{$product->id}}</h3></p>
 <p style="color:red"> {{$product->name}}</p>
 <p style="color:blue"> {{$product->qty}}</p>
 <p style="color:orange"> {{$product->price}}</p>
 <p style="color:purple"> {{$product->description}}</p>
 </div>
</body>
</html>