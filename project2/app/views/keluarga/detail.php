<div class="container mt-5">
    
    <div class="card" style="width: 30rem;">
      <div class="card-body">
        <h5 class="card-title"><?= $data['klg']['no_KK']; ?></h5>
        <h6 class="card-text">Nama Kepala Keluarga : <?= $data['klg']['Nama_Kepala']; ?></h6>
        <p class="card-text">Jumlah Anggota Keluarga : <?= $data['klg']['Anggota_Keluarga']; ?></p>
        <p class="card-text">Alamat : <?= $data['klg']['Alamat']; ?></p>
        <p class="card-text">Nomor Telepon (62 sama dengan 0) : <?= $data['klg']['no_tlp']; ?></p>
        <p class="card-text">Pekerjaan : <?= $data['klg']['Pekerjaan']; ?></p>
        <p class="card-text">Penghasilan Harian : <?= $data['klg']['Penghasilan']; ?></p>
        <a href="<?= BASEURL; ?>/keluarga" class="card-link">Kembali</a>
      </div>
    </div>

</div>