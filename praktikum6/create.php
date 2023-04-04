<?php
require 'dbkoneksi.php'
?>

<form method="POST" action="proses.php">
    <div class="form-group row">
        <label for="kode" class="col-4 col-form-label">Kode</label>
        <div class="col-8">
            <input id="kode" name="kode" placeholder="Kode Produk" type="text" class="form-control" required="required" value="">
        </div>
    </div>
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama</label>
        <div class="col-8">
            <input id="nama" name="nama" placeholder="Nama Produk" type="text" class="form-control" required="required" value="">
        </div>
    </div>
    <div class="form-group row">
        <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label>
        <div class="col-8">
            <input name="harga_beli" id="harga_beli" type="text" require class="form-control" value="" placeholder="000000" require>
        </div>
    </div>
    <div class="form-group row">
        <label for="stok" class="col-4 col-form-label">Stok</label>
        <div class="col-8">
            <input id="stok" name="stok" placeholder="0" type="text" class="form-control" required="required" value="">
        </div>
    </div>
    <div class="form-group row">
        <label for="min_stok" class="col-4 col-form-label">Minimum Stok</label>
        <div class="col-8">
            <input id="min_stok" name="min_stok" placeholder="0" type="text" class="form-control" required="required" value="">
        </div>
    </div>
    <div class="form-group row">
        <label for="kartu" class="col-4 col-form-label"> Kartu</label>
        <div class="col-8">
            <?php
            $sqlkartu = "SELECT * FROM kartu";
            $rskartu = $conn->query($sqlkartu);
            ?>
            <select id="kartu" name="kartu" class="custom-select">
                <?php
                foreach ($rskartu as $rowkartu) {
                ?>
                    <option value="<?= $rowkartu['id'] ?>"><?= $rowkartu['nama'] ?></option>
                <?php
                }
                ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary"  value="Simpan">Submit</button>
        </div>
    </div>
</form>