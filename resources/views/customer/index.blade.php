@extends('layouts.app')
@section('content')
    <style>
        .bg-maroon {
            background-color: maroon;
            color: white;
     }
        .text-maroon {
            color: maroon;
            font-weight: bold
     }
    </style>
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between">
                    <h2>Data Customer</h2>
                </div>
                <p>Dibawah ini merupakan data semua customer</p>
                @if (session()->has('message'))
                    <div class="my-3">
                        <div class="alert alert-success">
                            {{session()->get('message')}}
                        </div>
                    </div>
                @endif
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>No HP</th>
                                <th>Nama</th>
                                <th>Mobil Yang Diambil</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers as $customer)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $customer->no_hp }}</td>
                                    <td>{{ $customer->nama }}</td>
                                    <td>
                                        @forelse ($customer->rentals as $item)
                                            <ul>
                                                <li>{{ $item->tipe }}</li>
                                            </ul>
                                        @empty
                                            Tidak ada mobil yang diambil
                                        @endforelse
                                    </td>
                                    <td>
                                        <a href="{{ route('customers.take',['customer' => $customer->id]) }}" class="btn btn-info">Ambil Mobil</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
