@extends('layouts.form')
<div class="row">
	<div class="col-md-6">
		<div class="colonne_invisible" style="text-align: center;">
			<img src="../resources/images/logo.svg" width=50><br>
			<div class="categorie">ForKids ?</div>
			<br> Bienvenue sur ForKids. Blabla bla blabla blabla bla blablabla
			bla bla blabla blabla bla blablabla 
			<div class="categorie">Ca m'interesse !</div>
			<br> Vous êtes un établissement et désirez utiliser notre outil ?
			Blabla blablabla blalb bla blablalbla blablal bblabl<br><br>
           <a href="{{ route('register') }}" class="btn btn-primary">S'inscrire</a>

		</div>
	</div>
	<div class="col-md-6">
		<div class="colonne">
			<div class="categorie">Connexion</div>
			@slot('title') @lang('Connexion') @endslot
			<form method="POST" action="{{ route('login') }}">
				{{ csrf_field() }} @include('partials.form-group', [ 'title' =>
				__('Adresse email'), 'type' => 'email', 'name' => 'email',
				'required' => true, ]) @include('partials.form-group', [ 'title' =>
				__('Mot de passe'), 'type' => 'password', 'name' => 'password',
				'required' => true, ])
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" id="remember"
						name="remember"{{ old('remember') ? 'checked' : '' }}> <label
						class="custom-control-label" for="remember"> @lang('Se rappeler de
						moi')</label>
				</div>
				@component('components.button') @lang('Connexion') @endcomponent <a
					class="btn btn-link" href="{{ route('password.request') }}">
					@lang('Mot de passe oublié ?') </a>
			</form>
		</div>
	</div>
</div>