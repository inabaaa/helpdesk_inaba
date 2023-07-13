@extends('templates.app')

@section('mainContent')
<div class="card">
    <div class="card-body">
        <div class="row row-cards mb-3">

            <div class="col-sm-6 col-lg">
            <div class="card card-sm">
                <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-auto">
                    <span class="bg-primary text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16">
                            <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
                          </svg>
                    </span>
                    </div>
                    <div class="col">
                    <div class="font-weight-medium">
                        Open
                    </div>
                    <div class="text-muted">
                        {{-- Jumlah open berapa --}}
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>

            <div class="col-sm-6 col-lg">
            <div class="card card-sm">
                <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-auto">
                    <span class="bg-green text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/shopping-cart -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10 1.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1Zm-5 0A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5v1A1.5 1.5 0 0 1 9.5 4h-3A1.5 1.5 0 0 1 5 2.5v-1Zm-2 0h1v1A2.5 2.5 0 0 0 6.5 5h3A2.5 2.5 0 0 0 12 2.5v-1h1a2 2 0 0 1 2 2V14a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V3.5a2 2 0 0 1 2-2Z"/>
                          </svg>
                    </span>
                    </div>
                    <div class="col">
                    <div class="font-weight-medium">
                        Pending
                    </div>
                    <div class="text-muted">
                        {{-- Jumlah pending berapa --}}
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>

            <div class="col-sm-6 col-lg">
            <div class="card card-sm">
                <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-auto">
                    <span class="bg-twitter text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/brand-twitter -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard2-pulse-fill" viewBox="0 0 16 16">
                            <path d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5Z"/>
                            <path d="M4.085 1H3.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1h-.585c.055.156.085.325.085.5V2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 2v-.5c0-.175.03-.344.085-.5ZM9.98 5.356 11.372 10h.128a.5.5 0 0 1 0 1H11a.5.5 0 0 1-.479-.356l-.94-3.135-1.092 5.096a.5.5 0 0 1-.968.039L6.383 8.85l-.936 1.873A.5.5 0 0 1 5 11h-.5a.5.5 0 0 1 0-1h.191l1.362-2.724a.5.5 0 0 1 .926.08l.94 3.135 1.092-5.096a.5.5 0 0 1 .968-.039Z"/>
                          </svg>
                    </span>
                    </div>
                    <div class="col">
                    <div class="font-weight-medium">
                        On Hold
                    </div>
                    <div class="text-muted">
                        {{-- Jumlah yang ditangani berapa --}}
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>

            <div class="col-sm-6 col-lg">
            <div class="card card-sm">
                <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-auto">
                    <span class="bg-facebook text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard2-check-fill" viewBox="0 0 16 16">
                            <path d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5Z"/>
                            <path d="M4.085 1H3.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1h-.585c.055.156.085.325.085.5V2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 2v-.5c0-.175.03-.344.085-.5Zm6.769 6.854-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708.708Z"/>
                          </svg>
                    </span>
                    </div>
                    <div class="col">
                    <div class="font-weight-medium">
                        Solved
                    </div>
                    <div class="text-muted">
                        {{-- Jumlah yang selesai berapa --}}
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>

            <div class="col-sm-6 col-lg text-start mb-3">
            <div class="card card-sm">
                <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-auto">
                    <span class="bg-danger text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16">
                            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/>
                          </svg>
                    </span>
                    </div>
                    <div class="col">
                    <div class="font-weight-medium">
                        Closed
                    </div>
                    <div class="text-muted">
                        {{-- Jumlah yang udah diclose berapa --}}
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>

<div class="card-table table-responsive">
    <table class="table table-vcenter">
    <thead>
        <tr>
        <th>Nama</th>
        <th>Pesan</th>
        <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($helper as $he)
        <tr>
            <td>{{ $he->name }}</td>
            <td>{{ $he->description }}</td>
            <td>{{ $he->email }}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>
</div>
</div>
</div>

@endsection