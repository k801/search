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



  <input type="text" name="item" class="form-control" placeholder="name">

 <button type="submit" class="btn btn-info my-3 text-light"> search</button>
</form>
</div>


{{-- @if(isset($data)) --}}

<div class="container " width="50px">
    {{-- @if(isset($item)) --}}
    <a class="form control btn btn-warning "> client</a>
    <table class="table border-strippe">

 <tr>
    <td>name</td>
    <td>{{$item1->name}}</td>
</tr>

<tr>
    <td>product	</td>
    <td>{{$item2->name}}</td>
</tr>

<tr>
    <td>phone</td>
    <td>{{$item1->phone1}}</td>
</tr>

<tr>
    <td>address</td>
    <td>{{$item1->address}}</td>
</tr>

<tr>
    <td>statusfamily</td>
    <td>{{$item1->agent}}</td>
</tr>




        </tbody>
      </table>
</div>


<div class="container " width="50px">
    {{-- @if(isset($item)) --}}
    <a class="form control btn btn-danger "> product</a>
    <table class="table border-strippe">

 <tr>
    <td>name</td>
    <td>{{$item2->name}}</td>
</tr>

<tr>
    <td>product	</td>
    <td>{{$item2->comment}}</td>
</tr>

<tr>
    <td>phone</td>
    <td>{{$item2->agent}}</td>
</tr>

<tr>
    <td>address</td>
    <td>{{$item2->date}}</td>
</tr>

<tr>
    <td>statusfamily</td>
    <td>{{$item2->agent}}</td>
</tr>




        </tbody>
      </table>
</div>





<div class="container " width="50px">
    {{-- @if(isset($item)) --}}
    <a class="form control btn btn-success "> sponser</a>
    <table class="table border-strippe">

 <tr>
    <td>name</td>
    <td>{{$item3->name}}</td>
</tr>


<tr>
    <td>phone</td>
    <td>{{$item3->phone}}</td>
</tr>

<tr>
    <td>address</td>
    <td>{{$item3->address}}</td>
</tr>

<tr>
    <td>statusfamily</td>
    <td>{{$item3->agent}}</td>
</tr>




        </tbody>
      </table>
</div>









@endsection
