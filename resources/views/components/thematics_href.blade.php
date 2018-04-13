                     
                    <a href="{{ route('chat') }}">
                        <div class="thematique_lien">
                            <div class="thematique_avatar"></div>
                            <div class="thematique_titre">
                           
                                <span class="thematique_author">{{Auth::user()->identity}}</span> - <span class="thematique_date">Posté le 4 Octobre</span><br>
                                <span class="thematique_content">{{ $posts->content }}</span><br>
                                <span class="thematique_last_message">Dernier message aujourd'hui à 18h48</span>
                            
                            </div>
                            <div class="thematique_arrow"><img src="../resources/images/picto_arrow.svg" class="picto" style="padding-right: -4px;"></div>
                        </div>
                    </a>
                    