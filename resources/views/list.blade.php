@extends('layout')

@section('content')
    <h1>Restaurant list page is here</h1>

    {{-- copied a bootstrap table --}}
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
          </tr>
        </thead>
        <tbody>

            {{-- for each loop to portray data --}}
            @foreach ($data as $item)
            <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->address }}</td>
              </tr>
             
            @endforeach
        </tbody>
      </table>
   
@endsection