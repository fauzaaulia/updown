<div class="row">
   <div class="col-md-12">
      <?= $this->session->flashdata('message'); ?>
      <div class="tile">
         <div class="tile-body">
            <div class="table-responsive">
               <table class="table table-hover table-bordered " id="sampleTable">
                  <thead>
                     <tr>
                        <th>No</th>
                        <th>Tgl Upload</th>
                        <th>Nama File</th>
                        <th>Type</th>
                        <th>Size</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                     if ($file) {
                        $i = 1;
                        foreach ($file as $f) : ?>
                           <tr>
                              <th scope="row"><?= $i; ?></th>
                              <td><?= date('Y-m-d', $f['tanggal_upload']); ?></td>
                              <td><?= $f['nama_file']; ?></a></td>
                              <td><?= $f['tipe_file']; ?></td>
                              <td><?= $f['ukuran_file']; ?>KB</td>
                              <td>
                                 <a target="_blank" href="<?= base_url('uploads/') . $f['file']; ?>" class="btn btn-primary btn-sm" role="button">Open</a>
                                 <a href="<?= base_url(); ?>admin/filedelete/<?= $f['id']; ?>" class="btn btn-danger btn-sm" role="button">Delete</a>
                              </td>
                           </tr>
                           <?php $i++; ?>
                        <?php endforeach ?>
                     <?php } else { ?>
                        <tr>
                           <td align="center" colspan="6">Tidak ada data!</td>
                        </tr>
                     <?php } ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>