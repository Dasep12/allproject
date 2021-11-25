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

    <form onsubmit="return change()" action="<?= base_url('Project/store') ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Judul Project</label>
            <input type="text" id="judul" class="form-control form-control-sm" name="judul">
        </div>

        <div class="form-group">
            <label for="">Teknologi</label>
            <textarea name="teknologi" id="teknologi" cols="5" rows="5" class="form-control form-control-sm"></textarea>
        </div>

        <div class="form-group">
            <label for="">Tanggal Realease Project</label>
            <input type="text" class="form-control form-control-sm" id="tanggal" name="tanggal">
        </div>

        <div class="form-group">
            <label for="">Link Demo</label>
            <input type="text" class="form-control form-control-sm" id="link" name="link">
        </div>

        <div class="form-group">
            <label for="">Thumbnail</label>
            <input type="file" name="file" class="form-control form-control-sm" id="file" onchange="return exefile()">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
        </div>
    </form>

</div>
</div>

<script>
    function change() {
        if (document.getElementById("judul").value == "") {
            alert("judul kosong");
            return false;
        }
        if (document.getElementById("teknologi").value == "") {
            alert("teknologi kosong");
            return false;
        }
        if (document.getElementById("tanggal").value == "") {
            alert("tanggal kosong");
            return false;
        }
        if (document.getElementById("link").value == "") {
            alert("kosong");
            return false;
        }
        return;
    }

    function exefile() {
        const a = document.getElementById('file');
        const path = a.value;
        const exe = /(\.jpg|\.jpeg|\.png)$/i;
        if (!exe.exec(path)) {
            alert("ekstensi file tidak di ijinkan");
            a.value = "";
            return;
        }
        return;
    }
</script>