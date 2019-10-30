<div class="row">
   <div class="col-md-8">
      <?= $this->session->flashdata('message'); ?>
   </div>
</div>

<div class="row">
   <div class="col-md-10">
      <div class="tile">
         <a href="<?= base_url('admin/addmember'); ?>" class="btn btn-primary btn-sm float-right" role="button">Add Member</a>
         <h3 class="tile-title">List Member</h3>
         <table class="table table-hover">
            <thead>
               <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               <?php $i = 1; ?>
               <?php foreach ($member as $m) : ?>
                  <tr>
                     <th><?= $i; ?></th>
                     <td><?= $m['name'] ?></td>
                     <td><?= $m['username'] ?></td>
                     <td><?= $m['email'] ?></td>
                     <td>
                        <button class="btn btn-info btn-sm" type="button">Info</button>
                        <a role="button" href="<?= base_url(); ?>admin/memberdelete/<?= $m['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete the member?');">delete</a>
                     </td>
                  </tr>
                  <?php $i++; ?>
               <?php endforeach ?>
            </tbody>
         </table>
      </div>
   </div>
</div>