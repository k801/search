@extends('layouts.app')

@section('styles')
@toastr_css
@endsection
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Laravel 5.7 Import Export Excel to database Example - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body>

<div class="container">


    @if (count($errors) > 0)

    <div class="alert alert-danger">
       @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
        @endforeach
    </div>

    @endif



    <div class="card bg-light mt-3">
        <div class="card-header">
            Laravel 5.7 Import Export Excel to database Example - ItSolutionStuff.com
        </div>
        <div class="card-body">
            <form action="{{ route('importSponser') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import User Data</button>
                {{-- <a class="btn btn-warning" href="{{ route('export') }}">Export User Data</a> --}}
            </form>
        </div>
    </div>
</div>

</body>
</html>
@endsection

@section('scripts')
@jquery
@toastr_js
@toastr_render
@endsection
