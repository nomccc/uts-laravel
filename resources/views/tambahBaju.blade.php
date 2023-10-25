@extends('layouts.dash')

@section('dash_content')
    <div class="my-5">
        <h2 class="text-center">Tambah Data Baju</h2>
        <form action="" class="m-5" method="post">
            @csrf
            <div class="d-flex flex-column">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" id="nama" placeholder="zara" class="w-25 px-3" required>
            </div>
            <div class="d-flex flex-column my-3">
                <label for="jumlah" class="form-label">Jumlah Barang</label>
                <input type="number" name="jumlah" id="jumlah" class="w-25 px-3" required>
            </div>
            <p class="mt-3">Ukuran</p>
            <div class="d-flex flex-row px-3">
                <div class="form-check ">
                    <input class="form-check-input" type="checkbox" value="XS" id="flexCheckDefault" name="ukuran[]">
                    <label class="form-check-label pe-4" for="flexCheckDefault">
                        XS
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="S" id="flexCheckDefault" name="ukuran[]">
                    <label class="form-check-label pe-4" for="flexCheckDefault">
                        S
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="M" id="flexCheckDefault" name="ukuran[]">
                    <label class="form-check-label pe-4" for="flexCheckDefault">
                        M
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="L" id="flexCheckDefault" name="ukuran[]">
                    <label class="form-check-label pe-4" for="flexCheckDefault">
                        L
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="XL" id="flexCheckDefault" name="ukuran[]">
                    <label class="form-check-label pe-4" for="flexCheckDefault">
                        XL
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="XXL" id="flexCheckDefault" name="ukuran[]">
                    <label class="form-check-label pe-4" for="flexCheckDefault">
                        XXL
                    </label>
                </div>
            </div>
            <div class="my-4">
                <p>Model Baju</p>
                <select class="form-select w-25" aria-label="Default select example" name="model" required>
                    @foreach ($model as $modelBaju)
                        <option value= {{ $modelBaju->id }} > {{ $modelBaju->model }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
@endsection
