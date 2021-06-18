<div class="container mt-3">

    <div class="row">
      <div class="col-lg-6">
        <?php Flasher::flash(); ?>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-6">
        <button type="button" class="btn btn-primary tombolTambahDaftar" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah Data Keluarga
        </button>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-6">
        <form action="<?= BASEURL; ?>/keluarga/cari" method="post">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari Nama Kepala Keluarga" name="keyword" id="keyword" autocomplete="off">
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  
    <div class="row">
        <div class="col-lg-6">
          <h3>Daftar Nama Kepala Keluarga</h3>
          <ul class="list-group">
            <?php foreach( $data['klg'] as $klg ) : ?>
              <li class="list-group-item">
                  <?= $klg['Nama_Kepala']; ?>
                  <a href="<?= BASEURL; ?>/keluarga/hapus/<?= $klg['no_KK']; ?>" class="badge bg-danger float-end" onclick="return confirm('Yakin menghapus?');">Hapus</a>
                  <a href="<?= BASEURL; ?>/keluarga/ubah/<?= $klg['no_KK']; ?>" class="badge bg-success float-end tampilModalUbah" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="<?= $klg['no_KK']; ?>">Ubah</a>
                  <a href="<?= BASEURL; ?>/keluarga/detail/<?= $klg['no_KK']; ?>" class="badge bg-primary float-end">Detail</a>
              </li>
            <?php endforeach; ?>
          </ul>      
        </div>
    </div>

</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Keluarga</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL; ?>/keluarga/tambah/" method="post">
          <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label for="no_KK">Nomor KK</label>
            <input type="text" class="form-control" id="no_KK" name="no_KK" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label for="Nama_Kepala">Nama Kepala Keluarga</label>
            <input type="text" class="form-control" id="Nama_Kepala" name="Nama_Kepala" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label for="Anggota_Keluarga">Jumlah Anggota Keluarga</label>
            <input type="number" class="form-control" id="Anggota_Keluarga" name="Anggota_Keluarga" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="Alamat">Alamat</label>
            <input type="text" class="form-control" id="Alamat" name="Alamat" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="no_tlp">Nomor Telepon (gunakan angka 62 sebagai pengganti 0)</label>
            <input type="number" class="form-control" id="no_tlp" name="no_tlp" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="Pekerjaan">Pekerjaan</label>
            <input type="text" class="form-control" id="Pekerjaan" name="Pekerjaan" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="Penghasilan">Penghasilan</label>
            <input type="number" class="form-control" id="Penghasilan" name="Penghasilan" autocomplete="off">
          </div>

      </div>
      <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>