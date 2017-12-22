<?php
include 'config/koneksi.php';

if(isset($_GET['action']))
{
	$query = mysqli_query($connect, 
			"SELECT tkaryawan.id, tkaryawan.nama, tkaryawan.tanggal_lahir, tkaryawan.hp1, tkaryawan.hp2, tkaryawan_lampiran.id_karyawan, tkaryawan_lampiran.deskripsi, tkaryawan_lampiran.foto
			 FROM tkaryawan LEFT JOIN tkaryawan_lampiran 
			 ON tkaryawan.id = tkaryawan_lampiran.id_karyawan
			 AND  tkaryawan_lampiran.deskripsi = 'diri'
			 WHERE tkaryawan.deleted_at is NOT NULL
			 ORDER BY tkaryawan.nama"
		 );
} else 

$query = mysqli_query($connect, 
			"SELECT tkaryawan.id, tkaryawan.nama, tkaryawan.tanggal_lahir, tkaryawan.hp1, tkaryawan.hp2, tkaryawan_lampiran.id_karyawan, tkaryawan_lampiran.deskripsi, tkaryawan_lampiran.foto
			 FROM tkaryawan LEFT JOIN tkaryawan_lampiran 
			 ON tkaryawan.id = tkaryawan_lampiran.id_karyawan
			 AND  tkaryawan_lampiran.deskripsi = 'diri'
			 WHERE tkaryawan.deleted_at is NULL
			 ORDER BY tkaryawan.nama"
		 );



?>

<div class="col-md-12" style="padding-left:20px"> <!-- content -->

	<div class="row">
		<div class="panel">
			<div class="panel-heading"><h3> Daftar Pegawai </h3></div>
			<div class="panel-body">
				<a href="?page=karyawan_list" class="btn btn-success">Tambah Data</a>
				<a href="?page=karyawan_list&action=deleted" class="btn btn-default">Deleted</a>
				<hr>
				
				<table class="table table-striped table-bordered table-hover table-condensed">
					<thead>
						<tr>
							<th width="5%">No</th>
							<th width="15%">Foto</th>
							<th>Nama</th>
							<th>Data</th>
							<th width="10%">Aksi</th>
						</tr>
					</thead>
					<tbody>
					<?php
					$no = 1;
					while ($data = mysqli_fetch_array($query)) {
					?>
						<tr>
							<td> <?php echo $no ?> </td>
							<td> 
								<a href="#" class="media-left media-middle">
								<img class="picture" src="dist/image/<?php echo $data["foto"]; ?>" width="50" height="50"> 
								</a>
							</td>
							<td> <a href="?page=karyawan_view&id=<?php echo $data['id']; ?>" style="color: black" data-toggle="tooltip" data-placement="bottom" title="klik untuk melihat detail"> <?php echo $data["nama"] ?> </a></td>
							<td> no HP : <?php echo $data["hp1"] ?> <br>
								 no HP : <?php echo $data["hp2"] ?>
							</td>
<?php
if(isset($_GET['action']))
{
?>
							<td> 
								<a href="page/karyawan_delete_permanent.php?id=<?php echo $data['id']; ?>" class="btn btn-xs btn-danger" name="del_karyawan"> delete </a>
								<a href="page/karyawan_undelete.php?id=<?php echo $data['id']; ?>" class="btn btn-xs btn-info" > UnDelet </a>
							</td>

<?php } else { ?>
							<td> 
								<a href="page/karyawan_delete.php?id=<?php echo $data['id']; ?>" class="btn btn-xs btn-danger" name="del_karyawan"> delete </a>
							</td>
						</tr>
					<?php
					$no++;
				}
					}
					?>
					</tbody>
					<tfoot>
						<tr>
							<th width="5%">No</th>
							<th width="15%">Foto</th>
							<th>Nama</th>
							<th>Data</th>
							<th width="10%">Aksi</th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
	
</div>