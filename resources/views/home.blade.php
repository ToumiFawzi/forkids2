 @extends('layouts.app') @section('content') @guest
<script>window.location = "{{ route('login') }}";</script>
@else @component('components.nav') @endcomponent
<div class="row rowhome">
	<div class="col-xl-4">
		<div class="colonne">
			<div class="avatarnom">
				<div class="avatar"></div>
				<div class="parentsname">{{ Auth::user()->identity}}</div>

				<a href="#"><img src="../resources/images/picto_edit.svg"
					class="picto" style="float: right"></a>
			</div>
			<span class="elementlist">Email : </span>{{Auth::user() -> email }}<br>

		</div>
	</div>
	<div class="col-xl-4">
		<div class="colonne">
			<div class="categorie">Communautés</div>
			<br> <a href="{{ route('thematics') }}">
				<div class="communaute_lien">
					<div class="communaute_titre">{{Auth::user() -> classkid1 }}</div>
					<div class="communaute_arrow">
						<img src="../resources/images/picto_arrow.svg" class="picto"
							style="padding-right: -4px;">
					</div>
				</div>
			</a>
		</div>
	</div>
	<div class="col-xl-4">
		<div class="colonne">
			<div class="categorie">Enfants</div>
			<br>
			<div class="enfant">
				<table style="width: 100%;">
					<tr>
						<td>
							<div class="avatarenfant"></div>
						</td>
						<td><span class="kidsname">{{Auth::user()->kididentity1}}</span><br>
							<span class="kidsetablissement">Ecole primaire de la cotonne</span>
						</td>
						<td><span class="kidsage">{{Auth::user()->kidage1}} ans</span><br>
						<span class="kidslevel">{{Auth::user()->classkid1}}</span></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>

@component('components.foot') @endcomponent @endguest @endsection
