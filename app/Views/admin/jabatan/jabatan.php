<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<a href="<?= base_url('admin/jabatan/create') ?>" class="btn btn-primary">
    <svg class='me-2' xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-pencil-plus">
        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
        <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
        <path d="M13.5 6.5l4 4" />
        <path d="M16 19h6" />
        <path d="M19 16v6" />
    </svg>
    Add Data
</a>

<table class="table table-striped" id="datatables">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Jabatan</th>
            <th>No Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($jabatan as $jab) : ?>
            <tr>
                <td><?= $no++ ?>.</td>
                <td><?= $jab['jabatan'] ?></td>
                <td>
                    <a href="<?= base_url('admin/jabatan/edit/' . $jab['id']) ?>" class="badge bg-primary">Edit</a>
                    <a href="<?= base_url('admin/jabatan/delete/' . $jab['id']) ?>" class="badge bg-danger tombol-hapus">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection() ?>