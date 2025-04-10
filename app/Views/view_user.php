<?= $this->extend('layout'); ?>

<?= $this->section('content'); ?>

<h2>Detail User</h2>

<div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" value="<?= esc($user['name']) ?>" readonly />
</div>
<div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" value="<?= esc($user['email']) ?>" readonly />
</div>
<div class="mb-3">
    <label class="form-label">Gender</label>
    <input type="text" class="form-control" value="<?= esc($user['gender']) ?>" readonly />
</div>
<div class="mb-3">
    <label class="form-label">Hobi</label>
    <ul class="list-group">
        <?php $hobbiesData = json_decode($user['hobbies'], true); ?>
        <?php if (!empty($hobbiesData)): ?>
            <?php foreach ($hobbiesData as $hobby): ?>
                <li class="list-group-item"><?= esc($hobby) ?></li>
            <?php endforeach; ?>
        <?php else: ?>
            <li class="list-group-item">Tidak ada hobi</li>
        <?php endif; ?>
    </ul>
</div>
<div class="mb-3">
    <label class="form-label">Country</label>
    <input type="text" class="form-control" value="<?= esc($user['country']) ?>" readonly />
</div>
<div class="mb-3">
    <label class="form-label">Status</label>
    <input type="text" class="form-control" value="<?= $user['status'] ? 'Active' : 'Inactive' ?>" readonly />
</div>

<a href="<?= base_url('/user') ?>" class="btn btn-secondary">Kembali</a>

<?= $this->endSection(); ?>
