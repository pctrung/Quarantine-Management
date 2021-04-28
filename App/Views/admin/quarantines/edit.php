 <!-- Content Header (Page header) -->
 <section class="content-header">
   <div class="container-fluid">
     <div class="row mb-2">
       <div class="col-sm-6">
         <h1>Cập nhật</h1>
       </div>
       <div class="col-sm-6">
         <ol class="breadcrumb float-sm-right">
           <li class="breadcrumb-item"><a href="<?= DOCUMENT_ROOT ?>/admin/quarantine" ?>Quản lý người cách ly</a></li>
           <li class="breadcrumb-item active">Cập nhật thông tin</li>
         </ol>
       </div>
     </div>
   </div>
   <!-- /.container-fluid -->
 </section>

 <!-- Main content -->
 <section class="content">
   <?php require_once(VIEW . DS . "shared/noti.php") ?>
   <form action="<?= DOCUMENT_ROOT ?>/admin/quarantine/update/<?= $data['id'] ?>" method="post" enctype="multipart/form-data">
     <div class="row">
       <div class="col-md-12">
         <div class="card card-primary">
           <div class="card-header">
             <h3 class="card-title">Cập nhật thông tin người cách ly</h3>
           </div>
           <div class="card-body">
             <div class="form-group">
               <label for="name">Tên người cách ly <span style="color: red;">(*)</span></label>
               <input required type="text" name="name" id="name" class="form-control" value="<?= $data['name'] ?>">
             </div>
             <div class="form-group">
               <label for="identityCard">Số CMND <span style="color: red;">(*)</span></label>
               <input required type="number" id="identityCard" name="identityCard" class="form-control" value="<?= $data['identityCard'] ?>"></input>
             </div>
             <div class="form-group">
               <label for="birthday">Ngày sinh</label>
               <input type="date" id="birthday" name="birthday" class="form-control" value="<?= $data['birthday'] ?>"></input>
             </div>
             <div class="form-group">
               <label for="gender">Giới tính <span style="color: red;">(*)</span></label>
               <div class="form-check">
                 <label class="form-check-label" for="male">
                   <input type="radio" class="form-check-input" name="gender" id="male" value="M">
                   Nam
                 </label>
               </div>
               <div class="form-check">
                 <label class="form-check-label" for="female">
                   <input type="radio" class="form-check-input" name="gender" id="female" value="F">
                   Nữ
                 </label>
               </div>
               <div class="form-check">
                 <label class="form-check-label" for="other">
                   <input type="radio" class="form-check-input" name="gender" id="other" value="O">
                   Khác
                 </label>
               </div>
             </div>
             <div class="form-group">
               <label for="phone">Số điện thoại</label>
               <input type="number" id="phone" name="phone" class="form-control" value="<?= $data['phone'] ?>"></input>
             </div>
             <div class="form-group">
               <label for="nationality">Quốc tịch <span style="color: red;">(*)</span></label>
               <input type="text" id="nationality" name="nationality" class="form-control" value="<?= $data['nationality'] ?>"></input>
             </div>
             <div class="form-group">
               <label for="hometown">Quê quán <span style="color: red;">(*)</span></label>
               <input type="text" id="hometown" name="hometown" class="form-control" value="<?= $data['hometown'] ?>"></input>
             </div>
             <div class="form-group">
               <label for="address">Địa chỉ <span style="color: red;">(*)</span></label>
               <textarea id="address" name="address" class="form-control" value="<?= $data['address'] ?>"></textarea>
             </div>
             <div class="row">
               <div class="col-12">
                 <a class="btn btn-secondary float-left" href="<?= DOCUMENT_ROOT ?>/admin/quarantine">
                   Hủy
                 </a>
                 <input type="reset" value="Nhập lại" class="btn btn-secondary ml-4 float-left">
                 <input type="submit" value="Lưu" class="btn btn-success float-right">
               </div>
             </div>
           </div>
           <!-- /.card-body -->
         </div>
       </div>
     </div>

   </form>
 </section>
 <!-- /.content -->