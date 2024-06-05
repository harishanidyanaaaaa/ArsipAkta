<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon" />
    <title>Dokumen - Index</title>

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
                  <h2>Data Dokumen Dashboard</h2>
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
                        Dokumen
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
                    <h6 class="text-medium mb-30">Data Dokumen</h6>
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
                {{-- <button
                    type="button"
                    class="btn btn-primary btn-md"
                    data-bs-toggle="modal"
                    data-bs-target="#modalId"
                >
                    Tambah Data Dokumen
                </button> --}}
                
                <!-- Modal -->
                {{-- <div
                    class="modal fade"
                    id="modalId"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="modalTitleId"
                    aria-hidden="true"
                >
                  <form action="{{ route('Akta-Store') }}" role="form" method="post">
                        @csrf
                        <div
                        class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                        role="document"
                    >
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalTitleId">
                                   Tambah Data
                                </h5>
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"
                                ></button>
                            </div>
                            <div class="modal-body">
                                
                                <div class="form-group mb-3"> 
                                  <label for="">Nama Notaris</label>
                               <select class="form-control selectpicker" name="id_notaris" id="inputData">
                                  @foreach ($user as $u)
                                   <option value="{{ $u->id }}">{{ $u->name }}</option>
                                  @endforeach
                              </select>
                                </div>
                                <div class="form-group mb-3"> 
                                  <label for="">Nama Klien</label>
                               <select class="form-control selectpicker" name="id_klien" id="inputData">
                                  @foreach ($user as $u)
                                   <option value="{{ $u->id }}">{{ $u->name }}</option>
                                  @endforeach
                              </select>
                                </div>
                                 <div class="form-group mb-3"> 
                                  <label for="">Jenis Akta</label>
                               <select class="form-control selectpicker" name="jenis_akta" id="inputData">
                                    <option value="Akta Jual Beli">Akta Jual Beli</option>
                                    <option value="Akta Hibah">Akta Hibah</option>
                                    <option value="Akta Waris">Akta Waris</option>
                                    <option value="Akta Nikah">Akta Nikah</option>
                                    <option value="Akta Cerai">Akta Cerai</option>
                                    <option value="Akta Lainnya">Akta Lainnya</option>
                              </select>
                                </div>

                                 <div class="form-group mb-3">
                                  <label for="">Tanggal Pembuatan</label>
                                    <input type="date" class="form-control" id="inputData"  name="tgl_pembuatan">
                                </div>
                               
                                 <div class="form-group mb-3">
                                  <label for="">Deskripsi</label>
                                   <textarea name="deskripsi" id=""  class="form-control" cols="15" rows="10"></textarea>
                                </div>
                                 
                            </div>
                            <div class="modal-footer">
                                <button
                                    type="submit"
                                    class="btn btn-secondary"
                                    data-bs-dismiss="modal"
                                >
                                    Close
                                </button>
                                <button type="submit" class="btn btn-primary">Save</button>
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
                </script> --}}
                
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
                           Jenis Akta <i class="lni lni-arrows-vertical"></i>
                         </h6>
                       </th>
                        <th class="min-width">
                         <h6 class="text-sm text-medium">
                           Nama Dokumen <i class="lni lni-arrows-vertical"></i>
                         </h6>
                       </th>
                       <th class="min-width">
                        <h6 class="text-sm text-medium">
                          Tanggal Upload <i class="lni lni-arrows-vertical"></i>
                        </h6>
                      </th>
                        <th class="min-width">
                          <h6 class="text-sm text-medium">
                            Deskripsi Dokumen<i class="lni lni-arrows-vertical"></i>
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
                       @foreach($dokumen as $d)
                        <tr>
                        <td>{{ $d->id }}</td>
                        <td>{{ $d->akta->jenis_akta }}</td>
                        <td>{{ $d->nama_dokumen }}</td>
                      
                        <td>{{ $d->tgl_upload }}</td>
                        <td>{{ $d->deskripsi }}</td>
                        
                        <td>
                         <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal{{$d->id}}">Edit</button>
                         <div class="modal fade" id="editModal{{$d->id}}" tabindex="-1" aria-labelledby="editModal{{$d->id}}Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModal{{$d->id}}Label">Edit Akta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Form for editing data -->
                    <form action="{{ url('Dokumen-Update/'.$d->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        {{-- <div class="mb-3">
                          <label for="">Nama Notaris</label>
                            <select class="form-control selectpicker" name="id_notaris" id="inputData" placeholder="id_notaris">
                                  @foreach ($user as $u)
                                   <option value="{{ $u->id }}">{{ $u->name }}</option>
                                  @endforeach
                             </select>
                            </div> --}}
                            {{-- <div class="mb-3">
                              <label for="">Nama Klien</label>
                            <select class="form-control selectpicker" name="id_klien" id="inputData" placeholder="id_klien">
                                  @foreach ($user as $u)
                                   <option value="{{ $u->id }}">{{ $u->name }}</option>
                                  @endforeach
                             </select>
                            </div> --}}
                      
                             <div class="mb-3">
                  <label for="">Jenis Akta</label>
                            <select class="form-control selectpicker" name="jenis_akta" id="inputData" placeholder="jenis_akta">
                                    <option value="Akta Jual Beli">Akta Jual Beli</option>
                                    <option value="Akta Hibah">Akta Hibah</option>
                                    <option value="Akta Waris">Akta Waris</option>
                                    <option value="Akta Nikah">Akta Nikah</option>
                                    <option value="Akta Cerai">Akta Cerai</option>
                                    <option value="Akta Lainnya">Akta Lainnya</option>
                            </select>
                        </div>
<div class="mb-3">
                  <label for="">Nama Dokumen</label>
                            <input type="text" class="form-control" id="editTglPembuatan{{$d->nama_dokumen}}" name="nama_dokumen" value="{{$d->nama_dokumen}}" >
                        </div>
                          <div class="mb-3">
                  <label for="">Tanggal Pembuatan</label>
                            <input type="date" class="form-control" id="editTglPembuatan{{$d->tgl_pembuatan}}" name="tgl_pembuatan" value="{{$d->tgl_pembuatan}}" >
                        </div>
                         <div class="mb-3">
                  <label for="">Deskripsi</label>
                            <input type="text" class="form-control" id="editDeskripsi{{$d->deskripsi}}" name="deskripsi" value="{{$d->deskripsi}}" >
                        </div>

                       

                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<a href="{{ route('Dokumen-Delete', $d->id) }}"class="btn btn-danger delete-btn"
       onclick="event.preventDefault();
                if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                    document.getElementById('delete-form-{{$d->id}}').submit();
                }">
        Hapus
    </a>

    <form id="delete-form-{{$d->id}}" action="{{ route('Dokumen-Delete', $d->id) }}" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>

   
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
