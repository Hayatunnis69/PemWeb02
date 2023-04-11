<?php require_once "class_bmi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form BMI</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <h2>Form Isian Index Massa Tubuh</h2>

        <form method="POST" action="form_bmi.php">
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama</label> 
                <div class="col-8">
                <input id="nama" name="nama" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="umur" class="col-4 col-form-label">Umur</label> 
                <div class="col-8">
                <input id="umur" name="umur" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Jenis Kelamin</label> 
                <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="L"> 
                    <label for="jk_0" class="custom-control-label">Laki-Laki</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="P"> 
                    <label for="jk_1" class="custom-control-label">Perempuan</label>
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="berat_badan" class="col-4 col-form-label">Berat Badan</label> 
                <div class="col-8">
                    <input id="berat" name="berat" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="tinggi_badan" class="col-4 col-form-label">Tinggi Badan</label> 
                <div class="col-8">
                <input id="tinggi" name="tinggi" type="text" class="form-control">
                </div>
            </div>
        
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>

        <div class="container">
        <h2>Data Hasil BMI Pasien</h2>

        <table class="table table-bordered">
            <tr class="table-danger text-uppercase">
                <td>nama</td>
                <td>umur</td>
                <td>jenis kelamin</td>
                <td>berat badan</td>
                <td>tinggi badan</td>
                <td>hasil bmi</td>
                <td>status bmi</td>
                
            </tr>
            <?php 
            // Membuat method
            if(isset($_POST['submit'])) {

                $nama = $_POST['nama'];
                $umur = $_POST['umur'];
                $jk = $_POST['jk'];
                $berat = $_POST['berat'];
                $tinggi = $_POST['tinggi'];
                
                $pasien = new bmiPasien($nama, $umur, $jk, $berat, $tinggi);

            ?>   
                <tr>
                <td><?= $nama; ?></td>
                <td><?= $umur; ?></td>
                <td><?= $jk; ?></td>
                <td><?= $berat; ?></td>
                <td><?= $tinggi; ?></td>
                <td><?= $pasien->hasilBMI(); ?></td>
                <td><?= $pasien->statusBMI(); ?></td>
                
            <?php } ?>
            
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>