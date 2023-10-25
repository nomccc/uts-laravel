@extends('layouts.dash')

@section('dash_content')
    <div class="m-5">
      <form action="/modelBaju" method="POST" class="">
        @csrf
        <label for="modelBaju">Tambah Model Baju: </label>
        <input type="text" name="nama" id="nama" required >
        <button type="submit" class="btn btn-primary">Tambah</button>
      </form>
      <div class="my-5">
        <table class="table w-50 text-center ">
          <thead>
            <th>ID</th>
            <th>Model Baju</th>
            <th>Aksi</th>
          </thead>
          <tbody>
            @foreach ($model as $item)
                <tr>
                  <td>{{$item -> id}}</td>
                  <td>{{$item -> model}}</td>
                  <td><a href="/hapusModel/{{$item -> id}}">Hapus</a></td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
@endsection