@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-9 pull-left">
            <form class="form-horizontal" method="post" action="{{ route('projects.update', $project->id) }}">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">
                <div class="form-group">
                    <label class="col-md-4 control-label" for="name">Project Name<span class="required">*</span></label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ $project->name }}" required autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <label for="description" class="col-md-4 control-label">Project Description</label>
                    <div class="col-md-6">
                        <textarea 
                            placeholder="Enter description" 
                            name="description"
                            rows="5" spellcheck="false"
                            class="form-control autosize-target text-left">{{ $project->description }}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="duration">Project Duration(Days)<span class="required">*</span></label>
                    <div class="col-md-6">
                        <input id="duration" type="number" class="form-control" name="duration" value="{{ $project->days }}" required autofocus min="1">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary btn-block">Update</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 pull-right">
            <div class="sidebar-module">
                <h4>Actions</h4>
                <ol class="list-unstyled">
                    <li><a href="/projects/{{ $project->id}}">View Project</a></li>
                    <li><a href="/projects">All Projects</a></li>
                </ol>
            </div>
        </div>
    </div>
@endsection