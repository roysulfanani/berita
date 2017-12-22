<?php
include 'config/koneksi.php';

$query = mysqli_query($connect, "SELECT * FROM tkategori")
?>
<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Tulis Pesan</h3>
            </div>
            <form class="form-horizontal" action="page/add_berita.php" method="post" enctype="multipart/form-data">
                <div class="box-body">
                    <div class="form-group">
                        <label for="tiga" class="col-sm-2 control-label">Judul Berita</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Judul" name="judul" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tiga" class="col-sm-2 control-label">Isi Berita</label>
                        <div class="col-sm-10">
                            <textarea class="form-control konten" placeholder="Isi Berita" name="konten" required="required"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="barang" class="control-label col-md-2 col-sm-2 col-xs-12">Kategori
                        </label>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                            <select name="kategori" class="apps-select2 form-control" tabindex="-1" required="required">
                                <option value="">-Pilih Kategori-</option>
                                <?php
                                while ($kategori = mysqli_fetch_array($query)) : ?>
                                <option value="<?php echo $kategori['id']; ?>"><?php echo $kategori['kategori']; ?></option>
                                <?php
                                endwhile;
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tiga" class="col-sm-2 control-label">Gambar</label>
                        <div class="col-sm-10">
                            <input type="file" accept="image/*" name="foto" class="form-control" id="foto">
                            <!-- <div id="image-holder">
                            </div> -->
                        </div>
                    </div>
                    <!--input image awal-->
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <input type="submit" class="btn btn-info pull-right" value="Save" name="">
                </div>
                <!-- /.box-footer -->
            </form>
        </div>
    </div>
    <!--/.col (right) -->
</div>
<!-- /.row -->