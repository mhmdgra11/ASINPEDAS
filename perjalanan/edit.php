<?php
if (isset($_GET['id'])) {
    $id_perjalanan   = $_GET['id'];
    $query = mysqli_query($db, "SELECT * FROM perjalanan WHERE id_perjalanan='$id_perjalanan'") or die('Query Error : ' . mysqli_error($db));
    while ($data            = mysqli_fetch_assoc($query)) {
        $id_perjalanan      = $data['id_perjalanan'];
        $tempat             = $data['tempat'];
        $tanggal            = $data['tanggal'];
        $waktu              = $data['waktu'];
        $keterangan         = $data['keterangan'];
        $jenis_tugas        = $data['jenis_tugas'];
        
        
    }
}
?>

<div class="row">
    <div class="col-md-12">
        <br>
        <form class="form-horizontal" method="POST" action="?page=perjalanan-update" enctype="multipart/form-data">

            <div class="form-group">
                <label class="col-sm-2 control-label">ID_perjalanan</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" name="id_perjalanan" value="<?php echo $id_perjalanan; ?>" readonly>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Tempat</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" name="tempat" value="<?php echo $tempat; ?>" Required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Tanggal</label>
                <div class="col-sm-2">
                    <input type="date" class="form-control" name="tanggal" value="<?php echo $tanggal; ?>" Required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Pukul</label>
                <div class="col-sm-2">
                    <input type="time" class="form-control" name="waktu" value="<?php echo $waktu; ?>" Required>
                </div>
            </div>

            
            <div class="form-group">
              <label class="col-sm-2 control-label">Keterangan</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="keterangan" value="<?php echo $keterangan; ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Jenis Tugas</label>
              <div class="col-sm-3">
                <select class="form-control" name="jenis_tugas" placeholder="Pilih Tugas" required>
                  <option value="admin">giat_liputan</option>
                  <option value="pegawai">seminar</option>
                  <option value="pegawai">sosialisasi</option>
                  <option value="pegawai">rapat</option>
                </select>
              </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" class="btn btn-info btn-submit" name="update" value="Update">
               
                </div>
            </div>
        </form>

        <hr>
    </div>
</div>


</div> <!-- /.col -->
</div> <!-- /.row -->