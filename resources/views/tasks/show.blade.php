@extends('layouts.app')

@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Task Details 
                </div>
                <div class="float-end">
                    <a href="{{ route('tasks.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                
				<div class="row">
					 <label for="title" class="col-md-4 col-form-label text-md-end text-start"><strong>Title:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $task->title }}
                        </div>
                    </div>
				<div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Description:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $task->description }}
                        </div>
                    </div>
				<div class="row">
                        <label for="completed" class="col-md-4 col-form-label text-md-end text-start"><strong>Completed:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ ($task->completed) ? "Yes" : "No" }}
                        </div>
                    </div>
				
            </div>
        </div>
    </div>    
</div>
    
@endsection