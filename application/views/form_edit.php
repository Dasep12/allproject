<h2>Input New Project</h2>
<div class="container">
    <?php if ($this->session->flashdata('ok')) : ?>
        <div class="alert alert-danger">
            <p>berhasil</p>
        </div>
    <?php endif ?>

    <?php if ($this->session->flashdata('fail')) : ?>
        <div class="alert alert-danger">
            <?= $this->session->flashdata('fail')  ?>
        </div>
    <?php endif ?>

    <form onsubmit="return change()" action="<?= base_url('Project/update') ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Judul Project</label>
            <input type="hidden" name="id" value="<?= $data->id ?>">
            <input type="text" id="judul" value="<?= $data->judul ?>" class="form-control form-control-sm" name="judul">
        </div>

        <div class="form-group">
            <label for="">Teknologi</label>
            <textarea name="teknologi" id="teknologi" cols="5" rows="5" class="form-control form-control-sm"><?= $data->teknologi ?></textarea>
        </div>

        <div class="form-group">
            <label for="">Tanggal Realease Project</label>
            <input type="text" value="<?= $data->tanggal ?>" class="form-control form-control-sm" id="tanggal" name="tanggal">
        </div>

        <div class="form-group">
            <label for="">Link Demo</label>
            <input type="text" class="form-control form-control-sm" value="<?= $data->link ?>" id="link" name="link">
        </div>

        <div class="form-group">
            <label for="">Thumbnail</label>
            <input type="file" name="file" class="form-control form-control-sm" id="file" onchange="return exefile()">
        </div>

        <div class="form-group">
            <img height="400px" width="450px" src="<?= base_url('assets/img/' . $data->img) ?>" alt="" class="img-thumbnail">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-sm">Update</button>
        </div>
    </form>

</div>
</div>