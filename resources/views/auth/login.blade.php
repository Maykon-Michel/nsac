<nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar" role="navigation" tabindex="-1">
    <div class="navbar-header">
        <h1 class="navbar-brand">Login</h1>
    </div>
    <div class="container-fluid">
        <form action="{{ route('login')  }}" method="POST" id="frm-login">
            {{ csrf_field() }}
            <div class="input-group">
                <label for="ra" class="input-group-addon"><i class="glyphicon glyphicon-user"></i></label>
                <input type="text" name="email" class="form-control" id="email" placeholder="R.A.">
            </div>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            <div class="input-group">
                <label for="senha" class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></label>
                <input type="text" name="password" class="form-control" id="password" placeholder="Senha">
            </div>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            <input type="submit" class="form-control" value="Entrar">
        </form>
    </div>
</nav>