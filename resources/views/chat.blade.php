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
		<div class="col-md-3" id="aside">
			<div class="liste_users">
				<a href="#">
					<div class="liste_users_lien">
						<div class="liste_users_avatar"></div>
						<span class="liste_users_nom">DUPONT David</span>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-9" id="acontent">
			<table class="thematique_top_table">
				<tr>
					<td>
						<div class="thematique_top_avatar"></div>
					</td>
					<td style="text-align: center; width: 100%;"><span
						class="thematique_top_author">{{Auth::user()->identity}}</span><br>
						<span class="thematique_top_date">Posté le </span><br> <span
						class="thematique_top_content"></span></td>
				</tr>
			</table>
			<table class="thematique_reponse_table">
				<tr>
					<td>
						<div class="thematique_reponse_avatar"></div>
					</td>
					<td style="width: 100%; padding: 10px;"><span
						class="thematique_reponse_author">DUPONT David</span> - <span
						class="thematique_reponse_date">Posté le 4 Octobre</span> <br> <span
						class="thematique_reponse_content">Je pourrai le déposer si vous
							n'avez toujours pas trouvé de solution ?</span></td>
				</tr>
			</table>
		</div>
	</div>
	@component('components.foot_thematics') @endcomponent
</div>
@endguest @endsection

