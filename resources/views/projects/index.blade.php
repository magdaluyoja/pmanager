@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-9 pull-left">
            <div class="panel panel-primary">
                <div class="panel-heading">Projects</div>
                <div class="panel-body">
                    <ul class="list-group">
                        @foreach($projects as $project)
                            <li class="list-group-item"><a href="/projects/{{$project->id}}">{{ $project->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 pull-right">
            <div class="sidebar-module">
                <h4>Actions</h4>
                <ol class="list-unstyled">
                    <li><a href="/projects/create">Add</a></li>
                </ol>
            </div>
        </div>
    </div>
@endsection