<?= $this->include('template/admin_header'); ?>
<div class="form">
    <h2>
        <?= $title; ?>
    </h2>

    <form action="" method="post">
        <label for="judul">Judul</label>
        <input type="text" name="judul" id="judul" placeholder="">
        <textarea name="isi" cols="50" rows="10"></textarea>
        <input type="submit" value="Kirim" class="btn btn-large">
    </form>
    <p>
        <input type="file" name="gambar">
    </p>
    <form action="" method="post" enctype="multipart/form-data">
</div>
<?= $this->include('template/admin_footer'); ?>