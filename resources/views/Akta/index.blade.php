<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon" />
    <title>Akta - Index</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="{{ url('') }}/theme/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ url('') }}/theme/assets/css/lineicons.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ url('') }}/theme/assets/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ url('') }}/theme/assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="{{ url('') }}/theme/assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="{{ url('') }}/theme/assets/css/main.css" />
  </head>
  <body>
    <!-- ======== Preloader =========== -->
    <div id="preloader">
      <div class="spinner"></div>
    </div>
    <!-- ======== Preloader =========== -->

    <!-- ======== sidebar-nav start =========== -->
    
 @include('Layout.side')

    <!-- ======== sidebar-nav end =========== -->

    <!-- ======== main-wrapper start =========== -->
    <main class="main-wrapper">
      <!-- ========== header start ========== -->
      
 @include('Layout.head')

      <!-- ========== header end ========== -->

      <!-- ========== section start ========== -->
      <section class="section">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title">
                  <h2>Data Akta Dashboard</h2>
                </div>
              </div>
              <!-- end col -->
              <div class="col-md-6">
                <div class="breadcrumb-wrapper">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="#0">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">
                        Akta
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          
          <!-- End Row -->
          
          <!-- End Row -->
          
          <!-- End Row -->
          
          <!-- End Row -->
          <div class="row">
            
            <!-- End Col -->
            <div class="col-lg-12">
              <div class="card-style mb-30">
                <div class="title d-flex flex-wrap align-items-center justify-content-between">
                  <div class="left">
                    <h6 class="text-medium mb-30">Data Akta</h6>
                  </div>
                  <div class="right">
                    <div class="select-style-1">
                      <div class="select-position select-sm">
                        <select class="light-bg">
                          <option value="">Today</option>
                          <option value="">Yesterday</option>
                        </select>
                      </div>
                    </div>
                    <!-- end select -->
                  </div>
                </div>
                <!-- Button trigger modal -->
                <button
                    type="button"
                    class="btn btn-primary btn-md"
                    data-bs-toggle="modal"
                    data-bs-target="#modalId"
                >
                    Tambah Data Akta
                </button>
                
                <div class="modal fade" id="modalId" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <form action="{{ route('Akta-Store') }}" method="POST" role="form">
        @csrf
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">Tambah Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label for="nama_notaris">Nama Notaris</label>
                        <select class="form-control selectpicker" name="id_notaris" id="nama_notaris">
                            @foreach ($user as $u)
                                <option value="{{ $u->id }}">{{ $u->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="nama_klien">Nama Klien</label>
                        <select class="form-control selectpicker" name="id_klien" id="nama_klien">
                            @foreach ($user as $u)
                                <option value="{{ $u->id }}">{{ $u->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="jenis_akta">Jenis Akta</label>
                        <select class="form-control selectpicker" name="jenis_akta" id="jenis_akta">
                            @foreach ($jenis as $j)
                                <option value="{{ $j->jenis_akta }}-{{ $j->deskripsi }}">{{ $j->jenis_akta }}-{{ $j->deskripsi }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="tgl_pembuatan">Tanggal Pembuatan</label>
                        <input type="date" class="form-control" id="tgl_pembuatan" name="tgl_pembuatan">
                    </div>
                    <div class="form-group mb-3">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" class="form-control" cols="15" rows="10"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="saveButton">Save</button>
                </div>
            </div>
        </div>
    </form>
</div>
                
                <script>
                    var modalId = document.getElementById('modalId');
                
                    modalId.addEventListener('show.bs.modal', function (event) {
                          // Button that triggered the modal
                          let button = event.relatedTarget;
                          // Extract info from data-bs-* attributes
                          let recipient = button.getAttribute('data-bs-whatever');
                
                        // Use above variables to manipulate the DOM
                    });
                </script>
                
                <!-- End Title -->
                <div class="table-responsive">
                  <table class="table top-selling-table">
                    <thead>
                      <tr>
                        <th>
                          <h6 class="text-sm text-medium">No</h6>
                        </th>
                        <th class="min-width">
                          <h6 class="text-sm text-medium">
                            Nama Notaris <i class="lni lni-arrows-vertical"></i>
                          </h6>
                        </th>
                        <th class="min-width">
                         <h6 class="text-sm text-medium">
                           Nama Klien <i class="lni lni-arrows-vertical"></i>
                         </h6>
                       </th>
                        <th class="min-width">
                         <h6 class="text-sm text-medium">
                           Jenis Akta <i class="lni lni-arrows-vertical"></i>
                         </h6>
                       </th>
                       <th class="min-width">
                        <h6 class="text-sm text-medium">
                          Tanggal Pembuatan <i class="lni lni-arrows-vertical"></i>
                        </h6>
                      </th>
                        <th class="min-width">
                          <h6 class="text-sm text-medium">
                            Deskripsi <i class="lni lni-arrows-vertical"></i>
                          </h6>
                        </th>
                        
                        <th>
                          <h6 class="text-sm text-medium text-end">
                            Actions <i class="lni lni-arrows-vertical"></i>
                          </h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                       @foreach($akta as $a)
                        <tr>
                        <td>{{ $a->id }}</td>
                        <td>{{ $a->notaris->name }}</td>
                        <td>{{ $a->klien->name }}</td>
                        <td>{{ $a->jenis_akta }}</td>
                        <td>{{ $a->tgl_pembuatan }}</td>
                        <td>{{ $a->deskripsi }}</td>
                        
                        <td>
                         <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal{{$a->id}}">Edit</button>
                         <div class="modal fade" id="editModal{{$a->id}}" tabindex="-1" aria-labelledby="editModal{{$a->id}}Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModal{{$a->id}}Label">Edit Akta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Form for editing data -->
                    <form action="{{ url('Akta-Update/'.$a->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                          <label for="">Nama Notaris</label>
                            <select class="form-control selectpicker" name="id_notaris" id="inputData" placeholder="id_notaris">
                                  @foreach ($user as $u)
                                   <option value="{{ $u->id }}">{{ $u->name }}</option>
                                  @endforeach
                             </select>
                            </div>
                            <div class="mb-3">
                              <label for="">Nama Klien</label>
                            <select class="form-control selectpicker" name="id_klien" id="inputData" placeholder="id_klien">
                                  @foreach ($user as $u)
                                   <option value="{{ $u->id }}">{{ $u->name }}</option>
                                  @endforeach
                             </select>
                            </div>

                              <div class="mb-3">
                              <label for="">Jenis Akta</label>
                            <select class="form-control selectpicker" name="jenis_akta" id="inputData" placeholder="jenis akta">
                                  @foreach ($jenis as $j)
                                   <option value="{{ $j->jenis_akta }}-{{ $j->deskripsi }}">{{ $j->jenis_akta }}-{{ $j->deskripsi }}</option>
                                  @endforeach
                             </select>
                            </div>
                      
                             

                          <div class="mb-3">
                  <label for="">Tanggal Pembuatan</label>
                            <input type="date" class="form-control" id="editTglPembuatan{{$a->tgl_pembuatan}}" name="tgl_pembuatan" value="{{$a->tgl_pembuatan}}" >
                        </div>
                         <div class="mb-3">
                  <label for="">Deskripsi</label>
                            <input type="text" class="form-control" id="editDeskripsi{{$a->deskripsi}}" name="deskripsi" value="{{$a->deskripsi}}" >
                        </div>

                       

                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<a href="{{ route('Akta-Delete', $a->id) }}"class="btn btn-danger delete-btn"
       onclick="event.preventDefault();
                if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                    document.getElementById('delete-form-{{$a->id}}').submit();
                }">
        Hapus
    </a>

    <form id="delete-form-{{$a->id}}" action="{{ route('Akta-Delete', $a->id) }}" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>

<button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#arsipModal{{$a->id}}">Arsip Dokumen</button>
    <div class="modal fade" id="arsipModal{{$a->id}}" tabindex="-1" aria-labelledby="arsipModal{{$a->id}}Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="arsipModal{{$a->id}}Label">Arsip Dokumen</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                    <form action="{{ url('Dokumen-Store/'.$a->id) }}" method="POST">
                        @csrf
                        @method('POST')
                        
                         <div class="mb-3">
                  <label for="">Id Akta</label>
                            <input type="text" class="form-control" id="arsipDeskripsi{{$a->id}}" name="id_akta" value="{{$a->id}}" readonly>
                        </div>
  <div class="mb-3">
                  <label for="">Nama Dokumen</label>
                            <input type="text" class="form-control" id="arsipDeskripsi" name="nama_dokumen">
                        </div>
                          <div class="mb-3">
                  <label for="">Tanggal Upload</label>
                            <input type="date" class="form-control" id="arsipDeskripsi" name="tgl_upload">
                        </div>
                          <div class="mb-3">
                  <label for="">Deskripsi Dokumen</label>
                            <input type="text" class="form-control" id="arsipDeskripsi" name="deskripsi">
                        </div>
                       

                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
                        </td>
                      </tr>
                      @endforeach   
                    </tbody>
                  </table>
                  <!-- End Table -->
                </div>
              </div>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
        <!-- end container -->
      </section>
      <!-- ========== section end ========== -->

      <!-- ========== footer start =========== -->
      

 @include('Layout.footer')

      <!-- ========== footer end =========== -->
    </main>
    <!-- ======== main-wrapper end =========== -->

    <!-- ========= All Javascript files linkup ======== -->
    <script src="{{ url('') }}/theme/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('') }}/theme/assets/js/Chart.min.js"></script>
    <script src="{{ url('') }}/theme/assets/js/dynamic-pie-chart.js"></script>
    <script src="{{ url('') }}/theme/assets/js/moment.min.js"></script>
    <script src="{{ url('') }}/theme/assets/js/fullcalendar.js"></script>
    <script src="{{ url('') }}/theme/assets/js/jvectormap.min.js"></script>
    <script src="{{ url('') }}/theme/assets/js/world-merc.js"></script>
    <script src="{{ url('') }}/theme/assets/js/polyfill.js"></script>
    <script src="{{ url('') }}/theme/assets/js/main.js"></script>

    
  </body>
</html>
