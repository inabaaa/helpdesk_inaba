@extends('templates.app')

@section('mainContent')
<div class="card">
    <div class="card-body">
    <form action="{{ route('help.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        {{-- Name --}}
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" name="name" placeholder="Masukkan nama...">
        </div>
        {{-- Pengaduan --}}
        <div class="mb-3">
            <label class="form-label">Pengaduan</label>
            <input type="text" class="form-control" name="description" placeholder="Masukkan pengaduan...">
        </div>
        {{-- Email --}}
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" class="form-control" name="email" placeholder="Masukkan email...">
        </div>
        <div class="mb-3">
            <label class="form-label">Pengaduan</label>
            <button type="submit" class="btn btn-outline-facebook">Sumbit</button>
        </div>
    </form>
</div>
</div>
@endsection