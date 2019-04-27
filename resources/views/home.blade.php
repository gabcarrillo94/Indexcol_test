@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                  @if ($message = Session::get('success'))
                      <div class="alert alert-success">
                          <p>{{ $message }}</p>
                      </div>
                  @endif

                  @if(Auth::user()->hasRole('admin'))
                  <div class="row">
                    <div class="col-md-12 table-add">
                       <a class="mt-10 primary-btn d-inline-flex text-uppercase align-items-center" href="{{ route('texts.create') }}">
                         Add New Text
                       </a>
                    </div>
                  </div>
                  @endif

                  @include('datatables.maintext')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
