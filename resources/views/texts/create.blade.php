@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">New Text</div>

                <div class="card-body">
                  @if ($errors->any())
                      <div class="alert alert-danger">
                          <strong>Whoops!</strong> There were some problems with your input.<br><br>
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif

                  <form action="{{ route('texts.store') }}" method="POST">
                      @csrf

                       <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                                  <strong>Title:</strong>
                                  <input type="text" name="title" class="form-control" placeholder="Title">
                              </div>
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                                  <strong>Description:</strong>
                                  <textarea class="form-control" style="height:150px" name="description" placeholder="..."></textarea>
                              </div>
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <a class="btn btn-light" href="{{ route('home') }}"> Back</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                      </div>

                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
