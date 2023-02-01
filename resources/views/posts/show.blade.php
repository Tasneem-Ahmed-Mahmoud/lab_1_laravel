<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  
  


  <nav class="navbar navbar-expand-lg bg-dark navbar-dark t">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ITI Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active ms-4" aria-current="page" href="{{route('posts.index')}}">All Posts</a>
        </li>
       
        
      </ul>
      
    </div>
  </div>
</nav>


  <div class="container d-flex  justify-content-center align-items-center  flex-column vh-100" >




  <div class="accordion w-50" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
       Post Info
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Title :</strong> <span>{{$post["title"]}}</span><br><br>
        <strong>Description :</strong> <span>{{$post["descreption"]}}</span>
      </div>
    </div>
  </div>
 
  
</div>




<div class="accordion  mt-4 w-50"  id="accordionExample2">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTow">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTow">
       Post Creater Info
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample2">
      <div class="accordion-body">
        <strong>Name :</strong> <span>{{$user["name"]}}</span><br><br>
        <strong>Email:</strong> <span>{{$user["email"]}}</span><br><br>
        <strong>Created At:</strong> <span>{{$user["createdAt"]}}</span>

        <code>.accordion-flush</code> 
      </div>
    </div>
  </div>
 
  
</div>




</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>