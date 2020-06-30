<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan</title>
    
</head>
<body>

<div class="container">
<table class="table mt-1" >
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nama</th>
      <th scope="col">Lokasi</th>
      <th scope="col">Kategori</th>
      <th scope="col">Keluhan</th>
      <th scope="col">Status</th>
      <th scope="col">waktu</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
<?php $__currentLoopData = $aspirasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aspirasi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tbody>
    <tr>
    <th scope="col"><?php echo e($aspirasi->id); ?></th>
      <td><?php echo e($aspirasi->nama); ?></td>
      <td><?php echo e($aspirasi->lokasi); ?></td>
      <td><?php echo e($aspirasi->kategori); ?></td>
      <td><?php echo e($aspirasi->keluhan); ?></td>
      <td><?php echo e($aspirasi->proses); ?></td>
      <td><?php echo e($aspirasi->created_at); ?></td>
      <div class="flex-center position-ref full-height mt-2">
      <td>
      <div class="container">
      <a href="<?php echo e($aspirasi->id); ?>" class="btn btn-warning">Ubah Proses</a>
      <form action="<?php echo e($aspirasi->id); ?>" method="post">
      <?php echo method_field('delete'); ?>
      <?php echo csrf_field(); ?>
      <button class="btn btn-danger">Delete</button>
      </form>
      </td>
      </div>
     
      </div>

    </tr>
   
  
  </tbody>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<div class="flex-center position-ref full-height mt-2">
<a  href="/laporan"class="btn btn-danger">Laporkan Masalah!!!</a>
<a  href="/"class="btn btn-info">Kembali</a>


</table>
 
    
    </div>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pengaduan_app\resources\views/admin/admin.blade.php ENDPATH**/ ?>