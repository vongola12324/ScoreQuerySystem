@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="container">
            <div class="page-header">
                <h1>校園成績查詢系統</h1>
            </div>
            @if(isset($error))
                <div class="alert alert-warning text-center">
                    錯誤 : 查無使用者或相關應考紀錄，有疑慮請洽試務處！
                </div>
            @endif
            <div class="panel panel-default">
                {{-- Panel body --}}
                <div class="panel-body">
                    {{-- 登入 --}}
                    {!! Form::open(['route' => 'query.login']) !!}

                    {{-- 考試別 --}}
                    <div class="form-group">
                        {!! Form::label('ContestID', '考試項目', [ 'class' => 'control-label']) !!}
                        {!! Form::select('ContestID', $Contest, 1, [ 'id' => 'ContestID', 'class' => 'form-control', 'selected' => 'selected', 'required']) !!}

                    </div>
                    {{-- 驗證資料 --}}
                    <div class="form-group">
                        {!! Form::label('TicketID', '准考證號碼', [ 'class' => 'control-label']) !!}
                        {!! Form::text('TicketID', null, ['id' => 'TicketID', 'placeholder' => '請輸入准考證號碼', 'class' => 'form-control', 'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('IdentityCardID', '身分證字號', [ 'class' => 'control-label']) !!}
                        {!! Form::text('IdentityCardID', null, ['id' => 'IdentityCardID', 'placeholder' => '請輸入身分證字號', 'class' => 'form-control', 'required']) !!}
                    </div>
                    {!! Form::submit('送出', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
            <hr>
            <div>
                <h2>注意事項</h2>
                <ol>
                    <li>本專案依舊開發中，請勿使用於正式服務。</li>
                    <li>有任何問題，請洽 {!!  HTML::link(Config::get('site.vcs'), 'School Query System (GitHub)', array('target' => '_blank')) !!}</li>
                    <li>管理員走起 {!! HTML::linkRoute('admin.login', '登入管理系統', null, array('target' => '_blank')) !!}</li>
                </ol>
            </div>
        </div>
    </div>
@endsection
