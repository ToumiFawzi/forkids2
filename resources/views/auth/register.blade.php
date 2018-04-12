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
          <a href="{{ route('login') }}" class="btn btn-primary">Je suis déjà inscris</a>
		</div>
    </div>
	<div class="col-md-6">
		<div class="colonne">
			<div class="categorie">Inscription</div>
        @slot('title')
            @lang('Inscription')
        @endslot
        <div class="cadre">
        <form method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
           {{ csrf_field() }}
            @include('partials.form-group', [
                'title' => __('NOM Prénom'),
                'type' => 'text',
                'name' => 'identity',
                'required' => true,
                ])
            @include('partials.form-group', [
                'title' => __('Adresse email'),
                'type' => 'email',
                'name' => 'email',
                'required' => true,
                ])
            @include('partials.form-group', [
                'title' => __('Mot de passe'),
                'type' => 'password',
                'name' => 'password',
                'required' => true,
                ])
            @include('partials.form-group', [
                'title' => __('Confirmation du mot de passe'),
                'type' => 'password',
                'name' => 'password_confirmation',
                'required' => true,
                ])
                <hr>
            <table style="width: 100%;">
            	<tr>
            	    <td style="width: 50%; padding-right: 5px;">
            @include('partials.form-group', [
                'title' => __('NOM Prénom 1er enfant'),
                'type' => 'text',
                'name' => 'kididentity1',
                'required' => true,
                ])
                	</td>
            	    <td style="padding-left: 5px; padding-right: 5px;">
            @include('partials.form-group', [
                'title' => __('Âge'),
                'type' => 'number',
                'name' => 'kidage1',
                'required' => true,
                ])
                    </td>
                    <td style="padding-left: 5px;">
            @include('partials.form-group', [
                'title' => __('Classe'),
                'type' => 'text',
                'name' => 'classkid1',
                'required' => true,
                ])
                    </td>
                </tr>
            </table>
            <table style="width: 100%;">
            	<tr>
            	    <td style="width: 50%; padding-right: 5px;">
            @include('partials.form-group', [
                'title' => __('NOM Prénom 2ème enfant'),
                'type' => 'text',
                'name' => 'kididentity2',
                'required' => false,
                ])
                    </td>
            	    <td style="padding-left: 5px; padding-right: 5px;">
            @include('partials.form-group', [
                'title' => __('Âge'),
                'type' => 'number',
                'name' => 'kidage2',
                'required' => false,
                ])
                    </td>
                    <td style="padding-left: 5px;">
            @include('partials.form-group', [
                'title' => __('Classe'),
                'type' => 'text',
                'name' => 'classkid2',
                'required' => false,
                ])
                    </td>
                </tr>
            </table>
            <table style="width: 100%;">
            	<tr>
            	    <td style="width: 50%; padding-right: 5px;">
            @include('partials.form-group', [
                'title' => __('NOM Prénom 3ème enfant'),
                'type' => 'text',
                'name' => 'kididentity3',
                'required' => false,
                ])
                    <td style="padding-left: 5px; padding-right: 5px;">
            @include('partials.form-group', [
                'title' => __('Âge'),
                'type' => 'number',
                'name' => 'kidage3',
                'required' => false,
                ])
                    </td>
                    <td style="padding-left: 5px;">
            @include('partials.form-group', [
                'title' => __('Classe'),
                'type' => 'text',
                'name' => 'classkid3',
                'required' => false,
                ])
                    </td>
                </tr>
            </table>
            </div>
            @component('components.button')
                @lang('Inscription')
            @endcomponent
        </form>
		</div>
	</div>
</div>