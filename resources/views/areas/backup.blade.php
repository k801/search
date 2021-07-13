@extends('layouts.app')


@section('content')
<form action="{{ route('our_backup_database') }}" method="get">
    <button style="submit" class="btn btn-primary"> Get Back up</button>
</form>
@endsection
