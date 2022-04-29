<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12">
                <h1 class="text-center">
                    Cashier Page
                </h1>
            </div>
        </div>
        <div class="row mt-2">
            <?php for($i=1;$i<=12;$i++) : ?>
            <div class="col-md-3 mb-3">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="card-title"><h3>Order Name</h3></div>
                            <div class="style-title">
                                <div id="title">
                                    Food Name     
                                </div>
                               
                                <div class="d-flex">
                                    <div class="mr-auto">
                                        <div class="card-text text-muted">Rp. 10.000</div>
                                    </div>     
                                    10 item

                                </div>
                                                                
                            </div>

                            <div class="style-title">
                                <div id="title">
                                    Food Name     
                                </div>
                               
                                <div class="d-flex">
                                    <div class="mr-auto">
                                        <div class="card-text text-muted">Rp. 20.000</div>
                                    </div>     
                                    3 item

                                </div>
                                                                
                            </div>
                            <hr>
                            <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#staticBackdrop">Bayar</a>
                            
                        </div>
                    </div>  
                </div>
                <?php endfor; ?>
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Order Name</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h3 class="text-center">Order Summary</h3>
                            <?php for($i=1;$i<=4;$i++) : ?>
                                <div class="style-title">
                                    <div id="title">
                                        Food Name     
                                    </div>
                                
                                    <div class="d-flex">
                                        <div class="mr-auto">
                                            <div class="card-text text-muted">10 item</div>
                                        </div>     
                                        Rp. 10.000
                                    </div>                              
                                </div>
                            <?php endfor; ?>
                            <hr>
                            <div class="d-flex">
                                <div class="mr-auto">
                                    <label>Total Bayar</label>
                                </div>     
                                    Rp. 50.000
                            </div>  
                            
                            <label>Pilih Pembayaran :</label>
                            <select name="" class="form-control mb-2" id="payment" onchange="tampil()">
                                <option>Pilih</option>
                                <option value="cash" id="cash">Cash</option>
                                <option value="qris">Qris</option>
                            </select>
                            <div id="form"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Understood</button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/535fb5b18e.js" crossorigin="anonymous"></script>
    <script>
         function tampil(){
                let payment = document.getElementById('payment').value
                console.log(payment)
                let formPay = document.getElementById('form')
                formPay.empty
                if(payment == "cash"){
                    formPay.empty
                    formPay.append(`
                                    cash
                    
                                    `)
                }
                else if(payment == "qris"){
                    formPay.empty
                    formPay.append(`
                                    qris
                    
                                    `)
                }            
            }
    </script>
</body>
</html>