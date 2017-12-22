<div class="row">
<?php
include 'config/koneksi.php';

/*$search   = !empty($_GET['search']) ? $_GET['search'] : null;*/

/*$timeAgo = new \Westsworld\TimeAgo('Asia/Jakarta', 'id');*/

$search   = !empty($_GET['search']) ? $_GET['search'] : null;
$kategori = !empty($_GET['kategori']) ? $_GET['kategori'] : null;

$sql_search = "SELECT tberita.id, tberita.created_at, tberita.judul,
                        tberita.isi_berita, tberita.status, tuser.username, 
                        tfoto.nama_foto, tfoto.id_berita
                        FROM tberita
                        LEFT JOIN tfoto ON tberita.id = tfoto.id_berita
                        LEFT JOIN tuser ON tberita.id_user = tuser.id
                        WHERE tberita.judul like '%$search%'
                        ORDER BY tberita.id DESC";

$sql_kategori = "SELECT tberita.id, tberita.created_at, tberita.judul,
                        tberita.isi_berita, tberita.status, tuser.username, 
                        tfoto.nama_foto, tfoto.id_berita, tkategori.kategori
                        FROM tberita
                        LEFT JOIN tkategori on tberita.id_kategori = tkategori.id
                        LEFT JOIN tfoto ON tberita.id = tfoto.id_berita
                        LEFT JOIN tuser ON tberita.id_user = tuser.id
                        WHERE tkategori.kategori like '%$kategori%'
                        ORDER BY tberita.id DESC";

$sql_read_all = "SELECT tberita.id, tberita.created_at, tberita.judul,
                        tberita.isi_berita, tberita.status, tuser.username, 
                        tfoto.nama_foto, tfoto.id_berita, tkategori.kategori
                        FROM tberita
                        LEFT JOIN tkategori on tberita.id_kategori = tkategori.id
                        LEFT JOIN tfoto ON tberita.id = tfoto.id_berita
                        LEFT JOIN tuser ON tberita.id_user = tuser.id
                        ORDER BY tberita.id DESC";

if (!empty($_GET['search'])) {
  $query = mysqli_query($connect, $sql_search);
  if (mysqli_num_rows($query) == 0) {
    $query = mysqli_query($connect, $sql_read_all);
    ?>
    <div class="col-md-offset-1 col-md-8">
      <div class="alert alert-info alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-info"></i> Perhatian!</h4>
        Data yang anda cari tidak dapat ditemukan.
      </div>
    </div>
    <?php
  }
} else if (!empty($_GET['kategori'])) {
  $query = mysqli_query($connect, $sql_kategori);
  if (mysqli_num_rows($query) == 0) {
    $query = mysqli_query($connect, $sql_read_all);
    ?>
    <div class="col-md-offset-1 col-md-8">
      <div class="alert alert-info alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-info"></i> Perhatian!</h4>
        Kategori yang anda cari tidak dapat ditemukan.
      </div>
    </div>
    <?php
  }
} else {
  $query = mysqli_query($connect, $sql_read_all);
}


while ($result  = mysqli_fetch_array($query)) : 
  $idberita     = $result['id_berita'];
  $id_berita    = $result['id'];
  $date         = date_create($result['created_at']);
  $date_format  = date_format($date,"Y-m-d");
  $foto         = $result['nama_foto'];

  if (!empty($idberita) && !empty($foto)) :
