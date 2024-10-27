<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<a href="<?= base_url('admin/lokasi_presensi/create') ?>" class="btn btn-primary">
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
            <th>Nama Lokasi</th>
            <th>Alamat Lokasi</th>
            <th>Tipe Lokasi</th>
            <th>Latitude</th>
            <th>Longitude</th>
            <th>Radius</th>
            <th>Zona Waktu</th>
            <th>Jam Masuk</th>
            <th>Jam Pulang</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($lokasi_presensi as $lok) : ?>
            <tr>
                <td><?= $no++ ?>.</td>
                <td><?= $lok['nama_lokasi'] ?></td>
                <td><?= $lok['alamat_lokasi'] ?></td>
                <td><?= $lok['tipe_lokasi'] ?></td>
                <td><?= $lok['latitude'] ?></td>
                <td><?= $lok['longitude'] ?></td>
                <td><?= $lok['radius'] ?></td>
                <td><?= $lok['zona_waktu'] ?></td>
                <td><?= $lok['jam_masuk'] ?></td>
                <td><?= $lok['jam_pulang'] ?></td>
                <td>
                <a href="<?= base_url('admin/lokasi_presensi/detail/' . $lok['id']) ?>" class="badge bg-primary">Detail</a>
                    <a href="<?= base_url('admin/lokasi_presensi/edit/' . $lok['id']) ?>" class="badge bg-primary">Edit</a>
                    <a href="<?= base_url('admin/lokasi_presensi/delete/' . $lok['id']) ?>" class="badge bg-danger tombol-hapus">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection() ?>