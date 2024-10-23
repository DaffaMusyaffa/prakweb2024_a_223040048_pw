<div class="container mt-3">

  <div class="row">
    <div class="col-lg-6">
      <h3>Daftar Mahasiswa</h3>
      <ul class="list-group">
        <?php foreach ($data['mhs'] as $mhs) : ?>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <?= $mhs['nama']; ?>
            <div>
              <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge text-bg-primary ml-1">detail</a>
          </li>
        <?php endforeach; ?>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-6">
    <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
      Tambah Data Mahasiswa
    </button>
    <br><br>
    <h3>Daftar Mahasiswa</h3>

    <ul class="list-group">
      <?php foreach ($data['mhs'] as $mhs) : ?>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <?= $mhs['nama']; ?>
          <div>
            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge text-bg-primary ml-1">detail</a>
            <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge text-bg-success tampilModalUbah ml-1" data-bs-toggle="modal" data-bs-target="#formModal">ubah</a>
            <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge text-bg-danger ml-1" onclick="return confirm('yakin');">hapus</a>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>
</div>