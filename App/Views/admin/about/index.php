<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Về chúng tôi</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/Home" ?>Trang chủ</a></li>
          <li class="breadcrumb-item active">Về chúng tôi</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

  <div class="container-fluid">
    <div class="row">

      <?php
      $information = require(CONF . DS . 'about.php');
      foreach ($information as $key => $member) : ?>
        <div class="col-md-6">
          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle" src="<?= DOCUMENT_ROOT ?>/public/admin/img/<?= $key ?>-avatar.png" alt="User profile picture">
              </div>

              <h3 class="profile-username text-center"><?= $member['fullname'] ?></h3>

              <p class="text-muted text-center"><?= $member['skill'] ?></p>

              <ul class="list-group list-group-unbordered mb-3">

                <li class="list-group-item">
                  <b>Mã số sinh viên</b> <span class="float-right"><?= $member['id'] ?></span>
                </li>
                <li class="list-group-item">
                  <b>Chuyên ngành</b> <span class="float-right"><?= $member['major'] ?></span>
                </li>
                <li class="list-group-item">
                  <b>Trường</b> <span class="float-right"><?= $member['university'] ?></span>
                </li>
                <li class="list-group-item">
                  <b>Email</b> <span class="float-right"><?= $member['email'] ?></span>
                </li>
                <li class="list-group-item">
                  <b>Số điện thoại</b> <span class="float-right"><?= $member['phone'] ?></span>
                </li>

              </ul>

              <div class="container">
                <div class="row">
                  <div class="col text-center">
                    <a href="<?= $member['facebook'] ?>" target="_blank" class="fab fa-facebook fa-2x"></a>
                  </div>
                  <div class="col text-center">
                    <a href="<?= $member['linkedin'] ?>" target="_blank" class="fab fa-linkedin fa-2x"></a>
                  </div>
                  <div class="col text-center">
                    <a href="<?= $member['github'] ?>" target="_blank" class="fab fa-github fa-2x"></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      <?php endforeach; ?>
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->