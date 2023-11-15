@extends('layouts.backend.main')
@section('content')
<div class="card h-100">
    <div class="card-body">
        <div class="card-title row">
            <h5 class="col-2">List Peserta</h5>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Peserta</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @forelse ($peserta as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->user->name }}</td>
                    <td><span class="badge bg-label-primary me-1">Active</span></td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                {{-- <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>
                                    Edit</a> --}}
                                <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal{{ $loop->iteration }}"><i class="bx bx-trash me-1"></i>
                                    Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td class="bg-warning text-white text-center" colspan="4">No Data</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@forelse ($peserta as $item)
<div class="modal fade" id="deleteModal{{ $loop->iteration }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Delete Peserta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin.peserta.destroy',['id'=> $item->id]) }}" method="post">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    <p>Apakah Anda Yakin Delete Peserta : {{ $item->user->name }} ?</p>
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