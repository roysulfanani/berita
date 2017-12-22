<?php
include 'config/koneksi.php';

?>

<link rel="stylesheet" type="text/css" href="plugins/tigra_calendar/tcal.css"/>
<script type="text/javascript" src="plugins/tigra_calendar/tcal.js"></script> 
<div class="row">
	<div class="col-md-12" style="padding-left:20px"> <!-- content -->

	
		<div class="panel">
			<div class="panel-heading"><h3>Bio Data <small>  Isikan data diri pada form berikut</small></h3><hr> </div>
			<div class="panel-body">
				<form class="form-horizontal" action="page/karyawan_add.php" method="post" enctype="multipart/form-data">
				  <div class="box-body">
					 					  
					  <div class="form-group">
						<label class="col-sm-3 control-label">Nama</label>
						<div class="col-sm-9">
						  <input type="text" name="nama" class="form-control" placeholder="isi dengan nama lengkap" value="">
						</div>
					  </div>

					  <div class="form-group">
						<label class="col-sm-3 control-label">Kota Kelahiran</label>
						<div class="col-sm-9">
						  <input type="text" name="tempat_lahir" class="form-control" placeholder="isi nama kota kelahiran" value="">
						</div>
					  </div>

					  <div class="form-group">
						<label class="col-sm-3 control-label">Tanggal Lahir</label>
						<div class="col-sm-9">
						  <input type="text" name="tanggal_lahir" class="tcal" placeholder="" value="">
						</div>
					  </div>

					  <div class="form-group">
						<label class="col-sm-3 control-label">Alamat</label>
						<div class="col-sm-9">
						  <textarea class="form-control" name="alamat" rows="3">

						  </textarea>
						</div>
					  </div>
					  
					  <div class="form-group">
						<label class="col-sm-3 control-label">Alamat Tinggal</label>
						<div class="col-sm-9">
						  <textarea name="alamat_kos" class="form-control" rows="3" placeholder="Tulis : alamat, Kota, Kabupaten / desa, Kecamatan, provinsi, KodePos"> 
						  </textarea>
						</div>
					  </div>

					  <div class="form-group">
						<label class="col-sm-3 control-label">no HP 1</label>
						<div class="col-sm-9">
						  <input type="text" name="hp1" class="form-control" placeholder="isikan nomer Hp dan ID WHATSAPP" value="">
						</div>
					  </div>

					  <div class="form-group">
						<label class="col-sm-3 control-label">no Hp 2</label>
						<div class="col-sm-9">
						  <input type="text" name="hp2" class="form-control" placeholder="isikan nomer Hp 2" value="">
						</div>
					  </div>

					  <div class="form-group">
						<label class="col-sm-3 control-label">Nama Ayah</label>
						<div class="col-sm-9">
						  <input type="text" name="nama_ayah" class="form-control" placeholder="isikan nama Ayah" value="">
						</div>
					  </div>

					  <div class="form-group">
						<label class="col-sm-3 control-label">Nama Ibu</label>
						<div class="col-sm-9">
						  <input type="text" name="nama_ibu" class="form-control" placeholder="isikan nama Ibu" value="">
						</div>
					  </div>

					  <div class="form-group">
						<label class="col-sm-3 control-label">no Telpon Keluarga</label>
						<div class="col-sm-9">
						  <input type="text" name="tlp_keluarga" class="form-control" placeholder="isikan nomer telpon keluarga terdekat" value="">
						</div>
					  </div>

					  <div class="form-group">
						<label class="col-sm-3 control-label">Id Facebook</label>
						<div class="col-sm-9">
						  <input type="text" name="id_fb" class="form-control" placeholder="isikan id Facebook" value="">
						</div>
					  </div>

					  <div class="form-group">
						<label class="col-sm-3 control-label">Id LINE</label>
						<div class="col-sm-9">
						  <input type="text" name="id_line" class="form-control" placeholder="isikan nid LINE" value="">
						</div>
					  </div>

					  <div class="form-group">
						<label class="col-sm-3 control-label">Email</label>
						<div class="col-sm-9">
						  <input type="text" name="email" class="form-control" placeholder="isikan Email" value="">
						</div>
					  </div>

					  <h3> Lampiran <small>  Unggah foto yang sesuai pada masing masing kolom </small></h3><hr> 

					  <div class="form-group">
                        <label for="tiga" class="col-sm-3 control-label">Foto KTP</label>
                        <div class="col-sm-9">
                            <input type="file" accept="image/*" name="foto_ktp" class="form-control" id="foto_ktp">
                            <!-- <div id="image-holder">
                            </div> -->
                        </div>
                      </div>

                       <div class="form-group">
                        <label for="tiga" class="col-sm-3 control-label">Foto KK</label>
                        <div class="col-sm-9">
                            <input type="file" accept="image/*" name="foto_kk" class="form-control" id="foto_kk">
                            <!-- <div id="image-holder">
                            </div> -->
                        </div>
                        </div>

                        <div class="form-group">
                        <label for="tiga" class="col-sm-3 control-label">Pas Foto</label>
                        <div class="col-sm-9">
                            <input type="file" accept="image/*" name="foto_diri" class="form-control" id="foto_diri">
                            <!-- <div id="image-holder">
                            </div> -->
                        </div>
                        </div>

                        <div class="form-group">
                        <label for="tiga" class="col-sm-3 control-label">Foto Ijasah</label>
                        <div class="col-sm-9">
                            <input type="file" accept="image/*" name="foto_ijasah" class="form-control" id="foto_ijasah">
                            <!-- <div id="image-holder">
                            </div> -->
                        </div>
                        </div>

                 <h3> Apakah data yang diisikan sudah benar ? <small>  pastikan semua data sudah benar sebelum disimpan</small></h3> <hr>
                     
				  <div class="form-group">
					<div class="col-sm-offset-3 col-sm-9">
					  <button type="submit" name="btn_submit" class="btn btn-sm btn-primary">Simpan</button>
					  <a href="" type="Reset" class="btn btn-sm btn-warning">Reset</a>
					</div>
				  </div>
				  
				</form>
			</div>
		</div>
	</div>
	
</div>