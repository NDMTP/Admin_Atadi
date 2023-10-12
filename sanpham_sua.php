<!DOCTYPE html>
<html lang="en">


<!-- email-inbox.html  21 Nov 2019 03:50:57 GMT -->
<?php
  include("connect.php");
  include('head.php');
?>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <?php 
        include('navbar.php');
        include('sidebar.php');
      ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-lg-3"></div>
              <div class="col-6 col-md-6 col-lg-6">
                <div class="card">
                  <form method="GET" action="themsanpham.php">
                    <div class="card-header">
                      <h4>Thêm sản phẩm</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Loại sản phẩm</label>
                        <select name="loai" id="" class="form-control">
                          <?php
                            $sql = "select * from loaisanpham";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                              $result = $conn->query($sql);
                              $result_all = $result -> fetch_all(MYSQLI_ASSOC);
                              foreach ($result_all as $row) {
                                echo '<option value="'.$row['MALOAI'].'">'.$row['TENLOAI'].'</option>';
                              }
                            }
                          ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Tên sản phẩm</label>
                        <input type="text" class="form-control" id="tensp" name="tensp" >
                      </div>
                      <div class="form-group">
                        <label>Size, Giá:</label>

                        <div class="row">
                          <div class="col-1"></div>
                          <div class="col-5 price">
                            Size M - <input type="number" min="0" step="1000" name="M" id="" value="0"><br>
                            Size L - <input type="number" min="0" step="1000" name="L" id="" value="0"><br>
                            Size XL - <input type="number" min="0" step="1000" name="XL" id="" value="0"><br>
                          </div>
                          <div class="col-5 price">
                            Size Vừa - <input type="number" min="0" step="1000" name="Vừa" id="" value="0"><br>
                            Size Lớn - <input type="number" min="0" step="1000" name="Lớn" id="" value="0"><br>
                            Size Combo - <input type="number" min="0" step="1000" name="Combo" id="" value="0"><br>
                          </div>
                          <div class="col-1"></div>
                          <style>
                            .price{
                              display: flex;
                              flex-direction: column;
                              justify-content: space-between;
                            }

                            .price input{
                              max-width: 8rem;
                            }
                          </style>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Mô tả</label>
                        <input type="text" class="form-control" id="mota" name="mota" >
                      </div>
                      <div class="form-group">
                        <label>Link ảnh sản phẩm</label><br>
                        <div class="text-center">
                          <input type="file" name="pdimg" id="">
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary" class="mt-2">Thêm sản phẩm</button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-lg-3"></div>
            </div>
          </div>
        </section>
      </div>
      <?php require 'footer.php' ?>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>


<!-- email-inbox.html  21 Nov 2019 03:50:58 GMT -->
</html>