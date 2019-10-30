<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="upload">
   <div class="w-100">
      <h2 class="mb-3">Upload File</h2>
      <div class="alert alert-warning" role="alert">
         Upload file Anda dengan melengkapi form di bawah ini. Semua ekstensi file bisa diupload dan besar file (file size) maksimal hanya 10 MB.
      </div>

      <form action="" method="post" enctype="multipart/form-data">
         <div class="form-group row">
            <label for="namafile" class="col-sm-2 col-form-label">Nama File</label>
            <div class="col-sm-6">
               <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama File" required>
            </div>
         </div>
         <div class="form-group row">
            <label for="uploadfile" class="col-sm-2 col-form-label">Upload File</label>
            <div class="col-sm-6">
               <input type="file" class="form-control-file" id="upload" name="file" required>
            </div>
         </div>
         <div class="form-group row">
            <div class="col-sm-2">
            </div>
            <div class="col-sm-6">
               <button type="submit" name="upload" class="btn btn-primary">Upload</button>
            </div>
         </div>
      </form>

   </div>
</section>

<hr class="m-0">