?>
  <div class="col-md-offset-1 col-md-8">
    <!-- Box Comment -->
    <div class="box box-widget">
      <div class="box-header with-border">
        <div class="user-block">
          <img class="img-circle" src="dist/img/user1-128x128.jpg" alt="User Image">
          <span class="username"><a href="#"><?php echo ucwords($result['username']); ?></a></span>
          <span class="description"><?php echo $date_format; ?>
            <h3 class="box-title pull-right"><?php echo $result['judul']; ?></h3>
          </span>
        </div>
        <!-- /.user-block -->
        <div class="box-tools">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
        </div>
        <!-- /.box-tools -->
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <img class="img-responsive pad" src="dist/image/<?php echo $result['nama_foto']; ?>" width="300" height="250">
        <br>
        <p><?php echo nl2br($result['isi_berita']); ?></p>
        <br>
        <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
        <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
        <?php
        $sql_comment1 = mysqli_query($connect, "SELECT count(*) AS jumlah FROM tkomentar WHERE id_berita = '$id_berita'");
        $comment1     = mysqli_fetch_array($sql_comment1);
        ?>
        <span class="pull-right text-muted"><!-- 127 likes - --> <?php echo $comment1['jumlah']; ?> comments</span>
      </div>
      <!-- /.box-body -->
      <?php
        $query1 = mysqli_query($connect, "SELECT tkomentar.isi_komentar, tuser.username,
          tkomentar.id_berita, tkomentar.created_at, tkomentar.foto_komentar
          FROM tkomentar
          LEFT JOIN tuser ON tkomentar.id_user = tuser.id 
          WHERE tkomentar.id_berita = '$id_berita' ORDER BY tkomentar.id_berita");
        while ($result1 = mysqli_fetch_array($query1)) :
        $idkomentar     = $result1['id_berita'];
        $foto           = $result1['foto_komentar'];
        $date_comment   = $result1['created_at'];
        $dateDifferenceArray =  $timeAgo->inWords($date_comment);
        if (!empty($idkomentar)) :
      ?>
      <div class="box-footer box-comments">
        <div class="box-comment">
          <!-- User image -->
          <img class="img-circle img-sm" src="dist/img/user3-128x128.jpg" alt="User Image">

          <div class="comment-text">
                <span class="username">
                  <?php echo $result1['username']; ?>
                  <span class="text-muted pull-right"><?php echo $dateDifferenceArray; ?></span>
                </span><!-- /.username -->
            <?php 
              echo nl2br($result1['isi_komentar']);
              if (!empty($foto)) :
            ?>
              <br>
              <img src="dist/image_komentar/<?php echo $foto; ?>" height="200" width="200">
            <?php endif; ?>
          </div>
          <!-- /.comment-text -->
        </div>
        <!-- /.box-comment -->
      </div>
      <!-- /.box-footer -->
      <?php 
        endif;
        endwhile; 
      ?>
      <div class="box-footer">
        <form action="page/komentar1.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id_berita" value="<?php echo $id_berita; ?>">
          <div class="row">
            <div class="col-sm-1">
              <img class="img-responsive img-circle img-sm" src="dist/img/user4-128x128.jpg" alt="Alt Text">
            </div>
          <!-- .img-push is used to add margin to elements next to floating images -->
            <div class="img-push col-sm-10">
              <!-- <input type="text" name="komentar" class="form-control input-sm" placeholder="Press enter to post comment" required="required"> -->
              <textarea name="komentar" id="comment" class="form-control input-sm" style="height: 30px;" placeholder="Press enter to post comment"></textarea>
            </div>
            <div class="input-group col-sm-1">
              <label for="file-input1">
                  <img class="img-responsive img-circle img-sm" src="dist/img/instagram-1024-black.png" alt="Alt Text">
              </label>
              <input id="file-input1" type="file" name="gambar" accept="image/*" style="display: none;" />
            </div>
          </div>
        </form>
      </div>
      <!-- /.box-footer -->
    </div>
    <!-- /.box -->
  </div>
<?php
else :
?>
<div class="col-md-offset-1 col-md-8">
    <!-- Box Comment -->
    <div class="box box-widget">
      <div class="box-header with-border">
        <div class="user-block">
          <img class="img-circle" src="dist/img/user1-128x128.jpg" alt="User Image">
          <span class="username"><a href="#"><?php echo ucwords($result['username']); ?></a></span>
          <span class="description"><?php echo $date_format; ?>
            <h3 class="box-title pull-right"><?php echo $result['judul']; ?></h3>
          </span>
        </div>
        <!-- /.user-block -->
        <div class="box-tools">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
        </div>
        <!-- /.box-tools -->
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <br>
        <p><?php echo nl2br($result['isi_berita']); ?></p>
        <br>
        <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
        <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
        <?php
        $sql_comment2 = mysqli_query($connect, "SELECT count(*) AS jumlah FROM tkomentar WHERE id_berita = '$id_berita'");
        $comment2     = mysqli_fetch_array($sql_comment2);
        ?>
        <span class="pull-right text-muted"><!-- 127 likes - --> <?php echo $comment2['jumlah']; ?> comments</span>
      </div>
      <!-- /.box-body -->
      <?php
        $query2= mysqli_query($connect, "SELECT tkomentar.isi_komentar, tuser.username,
          tkomentar.id_berita, tkomentar.created_at, tkomentar.foto_komentar
          FROM tkomentar
          LEFT JOIN tuser ON tkomentar.id_user = tuser.id 
          WHERE tkomentar.id_berita = '$id_berita' ORDER BY tkomentar.id_berita");
        while ($result2 = mysqli_fetch_array($query2)) :
        $idkomentar = $result2['id_berita'];
        $foto           = $result2['foto_komentar'];
        $date_comment   = $result2['created_at'];
        $dateDifferenceArray =  $timeAgo->inWords($date_comment);
        if (!empty($idkomentar)) :
      ?>
      <div class="box-footer box-comments">
        <div class="box-comment">
          <!-- User image -->
          <img class="img-circle img-sm" src="dist/img/user3-128x128.jpg" alt="User Image">

          <div class="comment-text">
                <span class="username">
                  <?php echo $result2['username']; ?>
                  <span class="text-muted pull-right"><?php echo $dateDifferenceArray; ?></span>
                </span><!-- /.username -->
            <?php 
              echo nl2br($result2['isi_komentar']);
              if (!empty($foto)) :
            ?>
              <br>
              <img src="dist/image_komentar/<?php echo $foto; ?>" height="200" width="200">
            <?php endif; ?>
          </div>
          <!-- /.comment-text -->
        </div>
        <!-- /.box-comment -->
      </div>
      <!-- /.box-footer -->
      <?php 
        endif;
        endwhile; 
      ?>
      <div class="box-footer">
        <form action="page/komentar2.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id_berita" value="<?php echo $id_berita; ?>">
          <img class="img-responsive img-circle img-sm" src="dist/img/user4-128x128.jpg" alt="Alt Text">
          <!-- .img-push is used to add margin to elements next to floating images -->
          <div class="row">
            <div class="img-push col-md-10">
              <!-- <input type="text" name="comment" class="form-control input-sm" placeholder="Press enter to post comment" required="required"> -->
              <textarea name="komentar" id="comment" class="form-control input-sm" style="height: 30px;" placeholder="Press enter to post comment"></textarea>
            </div>
              <div class="input-group col-md-1">
                <label for="file-input2">
                    <img class="img-responsive img-circle img-sm" src="dist/img/instagram-1024-black.png" alt="Alt Text">
                </label>
                <input id="file-input2" type="file" name="gambar" accept="image/*" style="display: none;" />
              </div>
          </div>
        </form>
      </div>
      <!-- /.box-footer -->
    </div>
    <!-- /.box -->
  </div>
<?php 
endif;
endwhile;
?>
  <!-- /.col -->
</div>
