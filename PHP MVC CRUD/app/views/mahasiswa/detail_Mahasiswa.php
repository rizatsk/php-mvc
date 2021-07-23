<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h1>Data Mahasiswa <?=$data['mhs']['nama']?></h1>
                <div class="card" style="width: 18rem;">
                  <div class="card-body">
                    <h5 class="card-title"><?=$data['mhs']['nama']?></h5>
                    <p class="card-text"><?=$data['mhs']['nrp']?></p>
                    <p class="card-text"><?=$data['mhs']['email']?></p>
                    <p class="card-text"><?=$data['mhs']['jurusan']?></p>
                    <a href="<?=URL?>/mahasiswa" class="card-link">Kembali</a>
                  </div>
                </div>
        </div>
    </div>
</div>