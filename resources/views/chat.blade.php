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
					<td>
						<div class="thematique_top_avatar"></div>
					</td>
					<td style="text-align: center; width: 100%;"><span
						class="thematique_top_author">BERNARD Thierry</span><br> <span
						class="thematique_top_date">Posté le 4 Octobre</span><br> <span
						class="thematique_top_content">Quelqu'un pour déposer mon fils à
							l'école demain matin ?</span></td>
				</tr>
			</table>
			@component('components.thematics_response') @endcomponent
		</div>
	</div>
	@component('components.foot_input') @endcomponent
</div>
@endguest @endsection

