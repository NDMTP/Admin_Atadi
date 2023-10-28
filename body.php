
            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="row ">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="card-statistic-4">
                                    <div class="align-items-center justify-content-between">
                                        <div class="row ">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                                <div class="card-content">
                                                    <h5 class="font-15">Đơn hàng mới</h5>
                                                    <h2 class="mb-3 font-18">
                                                        <?php                                   
                                  $servername = "localhost";
                                  $username = "root";
                                  $password = "";
                                  $dbname = "qlbanmicay";
                                  $conn = new mysqli($servername, $username, $password, $dbname);
                                  if ($conn->connect_error) {
                                  die("Connection failed: " . $conn->connect_error);
                                  }
                                  $tongkh= "SELECT COUNT(MAHOADON) AS TONGKH FROM hoadon";
                                  $result = mysqli_query($conn, $tongkh);
                                  $tong1= $result->fetch_assoc();
                                  echo $tong1["TONGKH"] ;
                          ?>
                                                    </h2>
                                                    <p class="mb-0"><span class="col-green">10%</span> Tăng</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                                <div class="banner-img">
                                                    <img src="assets/img/banner/1.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="card-statistic-4">
                                    <div class="align-items-center justify-content-between">
                                        <div class="row ">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                                <div class="card-content">
                                                    <h5 class="font-15"> Khách Hàng</h5>
                                                    <h2 class="mb-3 font-18">
                                                        <?php                                   
                                  $servername = "localhost";
                                  $username = "root";
                                  $password = "";
                                  $dbname = "qlbanmicay";
                                  $conn = new mysqli($servername, $username, $password, $dbname);
                                  if ($conn->connect_error) {
                                  die("Connection failed: " . $conn->connect_error);
                                  }
                                  $tongkh= "SELECT COUNT(EMAIL) AS TONGKH FROM nguoidung";
                                  $result = mysqli_query($conn, $tongkh);
                                  $tong1= $result->fetch_assoc();
                                  echo $tong1["TONGKH"] ;
                          ?>
                                                    </h2>
                                                    <p class="mb-0"><span class="col-orange">09%</span> Giảm</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                                <div class="banner-img">
                                                    <img src="assets/img/banner/2.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="card-statistic-4">
                                    <div class="align-items-center justify-content-between">
                                        <div class="row ">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                                <div class="card-content">
                                                    <h5 class="font-15">Dự án mới</h5>
                                                    <h2 class="mb-3 font-18">128</h2>
                                                    <p class="mb-0"><span class="col-green">18%</span>
                                                        Tăng</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                                <div class="banner-img">
                                                    <img src="assets/img/banner/3.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="card-statistic-4">
                                    <div class="align-items-center justify-content-between">
                                        <div class="row ">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                                <div class="card-content">
                                                    <h5 class="font-15">Doanh Thu</h5>
                                                    <h2 class="mb-3 font-18">60 Tỏi</h2>
                                                    <p class="mb-0"><span class="col-green">42%</span> Tăng</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                                <div class="banner-img">
                                                    <img src="assets/img/banner/4.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-lg-12">
                            <div class="card ">
                                <div class="card-header">
                                    <h4>Doanh thu theo tháng</h4>
                                    <div>
                                        <form action="chart_ngay.php" method="POST">
                                            <label> Từ ngày </label>
                                            <input class="form-group m-3" name="tgbd" type="date" value="<?php 
                                                            $ngay = $_SESSION['ngaybd'];
                                                            echo $ngay?>" id="batdau" />
                                            đến <input name="kt" class="form-group m-3" type="date"
                                                value="<?php echo $_SESSION['ngaykt'] ?>" id="ketthuc" />
                                            <button type="submit" class="btn btn-primary m-3">Chọn</button>
                                        </form>
                                        <div id="error-message" style="display: none; color: red; margin:1rem">Lỗi:
                                            Ngày bắt đầu không thể lớn hơn ngày kết thúc</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <div class="col-12-md-8" id="columnchart_values"
                                                style="width: 950px; height: 380px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $doanhthu ="
                    SELECT loaisanpham.TENLOAI, COALESCE(SUM(tongsp.doanhthu), 0) as TONGDOANHTHU
                    FROM loaisanpham LEFT JOIN (SELECT sanpham.MALOAI, SUM(hoadon.TONGTIEN) as doanhthu
                    FROM chitiethoadon JOIN sanpham ON sanpham.MASP = chitiethoadon.MASP
                    JOIN hoadon ON hoadon.MAHOADON = chitiethoadon.MAHOADON WHERE hoadon.NGAYLAP BETWEEN '".$_SESSION['ngaybd']."' AND '".$_SESSION['ngaykt']."'
                    AND hoadon.TRANGTHAIHOADON = 2 GROUP BY sanpham.MALOAI) as tongsp ON loaisanpham.MALOAI = tongsp.MALOAI GROUP BY loaisanpham.TENLOAI;";
                    $result_dt= $conn->query($doanhthu);?>
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type="text/javascript">
                    google.charts.load("current", {
                        packages: ['corechart']
                    });
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                            ["Loại sản phẩm", "doanh thu", {
                                role: "style"
                            }],
                            <?php 
                            if($result_dt->num_rows>0){            
                                while( $row = $result_dt->fetch_assoc()){
                                    echo '
                                        ["'.$row['TENLOAI'].'", '.$row['TONGDOANHTHU'].', "#38b5c5"],
                                    ';
                                }
                            }
                            else{
                                echo'
                                    ["Không có doanh thu",0, "#38b5c5"],
                                ';
                            }
                        ?>
                        ]);
                        var view = new google.visualization.DataView(data);
                        view.setColumns([0, 1,
                            {
                                calc: "stringify",
                                sourceColumn: 1,
                                type: "string",
                                role: "annotation"
                            },
                            2
                        ]);
                        var options = {
                            width: 1000,
                            height: 380,
                            padding: 2,
                            bar: {
                                groupWidth: "95%"
                            },
                            legend: {
                                position: "none"
                            },
                        };
                        var chart = new google.visualization.ColumnChart(document
                            .getElementById("columnchart_values"));
                        chart.draw(view, options);
                    }
                    $(document).ready(function() {
                        var batdauInput = $("#batdau");
                        var ketthucInput = $("#ketthuc");
                        var form = $("form");
                        var errorMessage = $("#error-message");
                        form.on("submit", function(e) {
                            var batdauDate = new Date(batdauInput.val());
                            var ketthucDate = new Date(ketthucInput.val());
                            if (batdauDate > ketthucDate) {
                                e.preventDefault();
                                errorMessage.show();
                            } else {
                                errorMessage.hide();
                            }
                        });
                    });
                    </script>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Chart</h4>
                                </div>
                                <div class="card-body">
                                    <div id="chart4" class="chartsh"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Chart</h4>
                                </div>
                                <div class="card-body">
                                    <div class="summary">
                                        <div class="summary-chart active" data-tab-group="summary-tab"
                                            id="summary-chart">
                                            <div id="chart3" class="chartsh"></div>
                                        </div>
                                        <div data-tab-group="summary-tab" id="summary-text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Chart</h4>
                                </div>
                                <div class="card-body">
                                    <div id="chart2" class="chartsh"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
