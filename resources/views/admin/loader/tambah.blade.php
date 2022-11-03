<x-app-layout>
    <div class="row">
        <div class="col-lg-9 col-12 mx-auto">
            <div class="card card-body mt-4">
                <h6 class="mb-0">Form Loader</h6>
                <p class="text-sm mb-0">Tambah Loader Baru</p>
                <hr class="horizontal dark my-3">
                <form method="POST" action="{{ route('Loader.store') }}">
                    @csrf
                    <div class="col-12">
                        <label class="form-label">Nama Loader</label>
                        <input type="text" name="nama_loader" class="form-control" id="projectName" required>
                    </div>
                    <div class="row mt-4">
                        <div class="col-6">
                            <label class="form-label">ORU</label>
                            <input type="text" name="oru" class="form-control" id="projectName" required>
                        </div>
                        <div class="col-6">
                            <label class="form-label">AECM</label>
                            <input type="text" name="aecm" class="form-control" id="projectName" required>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-6">
                            <label class="form-label">RSM</label>
                            <input type="text" name="rsm" class="form-control" id="projectName">
                        </div>
                        <div class="col-6">
                            <label class="form-label">BSM</label>
                            <input type="text" name="bsm" class="form-control" id="projectName">
                        </div>
                    </div>
                    <div class="row mt-4">

                        <div class="col-6">
                            <label class="form-label">REAR LADAR</label>
                            <input type="text" name="rear_ladar" class="form-control" id="projectName" required>
                        </div>

                        <div class="col-6">
                            <label class="form-label">FRONT LADAR</label>
                            <input type="text" name="front_ladar" class="form-control" id="projectName" required>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-4">
                        <button type="button" class="btn btn-light m-0">Cancel</button>
                        <button type="submit"  class="btn bg-gradient-primary m-0 ms-2">Create
                            Project</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
