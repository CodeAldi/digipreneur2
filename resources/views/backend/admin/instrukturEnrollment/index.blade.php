@extends('layouts.backend.main')
@section('content')
<div class="card h-100">
    <div class="card-body">
        <div class="card-title row">
            <h5 class="col">List Materi</h5>
            <a href="javascript:void(0);" class="col-2 btn btn-primary float-end" data-bs-toggle="modal"
                data-bs-target="#basicModal">Tambah</a>
        </div>
        <div class="table-responsive text-nowrap h-100">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Instruktur</th>
                        <th>Judul Materi</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse ($instrukturEnrollment as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->instruktur->nama }}</td>
                        <td>{{ $item->materi->judul_materi }}</td>
                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                            class="bx bx-edit-alt me-1"></i>
                                        Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                                        data-bs-target="#deleteModal{{ $loop->iteration }}"><i
                                            class="bx bx-trash me-1"></i>
                                        Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="bg-warning text-white text-center">Data Not Found</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Tambah Enrollment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin.enroll.instruktur.store') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="materi" class="form-label">Materi</label>
                            <select class="form-select" id="materi" name="materi_id">
                                <option selected>Pilih Materi</option>
                                @forelse ($materi as $item)
                                <option value="{{ $item->id }}">{{ $item->judul_materi }}</option>
                                @empty
                                <option disabled class="bg-warning text-white">No Data</option>
                                @endforelse
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="instruktur" class="form-label">Instruktur</label>
                            <select class="form-select" id="instruktur" name="instruktur_id">
                                <option selected>Pilih Instruktur</option>
                                @forelse ($instruktur as $item)
                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                @empty
                                <option disabled class="bg-warning text-white">No Data</option>
                                @endforelse
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>

@forelse ($instrukturEnrollment as $item)
<div class="modal fade" id="deleteModal{{ $loop->iteration }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Delete materi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin.enroll.instruktur.destroy',['id'=> $item->id]) }}" method="post">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    <p>Apakah Anda Yakin Delete Enrollment Ini ?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">Delete!</button>
                </div>
            </form>
        </div>
    </div>
</div>
@empty
<div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Delete materi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin.materi.store') }}" method="post">
                @csrf
                <div class="modal-body">
                    <p>Apakah Anda Yakin Delete materi ?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">Delete!</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endforelse
@endsection