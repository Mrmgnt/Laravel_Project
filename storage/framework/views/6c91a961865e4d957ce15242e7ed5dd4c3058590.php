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

<div class="card" style="width: 38rem ;">

  <div class="card-body">

    <h5 class="card-title"><?php echo e($aspirasi->keluhan); ?></h5>

    <h6 class="card-subtitle mb-2 text-muted"><?php echo e($aspirasi->proses); ?></h6>
    <p class="card-text">Keluhan</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>

</div>
</div>
</body>
<?php $__env->stopSection(); ?>
</html>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pengaduan_app\resources\views/admin/show.blade.php ENDPATH**/ ?>