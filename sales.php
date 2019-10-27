<?php

include 'includes/header.php';
include 'includes/navigation.php';
include 'includes/functions.php';
session_start();
sessionCheck();
include 'includes/sidebar.php';

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
        Sales
      </h3>

    </div>

    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Here is the list of all the Sales</h4>

          <table class="table table-dark">
            <thead>
              <tr>
                <th>
                  Sale ID
                </th>
                <th>
                  Product Name
                </th>
                <th>
                  Product Quantity
                </th>
                <th>
                  Product Price
                </th>
                <th>
                  Customer Name
                </th>
                <th>
                  Customer Contact
                </th>
                <th>
                  Customer Address
                </th>
              </tr>
            </thead>

            <tbody>
              <tr> <?php showSales(); ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>



    <!-- The data is going to be fetched from the database -->

  </div>
  <!-- content-wrapper ends -->


  <?php include 'includes/footer.php' ?>