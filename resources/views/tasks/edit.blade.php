@extends('layouts.app')

@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Edit Task
                </div>
                <div class="float-end">
                    <a href="{{ route('tasks.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    {{ $message }}
                </div> 
                @endif
                <form action="{{ route('tasks.update', $task->id) }}" method="post">
                    @csrf
                    @method("PUT")

                    <div class="mb-3 row">
                        <label for="title" class="col-md-4 col-form-label text-md-end text-start">Title</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{  $task->title }}">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                     <div class="mb-3 row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start">Description</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ $task->description }}</textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <label for="completed" class="col-md-4 col-form-label text-md-end text-start">Completed</label>
                        <div class="col-md-6">
                          <select class="form-control @error('completed') is-invalid @enderror" id="completed" name="completed">
                            <option value="">Please select..</option>
                            <option value="1" {{ ( $task->completed) ? "selected" : ""}}>Yes</option>
                            <option value="0" {{ ( $task->completed) ? "" : "selected"}}>No</option>
                          </select>
                            @error('completed')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

					
					<div class="mb-3 row">
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Update Task">
                    </div>
                    
                </form>
            
            </div>
        </div>
    </div>    
</div>
    
@endsection