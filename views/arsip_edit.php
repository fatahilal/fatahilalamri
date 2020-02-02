<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM arsip WHERE nomor ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Murid Bahasa Inggris</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">

                          <!--
                        <div class="form-group">
                            <label for="nomor" class="col-sm-3 control-label">No pendaftaran</label>
                            <div class="col-sm-9">
                                <input type="text" name="nomor" value="<?=$data['nomor']?>"class="form-control" id="inputEmail3" placeholder="">
                            </div>
                        </div> -->
						<div class="form-group">
                            <label for="no_kk" class="col-sm-3 control-label">No KK</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_kk" value="<?=$data['no_kk']?>"class="form-control" id="inputEmail3" placeholder="Inputkan No KK">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" value="<?=$data['nama']?>"class="form-control" id="inputEmail3" placeholder="Inputkan Nama">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" value="<?=$data['alamat']?>"class="form-control" id="inputEmail3" placeholder="Inputkan Alamat">
                            </div>
                        </div>
							<div class="form-group">
                            <label for="no_telpon" class="col-sm-3 control-label">No telepon</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_telpon" value="<?=$data['no_telpon']?>"class="form-control" id="inputEmail3" placeholder="Input Nomor" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jenis_kelamin" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis_kelamin" value="<?=$data['jenis_kelamin']?>"class="form-control" id="inputEmail3" placeholder="input jenis-kelamin" >
                            </div>
                        </div>

                       
                        <div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">Tanggal Masuk</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_masuk" value="<?=$data['tgl_masuk']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Masuk" required>
                            </div>
                        </div>
                       
                        
                        
       
                    
                        <!--Status-->
                        
                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-2 col-xs-9">
								<select name="status" class="form-control">
									<option value="Pelajar">Pelajar</option>
									<option value="Mahasiswa">Mahasiswa</option>
									
								</select>
                            </div>
                        </div>
                        <!--Akhir Status-->
                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=arsip&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data List
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
    $sql="UPDATE arsip SET nomor='$nomor',no_kk='$no_kk',nama='$nama',alamat='$alamat',no_telpon='$no_telpon',
	jenis_kelamin='$jenis_kelamin',tgl_masuk='$tgl_masuk',status='$status' WHERE nomor ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=arsip&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



