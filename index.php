<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap v5.2 -->
    <link href="libraries/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="libraries/css/invoices.css" rel="stylesheet">
    <script src="libraries/Bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- END -->

    <!-- jQuery v3.6 -->
    <script src="libraries/jQuery/jQuery.js"></script>
    <!-- END -->

    <!-- Custom js -->
    <script src="libraries/js/invoices.js"></script>
    <!-- END -->

    <title>Meridionalis</title>
  </head>
  <h1 style="text-align: center">Meridionalis D6</h1>
  <h3>Invoice Number</h3>"
  <body>
    <div class="row">
        <div class="col-3"></div>
            <div class="col-6">
                <div class="form-group" >
                    <label for="name">Customer Name:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Customer name">        
                </div>
                <div class="form-group">
                  <button class="btn btn-primary" name=create id="create" onclick="CreateInvoice()">Create Invoice</button>
                </div>
            </div>
        <div class="col-3"></div>
    </div>
  </body>
</html>
