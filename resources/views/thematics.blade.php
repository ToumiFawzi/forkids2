@extends('layouts.app') @section('content') @guest
<script>window.location = "{{ route('login') }}";</script>
@else
<script type="text/javascript">
    function asideswipe()   {
        var div = document.getElementById('aside'),
        display = getComputedStyle(div, null).display;
         
        if(display == "block")  {
            document.getElementById("aside").style.display = "none";
            document.getElementById("acontent").className = "col-md-12";
        }else   {
            document.getElementById("aside").style.display = "block";
            document.getElementById("acontent").className = "col-md-9";
        }
    }  
</script>
<div class="container_hidden">
	@component('components.nav') @endcomponent
	<div class="row" style="height: 100%;">
		<div class="col-sm-3" id="aside">
			<div class="liste_users">
				<a href="#">
					<div class="liste_users_lien">
						<div class="liste_users_avatar"></div>
						<span class="liste_users_nom">DUPONT David</span>
					</div>
				</a>
			</div>
		</div>
		<div class="col-sm-9" id="acontent">
			@foreach($post as $posts) @foreach($users as $user) <a
				href="{{ route('chat') }}">
				<div class="thematique_lien">
					<div class="thematique_avatar"></div>
					<div class="thematique_titre">
						<table style="width: 100%;">
							<tr>
								<td><span class="thematique_author">{{$user->identity}}</span> -
									<span class="thematique_date">Posté le
										{{$posts->date_creation}}</span></td>
								<td style="text-align: right;"><span class="thematique_boutons"><a
										href="#"><img src="../resources/images/picto_edit.svg"
											class="picto_small" style="padding-right: -4px;"></a><a
										href="#"><img src="../resources/images/picto_delete.svg"
											class="picto_small" style="padding-right: -4px;"></a></span>
								</td>
							</tr>
						</table>
						<span class="thematique_content">{{ $posts->content }}</span><br>
						<span class="thematique_last_message">Dernier message aujourd'hui
							à 18h48</span>

					</div>
					<div class="thematique_arrow">
						<img src="../resources/images/picto_arrow.svg" class="picto"
							style="padding-right: -4px;">
					</div>
				</div>
			</a> @endforeach @endforeach
		</div>
	</div>
	@component('components.foot_thematics') @endcomponent
</div>
@endguest @endsection
