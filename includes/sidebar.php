 <!-- partial -->
 <div class="container-fluid page-body-wrapper">
   <!-- partial:partials/_sidebar.html -->
   <nav class="sidebar sidebar-offcanvas" id="sidebar">
     <ul class="nav">

       <!-- This is the list item for dashboard -->
       <li class="nav-item">
         <a class="nav-link" href="dashboard.php">
           <span class="menu-title">Dashboard</span>
           <i class="mdi mdi-home menu-icon"></i>
         </a>
       </li>

       <!-- List item for Inventory -->
       <li class="nav-item">
         <a class="nav-link" data-toggle="collapse" href="#ui-basi" aria-expanded="false" aria-controls="ui-basi">
           <span class="menu-title"> Inventory </span>
           <i class="menu-arrow"></i>
           <i class="mdi mdi-clipboard-check menu-icon"></i>
         </a>
         <div class="collapse" id="ui-basi">
           <ul class="nav flex-column sub-menu">
             <li class="nav-item"> <a class="nav-link" href="stock.php">View Stock</a></li>
             <li class="nav-item"> <a class="nav-link" href="add_stock.php">Add Product in Inventory</a></li>
           </ul>
         </div>
       </li>


       <!-- list item for sales -->
       <li class="nav-item">
         <a class="nav-link" data-toggle="collapse" href="#ui-bas" aria-expanded="false" aria-controls="ui-bas">
           <span class="menu-title"> Sales </span>
           <i class="menu-arrow"></i>
           <i class="mdi mdi-clipboard-check menu-icon"></i>
         </a>
         <div class="collapse" id="ui-bas">
           <ul class="nav flex-column sub-menu">
             <li class="nav-item"> <a class="nav-link" href="sales.php">View all Sale Record</a></li>
           </ul>
         </div>
       </li>


       <!-- list item for purchase -->
       <li class="nav-item">
         <a class="nav-link" href="purchase.php">
           <span class="menu-title"> Purchase </span>
           <i class="mdi mdi-square-inc-cash menu-icon"></i>
         </a>
       </li>
     </ul>
   </nav>