<?= $this->extend('templates/header_footer'); ?>

<?= $this->section('content'); ?>
<div class="px-3 py-5 mt-5 text-center">
  <img class="jumbo-tron-img" src="assets/icons/logo-petanikita_128.png" alt="Logo PetaniKita">
  <h1 class="display-5 fw-bold jumbo-tron-title">PetaniKita</h1>
  <div class="col-lg-8 mx-auto">
    <p class="lead mb-3"><strong>PetaniKita</strong> merupakan jejaring sosial yang menghubungkan antar para petani. Petani disini dapat memasarkan hasil tani secara langsung maupun tidak langsung. Selain sebagai penghubung dan tempat pemasaran, <strong>PetaniKita</strong> dapat menjadi “Jendela Dunia” dalam ilmu pertanian.</p>
    <p class="lead mb-4"><strong>PetaniKita</strong> Kompeten, Terhubung, dan Untuk Bangsa.</p>
  </div>
</div>

<div id="beranda-konten" class="container">
  <h1 class="display-5 fw-bold jumbo-tron-title mt-5 text-center">Visi dan Misi</h1>
  <div class="konten-card d-flex flex-column flex-md-row justify-content-between align-items-center">
    <div class="text-content text-center px-5">
      <h1 class="display-5 fw-bold jumbo-tron-title">Kompeten</h1>
      <p>Memaksimalkan kompetensi seorang petani agar dapat menjadi petani yang berwawasan luas dan berkemajuan.</p>
    </div>
    <div class="img-content text-center">
      <img class="rounded-3" src="<?= base_url('assets/images/beranda_img-1.png') ?>" alt="">
    </div>
  </div>

  <div class="konten-card d-flex flex-column flex-md-row justify-content-between align-items-center">
    <div class="text-content text-center px-5">
      <h1 class="display-5 fw-bold jumbo-tron-title">Terhubung</h1>
      <p>Memperluas dan mempermudah relasi antar petani untuk menjadi komunitas yang saling terhubung.</p>
    </div>
    <div class="img-content text-center">
      <img class="rounded-3" src="<?= base_url('assets/images/beranda_img-2.png') ?>" alt="">
    </div>
  </div>

  <div class="konten-card d-flex flex-column flex-md-row justify-content-between align-items-center">
    <div class="text-content text-center px-5">
      <h1 class="display-5 fw-bold jumbo-tron-title">Untuk Bangsa</h1>
      <p>Membangun suatu komunitas pertanian yang dapat memenuhi kebutuhan pangan didaerah setempat maupun kebutuhan bangsa/negara.</p>
    </div>
    <div class="img-content text-center">
      <img class="rounded-3" src="<?= base_url('assets/images/beranda_img-3.png') ?>" alt="">
    </div>
  </div>
</div>

<?= $this->endSection(); ?>