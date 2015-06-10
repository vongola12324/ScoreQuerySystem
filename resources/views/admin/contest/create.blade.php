@extends('app')

@section('title')
    建立考試項目
@endsection

@section('content')
    <div class="container-fluid">
        <div class="container">
            <div class="page-header">
                <h1>建立考試項目</h1>
            </div>
            <div class="center-block">
                {!! Form::open(['route' => 'contest.create']) !!}
                <div class="form-group">
                    {!! Form::label('Name', '考試名稱', [ 'class' => 'control-label']) !!}
                    {!! Form::text('Name', null, ['id' => 'Name', 'placeholder' => '請輸入考試名稱', 'class' => 'form-control', 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Info', '考試說明', [ 'class' => 'control-label']) !!}
                    {!! Form::textarea('Info', null, ['id' => 'Info', 'placeholder' => '請輸入考試說明', 'class' => 'form-control', 'required']) !!}
                </div>
                {{--<div class="form-group" ng-repeat="ench in enchList">--}}
                    {{--<div class="col-sm-5">--}}
                        {{--<select class="form-control" ng-model="enchList[$index].selected" ng-options="ench.name as ench.showName for ench in enchData">--}}
                            {{--<option value="">-- 附魔 --</option>--}}
                        {{--</select>--}}
                    {{--</div>--}}

                    {{--<div class="col-sm-7">--}}
                        {{--<div class="input-group">--}}
                            {{--<input type="text" class="form-control" placeholder="附魔等級" ng-model="enchList[$index].lvl">--}}
                                {{--<span class="input-group-btn">--}}
                                    {{--<button class="btn btn-danger btn-add" type="button" ng-click="removeEnch($index)">--}}
                                        {{--<span class="glyphicon glyphicon-remove"></span>--}}
                                    {{--</button>--}}
                                {{--</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--<div class="col-sm-12">--}}
                        {{--<div class="pull-right">--}}
                            {{--<input type="button" class="btn btn-primary" value="新增附魔" ng-click="addEnch()">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {!! Form::submit('建立', ['class' => 'btn btn-primary']) !!}
                {!! Form::reset('重設', ['class' => 'btn btn-default']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@section('js')
    {!! HTML::script('//ajax.googleapis.com/ajax/libs/angularjs/1.3.16/angular.js'); !!}
@endsection