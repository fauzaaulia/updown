<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="download">
   <div class="w-100">
      <h2 class="mb-2">Download</h2>
      <table class="table table-sm table-hover">
         <thead>
            <tr>
               <th scope="col">No</th>
               <th scope="col">Tgl Upload</th>
               <th scope="col">Nama File</th>
               <th scope="col">Type</th>
               <th scope="col">Ukuran</th>
            </tr>
         </thead>
         <tbody>
            <?php
            if ($file) {
               $i = 1;
               foreach ($file as $f) : ?>
                  <tr bgcolor="#fff">
                     <th scope="row"><?= $i; ?></th>
                     <td><?= date('Y-m-d', $f['tanggal_upload']); ?></td>
                     <td><a href="<?= base_url('uploads/') . $f['file']; ?>"><?= $f['nama_file']; ?></a></td>
                     <td><?= $f['tipe_file']; ?></td>
                     <td><?= $f['ukuran_file']; ?>KB</td>
                  </tr>
                  <?php $i++; ?>
               <?php endforeach ?>
            <?php } else { ?>
               <tr bgcolor="#fff">
                  <td align="center" colspan="5">Tidak ada data!</td>
               </tr>
            <?php } ?>


         </tbody>
      </table>
   </div>
</section>
<hr class="m-0">