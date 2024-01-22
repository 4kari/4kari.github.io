
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tes-LSPTIK</title>


  <link href="<?php echo base_url();?>/assets/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body >
  <div class="container mt-3">
  <h4 class="mt-3">Perpangkatan</h4>
    <p class="mb-4">Pada halaman ini dapat dilakukan perhitungan pangkat, isikan nilai awal dan n (banyaknya pangkat)</p> 
    <form method="POST" action="<?= base_url('pangkat/hitung')?>">                        
      <div class="card shadow-sm mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Input Data</h6>
        </div>
        <div class="card-body">
          <label for="nama">Nilai</label>
          <div class="form-group">
            <input type="number" class="form-control" placeholder="Masukkan Nilai Awal" name="nilai" id="nilai" required="">
          </div>
          <label for="nim">N-pangkat</label>
          <div class="form-group">
            <input type="number" class="form-control" placeholder="Masukkan Nilai Pangkat" name="pangkat" id="pangkat" required="">
          </div>
        </div>
        <div class="card-footer">
          <div class="row">
            <div class="col-sm">
              <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i>Hitung</button>
              <input type="reset" class="btn btn-danger">
            </div>
          </div>
          <div class="row">
            <div class="col-sm">
              <a id="hasil">hasil : <?= (isset($hasil))?$hasil:""?></a>
            </div>
          </div>
          <div class="row">
            <div class="col-sm">
              <a class="btn btn-primary" href="<?=base_url('pangkat/showtable')?>">show all data</a>
              <a class="btn btn-primary" href="<?=base_url()?>">home</a>
            </div>
          </div>
        </div>
      </div>
    </form>      
    <footer class="mt-5 mb-3">
    <div class="container my-auto">
      <div class="text-center my-auto">
      </div>
    </div>
  </footer> 
  </div>

  <script src="<?php echo base_url(); ?>/assets/jquery/jquery.slim.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
