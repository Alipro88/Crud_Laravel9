<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body >
    <h1  style="margin-left: 420px"  >
      Crud Application
    </h1>

    <br>

  <!-- Button trigger modal -->
    <button type="button" class="btn btn-outline-primary position-absolute top-30 start-50 translate-middle-x rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModal">
       Add Product 
    </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add Product</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

           @if (Session :: has('status'))
               <div class="alert alert-success" role="alert">
                   {{ Session :: get('status') }}
               </div>
               
           @endif



          <form  action="{{url('saveproducts')}}" enctype="multipart/form-data"  method="POST" >
            @csrf
            <div class="mb-3">
              
              <label for="recipient-name" class="col-form-label">Name:</label>
              <input type="text" name="Name" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Price :</label>
                <input type="text" name="Price" class="form-control" id="recipient-name">
            </div>
              
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Image:</label>
                <input type="file" name="Image" class="form-control" id="recipient-name">
            </div>
              <div class="modal-footer">
                   <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                   <button type="submit"  class="btn btn-outline-primary">Add Product</button>
              </div>
          </form>    
        </div>

        

        
      </div>
    </div>
  </div>

<br>
<br>
<br>
<br>


  
  <table class="table caption-top  w-75   table-bordered border-dark"  style="margin-left: 150px"  >
    <caption> <h4  style="color : grey">List of Products</h4></caption>
    <thead   class="table-dark" >
      <tr >
        <th scope="col">Ref .  </th>
        <th scope="col">Name   </th>
        <th scope="col">Price  </th>
        <th scope="col">Image  </th>
        <th scope="col">
          <center> 
            Action  
          </center>
        </th>
        
      </tr>
    </thead>
    <tbody   class="fs-4">
    @php
        $i=1;
    @endphp

    @foreach ($data as $pdt)
    
      <tr  class="border border-dark"  >
        
        <td class="pt-4">{{ $pdt->id}}    </td>
        <td class="pt-4">{{ $pdt->Name }} </td>
        <td class="pt-4">{{ $pdt->Price}} </td>
        <td> 
          <center>
          <img  src="images/{{$pdt->Image}}" width="80px" height="80px"  alt=""  >   
          </center>
        </td>
        <td >
         <div  class="pt-3" > 
          <center>
            <a class="btn btn-outline-primary "  href="{{url('editProduct/'.$pdt->id)}}" > update</a> |
            <a  class="btn btn-outline-danger"   href="{{url('deleteProduct/'.$pdt->id)}}" > delete</a>
          </center>
         </div>
        </td>
        
      </tr>

    @endforeach



    
      
    </tbody>
  </table>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>