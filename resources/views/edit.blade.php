<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
<h1>Edit A Product </h1>
<form action="{{route('products.update',['product'=>$product])}}" method="post">
    @csrf
    @method('put')
    <div>
        <label for="name">Product Name:</label>
        <input style="margin-bottom:3px" id="name"  type="text" name="name">
    </div>
    <div>
        <label for="name">Product QTY:</label>
        <input style="margin-bottom:3px"  id="qty"  type="text" name="qty">
    </div>
    <div>
        <label for="name">Product Price:</label>
        <input style="margin-bottom:3px" id="price"  type="text" name="price">
    </div>
    <div>
        <label for="name">Product Description:</label>
        <input style="margin-bottom:3px"  id="description"  type="text" name="description">
    </div>
    <div>
        <input type="submit" name="submit" value="Update">
    </div>
   </form>
</body>
</html>