<?php

    include 'includes/header.php';
    include 'includes/navigation.php';
    include 'includes/functions.php';
    session_start();
    sessionCheck();
    include 'includes/sidebar.php';
    addStock();

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
                Add Product in Inventory
            </h3>
        </div>

        <!-- The data is going to be fetched from the database -->
        <div class="row">
            <div class="col-md-5 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Please Enter the data of the product</h4>
                        <br><br>

                        <form class="forms-sample" method="post" action="#" enctype="multipart/form-data">
                            <div class="form-group">
                                <label> <strong> Product Name </strong></label>
                                <input type="text" class="form-control" placeholder="Name" name="name">
                            </div>
                            <div class="form-group">
                                <label> <strong> Product quanity </strong></label>
                                <input type="text" class="form-control" placeholder="Quantity" name="quantity">
                            </div>
                            <div class="form-group">
                                <label> <strong> Product Price </strong></label>
                                <input type="text" class="form-control" placeholder="Price" name="price">
                            </div>
                            <div class="form-group">
                                <label> <strong> Product Status </strong></label>
                                <select class="form-control" name="status">
                                    <option> <strong> Available </strong></option>
                                    <option> <strong> Not Available </strong></option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-gradient-primary mr-2" name="submit">Submit</button>
                            <a href="stock.php" class="btn btn-light">Cancel</a>
                            <br><br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->

    <?php include 'includes/footer.php'; ?>