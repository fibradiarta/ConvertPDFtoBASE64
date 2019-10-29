@extends('layout.main')

@section('content')
<div class="container">
    <div class="mt-3">
        <div class="row justify-content-center align-items-center">
            <form action="{{ url('/') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <h2 class="bold mb-3">Upload File</h2>
                <div class="form-group">
                    <input type="file" class="form-control-file" id="pdf" name="pdf">
                </div>
                <button style="width: 200px" type="submit" class="btn btn-primary">Upload</button>
            </form>
        </div>

    </div>
</div>
@endsection
