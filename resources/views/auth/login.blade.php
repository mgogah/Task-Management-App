@extends('layouts.app')

@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">تسجيل الدخول</div>
            <div class="card-body">

                @if ($message = Session::get('success'))
                    <div class="alert alert-danger text-center">
                        {{ $message }}
                    </div>     
                @endif

                <form action="{{ route('authenticate') }}" method="post">
                    @csrf
                    <div class="mb-3 row">
                        <label for="email" class="col-md-3 col-form-label text-md-end text-end">البريد الإلكتروني</label>
                        <div class="col-md-6">
                          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-md-3 col-form-label text-md-end text-end">كلمة المرور</label>
                        <div class="col-md-6">
                          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                        <input type="submit" class="offset-md-5 btn btn-primary" value="دخول">
                    </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection