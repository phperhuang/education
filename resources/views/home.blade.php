@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ url('css/layui/css/layui.css') }}">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!<br>
                        <a href="" class="layui-btn layui-btn-primary">返回主页</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
