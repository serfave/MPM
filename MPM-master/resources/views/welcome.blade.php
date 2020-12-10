<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Framework :)</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
             <div class="row">
                <a class="navbar-brand" href="#">ITTG</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                 <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/apat">APAT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/amat">AMAT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/nombre">NOMBRE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/autenticar">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/category">Category</a>
                </li>
               
               
                </ul>
         </div>
    
            </div>
        </div>
    </nav>

    <HEAder class="container-fluid">
     <div class="row" style ="height:680px; background-color: #20BFAC">
        <div class="col-12 align-self-center text-center">
            <img src="{{asset('images/logo.png')}}" alt="" class="img-fluid" width="200">
            <h1>Bienvenido</h1>
            <hr>
            <p>Mario Alberto Cortez Verde</p>
        </div>
     </div>
    </HEAder>


    <section class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center mt-5">
            <h2>Contenido</h2>
            </div>

            <div class="col-4 text-center mt-5">
                <img src="{{asset('images/book.jpg')}}" alt="book" width="300">            
            </div>
            <div class="col-4 text-center mt-5">
                <img src="{{asset('images/book.jpg')}}" alt="book" width="300">            
            </div>
            <div class="col-4 text-center mt-5">
                <img src="{{asset('images/book.jpg')}}" alt="book" width="300">            
            </div>
            <div class="col-4 text-center mt-5">
                <img src="{{asset('images/book.jpg')}}" alt="book" width="300">            
            </div>
            <div class="col-4 text-center mt-5">
                <img src="{{asset('images/book.jpg')}}" alt="book" width="300">            
            </div>
            <div class="col-4 text-center mt-5">
                <img src="{{asset('images/book.jpg')}}" alt="book" width="300">            
            </div>
            

        </div>
        
    </section>

    <section class="container-fluid mt-5">
     <div class="row justify-content-center py-5" style ="background-color: #20BFAC">
         <div class="col-12 text-center mt-5 mb-3">
            <h2>About</h2>
            <hr>
         </div>

         <div class="col-4">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi enim cum tempore repellat assumenda! Vero dolore, nulla, autem voluptas et ad magni non provident in, mollitia vel tempora deleniti cum?
         </p>
         </div>
         <div class="col-4">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi enim cum tempore repellat assumenda! Vero dolore, nulla, autem voluptas et ad magni non provident in, mollitia vel tempora deleniti cum?
         </p>
         </div>

         <div class="col-12 text-center">
         <button type="button" class="btn btn-outline-secondary">Free Download</button>
         </div>
     </div>
    </section>
    

    <section class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center mt-5">
            <h2>Contact me</h2>
            </div>      

        </div>
        <div class="col-12">
        <form>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Nombre">
                
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                
            </div>
            <div class="form-group">
                <label for="phone">Phone number</label>
                <input type="text" name="phone" class="form-control" id="phone" placeholder="Número de teléfono">
                
            </div>

            <div class="form-group">
                <label for="msj">Mensaje</label>
                <textarea class="form-control" name="msj"id="msj" rows="3"  placeholder="Deja tu mensaje"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </section>





    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>