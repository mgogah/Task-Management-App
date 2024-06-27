@extends('layouts.app')

@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="float-end">
                    عرض المهمة 
                </div>
                <div class="float-start">
                    <a href="{{ route('tasks.index') }}" class="btn btn-primary btn-sm">&larr; رجوع</a>
                </div>
            </div>
            <div class="card-body">
                
				<div class="row">
					 <label for="title" class="col-md-1 col-form-label text-md-end text-start"><strong>العنوان:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $task->title }}
                        </div>
                    </div>
				<div class="row">
                        <label for="description" class="col-md-1 col-form-label text-md-end text-start"><strong>الوصف:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $task->description }}
                        </div>
                    </div>
				<div class="row">
                        <label for="completed" class="col-md-1 col-form-label text-md-end text-start"><strong>منجزة:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ ($task->completed) ? "نعم" : "لا" }}
                        </div>
                    </div>
				
            </div>
        </div>
    </div>    
</div>
    
@endsection