<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Flash Courier | Invoice Print</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body>
<div class="wrapper">
  <section class="invoice">
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">
          <i class="fas fa-globe"></i> Flash Courier
          <small class="float-right">Date: </small>
        </h2>
      </div>
    </div>
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        From
        <address>
          <strong>Flash Courier </strong><br>
                    Bypass Road, Kailod Kartal, Indore, Madhya Pradesh 452020<br>
                    Phone:+91 7987401655<br>
                    Email: flashcourier@protonmail.com
        </address>
      </div>
      <div class="col-sm-4 invoice-col">
        To
        <address>
          <strong></strong><br>
                       <br>
         <br>
          Phone: <br>
          Email: 
        </address>
      </div>
      <div class="col-sm-4 invoice-col">
        <b>Invoice #007612</b><br>
        <br>
        <b>Order ID:</b> 4F3S8J<br>
        <b>Payment Due:</b> 2/22/2014<br>
        <b>Account:</b> 968-34567
      </div>
    </div>
    <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
            <th>Qty</th>
            <th>Product Id</th>
            <th>Weight(gm)</th>
            <th>Height(cm)</th>
            <th>Length(cm)</th>
            <th>Width(cm)</th>
            <th>Subtotal</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td>1</td>
             <td></td>
             <td></td>
              <td></td>
              <td></td>
               <td></td>
          </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="row">
      <div class="col-6">
        <p class="lead">Payment Methods:</p>
        <img src="dist/img/credit/visa.png" alt="Visa">
        <img src="dist/img/credit/mastercard.png" alt="Mastercard">
        <img src="dist/img/credit/googlepay.png" alt="Google Pay">
        <img src="dist/img/credit/paytm.png" alt="Paytm">

        <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
         Pay using any method
        </p>
      </div>
      <div class="col-6">
        <p class="lead">Amount Due </p>

        <div class="table-responsive">
          <table class="table">
            <tr>
              <th style="width:50%">Subtotal:</th>
              <td></td>
            </tr>
            <tr>
              <th>GST (18%)</th>
              <td></td>
            </tr>
            <tr>
              <th>Shipping:</th>
              <td></td>
            </tr>
            <tr>
              <th>Total:</th>
              <td></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </section>
     <div class="copyright">
    Project&copy;2021<strong><span>Flash Courier</span></strong> CMS
      </div>
</div>
<script>
  window.addEventListener("load", window.print());
</script>
</body>
</html>
