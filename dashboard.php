<?php

  include 'includes/header.php';
  include 'includes/navigation.php';
  include 'includes/functions.php';
  session_start();
  sessionCheck();
  include 'includes/sidebar.php';

?>



<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">

    </div>
    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
          <i class="mdi mdi-home"></i>
        </span>
        Dashboard
      </h3>

    </div>
    <div class="row">
      <div class="col-md-7 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="clearfix">
              <h4 class="card-title float-left">Sales Statistics</h4><br><br><br>
              <div id="visit-sale-chart-legend" class="rounded-legend legend-horizontal legend-top-right float-right"></div>
            </div>
            <canvas id="visit-sale-chart" class="mt-4"></canvas>
          </div>
        </div>
      </div>
      <div class="col-md-5 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Sale Products Percentage</h4>
            <br><br><br>
            <canvas id="traffic-chart"></canvas>
            <div id="traffic-chart-legend" class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>
          </div>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-danger card-img-holder text-white">
          <div class="card-body">
            <img src="images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
            <h4 class="font-weight-normal mb-3">Weekly Sales
              <i class="mdi mdi-chart-line mdi-24px float-center"></i>
            </h4>
            <h2 class="mb-5"> 50000 </h2>
          </div>
        </div>
      </div>



      <!-- The data is going to be fetched from the database -->

    </div>
    <!-- content-wrapper ends -->

    <?php include 'includes/footer.php'; ?>