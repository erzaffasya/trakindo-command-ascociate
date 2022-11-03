<x-app-layout>

    <div class="row mt-lg-4 mt-2">
        <div class="d-sm-flex justify-content-between">
            <div>
                <a href="{{route('Loader.create')}}" class="btn btn-icon bg-gradient-primary">
                    Tambah Loader
                </a>
            </div>
            <div class="d-flex">
                <div class="dropdown d-inline">
                    <a href="javascript:;" class="btn btn-outline-dark dropdown-toggle " data-bs-toggle="dropdown"
                        id="navbarDropdownMenuLink2" aria-expanded="true">
                        Filters
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg-start px-2 py-3 "
                        aria-labelledby="navbarDropdownMenuLink2" data-popper-placement="bottom-start"
                        style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 45px);">
                        <li><a class="dropdown-item border-radius-md" href="{{url('dashboard?filter=Aktif')}}">Status: Aktif</a></li>
                        <li><a class="dropdown-item border-radius-md" href="{{url('dashboard?filter=Tidak-Aktif')}}">Status: Tidak Aktif</a></li>
                        {{-- <li><a class="dropdown-item border-radius-md" href="javascript:;">Status: Semua</a></li> --}}
                        <li>
                            <hr class="horizontal dark my-2">
                        </li>
                        <li><a class="dropdown-item border-radius-md text-danger" href="{{url('dashboard')}}">Remove Filter</a>
                        </li>
                    </ul>
                </div>
                {{-- <button class="btn btn-icon btn-outline-dark ms-2 export" data-type="csv" type="button">
                    <span class="btn-inner--icon"><i class="ni ni-archive-2"></i></span>
                    <span class="btn-inner--text">Export CSV</span>
                </button> --}}
            </div>
        </div>
        @foreach ($Loader as $item)
            <div class="col-lg-3 col-md-4 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="d-flex">
                            <div class="avatar avatar-xl bg-gradient-dark border-radius-md p-2">
                                <img src="tadmin/assets/img/small-logos/logo-slack.svg" alt="slack_logo">
                            </div>
                            <div class="ms-3 my-auto">

                                <h6>{{ $item->oru }}</h6>

                                <div class="avatar-group">
                                    <p class="text-sm"> WAP </p>
                                </div>
                            </div>

                            <div class="ms-auto">
                                <div class="dropdown">
                                    <button class="btn btn-link text-secondary ps-0 pe-2" id="navbarDropdownMenuLink"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v text-lg"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end me-sm-n4 me-n3"
                                        aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="{{ route('Loader.edit', $item->id) }}">Ubah
                                            Data</a>
                                        <form method="post" action="{{ route('Loader.destroy', $item->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="dropdown-item" href="javascript:;">Hapus</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="horizontal dark">
                        <div>
                            <p class="text-xs mb-0 text-secondary font-weight-bold mt-3">Name :</p>
                            {{-- <span class="text-xs font-weight-bolder">{{ $item->nama_loader }}</span> --}}
                        </div>
                        <div>
                            <p class="text-xs mb-0 text-secondary font-weight-bold mt-3">MAC : </p>
                            {{-- <span class="text-xs font-weight-bolder">{{ $item->rear_ladar }}</span> --}}
                        </div>
                        <div>
                            <p class="text-xs mb-0 text-secondary font-weight-bold mt-3">Clients :</p>
                            {{-- <span class="text-xs font-weight-bolder">{{ $item->front_ladar }}</span> --}}
                        </div>


                        <div>
                            <p class="text-xs mb-0 text-secondary font-weight-bold mt-3">CH :</p>
                            {{-- <span class="text-xs font-weight-bolder">{{ $item->nama_loader }}</span> --}}
                        </div>
                        <div>
                            <p class="text-xs mb-0 text-secondary font-weight-bold mt-3">RSSI :</p>
                            {{-- <span class="text-xs font-weight-bolder">{{ $item->rear_ladar }}</span> --}}
                        </div>
                        <hr class="horizontal dark">
                        <div>
                            <p class="text-xs mb-0 text-secondary font-weight-bold mt-3">ORU</p>
                            <span class="text-xs font-weight-bolder">{{ $item->oru }}</span>
                        </div>
                        <div>
                            <p class="text-xs mb-0 text-secondary font-weight-bold mt-3">FRONT LADAR</p>
                            <span class="text-xs font-weight-bolder">{{ $item->front_ladar }}</span>
                        </div>
                        <div>
                            <p class="text-xs mb-0 text-secondary font-weight-bold mt-3">REAR LADAR</p>
                            <span class="text-xs font-weight-bolder">{{ $item->rear_ladar }}</span>
                        </div>
                        <hr class="horizontal dark">
                        <div>
                            <p class="text-xs mb-0 text-secondary font-weight-bold mt-3">RSM</p>
                            <span class="text-xs font-weight-bolder">{{ $item->rsm }}</span>
                        </div>
                        <div>
                            <p class="text-xs mb-0 text-secondary font-weight-bold mt-3">AECM</p>
                            <span class="text-xs font-weight-bolder">{{ $item->aecm }}</span>
                        </div>
                        <div>
                            <p class="text-xs mb-0 text-secondary font-weight-bold mt-3">BSM</p>
                            <span class="text-xs font-weight-bolder">{{ $item->bsm }}</span>
                        </div>
                        {{-- <div class="row">
                            <div class="col-4">
                                <h6 class="text-sm mb-0">{{ $item->rsm }}</h6>
                                <p class="text-secondary text-sm font-weight-bold mb-0">RSM</p>
                            </div>
                            <div class="col-4 text-center">
                                <h6 class="text-sm mb-0">{{ $item->aecm }}</h6>
                                <p class="text-secondary text-sm font-weight-bold mb-0">AECM</p>
                            </div>
                            <div class="col-4 text-end">
                                <h6 class="text-sm mb-0">{{ $item->bsm }}</h6>
                                <p class="text-secondary text-sm font-weight-bold mb-0">BSM</p>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
