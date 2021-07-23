<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-4">
            <h1>Data Mahasiswa</h1>
            <!-- Alert -->
            <div class="flash mt-4">
              <?php FlashMessage::flash(); ?>
            </div>
            <!-- end Alert -->

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mt-2 mb-4 tambahDataMahasiswa" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <svg xmlns="http://www.w3.org/2000/svg" style="color:white" width="25" height="25" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                </svg> Tambah Data Mahasiswa
            </button>
            <!-- End button -->

            <!-- form Search Data -->
            <form action="<?=URL?>/mahasiswa/searchData" method="post">
              <div class="input-group mb-3">
                <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Cari Mahasiswa" aria-label="Recipient's username" aria-describedby="button-addon2" autocomplete="off">
                <button class="btn btn-outline-primary" type="submit" id="tombolCari">Search </button>
              </div>
            </form>
            <!-- End Form Search Data -->

            <!-- Data Mahasiswa -->
            <ul class="data-mahasiswa list-group">
                <?php foreach($data['mahasiswa'] as $mahasiswa): ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  <div> <?=$mahasiswa['nama']?> </div>
                  <div>
                    <a href="<?=URL?>/mahasiswa/detail_Mahasiswa/<?=$mahasiswa['id']?>" class="badge bg-primary">Detail</a>
                    <button class="badge bg-success editDataMahasiswa" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="<?=$mahasiswa['id']?>">Edit</button>
                    <a href="<?=URL?>/mahasiswa/delete_Mahasiswa/<?=$mahasiswa['id']?>" class="badge bg-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?');">Delete</a>
                  </div>
                </li>
                <?php endforeach; ?>
            </ul>
            <!-- End Data Mahasiswa -->
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?=URL?>/mahasiswa/tambah_Mahasiswa" method="post">
        <input type="hidden" name="id" id="id">
        <div class="modal-body">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" required>
          </div>
          <div class="mb-3">
            <label for="nrp" class="form-label">NRP</label>
            <input type="number" name="nrp" class="form-control" id="nrp" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" name="email" class="form-control" id="email" required placeholder="email@example.com">
          </div>
          <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <select class="form-select" id="jurusan" name="jurusan">
              <option value="Sistem Informasi">Sistem Informasi</option>
              <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
              <option value="Teknik Informatika">Teknik Informatika</option>
              <option value="Teknik Lingkungan">Teknik Lingkungan</option>
              <option value="Teknik Mesin">Teknik Mesin</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" id="button-submit" class="btn btn-primary">Tambah Data</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- End Modal -->