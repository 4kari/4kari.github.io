
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
  <h4 class="mt-3">Dashboard</h4>
    <p class="mb-4">Aplikasi ini menyediakan fitur-fitur perhitungan perpangkatan dan faktorial</p> 
      <div class="card shadow-sm mb-4">
        <div class="card-header py-3">
          <!-- menu -->
          <div class="row">
            <div class="col-sm">
              <a class="btn btn-primary mb-2 w-25" href="<?php echo base_url();?>pangkat"><i class="fa fa-plus"></i> Perpangkatan</a>
            </div>
          </div>
          <div class="row">
            <div class="col-sm">
              <a class="btn btn-primary mb-2 w-25" href="<?php echo base_url();?>faktorial"><i class="fa fa-plus"></i> faktorial</a>
            </div>
          </div>
        </div>                        
        <div class="card-body">
          
          <div class="row">
            <div class="col-sm">
                total perhitungan : <?php echo "25"; ?> <br>
                persentase perhitungan <br>
                <table>
                  <tr><td>perpangkatan </td><td>: <?php echo "25%"; ?></td></tr>
                  <tr><td>faktorial </td><td>: <?php echo "75%"; ?></td></tr>
                </table>
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
