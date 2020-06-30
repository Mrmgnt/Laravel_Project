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
<form method="post" action="/laporan">
<?php echo csrf_field(); ?>
    <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="" placeholder="Isikan Nama" name="nama">

      <label for="lokasi">Lokasi</label>
      <input class="form-control form-control-lg" type="text" placeholder="Lokasi.." name="lokasi">

     
<label for="kategori">Kategori</label>
<select class="form-control form-control-lg " name="kategori">
<option selected>Kategori...</option>
  <option>Keamanan</option>
  <option>Kebersihan</option>
  <option>Kerukunan</option>
  <option>Kenyamanan</option>
</select>   
<label for="proses">Proses</label>
<select class="form-control form-control-lg " name="proses">
<option>proses</option>

</select>

<label for="exampleFormControlTextarea1">Keluhan</label>
    <textarea class="form-control"  rows="3" placeholder="isikan keluhan anda disini" name="keluhan"></textarea>

        <button  type="submit" class="btn btn-danger mt-3">Laporkan!!</button>
        <a  href="/" class="btn btn-primary mt-3">Kembali<a>
    </form>
    
    
    </div>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pengaduan_app\resources\views/laporan.blade.php ENDPATH**/ ?>