<?php include_once 'header.php'; 

$sql_select_slider = "select * from `slider`";
$data_select = mysqli_query($conn,$sql_select_slider);
$slider_count = mysqli_num_rows($data_select);

$sql_select_products = "select * from `product`";
$data_products = mysqli_query($conn,$sql_select_products);
$products_count = mysqli_num_rows($data_products);

$sql_select_products_stock = "select * from `product` where `stock`='In Stock'";
$data_products_stock = mysqli_query($conn,$sql_select_products_stock);
$products_count_stock = mysqli_num_rows($data_products_stock);

$sql_select_products_out = "select * from `product` where `stock`='Out of Stock'";
$data_products_out = mysqli_query($conn,$sql_select_products_out);
$products_count_out = mysqli_num_rows($data_products_out);

$sql_select_blog = "select * from `blog`";
$data_blog = mysqli_query($conn,$sql_select_blog);
$blog_count = mysqli_num_rows($data_blog);

$sql_select_contact = "select * from `contacts`";
$data_contact = mysqli_query($conn,$sql_select_contact);
$contact_count = mysqli_num_rows($data_contact);

$sql_select_contactt = "select * from `calculations`";
$data_contactt = mysqli_query($conn,$sql_select_contactt);
$contact_countr = mysqli_num_rows($data_contactt);

$sql_select_contactta = "select * from `kitchencontact`";
$data_contactta = mysqli_query($conn,$sql_select_contactta);
$contact_countra = mysqli_num_rows($data_contactta);


$sql_select_order = "select * from `order` where `status`='Pending'";
$data_order = mysqli_query($conn,$sql_select_order);
$order_count = mysqli_num_rows($data_order);

$sql_select_order_deli = "select * from `order` where `status`='Delivered'";
$data_order_deli = mysqli_query($conn,$sql_select_order_deli);
$order_count_deli = mysqli_num_rows($data_order_deli);

$sql_select_order_can = "select * from `order` where `status`='Cancelled-By-Supplier' or `status`='Cancelled-By-Client'";
$data_order_can = mysqli_query($conn,$sql_select_order_can);
$order_count_can = mysqli_num_rows($data_order_can);
?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-dark">
              <div class="inner">
                <h3>
                  <?php echo $contact_count; ?>
                </h3>

                <p>All Enquiry Contact</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="contact.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-dark">
              <div class="inner">
                <h3>
                  <?php echo $contact_countr; ?>
                </h3>

                <p>Budget Calculator Form</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="calculator.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-dark">
              <div class="inner">
                <h3>
                  <?php echo $contact_countra; ?>
                </h3>

                <p>Budget K-Calculator Form</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="kcalculator.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
<?php include_once 'footer.php'; ?>

<!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php include_once 'scripts.php'; ?>


</body>
</html>