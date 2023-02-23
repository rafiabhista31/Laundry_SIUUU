@extends('master')

@section('content')

  <h1 class="he">Paket Index</h1>
  <a class="btn btn-info mr-3" href="/member/create">create</a>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <td class="td1">No</td>
        <td class="td5">Nama</td>
        <td class="td2">Telepon</td>
        <td class="td3">Alamat</td>
        <td class="td4">Jenis Kelamin</td>
        <td class="td4">Action</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach($member as $member)
        <th class="th1">{{ $loop->iteration}}</th>
        <td class="th2">{{ $member->nama }}</td>
        <td class="th3">{{ $member->tlp }}</td>
        <td class="th2">{{ $member->alamat }}</td>
        <td class="th2">{{ $member->jenis_kelamin }}</td>
        <td class="th4">
        <form action="{{route ('member.destroy', [$member->id])}}" method="POST">
        <a class="btn btn-info mr-3" href="member/{{ $member->id }}">DETAIL</a>
        <a class="btn btn-warning mr-3" href="member/{{ $member->id}}/edit">EDIT</a>
        @csrf
        @method('DELETE')
        <input type="submit" class="btn btn-danger" value="hapus azza">
        </td>
      </tr>
    </tr>
    </tbody>
    @endforeach
</table>
</div>
@endsection