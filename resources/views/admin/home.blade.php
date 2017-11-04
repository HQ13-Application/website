@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>




                   




            </div>

            <!-- search -->
            <div class="row">
                <div class="col-lg-6">
                    <form action="/search" method="POST" role="search">
                        {{ csrf_field() }}
                        <div class="input-group">
                            <input type="text" class="form-control" name="q"
                                placeholder="Search users"> 
                                <span class="input-group-btn">
                                <button type="submit" class="btn btn-default">
                                    Go!
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>





            

            <!-- show search -->
            @if(isset($details))
            <div class="panel panel-default">
            <!-- Default panel contents -->
            
            <div class="panel-heading">
            
                   <h4>  The Search results for your query <b> {{ $query }} </b> are : </h4>
                <h2>Sample User details</h2>
            </div>

            <!-- Table -->
            <table class="table table-striped">
            <thead>
                        <tr>
                            <th>Name</th>
                            <th>last name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($details as $user)
                        <tr>
                            <td>{{$user->firstname}}</td>
                            <td>{{$user->lastname}}</td>
                            <td>{{$user->email}}</td>
                        </tr>
                        @endforeach
                    </tbody>
            </table>
            @endif
            </div>
        <!--endsearch -->









<!-- adduser  -->















        </div>


















    </div>
</div>
@endsection
