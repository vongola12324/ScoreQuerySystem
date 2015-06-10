<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ URL::route('admin.index') }}">管理介面</a>
        </div>

        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                @if(Session::get('login')==true)
                    <li role="presentation" class="dropdown">
                        {!! HTML::linkRoute('contest.list', '課程 ', null, array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'role' => 'button', 'aria-expanded' => 'false'))!!}
                        <ul class="dropdown-menu" role="menu">
                            <li>{!! HTML::linkRoute('contest.create', '建立課程')!!}</li>
                            <li>{!! HTML::linkRoute('contest.update', '編輯課程')!!}</li>
                            <li>{!! HTML::linkRoute('contest.create', '刪除課程')!!}</li>
                        </ul>
                    </li>

                    <li role="presentation" class="dropdown">
                        {!! HTML::link('#', '管理 ', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'role' => 'button', 'aria-expanded' => 'false')) !!}
                        <ul class="dropdown-menu" role="menu">
                            <li>{!! HTML::linkRoute('admin.logout', '登出')!!}</li>
                            <li>{!! HTML::linkRoute('admin.leave', '離開')!!}</li>
                            <li>{!! HTML::linkRoute('query.home', '返回首頁')!!}</li>
                        </ul>
                    </li>

                @else
                    <li>{!! HTML::linkRoute('admin.login', '登入') !!}</li>
                @endif
            </ul>
        </div>
    </div>
</nav>