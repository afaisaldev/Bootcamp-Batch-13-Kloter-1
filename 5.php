<?php
// Cek Jika Tombol Submit Sudah ditekan 
if (isset($_POST['submit'])) {
    
    $nama           = $_POST['nama'];
    $nim            = $_POST['nim'];
    $jumlah_hadir   = $_POST['jumlah_hadir'];
    $tugas          = $_POST['tugas'];
    $uts            = $_POST['uts'];
    $uas            = $_POST['uas'];

    $kehadiran          = $jumlah_hadir/14*100;
    $nilai_kehadiran    = $kehadiran*10/100;
    $nilai_tugas        = $tugas*20/100;
    $nilai_uts          = $uts*30/100;
    $nilai_uas          = $uas*40/100;
    $nilai_total        = $nilai_kehadiran + $nilai_tugas + $nilai_uts + $nilai_uas;
        
    
    if($nilai_total > 80 && $nilai_total <= 100){
        $grade ='Nilai : A';
    }elseif($nilai_total > 70 && $nilai_total <= 79){
        $grade ='Nilai : B';
    }elseif($nilai_total > 60 && $nilai_total <= 70){
        $grade ='Nilai : C';
    }elseif($nilai_total >= 50 && $nilai_total <= 60){
        $grade ='Nilai : D';
    }else{
        $grade ='Nilai : E';
    }

    if($nilai_kehadiran == 0 OR $nilai_tugas == 0 OR $nilai_uts == 0 OR $nilai_uas == 0){
        $grade ='Nilai : E';
    }
    echo"<div id='result' style='margin:20px; padding: 20px; background:#F5F5F5'>";
    echo"<h2 style='text-align: center'> Nama : $nama </h2> ";
    echo"<h2 style='text-align: center'> NIM : $nim </h2> ";
    echo"<h2 style='text-align: center'> $grade </h2> ";
    echo"</div>";
}else{
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Soal No 5</title>
  </head>
  <body>

    <div id="form" style="margin: 50px">

    <center><h2>Soal Nomor 5</h2></center><br>

    <form method="post" action="5.php">
    <div class="form-group">
    <label>Nama:</label>
    <input type="text" class="form-control" name="nama" required>
    </div>

    <div class="form-group">
    <label>NIM:</label>
    <input type="text" class="form-control" name="nim" onkeypress="return isNumber(event)" onpaste="return false;" required>
    </div>

    <div class="form-group">
    <label>Jumlah Hadir:</label>
    <input type="text" class="form-control" name="jumlah_hadir" onkeypress="return isNumber(event)" onpaste="return false;" required>
    </div>

    <div class="form-group">
    <label>Tugas:</label>
    <input type="text" class="form-control" name="tugas" onkeypress="return isNumber(event)" onpaste="return false;" required>
    </div>

    <div class="form-group">
    <label>UTS:</label>
    <input type="text" class="form-control" name="uts" onkeypress="return isNumber(event)" onpaste="return false;" required>
    </div>

    <div class="form-group">
    <label>UAS:</label>
    <input type="text" class="form-control" name="uas" onkeypress="return isNumber(event)" onpaste="return false;" required>
    </div>

    <input type="submit" name="submit" value="submit" class="btn btn-lg btn-block btn-success">

    </form>
    </div>

    <script type="text/javascript">     
    function isNumber(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if ( (charCode > 31 && charCode < 48) || charCode > 57) {
                return false;
            }
            return true;
        }
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<?php } ?>