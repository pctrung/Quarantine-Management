<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Quản lý người cách ly</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= DOCUMENT_ROOT ?>/admin/home">Trang chủ</a></li>
          <li class="breadcrumb-item active">Quản lý người cách ly</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

  <?php require_once(VIEW . DS . "shared/noti.php") ?>

  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header d-flex align-items-center">
            <h3 class="card-title">Danh sách người cách ly</h3>
            <a href="<?= DOCUMENT_ROOT ?>/admin/quarantine/create" class="btn btn-primary ml-auto">Thêm</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="main-table" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Mã</th>
                  <th>Họ tên</th>
                  <th>CMND</th>
                  <th>Giới tính</th>
                  <th>Ngày sinh</th>
                  <th>SĐT</th>
                  <th>Quốc tịch</th>
                  <th>Địa chỉ</th>
                  <th>Mã phòng</th>
                  <th>Thao tác</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($data as $key => $quarantine) : ?>
                  <tr>
                    <td><?= $quarantine['id'] ?></td>
                    <td><?= $quarantine['name'] ?></td>
                    <td><?= $quarantine['identityCard'] ?></td>
                    <td><?= $quarantine['gender'] ?></td>
                    <td><?= $quarantine['birthday'] ?></td>
                    <td><?= $quarantine['phone'] ?></td>
                    <td><?= $quarantine['nationality'] ?></td>
                    <td><?= $quarantine['address'] ?></td>
                    <td><?= $quarantine['quarantine-room-id'] ?></td>
                    <td class="project-actions text-right d-flex flex-column d-none d-md-block">
                      <a class="btn btn-info btn-sm mb-1 w-100" href="<?= DOCUMENT_ROOT ?>/admin/quarantine/edit/<?= $quarantine['id'] ?>">
                        <i class="fas fa-edit">
                        </i>
                        Sửa
                      </a>
                      <button type="button" class="btn btn-sm btn-danger mb-1 w-100" data-toggle="modal" data-target="#deleteQuarantineConfirm<?= $key ?>">
                        <i class="fas fa-trash">
                        </i>
                        Xóa
                      </button>

                      <!-- Modal -->
                      <div class="modal fade" id="deleteQuarantineConfirm<?= $key ?>" tabindex="-1" role="dialog" aria-labelledby="deleteQuarantineConfirmName<?= $key ?>" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="deleteConfirm<?= $key ?>">Xác nhận xóa</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body text-left">
                              Xóa <?= $quarantine['name'] ?>?
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                              <a href="<?= DOCUMENT_ROOT ?>/admin/quarantine/delete/<?= $quarantine['id'] ?>" class="btn btn-danger">Xóa</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>