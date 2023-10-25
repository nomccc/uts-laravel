@extends('layouts.base')

@section('content')
    <div id="bodyLogin">
        <div class="py-5">
            <div class="container text-center justify-content-center w-25 border border-2 rounded-2 bg-white">
                <h1 class="fw-bold my-5">LOGIN</h1>
                <form action="{{ route('login') }}" method="post" class="d-flex flex-column needs-validation">
                    @csrf
                    {{-- <div class="d-flex">
                        <input type="text" name="name" placeholder="nama" class="border-bottom border-0 p-2 my-2 form-control"
                            required>
                        <div class="invalid-feedback">Nama tidak valid!</div>
                    </div> --}}
                    <div class="d-flex">
                        <input type="email" placeholder="email" name="email" class="border-bottom border-0 p-2 my-2 form-control"
                            required>
                        <div class="invalid-feedback">Email tidak valid!</div>
                    </div>
                    <div>
                        <input type="password" placeholder="password" name="password" class="border-bottom border-0 p-2 my-2 form-control"
                        required>
                        <div class="invalid-feedback">Password tidak valid!</div>
                    </div>
                    <button class="btn-primary rounded-4 rounded my-5 p-2" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
@endsection
