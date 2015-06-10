@extends('app')

@section('title')
    查詢結果
@endsection

@section('content')
    <div class="container-fluid">
        <div class="container">
            <div class="page-header">
                <h1>{{$ContestName}} 成績查詢結果</h1>
            </div>
            <div>
                <h2>{{$UserName}} 的成績如下: </h2>
            </div>
            <div class="table">
                No data
            </div>
            <div class="text-center">
                {!! HTML::linkRoute('query.home', '回首頁', [], ['class' => 'btn btn-primary', 'role' => 'button']) !!}
            </div>
        </div>
    </div>
@endsection