 
 <!-- START FORM -->
 <?php $__env->startSection('konten'); ?>
 <form action='<?php echo e(url('dosen/'.$data->nim)); ?>' method='post'>
     <?php echo csrf_field(); ?>
     <?php echo method_field('PUT'); ?>
     <div class="my-3 p-3 bg-body rounded shadow-sm">
         <div class="mb-3 row">
             <label for="nim" class="col-sm-2 col-form-label">NIM</label>
             <div class="col-sm-10">
                 <?php echo e($data->nim); ?>

             </div>
         </div>
         <div class=" mb-3 row">
             <label for="nama" class="col-sm-2 col-form-label">Nama</label>
             <div class="col-sm-10">
                 <input type="text" class="form-control" name='nama' value="<?php echo e($data->nama); ?>" id="nama">
             </div>
         </div>
         <div class="mb-3 row">
             <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
             <div class="col-sm-10">
                 <input type="text" class="form-control" name='jurusan' value="<?php echo e($data->jurusan); ?>" id="jurusan">
             </div>
         </div>
         <div class="mb-3 row">
             <label for="nilai" class="col-sm-2 col-form-label">nilai</label>
             <div class="col-sm-10">
                 <input type="text" class="form-control" name='nilai' value="<?php echo e($data->nilai); ?>" id="nilai">
             </div>
         </div>
         <div class="mb-3 row">
             <label for="jurusan" class="col-sm-2 col-form-label"></label>
             <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
                 <a href="<?php echo e(url('dosen')); ?>" class="btn btn-secondary">KEMBALI</a>
             </div>
         </div>
     </div>
 </form>
 <!-- AKHIR FORM -->
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.tamplate', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\MAHASISWA\nilai_mahasiswa\resources\views/dosen/edit.blade.php ENDPATH**/ ?>