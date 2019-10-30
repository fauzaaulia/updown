<div class="col-md-8">
   <div class="tile">
      <h3 class="tile-title">Register</h3>
      <div class="tile-body">
         <form method="post" action="<?= base_url('admin/addmember') ?>" class="form-horizontal">
            <div class="form-group row">
               <label class="control-label col-md-3">Username</label>
               <div class="col-md-8">
                  <input name="username" class="form-control" type="text" placeholder="Enter username" value="<?= set_value('username'); ?>">
                  <div class="form-control-feedback text-danger"><?= form_error('username') ?></div>
               </div>
            </div>
            <div class="form-group row">
               <label class="control-label col-md-3">Name</label>
               <div class="col-md-8">
                  <input name="nama" class="form-control" type="text" placeholder="Enter full name" value="<?= set_value('nama'); ?>">
                  <div class=" form-control-feedback text-danger"><?= form_error('nama') ?></div>
               </div>
            </div>
            <div class="form-group row">
               <label class="control-label col-md-3">Email</label>
               <div class="col-md-8">
                  <input name="email" class="form-control" type="email" placeholder="Enter email address" value="<?= set_value('email'); ?>">
                  <div class=" form-control-feedback text-danger"><?= form_error('email') ?></div>
               </div>
            </div>
            <div class="form-group row">
               <label class="control-label col-md-3">Password</label>
               <div class="col-md-8">
                  <input name="password1" class="form-control" type="password" placeholder="Enter password">
                  <div class=" form-control-feedback text-danger"><?= form_error('password1') ?></div>
               </div>
            </div>
            <div class="form-group row">
               <label class="control-label col-md-3">Password</label>
               <div class="col-md-8">
                  <input name="password2" class="form-control" type="password" placeholder="Enter password confirm">
               </div>
            </div>
            <div class="form-group row">
               <label class="control-label col-md-3">Foto</label>
               <div class="col-md-8">
                  <input class="form-control" name="images" type="file">
               </div>
            </div>
            <hr>
            <div class="row">
               <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>