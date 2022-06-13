@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<a href="{{ route('sport.index')}}" class="btn btn-primary mt-5">Go Back</a>
<div class="card uper">
  <div class="card-header">
    Add Sports Data
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('sport.store') }}">
          <div class="form-group">
              @csrf
              <label for="country_name">Sport Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <br/>
          <button type="submit" class="btn btn-primary">Add Sport</button>
      </form>
  </div>
</div>
@endsection