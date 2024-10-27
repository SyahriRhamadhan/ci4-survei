<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div class="card col-md-12">
    <div class="card-body">
        <form method="post" action="<?= base_url('admin/lokasi_presensi/update/' . $lokasi_presensi['id']) ?>">
            <h6 class="mb-25">Input Fields</h6>

            <div class="row">
                <div class="col-md-6">
                    <div class="input-style-1">
                        <label>Nama Lokasi</label>
                        <input value="<?= $lokasi_presensi['nama_lokasi'] ?>" class="form-control <?= ($validation->hasError('nama_lokasi')) ? 'is-invalid' : '' ?>" type="text" name="nama_lokasi" placeholder="Contoh: Kantor Pusat" />
                        <div class="invalid-feedback"><?= $validation->getError('nama_lokasi') ?></div>
                    </div>

                    <div class="input-style-1">
                        <label>Alamat Lokasi</label>
                        <textarea class="form-control <?= ($validation->hasError('alamat_lokasi')) ? 'is-invalid' : '' ?>" cols='30' rows='8' name="alamat_lokasi" placeholder="Contoh: Jl. Sudirman No. 10, Jakarta"><?= $lokasi_presensi['alamat_lokasi'] ?></textarea>
                        <div class="invalid-feedback"><?= $validation->getError('alamat_lokasi') ?></div>
                    </div>

                    <div class="input-style-1">
                        <label>Tipe Lokasi</label>
                        <input value="<?= $lokasi_presensi['tipe_lokasi'] ?>" class="form-control <?= ($validation->hasError('tipe_lokasi')) ? 'is-invalid' : '' ?>" type="text" name="tipe_lokasi" placeholder="Contoh: Kantor" />
                        <div class="invalid-feedback"><?= $validation->getError('tipe_lokasi') ?></div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="input-style-1">
                        <label>Latitude</label>
                        <input value="<?= $lokasi_presensi['latitude'] ?>" class="form-control <?= ($validation->hasError('latitude')) ? 'is-invalid' : '' ?>" type="text" name="latitude" placeholder="Contoh: -6.200000" />
                        <div class="invalid-feedback"><?= $validation->getError('latitude') ?></div>
                    </div>

                    <div class="input-style-1">
                        <label>Longitude</label>
                        <input value="<?= $lokasi_presensi['longitude'] ?>" class="form-control <?= ($validation->hasError('longitude')) ? 'is-invalid' : '' ?>" type="text" name="longitude" placeholder="Contoh: 106.816666" />
                        <div class="invalid-feedback"><?= $validation->getError('longitude') ?></div>
                    </div>

                    <div class="input-style-1">
                        <label>Radius</label>
                        <input value="<?= $lokasi_presensi['radius'] ?>" class="form-control <?= ($validation->hasError('radius')) ? 'is-invalid' : '' ?>" type="number" name="radius" placeholder="Contoh: 100" />
                        <div class="invalid-feedback"><?= $validation->getError('radius') ?></div>
                    </div>

                    <div class="input-style-1">
                        <label>Zona Waktu</label>
                        <select class="form-control <?= ($validation->hasError('zona_waktu')) ? 'is-invalid' : '' ?>" name="zona_waktu">
                            <option value="">Pilih Zona Waktu</option>
                            <option value="WIB" <?= ($lokasi_presensi['zona_waktu'] == 'WIB') ? 'selected' : '' ?>>WIB (Waktu Indonesia Barat)</option>
                            <option value="WITA" <?= ($lokasi_presensi['zona_waktu'] == 'WITA') ? 'selected' : '' ?>>WITA (Waktu Indonesia Tengah)</option>
                            <option value="WIT" <?= ($lokasi_presensi['zona_waktu'] == 'WIT') ? 'selected' : '' ?>>WIT (Waktu Indonesia Timur)</option>
                        </select>
                        <div class="invalid-feedback"><?= $validation->getError('zona_waktu') ?></div>
                    </div>

                </div>
            </div>
            <div class="input-style-1">
                <label>Jam Masuk</label>
                <input value="<?= $lokasi_presensi['jam_masuk'] ?>" class="form-control <?= ($validation->hasError('jam_masuk')) ? 'is-invalid' : '' ?>" type="time" name="jam_masuk" placeholder="Contoh: 08:00" />
                <div class="invalid-feedback"><?= $validation->getError('jam_masuk') ?></div>
            </div>

            <div class="input-style-1">
                <label>Jam Pulang</label>
                <input value="<?= $lokasi_presensi['jam_pulang'] ?>" class="form-control <?= ($validation->hasError('jam_pulang')) ? 'is-invalid' : '' ?>" type="time" name="jam_pulang" placeholder="Contoh: 17:00" />
                <div class="invalid-feedback"><?= $validation->getError('jam_pulang') ?></div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

<?= $this->endSection() ?>