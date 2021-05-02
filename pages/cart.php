<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Cart</title>
    <!-- MDB icon -->
    <link rel="icon" href="../img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="../css/mdb.min.css" />
    <style>
      .pannel-head{
text-align: center; background-color: #93DB70; width:100%;
color:white;
height:40px;
padding-top:2px;
border-radius: 5px;
}
.ncol-2{
padding: 8px;
width:15%;
float:left;
}
.ncol-8{
padding: 10px;
width:70%;
float:left;
}
.ncol-12{
padding: 10px;
width:100%;
float:left;
}
.nrow::after {
content: "";
display: table;
clear: both;
}


    </style>
  </head>
  <body>
    <!-- Start your project here-->
    <div>
<div class="nrow">
<div class="ncol-2"></div>
<div class="ncol-8">
<div class="nrow">
<div class="ncol-12" ></div>
</div>

<div style="border:2px solid #595959; border-radius:10px; padding:18px">

<div class="pannel-head"><p style = "font-family:georgia,garamond,serif;font-size:22px;font-style:italic;">
         --Cart--
      </p>
</div>
   <div class="container">
  <table id="cart" class="table table-hover table-condensed">
            <thead>
            <tr>
              <th style="width:50%">Product</th>
              <th style="width:10%">Price</th>
              <th style="width:8%">Quantity</th>
              <th style="width:22%" class="text-center">Subtotal</th>
              <th style="width:10%"> Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td data-th="Product">
                <div class="row">
                  <div class="col-sm-2 hidden-xs"><img src="" alt="..." class="img-responsive"/></div>
                  <div class="col-sm-10">
                    <h4 class="nomargin">Product name</h4>
                    <p>Description</p>
                  </div>
                </div>
              </td>
              <td data-th="Price">$1.99</td>
              <td data-th="Quantity">
                <input type="number" class="form-control text-center" value="1">
              </td>
              <td data-th="Subtotal" class="text-center">1.99</td>
              <td class="actions" data-th="">
                  <button type="button" class="btn btn-danger btn-sm px-3">
                <i class="fas fa" aria-hidden="true">Remove</i>
            </button>
              </td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i>Go Back</a></td>
              <td colspan="2" class="hidden-xs"></td>
              <td class="hidden-xs text-center"><strong>Total $1.99</strong></td>
              <td><a href="#" class="btn btn-success btn-block">Procced To Bill <i class="fa fa-angle-right"></i></a></td>
            </tr>
          </tfoot>
        </table>
</div>
    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="../js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>