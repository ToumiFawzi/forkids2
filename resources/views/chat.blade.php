@extends('layouts.app') @section('content') @guest
<script>window.location = "{{ route('login') }}";</script>
@else
<div class="container_hidden">
	@component('components.nav') @endcomponent
	<div class="row" style="height: 100%;">
		<div class="col-md-3" id="aside">
			<div class="liste_users">@component('components.liste_users_href')
				@endcomponent</div>
		</div>
		<div class="col-md-9" id="acontent">
			<table class="thematique_top_table">
				<tr>
				@foreeach($posts as $post)
					<td>
						<div class="thematique_top_avatar"></div>
					</td>
					<td style="text-align: center; width: 100%;"><span
						class="thematique_top_author">{{Auth::user()->identity}}</span><br> <span
						class="thematique_top_date">Posté le{{ $post->date_creation }} </span><br> <span
						class="thematique_top_content">{{ $post->content }}</span></td>
				</tr>
			</table>
			@component('components.thematics_response') @endcomponent
		</div>
	</div>
	@component('components.foot_input') @endcomponent
</div>
@endguest @endsection

