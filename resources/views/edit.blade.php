@extends('layout')

@section('content')

<div class="col-sm-6">
    <h1>Edit Restaurant</h1>
{{-- form from bootstrap 4 --}}
<form method="POST" action="/update"> 
    @csrf

    {{-- you have to pass the id but you out it hidden --}}
    <input type="hidden" name="id" value='{{ $data['id'] }}'>
    <div class="form-group">
        <label>Name</label>

        {{-- you call data as an array or value="{{ $data->name }}" --}}
        <input type="text" class="form-control" name="name" value="{{ $data['name'] }}" placeholder="Enter name">
      </div> 
    <div class="form-group">
      <label>Email</label>
      <input type="email" class="form-control" name="email" value="{{ $data['email'] }}"  placeholder="Enter email">
    </div> 
    <div class="form-group">
        <label>Address</label>
        <input type="text" class="form-control" name="address" value="{{ $data['address'] }}"  placeholder="Enter address">
      </div> 
    <button type="submit" class="btn btn-primary">Edit</button>
  </form>
</div>

@endsection