<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<style>
    .custom-card:hover{
        background-color: #873e23;
        color: #fff;
    }

    .custom-btn{
        background-color: #873e23;
        border: none;
    }

    .custom-btn:hover{
        background-color: #873e23;
        border: none;
    }

    
   
</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Menu</a>
            </li>
            
           
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row mt-3 mb-3">
            <div class="col-md-4">
                <div class="card shadow custom-card">
                    <div class="card-body">
                        <div class="card-title">
                            <i class="fas fa-file-alt fa-3x"></i>
                        </div>
                        <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow custom-card">
                    <div class="card-body">
                        <div class="card-title">
                            <i class="fas fa-wallet fa-3x"></i>
                        </div>
                        <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow custom-card">
                    <div class="card-body">
                        <div class="card-title">
                            <i class="fas fa-cash-register fa-3x"></i>
                        </div>
                        <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            
            <div class="col-md-8 ">
                <div class="row">
                    <?php for($i=1;$i<=8;$i++) : ?>
                        <div class="col-md-6  mb-3">
                        <div class="card shadow">
                            <div class="card-body">    
                                <div class="card-title">
                                    <div class="d-flex flex-row">
                                        <div class="p-2">
                                            <img src="https://via.placeholder.com/100x100" alt="placceholder" class="img-fluid">
                                        </div>
                                        <div class="style-title">
                                            <div id="title">
                                                Food Name
                                                
                                            </div>
                                            <div id="subtitle">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="mr-auto">
                                        <div class="p-2">
                                            <label class="control-label">$10.0</label>
                                        </div>
                                    
                                    </div>     
                                    <div id="style-btn">
                                        <button class="btn btn-primary custom-btn">Order</button>
                                    </div>
            
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endfor; ?>
                    
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="card-title">
                            Test
                        </div>
                    </div>  
                </div>
            </div>
                
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/535fb5b18e.js" crossorigin="anonymous"></script>
</body>
</html>