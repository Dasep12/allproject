<h2>Daftar Projects</h2>
<div class="table-responsive">
    <?php if ($this->session->flashdata("ok")) : ?>
        <div class="alert-danger alert">
            <?= $this->session->flashdata("ok") ?>
        </div>
    <?php endif ?>
    <?php if ($this->session->flashdata("info")) : ?>
        <div class="alert-info alert">
            <p><?= $this->session->flashdata("info") ?></p>
        </div>
    <?php endif ?>
    <a href="<?= base_url('Project/input') ?>" class="btn btn-primary btn-sm mb-2">Tambah Projects</a>
    <table id="example" class="table table-striped table-sm">
        <thead>
            <tr>
                <th>#</th>
                <th>Judul</th>
                <th>Teknologi</th>
                <th>Tanggal Realise</th>
                <th>link Demo</th>
                <?php if ($this->session->userdata("id") != null) : ?>
                    <th>Aksi</th>
                <?php endif ?>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($data as $d) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $d->judul ?></td>
                    <td><?= $d->teknologi ?></td>
                    <td><?= $d->tanggal ?></td>
                    <td><a target="_blank" href="<?= $d->link ?>"><?= $d->link ?></a></td>
                    <?php if ($this->session->userdata("id") != null) : ?>
                        <td>
                            <a href="<?= base_url('Project/edit/' . $d->id) ?>" class=" btn btn-primary btn-sm">edit</a>
                            <a href="<?= base_url('Project/delete/' . $d->id) ?>" class="btn btn-danger btn-sm">hapus</a>
                        </td>
                    <?php endif ?>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>