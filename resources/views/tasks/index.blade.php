@extends('layouts.app')

@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Tasks List</div>
            <div class="card-body">
                
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $message }}
                    </div> 
                    @endif
                <a href="{{ route('tasks.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Add New Task</a>
                
                <livewire:show-tasks />
            </div>
        </div>
    </div>    
</div>
    
@endsection