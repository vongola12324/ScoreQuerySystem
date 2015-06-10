@extends('app')

@section('title')
    管理介面登入
@endsection


@section('content')
    <div class="container-fluid">
        <div class="container">
            <div class="page-header">
                <h1>管理介面登入</h1>
            </div>
            @if(isset($error))
                <div class="alert alert-warning text-center">
                    {{ $error }}
                </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">登入</div>
                {{-- Panel body --}}
                <div class="panel-body">
                    {{-- 登入 --}}
                    {!! Form::open(['route' => 'admin.login']) !!}
                    <div class="form-group">
                        {!! Form::label('Username', '帳號', [ 'class' => 'control-label']) !!}
                        {!! Form::text('Username', null, ['id' => 'Username', 'placeholder' => '請輸入管理員帳號', 'class' => 'form-control', 'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Password', '密碼', [ 'class' => 'control-label']) !!}
                        {!! Form::password('Password', ['id' => 'Password', 'placeholder' => '請輸入密碼', 'class' => 'form-control', 'required']) !!}
                    </div>
                    {!! Form::submit('登入', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
            <hr>
            <div>
                <h2>注意事項</h2>
                <ol>
                    <li>管理員請勿將密碼給予他人。</li>
                    <li>忘記密碼自己想辦法。</li>
                    <li>小心你後面的人。</li>
                </ol>
            </div>
        </div>
    </div>
@endsection