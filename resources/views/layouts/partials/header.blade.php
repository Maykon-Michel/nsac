<div class="header">
    NSAC
    @if(Auth::check())
        <a href="{{ route('logout') }}"
           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            Sair
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
        <a>|</a>
    @else
        <a class="visible-xs visible-sm" onClick="$('#sidebar').focus()">Login</a>
        <a class="visible-xs visible-sm">|</a>
    @endif
    <a href="#ajuda">Ajuda</a>
</div>