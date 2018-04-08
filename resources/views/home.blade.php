@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard
                    <a href="/add" class="btn btn-primary btn-xs pull-right">Add</a>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(Session('Success'))
                        <div class="alert-success pull-right">{{ Session('Success') }} </div>
                    @endif
                    <table class="table table-hover">
                        <thead>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Action</th>
                        </thead>
                        @foreach($myPosts as $post)
                        <tr>
                            <td>{{ $post->name }}</td>
                            <td>{{ $post->email }}</td>
                            <td>{{ $post->message }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="/edit/{{ $post->id }}" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="/delete/{{ $post->id }}" class="btn btn-sm btn-danger">Delete</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
