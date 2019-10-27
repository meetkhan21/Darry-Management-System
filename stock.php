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
        All Stock
      </h3>
    </div>

    <div class="col-lg-11 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Here is the available Stock</h4>
          <br><br>
          <table class="table table-dark">
            <thead>
              <tr>
                <th>
                  Product ID
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
                  Product Entry Date
                </th>
                <th>
                  Product Status
                </th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <?php stock(); ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>


    <!-- The data is going to be fetched from the database -->

  </div>
  <!-- content-wrapper ends -->

  <?php include 'includes/footer.php'; ?>