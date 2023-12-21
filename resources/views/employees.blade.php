<!doctype html>
<html lang="en">
 <head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">


   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


   <title>Home Page</title>
 </head>
 <body>
   <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark border-bottom border-body" data-bs-theme="dark">
       <div class="container-fluid">
         <a class="navbar-brand" href="#">Navbar</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav me-auto mb-2 mb-lg-0">
             <li class="nav-item">
               <a class="nav-link active" aria-current="page" href="#">Home</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="#">Link</a>
             </li>
             <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 Dropdown
               </a>
               <ul class="dropdown-menu">
                 <li><a class="dropdown-item" href="#">Action</a></li>
                 <li><a class="dropdown-item" href="#">Another action</a></li>
                 <li><hr class="dropdown-divider"></li>
                 <li><a class="dropdown-item" href="#">Something else here</a></li>
               </ul>
             </li>
             <li class="nav-item">
               <a class="nav-link disabled" aria-disabled="true">Disabled</a>
             </li>
           </ul>
           <form class="d-flex" role="search">
             <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
             <button class="btn btn-outline-success" type="submit">Search</button>
           </form>
         </div>
       </div>
     </nav>







     <div class="container info">
       <div class="row">


           <div class="card col-lg-5 col-md-5 col-sm-11 text-center mx-auto">
               <div class="accordion" id="accordionExample">
                   <div class="accordion-item">
                     <h2 class="accordion-header">
                       <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                         <?php echo $employee1[0] ?>
                       </button>
                     </h2>
                     <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                       <div class="accordion-body">


                           <div class="card col-lg-12 col-md-12 col-sm-12 text-center mx-auto">
                               <img class="card-img-top rounded-circle" src="https://placehold.co/50" alt="Card image">
                               <div class="card-body">
                                   <h4 class="card-title"><?php echo $employee1[0] ?></h4>
                                   <br>
                                   <h6><?php echo $employee1[1] ?> At <?php echo $employee1[2] ?></h6>
                                   <p> <i> <?php echo $employee1[3] ?> </i> </p>
                               </div>
                           </div>


                       </div>
                     </div>
                   </div>
                   <div class="accordion-item">
                     <h2 class="accordion-header">
                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                           <?php echo $employee2[0] ?>
                       </button>
                     </h2>
                     <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                       <div class="accordion-body">


                           <div class="card col-lg-12 col-md-12 col-sm-12 text-center mx-auto">
                               <img class="card-img-top rounded-circle" src="https://placehold.co/50" alt="Card image">
                               <div class="card-body">
                                   <h4 class="card-title"><?php echo $employee2[0] ?></h4>
                                   <br>
                                   <h6><?php echo $employee2[1] ?> At <?php echo $employee2[2] ?></h6>
                                   <p> <i> <?php echo $employee2[3] ?> </i> </p>
                               </div>
                           </div>


                       </div>
                     </div>
                   </div>
                   <div class="accordion-item">
                     <h2 class="accordion-header">
                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                           <?php echo $employee3[0] ?>
                       </button>
                     </h2>
                     <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                       <div class="accordion-body">


                           <div class="card col-lg-12 col-md-12 col-sm-12 text-center mx-auto">
                               <img class="card-img-top rounded-circle" src="https://placehold.co/50" alt="Card image">
                               <div class="card-body">
                                   <h4 class="card-title"><?php echo $employee3[0] ?></h4>
                                   <br>
                                   <h6><?php echo $employee3[1] ?> At <?php echo $employee3[2] ?></h6>
                                   <p> <i> <?php echo $employee3[3] ?> </i> </p>
                               </div>
                           </div>


                       </div>
                     </div>
                   </div>
                 </div>
           </div>


       </div>
   </div>



















   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>




 </body>
</html>
