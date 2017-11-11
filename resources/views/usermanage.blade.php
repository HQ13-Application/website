@extends('layouts.admin')

@section('content')

<div class="container">
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading"><h4>User Manager</h4></div>

            <div class="panel-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

            </div>
    </div>

 
 
    </div>
    
</div>


    <!-- <button type="button" class="btn btn-default">ِAdd User</button>
  <button type="button" class="btn btn-default">Edit User</button>
  <button type="button" class="btn btn-default">Search User</button>
  <button type="button" class="btn btn-default"></button> -->
  
@endsection