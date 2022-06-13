@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <a href="{{ route('sport.create')}}" class="btn btn-primary">Create Sport</a>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Sport Name</td>
          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($sports as $sport)
        <tr>
          <td>{{$sport->id}}</td>
          <td>{{$sport->name}}</td>
          <td>
            <div class="d-flex justify-content-around">
              <a href="{{ route('sport.edit', $sport->id)}}" class="btn btn-primary mr-5">Edit</a>
              <form action="{{ route('sport.destroy', $sport->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </div>
          </td>
        </tr>
        @endforeach
        @if(count($sports) === 0)
         <td colspan="3" class="text-center">No sport/s found.</td>
        @endif
    </tbody>
  </table>
<div>
@endsection