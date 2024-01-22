
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
  <link href="<?php echo base_url();?>/assets/datatable/dataTables.min.css" rel="stylesheet">

</head>

<body>  
<div class="container">
  <h4 class="mt-3">Data Table</h4>
    <p class="mb-4">halaman ini menampilkan data-data yang telah tersimpan</p> 
      <div class="card shadow-sm mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Data hasil perhitungan</h6>
        </div>                        
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th style="width: 30px;">No.</th>
                  
                  <th>Tanggal</th>
                  <th>Jenis</th>
                  <th>Input</th>
                  <th>Output</th>    
                </tr>
              </thead>                  
              <tbody>
              <?php $no=1;
                foreach ($data as $d): ?>
              <tr>
                <td style="text-align: center;"><?php echo $no++;?></td>
                <td><?php echo $d['date'];?></td>
                <td><?php echo $d['jenis'];?></td>
                <td><?php echo $d['input'];?></td>
                <td><?php echo $d['output'];?></td>
              </tr>
              <?php endforeach;?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer">
          <div class="row">
            <div class="col-sm">
              <a class="btn btn-primary" href="<?=base_url()?>">home</a>
            </div>
          </div>
        </div>
      </div>    
    <footer class="mt-5 mb-3">
    <div class="container my-auto">
      <div class="text-center my-auto">
      </div>
    </div>
  </footer> 
</div>             
   

  <script src="<?php echo base_url(); ?>/assets/jquery/jquery.slim.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/datatable/datatables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable();
    });
  </script>
</body>
</html>
