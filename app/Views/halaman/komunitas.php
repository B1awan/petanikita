<?= $this->extend('templates/header_footer'); ?>

<?= $this->section('content'); ?>

<div class="container h-100 mt-3">
    <form class="row h-100 row-cols-2">
        <div class="h-100 col-12 col-md-3 listChat">
            <div class="accordion" id="chatList">
                <div class="accordion-item">
                <div id="postingan" class="accordion-collapse show" data-bs-parent="#chatList">
                    <div class="accordion-body">
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                                Postingan
                            </a>
                        </div>
                    </div>
                </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#group" aria-expanded="true" aria-controls="group">
                        Group
                        </button>
                    </h2>
                    <div id="group" class="accordion-collapse collapse show" data-bs-parent="#chatList">
                        <div class="accordion-body">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control form-control-sm" placeholder="Cari Group" aria-describedby="searchBtn">
                            </div>
                            <ol>
                                <li>Grup A</li>
                                <li>Group B</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#personal" aria-expanded="false" aria-controls="personal">
                        Personal
                        </button>
                    </h2>
                    <div id="personal" class="accordion-collapse collapse" data-bs-parent="#chatList">
                        <div class="accordion-body">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-control-sm" placeholder="Cari Pengguna" aria-describedby="searchBtn">
                        </div>
                        <ol>
                            <li>Mas Gopal</li>
                            <li>Mas Bayu</li>
                        </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="h-100 col-12 col-md-9 border rounded-3">
            <h4 class="float-end">Ini anda</h4><br>
            <h4 class="float-start">Ini lawan Bicara</h4><br>
            <h4 class="float-end">Ini anda</h4><br>
            <h4 class="float-start">Ini lawan Bicara</h4><br>
            <h4 class="float-end">Ini anda</h4><br>
            <h4 class="float-start">Ini lawan Bicara</h4><br>
            <h4 class="float-end">Ini anda</h4><br>
            <h4 class="float-start">Ini lawan Bicara</h4><br>
        </div>
    </form>
</div>    
<?= $this->endSection(); ?>