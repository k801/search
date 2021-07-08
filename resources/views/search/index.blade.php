@extends('layouts.app')


@section('content')
<div class="container">

@if (count($errors) > 0)

<div class="alert alert-danger">
   @foreach ($errors->all() as $error)
   <li>{{ $error }}</li>
    @endforeach
</div>

@endif

<form action="{{route('searchItem')}}" method="POST">
@csrf
<select id="select-state" placeholder="search by ..." class="form-control my-3 nice-select"  name="searchTerm">
    <option>search by....</option>
    <option value="name">name</option>
    <option value="id-no">id-no</option>
    <option value="id">id</option>
     <option value="phone1">phone</option>

  </select>



  <input type="text" name="item"  value="{{ old('item') }}" class="form-control" placeholder="name">

 <button type="submit" class="btn btn-info my-3 text-light"> search</button>
</form>
</div>



@if(isset($item3))
<div class="container">
    {{-- @if(isset($item)) --}}
    <table class="table">
        <thead>
          <tr>

            <th scope="col">name</th>
            <th scope="col">age</th>
            <th scope="col">mobilefamily</th>
            <th scope="col">address</th>
            <th scope="col">sponser</th>
            <th scope="col">agent</th>
            <th scope="col">product</th>
            <th scope="col">comment</th>
            <th scope="col">data Entry</th>
          </tr>
        </thead>
        <tbody>
          <tr>


            <td>{{$item1->name}}</td>
            <td>{{$item1->phone1}}</td>
            <td>{{$item1->mobilefamily}}</td>
            <td>{{$item1->address}}</td>
            <td>{{$item3->name}}</td>
            <td>{{$item1->agent}}</td>
            <td>{{$item2->name}}</td>
          <td>{{$item2->comment}}</td>
          <td>{{$item2->agent}}</td>
          </tr>



        </tr>

        </tbody>
      </table>
</div>
@else
<div class="container">


@foreach ($errors->all() as $error)

<div class="alert alert-info">
    <li>no data</li>
 </div>


 @endforeach
</div>
@endif








@endsection
