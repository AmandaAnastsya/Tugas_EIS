<?php helper(['form']); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background: linear-gradient(45deg, #1a1a1a, #2d2d2d);
            min-height: 100vh;
        }
        
        .card {
            background: rgba(0, 0, 0, 0.8);
            border: none;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(255, 192, 203, 0.2);
            margin-bottom: 20px;
        }
        
        .card-header {
            background: #ff69b4;
            border-radius: 15px 15px 0 0 !important;
            padding: 20px;
        }
        
        .card-header h4 {
            color: #fff;
            font-weight: 600;
            margin: 0;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        
        .card-body {
            padding: 30px;
        }
        
        .form-group label {
            color: #ff69b4;
            font-weight: 500;
            margin-bottom: 8px;
        }
        
        .form-control {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid #ff69b4;
            color: #fff;
            border-radius: 10px;
            padding: 12px;
        }
        
        .form-control:focus {
            background: rgba(255, 255, 255, 0.15);
            border-color: #ff1493;
            box-shadow: 0 0 10px rgba(255, 20, 147, 0.3);
            color: #fff;
        }
        
        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }
        
        select.form-control option {
            background: #2d2d2d;
            color: #fff;
        }
        
        .btn-primary {
            background: #ff69b4;
            border: none;
            border-radius: 10px;
            padding: 12px 30px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background: #ff1493;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 20, 147, 0.3);
        }
        
        .text-danger {
            color: #ff1493 !important;
            font-size: 0.85em;
            margin-top: 5px;
        }
        
        .table {
            color: #fff;
        }
        
        .table th {
            color: #ff69b4;
            border-color: rgba(255, 105, 180, 0.2);
            padding: 15px 10px;
        }
        
        .table td {
            border-color: rgba(255, 105, 180, 0.2);
            padding: 15px 10px;
        }

        .modal-content {
            background: #000;
            border: 1px solid #ff69b4;
        }

        .modal-header {
            background: #ff69b4;
            border-bottom: none;
        }

        .modal-title {
            color: #fff;
        }

        .modal-footer {
            border-top: none;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Form Registrasi</h4>
                    </div>
                    <div class="card-body">
                        <?= form_open('register/submit', ['id' => 'registrationForm']) ?>
                            <div class="form-group mb-3">
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" value="<?= old('nama') ?>">
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'nama') : '' ?></span>
                            </div>

                            <div class="form-group mb-3">
                                <label>Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" value="<?= old('tempat_lahir') ?>">
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'tempat_lahir') : '' ?></span>
                            </div>

                            <div class="form-group mb-3">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control" value="<?= old('tanggal_lahir') ?>">
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'tanggal_lahir') : '' ?></span>
                            </div>

                            <div class="form-group mb-3">
                                <label>Alamat</label>
                                <textarea name="alamat" class="form-control"><?= old('alamat') ?></textarea>
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'alamat') : '' ?></span>
                            </div>

                            <div class="form-group mb-3">
                                <label>No Telepon</label>
                                <input type="text" name="telepon" class="form-control" value="<?= old('telepon') ?>">
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'telepon') : '' ?></span>
                            </div>

                            <div class="form-group mb-3">
                                <label>Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="Laki-laki" <?= old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
                                    <option value="Perempuan" <?= old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
                                </select>
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'jenis_kelamin') : '' ?></span>
                            </div>

                            <div class="form-group mb-3">
                                <label>Pendidikan</label>
                                <select name="pendidikan" class="form-control">
                                    <option value="">Pilih Pendidikan</option>
                                    <option value="SMA" <?= old('pendidikan') == 'SMA' ? 'selected' : '' ?>>SMA</option>
                                    <option value="D3" <?= old('pendidikan') == 'D3' ? 'selected' : '' ?>>D3</option>
                                    <option value="S1" <?= old('pendidikan') == 'S1' ? 'selected' : '' ?>>S1</option>
                                    <option value="S2" <?= old('pendidikan') == 'S2' ? 'selected' : '' ?>>S2</option>
                                </select>
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'pendidikan') : '' ?></span>
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        <?= form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="resultModal" tabindex="-1" aria-labelledby="resultModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="resultModalLabel">Data Registrasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <tr>
                            <th>Nama</th>
                            <td id="modal-nama"></td>
                        </tr>
                        <tr>
                            <th>Tempat Lahir</th>
                            <td id="modal-tempat-lahir"></td>
                        </tr>
                        <tr>
                            <th>Tanggal Lahir</th>
                            <td id="modal-tanggal-lahir"></td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td id="modal-alamat"></td>
                        </tr>
                        <tr>
                            <th>No Telepon</th>
                            <td id="modal-telepon"></td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <td id="modal-jenis-kelamin"></td>
                        </tr>
                        <tr>
                            <th>Pendidikan</th>
                            <td id="modal-pendidikan"></td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <script>
document.getElementById('registrationForm').addEventListener('submit', function(e) {
    e.preventDefault(); // Cegah submit form secara langsung

    let isValid = true;
    document.querySelectorAll('.text-danger').forEach(el => el.textContent = ''); // Reset error

    let nama = document.querySelector('[name="nama"]').value.trim();
    if (!nama) {
        document.querySelector('[name="nama"]').nextElementSibling.textContent = "Nama wajib diisi.";
        isValid = false;
    }

    let telepon = document.querySelector('[name="telepon"]').value.trim();
    if (!telepon.match(/^\d+$/)) { // Validasi hanya angka
        document.querySelector('[name="telepon"]').nextElementSibling.textContent = "Nomor telepon harus berupa angka.";
        isValid = false;
    }

    if (!isValid) return; // Jangan lanjutkan jika ada error

    // Kirim data ke backend jika valid
    let formData = new FormData(this);
    fetch('<?= base_url('register/submit') ?>', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Tampilkan modal dengan data
            document.getElementById('modal-nama').textContent = data.data.nama;
            document.getElementById('modal-tempat-lahir').textContent = data.data.tempat_lahir;
            document.getElementById('modal-tanggal-lahir').textContent = data.data.tanggal_lahir;
            document.getElementById('modal-alamat').textContent = data.data.alamat;
            document.getElementById('modal-telepon').textContent = data.data.telepon;
            document.getElementById('modal-jenis-kelamin').textContent = data.data.jenis_kelamin;
            document.getElementById('modal-pendidikan').textContent = data.data.pendidikan;

            var resultModal = new bootstrap.Modal(document.getElementById('resultModal'));
            resultModal.show();
            document.getElementById('registrationForm').reset();
        } else {
            Object.keys(data.errors).forEach(field => {
                const element = document.querySelector(`[name="${field}"]`);
                if (element) {
                    const errorDiv = element.nextElementSibling;
                    if (errorDiv) errorDiv.textContent = data.errors[field];
                }
            });
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Terjadi kesalahan saat mengirim data');
    });
});

</script>

</body>
</html>