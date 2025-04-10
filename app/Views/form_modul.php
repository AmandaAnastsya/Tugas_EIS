<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Modul</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header bg-primary text-white">Tambah Data Modul</div>
            <div class="card-body">
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <h4>Periksa Entrian Form</h4>
                        <hr />
                        <?php echo session()->getFlashdata('error'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <form action="<?= base_url('modul/save'); ?>" method="post">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label for="kode">Kode</label>
                        <input type="text" name="kode" class="form-control" value="<?= old('kode'); ?>" id="kode">
                    </div>
                    <div class="form-group">
                        <label for="modul">Nama Modul</label>
                        <input type="text" name="modul" class="form-control" id="modul" value="<?= old('modul'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="sks">SKS</label>
                        <input type="number" name="sks" class="form-control" id="sks">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>