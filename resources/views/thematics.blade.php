@extends('layouts.app') @section('content') @guest
<script>window.location = "{{ route('login') }}";</script>
@else
<div class="container_hidden">
	@component('components.nav') @endcomponent
	<div class="row" style="height: 100%;">
		<div class="col-md-3" id="aside">
			<div class="liste_users">
		    	@component('components.liste_users_href')
            	@endcomponent
			</div>
		</div>
		<div class="col-md-9" id="acontent">
		@foreach($post as $posts)
		      <a href="{{ route('chat') }}">
                        <div class="thematique_lien">
                            <div class="thematique_avatar"></div>
                            <div class="thematique_titre">
                           
                                <span class="thematique_author">{{Auth::user()->identity}}</span> - <span class="thematique_date">Posté le {{$posts->date_creation}}</span><br>
                                <span class="thematique_content">{{ $posts->content }}</span><br>
                                <span class="thematique_last_message">Dernier message aujourd'hui à 18h48</span>
                            
                            </div>
                            <div class="thematique_arrow"><img src="../resources/images/picto_arrow.svg" class="picto" style="padding-right: -4px;"></div>
                        </div>
                    </a>
                    
            @endforeach
		</div>
	</div>
	@component('components.foot_input') @endcomponent
</div>
@endguest @endsection
