<?php 
  session_start();
  if(!isset($_SESSION['kd_cus'])){
    header('location: index.php');
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Laman Costumer</title>
  <link rel="stylesheet" type="text/css" href="../plugin/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../asset/css/admin.css">
</head>
<body>

        <div id="admin" class="tab-pane fade">
          <div class="row">
            <div class="col-xs-11 col-offset-xs-1">
              <h3 class="table-title"><strong>Tabel Customer</strong></h3>   
              <button type="button" class="btn btn-success" id="tambah-data-admin" data-toggle="modal" data-target="#form-admin">Add Admin</button>

              <!-- modal form-admin -->
              <div class="modal fade" id="form-admin" role="dialog">
                <div class="modal-content" style="width:40vw;margin-top:10vh; margin-left:30vw">
                  <!-- <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 style="margin-left:150px"><strong>Tambahkan Admin</strong></h4>
                  </div> -->
                  <div class="modal-body">
                    <form action="proses/tambahAdmin.php" method="post" role="form">
                      <div class="form-group">
                        <label for="id-admin">ID Admin</label>
                        <input type="text" class="form-control" id="id-admin" name="idadmin">
                      </div>
                      <div class="form-group">
                        <label for="nama-admin">Nama</label>
                        <input type="text" class="form-control" id="nama-admin" name="namaadmin">
                      </div>
                      <div class="form-group">
                        <label for="email-admin">Email</label>
                        <input type="email" class="form-control" id="email-admin" name="emailadmin">
                      </div>
                      <div class="form-group">
                        <label for="password-admin">Password</label>
                        <input type="password" class="form-control" id="password-admin" name="password">
                      </div>
                      <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                  </div>
                </div>
              </div>
              <!-- end of modal -->

              <table class="table table-hover" id="tabel-admin">
                <thead>
                  <tr>
                    <th class="id-transaksi text-center">ID Admin</th>
                    <th class="nama-user text-center">Nama</th>
                    <th class="email-user text-center">Email</th>
                    <th class="hapus text-center"></th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                  $conn = mysqli_connect('localhost', 'root', '', 'batiku');
                  $queryAdmin = mysqli_query($conn, "SELECT * FROM tabel_admin");
                  while($arrayAdmin = mysqli_fetch_array($queryAdmin)){
                    echo '
                      <tr>
                        <td class="id-transaksi text-center">'.$arrayAdmin['idAdmin'].'</td>
                        <td class="nama-user text-center">'.$arrayAdmin['namaAdmin'].'</td>
                        <td class="email-user text-center">'.$arrayAdmin['email'].'</td>
                        <td class="hapus">
                          <a href="proses/hapusAdmin.php?idAdmin='.$arrayAdmin['idAdmin'].'">
                              <button type="button" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button>
                          </a>
                          </td>
                      </tr> 
                    ';
                  }
                 ?>

                  
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>

    </div>


  </div>
  <div class="box-up" onclick="topFunction()" id="myBtn">
    <div class="btn" >
      <span><i class="glyphicon glyphicon-chevron-up"></i></span>
    </div>
    <!-- <span><i class="glyphicon glyphicon-chevron-up"></i></span> -->
  </div>

</div>
<script type="text/javascript" src="../plugin/Javascript/jquery.min.js"></script>
<script type="text/javascript" src="../plugin/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript">
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
}

</script>
</body>
</html>