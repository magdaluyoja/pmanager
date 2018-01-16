@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-9 pull-left">
            <div class="well  well-lg">
                <h1>{{ $project->name }}</h1>
                <p class="lead">{{ $project->description }}</p>
            </div>

            <div class="row" style="background-color: white; margin: 1rem;">
                @foreach($project->tasks as $task)
                    <div class="col-lg-4 col-md-4">
                        <h2>{{ $task->name }}</h2>
                        <p class="text-danger">{{ $task->description }}</p>
                        <p><a class="btn btn-primary" href="#" role="button">View details »</a></p>
                    </div>
                @endforeach
            </div>
        </div>
    
        <div class="col-lg-3 col-md-3 col-sm-3 pull-right">
            <div class="sidebar-module">
                <h4>Actions</h4>
                <ol class="list-unstyled">
                    <li><a href="/projects/{{ $project->id}}/edit">Edit</a></li>
                    @if($project->user_id === Auth::user()->id)
                    <li>
                        <a 
                            href="#"
                            onclick="
                                var result = confirm('Are you sure you wish to delete this Project?');
                                if( result ){
                                    event.preventDefault();
                                    document.getElementById('delete-form').submit();
                                }
                            "
                        >
                            Delete
                        </a>

                        <form id="delete-form" action="{{ route('projects.destroy',[$project->id]) }}" 
                            method="POST" style="display: none;">
                            <input type="hidden" name="_method" value="delete">
                            {{ csrf_field() }}
                        </form>
                    </li>
                    @endif
                    <li><a href="/tasks/create/{{$project->id}}">Create Task</a></li>
                    <li><a href="/projects">All Projects</a></li>
                </ol>
            </div>
        </div>
    </div>
    @include('partials.comments')
    <div class="row container-fluid">
        <div class="col-lg-9 col-md-9 col-sm-9">
            <form class="form-horizontal" method="post" action="{{ route('comments.store') }}">
                {{ csrf_field() }}
                <input type="hidden" name="commentable_type" value="App\Project">
                <input type="hidden" name="commentable_id" value="{{$project->id}}">
                <div class="form-group">
                    <label for="body" class="control-label">Comment</label>
                    <textarea 
                        placeholder="Enter description" 
                        name="body"
                        id="body" 
                        rows="3" spellcheck="false"
                        class="form-control autosize-target text-left">
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="url" class="control-label">Url of proof</label>
                    <textarea 
                        placeholder="Enter description" 
                        name="url"
                        id="url" 
                        rows="2" spellcheck="false"
                        class="form-control autosize-target text-left">
                    </textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

                </div>
            </form>
        </div>
    </div>
@endsection