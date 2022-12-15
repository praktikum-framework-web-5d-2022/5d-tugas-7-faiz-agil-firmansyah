@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card p-4">
            <h3 class="fw-bold">Ambil Mobil</h3>
            <div class="card-body">
                <form action="{{ route('customers.takeStore',['customer' => $customer->id]) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="no_hp" class="form-label">No HP</label>
                    <input type="text" name="no_hp" id="no_hp" class="form-control" value="{{$customer->no_hp}}" readonly>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="{{$customer->nama}}" readonly>
                </div>
                <div class="mb-3">
                    <label for="rental_id" class="form-label">Jenis Mobil</label>   
                    <div class="form-group">
                        @foreach ($rentals as $item)
                            <div class="form-check form-check-inline">
                                <input type="checkbox" name="rental_id" id="{{ $item->id }}" class="form-check-input" value="{{ $item->id }}" {{ $customer->rentals()->find($item->id) ? 'checked' : '' }}>
                                <label class="form-check-label" for="{{ $item->id }}">{{ $item->tipe }}</label>
                            </div>      
                        @endforeach
                    </div>
                </div>
                <button type="submit" class="btn btn-dark">Ambil</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
