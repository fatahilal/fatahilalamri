<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Murid Bahasa Inggris</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        
                        <!--postdatapetugas-->
                         <div class="form-group">
                            <label for="no_kk" class="col-sm-3 control-label">No KK</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_kk" class="form-control" id="inputEmail3" placeholder="Inputkan No KK" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Lengkap" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" class="form-control" id="inputEmail3" placeholder="Inputkan Alamat Yg Benar" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_telpon" class="col-sm-3 control-label">No Telpon</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_telpon"class="form-control" id="inputEmail3" placeholder="Inputkan No Telp Yg Benar" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="jenis_kelamin" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis_kelamin"class="form-control" id="inputEmail3" placeholder="Inputkan Jenis Kelamin" required>
                            </div>
                        </div>
                        
                         <div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">Tanggal Masuk</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_masuk" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Masuk" required>
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="status" class="form-control">
                                    <option value="Pelajar ">Pelajar</option>
                                    <option value="Mahasiswa">Mahasiswa</option>
                                    
                                </select>
                            </div>
                        </div>
                       

                        
                        
                        <!--Akhir Status-->

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=arsip&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data List Murid
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $nomor=$_POST['nomor'];
    $no_kk=$_POST['no_kk'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $no_telpon=$_POST['no_telpon'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $tgl_masuk=$_POST['tgl_masuk'];
     $status=$_POST['status'];
    //buat sql
    $sql="INSERT INTO arsip VALUES ('$nomor','$no_kk','$nama','$alamat','$no_telpon',
         '$jenis_kelamin','$tgl_masuk','$status')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=arsip&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
