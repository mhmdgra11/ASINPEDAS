<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <center>
                <h4>
                    <b>Kirim Detail Data Karyawan</b>
                </h4>
            </center>
        </div> <!-- /.page-header -->
        <?php
        if (isset($_GET['id'])) {
            $id_perjalanan   = $_GET['id'];
            $query = mysqli_query($db, "SELECT * FROM perjalanan WHERE id_perjalanan='$id_perjalanan'") or die('Query Error : ' . mysqli_error($db));
            while ($data  = mysqli_fetch_assoc($query)) {
                $id_perjalanan   = $data['id_perjalanan'];
                $tempat  = $data['tempat'];
                $tanggal   = $data['tanggal'];
                $waktu   = $data['waktu'];
                $keterangan   = $data['keterangan'];
                $status   = $data['status'];
                $lampiran   = $data['lampiran'];
            }
        }
        ?>


        <div class="form-group">
            <center>

                <a href="https://api.whatsapp.com/send?phone=6282115402372&text=<?php echo "*DETAIL DATA PEGAWAI*" .  "%0Aid_perjalanan : " . $id_perjalanan . "%0ANama Karyawan : " . $username . "%0Atempat : " . $tempat . "%0Awaktu_tgl : " . $waktu ."%0Awaktu_tgl : " . $tanggal; ?>" class=" btn btn-default" target="_blank"><i button type="button" class="btn btn-info">Admin </button></i> </a>

                <a href="https://api.whatsapp.com/send?phone=<?php echo $telp; ?>&text=<?php echo "*DETAIL DATA PEGAWAI*" .  "%0Aid_perjalanan : " . $id_perjalanan . "%0ANama Karyawan : " . $username . "%0Atempat : " . $tempat . "%0Awaktu_tgl : " . $waktu ."%0Awaktu_tgl : " . $tanggal; ?>" target="_blank"><i button type="button" class="btn btn-info">User </button></i> </a> <?php echo $username; ?> </a>

            </center>
        </div>

        <div class="form-group">
            <center>
                <a href="?page=perjalanan-tampil" <i button type="button" class="btn btn-info">Kembali </button></i> </a>
            </center>
        </div>


    </div>
    </form>


</div> <!-- /.panel-body -->
</div> <!-- /.panel -->
</div> <!-- /.col -->
</div> <!-- /.row -->