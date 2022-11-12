<!DOCTYPE html>
<html>
 <head>
  <title>Laravel - How to Generate Dynamic PDF from HTML using DomPDF</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
   }
  </style>
 </head>
 <body>
  <br />
  <div class="container">
   <h3 align="center">FOODHQ - Customer order details</h3><br />
   
   <div class="row">
    <div class="col-md-7" align="right">
     <h4>Order Data</h4>
    </div>
    <div class="col-md-5" align="right">
     <a href="{{ url('dynamic_pdf/pdf') }}" class="btn btn-danger">Convert into PDF</a>
    </div>
   </div>
   <br />
   <div class="table-responsive">
    <table class="table table-striped table-bordered">
     <thead>
      <tr>
       <th>order Id</th>
       <th>Number of items</th>
       <th>Total</th>
       <th>Created at</th>
       
      </tr>
     </thead>
     <tbody>
     @foreach($order_data as $order)
      <tr>
       <td>{{ $order->order_id }}</td>
       <td>{{ $order->no_of_items }}</td>
       <td>{{ $order->total }}</td>
       <td>{{ $order->created_at }}</td>
      
      </tr>
     @endforeach
     </tbody>
    </table>
   </div>
  </div>
 </body>
</html>