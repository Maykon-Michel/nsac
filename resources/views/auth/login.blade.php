<nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar" role="navigation" tabindex="-1">
    <div class="navbar-header">
        <h1 class="navbar-brand">Login</h1>
    </div>
    <form action="{{ route('login')  }}" method="POST" id="frm-login">
        {{ csrf_field() }}
        <div class="input-group">
            <label for="ra" class="input-group-addon"><i class="glyphicon glyphicon-user"></i></label>
            <input type="text" name="email" class="form-control" id="email" placeholder="R.A.">
        </div>
        <div class="input-group">
            <label for="senha" class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></label>
            <input type="text" name="password" class="form-control" id="password" placeholder="Senha">
        </div>
        <input type="submit" class="btn btn-block btn-raised btn-primary" value="Entrar">
    </form>
    @if($errors->has('email') || $errors->has('password'))
        <div class="alert alert-dismissible alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <p>{{ $errors->first('email') }}</p>
            <p>{{ $errors->first('password') }}</p>
        </div>
    @endif
</nav>