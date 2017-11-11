@extends('members.default')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Members CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('members.create') }}"> Create New Member</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Sity</th>
            <th>State</th>
            <th>Country</th>
            <th>Phone</th>
            <th>Address1</th>
            <th>Address2</th>
            <th width="280px">Operation</th>
        </tr>
    @foreach ($users as $user)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $user->fistname}}</td>
        <td>{{ $user->lastname}}</td>
        <td>{{ $user->email}}</td>
        <td>{{ $user->userCity}}</td>
        <td>{{ $user->userState}}</td>
        <td>{{ $user->userContry}}</td>
        <td>{{ $user->userPhone}}</td>
        <td>{{ $user->userAddress1}}</td>
        <td>{{ $user->userAddress2}}</td>
        <td>
            <a class="btn btn-info" href="{{ route('members.show',$user->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('members.edit',$user->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['members.destroy', $user->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>
    {!! $users->render() !!}
@endsection