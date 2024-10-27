<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div class="card col-md-6">
    <div class="card-body">
        <form method="POST" action="<?= base_url('admin/jabatan/update/'. $jabatan['id']) ?>">
            <h6 class="mb-25">Input Fields</h6>
            <div class="input-style-1">
                <label>Nama Jabatan</label>
                <input value="<?= $jabatan['jabatan'] ?>" class=" form-control <?= ($validation->hasError('jabatan')) ? 'is-invalid' : '' ?>" type="text" name="jabatan" placeholder="Nama Jabatan" />
            <div class="invalid-feedback"><?= $validation->getError('jabatan') ?></div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<?= $this->endSection() ?>