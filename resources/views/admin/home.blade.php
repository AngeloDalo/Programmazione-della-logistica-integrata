@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center border border-danger rounded-3">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <br>
                    <a href="{{ url('/admin/underwears') }}" class="btn btn-outline-danger">View My Underwears</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
