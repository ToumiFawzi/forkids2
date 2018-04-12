<div class="header">
	<table class="header_table">
		<tr>
			<td class="header_td_left">
				<a href="javascript:history.back()"><img src="../resources/images/picto_arrow2.svg" class="picto">Retour</a>
			</td>
			<td class="header_td_center">
			    <a href="{{ route('home') }}"> {{
					config('app.name', 'Album') }}
				</a>
			</td>
			<td class="header_td_right">
			    @guest
    				<div class="nav-item{{ currentRoute(route('login')) }}">
    					<a class="nav-link" href="{{ route('login') }}">@lang('Connexion')</a>
    				</div>
    				<div class="nav-item{{ currentRoute(route('register')) }}">
    					<a class="nav-link" href="{{ route('register') }}">@lang('Inscription')</a>
    				</div>
    			@else
    			    <a href="#">
    			        <img src="../resources/images/picto_profile.svg" class="picto">
    			    </a>
    			    <a id="logout" href="{{ route('logout') }}">
    			        <img src="../resources/images/picto_logoff.svg" class="picto">
    			    </a>
    				<form id="logout-form" action="{{ route('logout') }}" method="POST" class="hide" hidden>
    					{{ csrf_field() }}
    				</form>
			@endguest
			</td>
		</tr>
	</table>
</div>