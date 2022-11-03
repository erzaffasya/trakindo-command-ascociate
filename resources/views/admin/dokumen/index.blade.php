<x-app-layout>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header pb-0">
                        <div class="d-lg-flex">
                            <div>
                                <h5 class="mb-0">All Products</h5>
                                <p class="text-sm mb-0">
                                    A lightweight, extendable, dependency-free javascript HTML table plugin.
                                </p>
                            </div>
                            <div class="ms-auto my-auto mt-lg-0 mt-4">
                                <div class="ms-auto my-auto">
                                    <a href="./new-product.html" class="btn bg-gradient-primary btn-sm mb-0"
                                        target="_blank">+&nbsp; New Product</a>
                                    <button type="button" class="btn btn-outline-primary btn-sm mb-0"
                                        data-bs-toggle="modal" data-bs-target="#import">
                                        Import
                                    </button>
                                    <div class="modal fade" id="import" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog mt-lg-10">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="ModalLabel">Import CSV</h5>
                                                    <i class="fas fa-upload ms-3"></i>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>You can browse your computer for a file.</p>
                                                    <input type="text" placeholder="Browse file..."
                                                        class="form-control mb-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="importCheck" checked="">
                                                        <label class="custom-control-label" for="importCheck">I accept
                                                            the terms and conditions</label>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn bg-gradient-secondary btn-sm"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button"
                                                        class="btn bg-gradient-primary btn-sm">Upload</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-outline-primary btn-sm export mb-0 mt-sm-0 mt-1"
                                        data-type="csv" type="button" name="button">Export</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-0">
                        <div class="table-responsive">
                            <table class="table table-flush" id="products-list">
                                <thead class="thead-light">
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Kategori</th>
                                        <th>Tahun Terbit</th>
                                        <th>Nama Pengarang</th>
                                        <th>Penerbit</th>
                                        <th>Deskripsi</th>
                                        <th>User</th>
                                        <th>Created At</th>          
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Dokumen as $item)
                                        <tr>
                                            <td> {{$loop->iteration}}
                                            </td>
                                            <td class="text-sm">{{$item->judul}}</td>
                                            <td class="text-sm">{{$item->kategori->nama_kategori}}</td>
                                            <td class="text-sm">{{$item->tahun_terbit}}</td>
                                            <td class="text-sm">{{$item->nama_pengarang}}</td>
                                            <td class="text-sm">{{$item->penerbit}}</td>
                                            <td class="text-sm">{{$item->deskripsi}}</td>
                                            <td class="text-sm">{{$item->users->name}}</td>
                                            <td class="text-sm">{{date('d M Y', strtotime($item->created_at))}}</td>
                                            <td class="text-sm">
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Preview product">
                                                    <i class="fas fa-eye text-secondary"></i>
                                                </a>
                                                <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Edit product">
                                                    <i class="fas fa-user-edit text-secondary"></i>
                                                </a>
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Delete product">
                                                    <i class="fas fa-trash text-secondary"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach


                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Kategori</th>
                                        <th>Tahun Terbit</th>
                                        <th>Nama Pengarang</th>
                                        <th>Penerbit</th>
                                        <th>Deskripsi</th>
                                        <th>User</th>
                                        <th>Created At</th>          
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <!--   Core JS Files   -->
        <script src="tadmin/assets/js/core/popper.min.js"></script>
        <script src="tadmin/assets/js/core/bootstrap.min.js"></script>
        <script src="tadmin/assets/js/plugins/perfect-scrollbar.min.js"></script>
        <script src="tadmin/assets/js/plugins/smooth-scrollbar.min.js"></script>
        <script src="tadmin/assets/js/plugins/datatables.js"></script>
        <script>
            if (document.getElementById('products-list')) {
                const dataTableSearch = new simpleDatatables.DataTable("#products-list", {
                    searchable: true,
                    fixedHeight: false,
                    perPage: 7
                });

                document.querySelectorAll(".export").forEach(function(el) {
                    el.addEventListener("click", function(e) {
                        var type = el.dataset.type;

                        var data = {
                            type: type,
                            filename: "soft-ui-" + type,
                        };

                        if (type === "csv") {
                            data.columnDelimiter = "|";
                        }

                        dataTableSearch.export(data);
                    });
                });
            };
        </script>
        <!-- Kanban scripts -->
        <script src="tadmin/assets/js/plugins/dragula/dragula.min.js"></script>
        <script src="tadmin/assets/js/plugins/jkanban/jkanban.js"></script>
        <script>
            var win = navigator.platform.indexOf('Win') > -1;
            if (win && document.querySelector('#sidenav-scrollbar')) {
                var options = {
                    damping: '0.5'
                }
                Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
            }
        </script>
        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="tadmin/assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
    @endpush
</x-app-layout>
