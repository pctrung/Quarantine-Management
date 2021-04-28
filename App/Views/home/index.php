<div class="container d-flex justify-content-center mt-5">
  <div class="<?php if (isset($data['name'])) echo "col-12" ?>">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <h4 class="text-bold">Hệ thống Quản lý cách ly</h4>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="<?php if (isset($data['name'])) echo "col-12 col-md-5";
                      else echo "col-12" ?>">
            <h5 class="login-box-msg">Tra cứu thông tin người cách ly</h5>
            <?php require_once(VIEW . DS . "shared/noti.php") ?>
            <form action="<?= DOCUMENT_ROOT ?>/home/detail/" method="post">
              <div class="form-group mb-3">
                <label for="id">Mã cách ly</label>
                <input required type="number" class="form-control" placeholder="Mã số được cấp (*)" name="id" id="id" value="<?php if (isset($data['name'])) echo $data['id'] ?>">
              </div>
              <div class="form-group mb-3">
                <label for="name">Họ tên</label>
                <input type="text" class="form-control" placeholder="Họ tên (không dấu)" id="name" name="fullname" value="<?php if (isset($data['name'])) echo $data['name'] ?>">
              </div>
              <div class="row">
                <!-- /.col -->
                <div class="col-4 mb-2 ml-auto">
                  <button type="submit" class="btn btn-primary btn-block">Tìm kiếm</button>
                </div>
                <!-- /.col -->
              </div>
            </form>
          </div>
          <?php if (isset($data['name'])) : ?>
            <!-- Profile Image -->
            <div class="card col-12 col-md-6 ml-auto">
              <div class="card-body box-profile">
                <h5 class="text-center">Thông tin cá nhân</h5>
                <ul class="list-group list-group-unbordered">
                  <li class="list-group-item">
                    <b>Mã:</b> <span class="float-right"><?= $data['id'] ?></span>
                  </li>
                  <li class="list-group-item">
                    <b>Họ tên:</b> <span class="float-right"><?= $data['name'] ?></span>
                  </li>
                  <li class="list-group-item">
                    <b>CMND</b> <span class="float-right"><?= $data['identityCard'] ?></span>
                  </li>
                  <li class="list-group-item">
                    <b>Giới tính</b> <span class="float-right"><?= $data['gender'] ?></span>
                  </li>
                  <li class="list-group-item">
                    <b>Quốc tịch:</b> <span class="float-right"><?= $data['nationality'] ?></span>
                  </li>
                  <li class="list-group-item">
                    <b>Địa chỉ:</b> <span class="float-right"><?= $data['address'] ?></span>
                  </li>
                </ul>
              <?php endif; ?>
              </div>
            </div>
        </div>
        <?php if (isset($data['name'])) : ?>
          <h5 class="text-bold text-center mt-2">Lịch sử cách ly</h5>
          <div class="overflow-auto">
            <table class="table shadow-sm border mt-2">
              <thead class="bg-primary">
                <tr>
                  <th rowspan="2" class="align-middle">STT</th>
                  <th rowspan="2" class="align-middle">Khu cách ly</th>
                  <th rowspan="2" class="align-middle">Phòng</th>
                  <th rowspan="2" class="align-middle">Ngày vào</th>
                  <th rowspan="2" class="align-middle">Ngày ra</th>
                  <th rowspan="2" class="align-middle">Lý do cách ly</th>
                  <th rowspan="2" class="align-middle">Triệu chứng</th>
                  <th class="text-center" colspan="3">Kết quả</th>
                </tr>
                <tr class="bg-primary">
                  <th>Lần 1</th>
                  <th>Lần 2</th>
                  <th>Cuối</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Bệnh viện Quận 7</td>
                  <td>Phòng 32</td>
                  <td>11/5/2020</td>
                  <td>1/6/2020</td>
                  <td>Nhập cảnh từ Úc</td>
                  <td>Không có</td>
                  <td>Âm tính</td>
                  <td>Âm tính</td>
                  <td>Âm tính</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Huyện Cần Giờ</td>
                  <td>Phòng 4</td>
                  <td>24/11/2020</td>
                  <td>10/12/2020</td>
                  <td>Có triệu chứng nghi nhiễm</td>
                  <td>Sốt, ho</td>
                  <td>Âm tính</td>
                  <td>Dương tính</td>
                  <td>Dương tính</td>
                </tr>
              </tbody>
            </table>
          </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  <?php endif; ?>
  </div>
</div>
<!-- /.card-body -->
</div>
<!-- /.card -->
</div>
<!-- /.login-box -->
</div>
</div>