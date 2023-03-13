<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Updatepage</title>
</head>


<body     >

  
    <h1  style="margin-left: 450px"  >Update Page</h1>

    
              {{-- Manage Error --}}
               @if (Session :: has('status'))
                   <div class="alert alert-success" role="alert">
                       {{ Session :: get('status') }}
                   </div>
                   
               @endif
    
    <div    style="margin-left: 350px  ; margin-top: 80px  ; margin-right: 350px" >
          
              <form  style="background-color : rgb(236, 233, 233); padding :20px "  action="{{url('updateProducts')}}" enctype="multipart/form-data"  method="POST" >
                @csrf

                <input type="hidden" name="id" value="{{$data -> id}}">
                <div class="mb-3  ">
                  
                  <label for="recipient-name" class="col-form-label">Name:</label>
                  <input type="text" name="Name" class="form-control" id="recipient-name" value="{{$data -> Name }}">
                </div>

                @error('Name')
                  
                  <div class="alert alert-danger">{{ $message }}</div>

                @enderror
                <div class="mb-3 ">
                    <label for="recipient-name" class="col-form-label">Price :</label>
                    <input type="text" name="Price" class="form-control" id="recipient-name" value="{{$data -> Price }}">
                </div>

                @error('Price')
                
                   <div class="alert alert-danger">{{ $message }}</div>

                @enderror
                  
                <div class="mb-3 ">
                    <label for="recipient-name" class="col-form-label">Image:</label>
                    <input type="file" name="Image" class="form-control" id="recipient-name"  value="{{$data -> Image }}">
                </div>
                @error('Image')
                
                   <div class="alert alert-danger">{{ $message }}</div>

                @enderror
                <div >
                       <a  class="btn btn-outline-danger"   href="{{url('createRead')}}" >Close</a>
                       <button type="submit"  class="btn btn-outline-primary">Update</button>
                </div>
              </form>  
              
             
      </div>        
    
            
    
            
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

         
</body>
</html>