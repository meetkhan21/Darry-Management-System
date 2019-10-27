<?php

include 'includes/header.php';
include 'includes/navigation.php';
include 'includes/functions.php';
session_start();
sessionCheck();
include 'includes/sidebar.php';
purchase();
?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
    </div>
    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
          <i class="mdi mdi-home"></i>
        </span>
        Daily Purchasing
      </h3>

    </div>
    <div class="col-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">

          <form class="forms-sample col-lg-6" method="post" action="#">
              <div class="form-group">
                <div class="form-group">
                  <label> <strong> Customer Name </strong></label>
                  <input type="text" class="form-control" placeholder="Name" name="c_name" required>
                </div>
                <div class="form-group">
                  <label> <strong> Customer Contact </strong></label>
                  <input type="text" class="form-control" placeholder="Mobile No" name="c_contact" required>
                </div>
                <div class="form-group">
                  <label> <strong> Customer Address </strong></label>
                  <input type="text" class="form-control" placeholder="Address" name="c_address" required>
                </div>
                <label><strong> Product Name </strong></label>
                <input type="text" class="form-control" placeholder="Product Name" name="p_name" required>
              </div>
              <div class="form-group">
                <label> <strong> Product Quantity </strong></label>
                <input type="text" class="form-control" placeholder="Quantity" name="p_quantity" required>
              </div>
              <div class="form-group">
                <label> <strong> Total Price </strong></label>
                <input type="text" class="form-control" placeholder="Total Cost" name="p_price" required>
              </div>
            <button type="submit" class="btn btn-gradient-primary mr-2" name="submit">Sell</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- The data is going to be fetched from the database -->
</div>
<!-- content-wrapper ends -->
<?php include 'includes/footer.php' ?>