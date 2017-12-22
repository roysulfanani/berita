<?php
include 'config/koneksi.php';
include_once 'plugins/inc.library.php';

if($_SESSION['level'] == 'admin'){
	$id = $_GET['id'];
} else {
	$id = $_SESSION['id'];
}

/*$id = $_GET['id'];*/

$queryview = mysqli_query($connect,
				"SELECT * FROM tkaryawan WHERE tkaryawan.id = $id ");
$view = mysqli_fetch_array($queryview);

$result = mysqli_query($connect,
				"SELECT * FROM tkaryawan_lampiran WHERE deskripsi IN ('diri', 'kk', 'ktp', 'ijasah') AND tkaryawan_lampiran.id_karyawan = '$id' ");

$list_foto = array();

while ($data=mysqli_fetch_array($result)) {
	$list_foto[$data['deskripsi']] = $data['foto'];
}
?>

<div class="container">
	<div class="row">

		<div class="Col-md-3">
			<div class="panel-heading"> <h4><b> FOTO </b></h4></div>

				<div class="thumbnail">
				<img class="picture img-responsive" src="dist/image/<?php echo $list_foto["diri"] ?>" width="" height="250">
				</div>

		</div>

		<div class="Col-md-9">
			<div class="panel-heading"> <h4><b> Biodata </b></h4></div>
			<table class="table table-striped table-bordered table-hover table-condansed">
			<tr>
				<td class="text-right" width="25%">Nama :</td>
				<td> <?php echo $view["nama"]; ?></td>
			</tr>
			<tr>
				<td class="text-right">Tempat / Tanggal Lahir :</td>
				<td> <?php echo $view["tempat_lahir"] . " / " .IndonesiaTgl($view["tanggal_lahir"]);?></td>
			</tr>
			<tr>
				<td class="text-right">Alamat :</td>
				<td> <?php echo $view["alamat"]; ?></td>
			</tr>
			<tr>
				<td class="text-right">Alamat Tinggal :</td>
				<td> <?php echo $view["alamat_kos"]; ?></td>
			</tr>
			<tr>
				<td class="text-right">HP :</td>
				<td> <?php echo $view["hp1"]; ?></td>
			</tr>
			<tr>
				<td class="text-right">Email :</td>
				<td> <?php echo $view["email"]; ?></td>
			</tr>
			</table>

			<div class="row">
				<div class="col-xs-8 col-sm-10"></div>
			      <div class="col-xs-4 col-sm-2">
			        <a href="" class="btn-lg btn-default" style="color: blue"> edit </a>
			      </div>
			</div>

		</div>

		<div class="Col-md-12">
		<div class="panel-heading"><h4><b> Lampiran </b></h4></div>
		  <div class="col-md-4">
		    <div class="thumbnail">
		      <img class="picture img-responsive" src="dist/image/<?php  echo $list_foto["ktp"] ?>" width="" height="250">
		      <div class="caption">
		        <h3> KTP </h3>
		        <p>...</p>
		        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
		      </div>
		    </div>
		  </div>
		  <div class="col-md-4">
		    <div class="thumbnail">
		      <img class="picture img-responsive" src="dist/image/<?php  echo $list_foto["kk"] ?>" width="" height="250" width="" height="250">
		      <div class="caption">
		        <h3> KK </h3>
		        <p>...</p>
		        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
		      </div>
		    </div>
		  </div>
		  <div class="col-md-4">
		    <div class="thumbnail">
		      <img class="picture img-responsive" src="dist/image/<?php  echo $list_foto["ijasah"] ?>" width="" height="250" width="" height="250">
		      <div class="caption">
		        <h3> Ijasah </h3>
		        <p>...</p>
		        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
		      </div>
		    </div>
		  </div>
		 </div>

	</div>
</div>