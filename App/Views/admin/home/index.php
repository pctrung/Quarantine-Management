<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Trang thống kê</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
          <li class="breadcrumb-item active">Thống kê</li>
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
        <div class="small-box bg-info">
          <div class="inner">
            <h3>5</h3>

            <p>Người cách ly mới</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="#" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>10</h3>

            <p>Ca dương tính mới</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="#" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>12</h3>

            <p>Ca mới phục hồi</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="#" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>80<sup style="font-size: 20px">%</sup></h3>

            <p>Số phòng còn trống</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="#" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <h5 class="card-header bg-primary">
            Thống kê hôm nay
            <a href="#"><i class="fas fa-print float-right"></i></a>
          </h5>
          <div class="card-body h-100">
            <img class="w-100" src="<?= DOCUMENT_ROOT ?>/public/admin/img/thong-ke-hom-nay.png" alt="Thống kê hôm nay">
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <h5 class="card-header bg-primary">
            Biểu đồ trong nước
            <a href="#"><i class="fas fa-print float-right"></i></a>
          </h5>
          <div class="card-body p-4 ">
            <img class="w-100" src="<?= DOCUMENT_ROOT ?>/public/admin/img/bieu-do-the-gioi.png" alt="Biểu đồ Việt Nam">
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-md-6">
        <div class="card">
          <h5 class="card-header bg-danger">
            Thống kê cách ly
            <a href="#"><i class="fas fa-print float-right"></i></a>
          </h5>
          <div class="card-body">
            <img class="w-100" src="<?= DOCUMENT_ROOT ?>/public/admin/img/thong-ke-cach-ly.png" alt="Thống kê cách ly">
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6">
        <div class="card">
          <h5 class="card-header bg-danger">
            Thống kê kiểm dịch
            <a href="#"><i class="fas fa-print float-right"></i></a>
          </h5>
          <div class="card-body">
            <img class="w-100" src="<?= DOCUMENT_ROOT ?>/public/admin/img/thong-ke-kiem-dich.png" alt="Thống kê kiểm dịch">
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-6">
        <div class="card">
          <h5 class="card-header bg-success">
            Thống kê thế giới
            <a href="#"><i class="fas fa-print float-right"></i></a>
          </h5>
          <div class="card-body">
            <img class="w-100" src="<?= DOCUMENT_ROOT ?>/public/admin/img/thong-ke-the-gioi.png" alt="Thống kê thế giới">
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6">
        <div class="card">
          <h5 class="card-header bg-success">
            Dữ liệu tiêm vắc xin
            <a href="#"><i class="fas fa-print float-right"></i></a>
          </h5>
          <div class="card-body">
            <img class="w-100" src="<?= DOCUMENT_ROOT ?>/public/admin/img/thong-ke-vac-xin.png" alt="Dữ liệu tiêm vắc xin">
          </div>
        </div>
      </div>
    </div>
</section>
<!-- /.content -->