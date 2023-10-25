@extends('layouts.dash')

@section('dash_content')
    <div class="m-5">

        <table class="table ">
            <thead>
                <th>ID</th>
                <th>Nama</th>
                <th>Jumlah</th>
                <th>Ukuran</th>
                <th>Model Baju</th>
                <th>Penginput</th>
                <th>Aksi</th>

            </thead>
            <tbody>
                @foreach ($baju as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->jumlah }}</td>
                        <td>{{ $item->ukuran }}</td>
                        <td>{{ $item->model_id }}</td>
                        <td>{{ $item->user_id }}</td>
                        <td><a href="/hapusBaju/{{ $item->id }}">Hapus</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
