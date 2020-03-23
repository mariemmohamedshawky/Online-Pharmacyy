@extends("layout")
@section("content")


<!DOCTYPE html>
<html lang="en">

<head>
  <title>The Products</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



<table class=" table table-striped w-auto">
  <thead class="table table-bordered ">
    <tr>
      <th scope="col">Product No.</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Description</th>
      <th scope="col">Product Date</th>
      <th scope="col">Product Image</th>
      <th scope="col">Product Details</th>
    </tr>
  </thead>


  
  <tbody>
    <tr>
      <th scope="row">Product No.</th>
      <th scope="row">Product Name</th>
      <th scope="row">Product Description</th>
      <th scope="row">Product Date</th>      
      <td> <img src="" class="img-rounded" alt="Product Image"> </td>
      <td><input type="submit" class="btn btn-primary mt-4 mb-10" value="More Details"></td>
    

    </tr>
    
  </tbody>



 
</table>




<style>
body {
  background-image: url('images/3.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
.center {
  text-align: center;
  border: 3px solid green;
  margin:20px;
padding:10px;
}
</style>




</head>
</html>


@endsection 