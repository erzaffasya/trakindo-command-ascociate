<x-app-layout>

    <div class="row mt-lg-4 mt-2">

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
                                        <a class="dropdown-item" href="{{route('Loader.edit',$item->id)}}">Ubah Data</a>
                                        <form method="post" action="{{route('Loader.destroy',$item->id)}}">
                                            @csrf
                                            @method("DELETE")
                                        <button class="dropdown-item" href="javascript:;">Hapus</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="horizontal dark">
                        <div>
                            <p class="text-xs mb-0 text-secondary font-weight-bold mt-3">NAMA LOADER</p>
                            <span class="text-xs font-weight-bolder">{{$item->nama_loader}}</span>
                        </div>
                        <div>
                            <p class="text-xs mb-0 text-secondary font-weight-bold mt-3">REAR LADAR</p>
                            <span class="text-xs font-weight-bolder">{{$item->rear_ladar}}</span>
                        </div>
                        <div>
                            <p class="text-xs mb-0 text-secondary font-weight-bold mt-3">FRONT LADAR</p>
                            <span class="text-xs font-weight-bolder">{{$item->front_ladar}}</span>
                        </div>
                        <hr class="horizontal dark">
                        <div class="row">
                            <div class="col-6">
                                <h6 class="text-sm mb-0">{{$item->rsm}}</h6>
                                <p class="text-secondary text-sm font-weight-bold mb-0">RSM</p>
                            </div>
                            <div class="col-6 text-end">
                                <h6 class="text-sm mb-0">{{$item->bsm}}</h6>
                                <p class="text-secondary text-sm font-weight-bold mb-0">BSM</p>
                            </div>
                        </div>
                        <div class="row text-center">                            
                            <h6 class="text-sm mb-0">{{$item->aecm}}</h6>
                            <p class="text-secondary text-sm font-weight-bold mb-0">AECM</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach


        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body d-flex flex-column justify-content-center text-center">
                    <a href="{{ route('Loader.create') }}">
                        <i class="fa fa-plus text-secondary mb-3"></i>
                        <h5 class=" text-secondary"> New project </h5>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
