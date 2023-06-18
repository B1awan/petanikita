<?= $this->extend('templates/header_footer'); ?>

<?= $this->section('content'); ?>


<div class="container mt-4">
  <div class="row row-cols-2 mb-5">
    <div class="col-12 col-md-3">
      <div class="accordion" id="kategoriList">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#kategori1" aria-expanded="true" aria-controls="kategori1">
              Bibit
            </button>
          </h2>
          <div id="kategori1" class="accordion-collapse collapse show" data-bs-parent="#kategoriList">
            <div class="accordion-body">
              <ol>
                <li>Bibit A</li>
                <li>Bibit B</li>
                <li>Bibit C</li>
              </ol>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#kategori2" aria-expanded="false" aria-controls="kategori2">
              Pupuk
            </button>
          </h2>
          <div id="kategori2" class="accordion-collapse collapse" data-bs-parent="#kategoriList">
            <div class="accordion-body">
              <ol>
                <li>Pupuk A</li>
                <li>Pupuk B</li>
                <li>Pupuk C</li>
              </ol>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#kategori3" aria-expanded="false" aria-controls="kategori3">
              Tools
            </button>
          </h2>
          <div id="kategori3" class="accordion-collapse collapse" data-bs-parent="#kategoriList">
            <div class="accordion-body">
              <ol>
                <li>Tools A</li>
                <li>Tools B</li>
                <li>Tools C</li>
              </ol>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#kategori4" aria-expanded="false" aria-controls="kategori4">
              Hasil Tani
            </button>
          </h2>
          <div id="kategori4" class="accordion-collapse collapse" data-bs-parent="#kategoriList">
            <div class="accordion-body">
              <ol>
                <li>Padi</li>
                <li>Jagung</li>
                <li>Cabai</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-9">
      <form action="">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Masukkan nama produk" aria-describedby="searchBtn">
          <button class="btn btn-outline-secondary" type="button" id="searchBtn">Cari</button>
        </div>
      </form>
      <div class="row row-cols-2 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100">
            <img src="assets/images/beranda_img-1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">bibit itu</p>
              
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Beli</a>  
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="assets/images/beranda_img-2.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">tomat organik pegunungan</p>
              
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Beli</a>  
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="assets/images/beranda_img-3.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">cabe, toman, dan mentimun ini menggunakan pupuk organik</p>
              
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Beli</a>  
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="assets/images/beranda_img-1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">bibit itu</p>
              
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Beli</a>  
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="assets/images/beranda_img-2.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">tomat organik pegunungan</p>
              
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Beli</a>  
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="assets/images/beranda_img-3.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">cabe, toman, dan mentimun ini menggunakan pupuk organik</p>
              
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Beli</a>  
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="assets/images/beranda_img-1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">bibit itu</p>
              
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Beli</a>  
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="assets/images/beranda_img-2.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">tomat organik pegunungan</p>
              
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Beli</a>  
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="assets/images/beranda_img-3.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">cabe, toman, dan mentimun ini menggunakan pupuk organik</p>
              
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Beli</a>  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?= $this->endSection(); ?>