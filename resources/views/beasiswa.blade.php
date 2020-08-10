  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 1175.4px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Beasiswa</h1>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="row">

          <!-- bagian kiri -->
          <div class="col-3">

            <!-- tambah dan search -->
            <div class="row mx-0">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#tambahModal">Tambah Beasiswa</button>

                    <ul class="list-group list-group-unbordered mb-3">
                      <li class="list-group-item">
                      </li>
                    </ul>

                    <form @submit.prevent = "searchBeasiswa()">
                        <div class="form-group">
                          <label for="cari_nama">Nama</label>
                          <input type="text" class="form-control" name="nama" id="cari_nama" v-model="searchForm.nama">
                        </div>
                        <div class="form-group">
                          <label for="cari_tahun">Tahun</label>
                          <input type="number" class="form-control" name="tahun" id="cari_tahun" v-model="searchForm.tahun">
                        </div>
                    </form>

                    <a href="#" class="btn btn-primary w-25 float-right"><b>Cari</b></a>
                  </div>
                </div>
              </div>
            </div>

            <!-- hasil search -->
            <div class="row mx-0">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="row text-center mx-0">
                      <div class="col-6 border py-1"><a href="">KSE 2016</a></div>
                      <div class="col-6 border py-1"><a href="">KSE 2015</a></div>
                      <div class="col-6 border py-1"><a href="">KSE 2014</a></div>
                      <div class="col-6 border py-1"><a href="">KSE 2013</a></div>
                      <div class="col-6 border py-1"><a href="">KSE 2012</a></div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <a href="" class="float-right">Hapus Semua</a>
                  </div>
                </div>
              </div>
            </div>
        </div>
        
        <!-- bagian kanan -->
        <div class="col-9">
          <div class="card">
            <div class="card-body">
              <div class="row border-bottom mx-0">
                <div class="col-4">
                  <h4>Karya Salemba Empat</h4>
                  <h5>2016</h5>
                </div>

                <!-- info total -->
                <div class="col-3">
                  <div class="info-box">
                    <span class="info-box-icon bg-success"><i class="fas fa-flag"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Penerima Tahun ini</span>
                      <span class="info-box-number">200</span>
                    </div>
                  </div>
                </div>
                <div class="col-3">
                  <div class="info-box">
                    <span class="info-box-icon bg-success"><i class="fas fa-flag"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Jumlah Penerima</span>
                      <span class="info-box-number">200</span>
                    </div>
                  </div>
                </div>
                <div class="col-2">
                  <button class="btn btn-block btn-warning">Ubah</button>
                  <button class="btn btn-block btn-danger">Hapus</button>
                </div>
              </div>

              <!-- table penerima beasiswa -->
              <div class="row mx-0">
                <div class="col-12">
                  <table class="table table-condensed table-center">
                    <thead>
                      <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Program Studi</th>
                        <th>Daftar</th>
                        <th>Terima</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>155150207111036</td>
                        <td>Kelvin Aditya Prasetio</td>
                        <td>Teknik Informatika</td>
                        <td><i class="fas fa-check table-icon green"></i></td>
                        <td><i class="fas fa-check table-icon green"></i></td>
                      </tr>
                      <tr>
                        <td>155150207111036</td>
                        <td>Kelvin Aditya Prasetio</td>
                        <td>Teknik Informatika</td>
                        <td><i class="fas fa-check table-icon green"></i></td>
                        <td><i class="fas fa-times table-icon red"></i></td>
                      </tr>
                      <tr>
                        <td>155150207111036</td>
                        <td>Kelvin Aditya Prasetio</td>
                        <td>Teknik Informatika</td>
                        <td><i class="fas fa-check table-icon green"></i></td>
                        <td><i class="fas fa-check table-icon green"></i></td>
                      </tr>
                    </tbody>
                  </table>

                  <!-- pagination -->
                  <ul class="pagination pagination-sm m-0 float-right">
                    <li class="page-item">
                        <a class="page-link" href="#">«</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">»</a>
                    </li>
                  </ul>

                </div>
              </div>
            </div>
          </div>
      </div>
      </div>
      </div>
    </section>
    <!-- /.content -->

    <!-- modal tambah beasiswa -->
    <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahModalLabel">Tambah Penerimaan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <label for="tahun">Tahun</label>
                        <input type="number" class="form-control" name="tahun" id="tahun">
                    </div>

                    <label for="excelBeasiswa">Beasiswa</label>
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="excelBeasiswa" name="excelBeasiswa" accept=".xls, .xlsx, .xml, .csv"/>
                            <label class="custom-file-label" for="excelBeasiswa" id="excelBeasiswa_label" >Beasiswa.xls</label>
                        </div>
                        <!-- <has-error :form="form" field="excelBeasiswa"></has-error> -->
                    </div>
                    
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
            </div>
        </div>
    </div>

  </div>