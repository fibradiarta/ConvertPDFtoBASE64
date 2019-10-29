@extends('layout.main')

@section('content')
<div class="container mt-3">
    <h2 class="bold text-center">List Download File</h2>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Create At</th>
            <th scope="col">Update At</th>
            <th scope="col">File</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($list as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->created_at}}</td>
                <td>{{$item->updated_at}}</td>
                <td><a href="/list/{{$item->id}}">download</a></td>
            </tr>
        @endforeach
        </tbody>
      </table>
</div>

@endsection
