<!-- banner -->
<div style="background-color: #000">
    <div class="container banner_container">
        <div class="row banner_adv" >
            <div class="col-md-5" style="width:44%;height:150px;padding-right: 0px;padding-left: 0px;">
                <img src="layouts/images/banner_mauritel.png" alt=" "  class="img-responsive" style="width:100%;height:150px;" />
            </div>
            <div class="col-md-3" style="height:150px;width:150px;padding-right: 0px;padding-left: 0px;">
                <img src="layouts/images/LogoCCA2.jpg" alt=" " class="img-responsive" style="height:150px"/>
            </div>
            <div class="col-md-4" style="width:42%;height:150px;padding-right: 0px;padding-left: 0px;">
                <img src="layouts/images/banner_ifm.jpg"  alt=" " class="img-responsive" style="width:100%;height:150px" />
            </div>
        </div>
    </div>
<!-- banner -->
    <div class="container" style="height: 65px;">
        <nav class="navbar navbar-default">
            <div class="navbar-header navbar-left">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- <h1><a class="navbar-brand" href="#">Carre<span>four des</span></a></h1>
                <h1><a class="navbar-brand" href="#">Cult<span>ures</span> et des</a></h1><br>
                <h1><a class="navbar-brand" href="#"><span>Arts</span> </a></h1> -->
            </div>

            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <nav class="menu menu--iris">
                    <ul class="nav navbar-nav menu__list">
                        <li class="menu__item menu__item--current"><a href="{{ url('/') }}" class="menu__link">Acceuil</a></li>
                        <li class="menu__item"><a href="{{ url('/') }}" class="menu__link">Actualités</a></li>
                        <li class="dropdown menu__item">
                            <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown">CCA<b class="caret"></b></a>
                            <ul class="dropdown-menu agile_short_dropdown">
                                <li><a href="cca">l'école</a></li>
                                <li><a href="professeurs">Professeurs</a></li>
                                <li><a href="partenaires">Partenaires</a></li>
                                <li><a href="evenements">événements</a></li>
                            </ul>
                        </li>
                        <li class="menu__item"><a href="gallerie" class="menu__link">Gallerie</a></li>
                        <li class="dropdown menu__item">
                            <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown">Cours de musique<b class="caret"></b></a>
                            <ul class="dropdown-menu agile_short_dropdown">
                                <li><a href="eveil_musical">Eveil musical 4-5 ans</a></li>
                                <li><a href="decouverte_et_initiation">Découverte et initation 6-7 ans</a></li>
                                <li><a href="parcours_des_8ans">Parcours dés 8ans</a></li>
                                <li><a href="instruments">Instruments</a></li>
                                <li><a href="pratique_ensemble">Pratique ensemble</a></li>
                            </ul>
                        </li>
                        <li class="dropdown menu__item">
                            <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown">Arts<b class="caret"></b></a>
                            <ul class="dropdown-menu agile_short_dropdown">
                                <li><a href="danse_classique">Musique</a></li>
                                <li><a href="danse_contemporaine">cinema</a></li>
                                <li><a href="danse_contemporaine">Architecture</a></li>
                                <li><a href="danse_jazz">Artisanat</a></li>
                                <li><a href="danse_orientale">Danse</a></li>
                                <li><a href="danse_hip_hop">Peinture</a></li>
                                <li><a href="barre_au_sol">Photographie</a></li>
                                <li><a href="barre_au_sol">Sculpture</a></li>
                                <li><a href="barre_au_sol">Gallerie d'art</a></li>
                                <li><a href="barre_au_sol">Cuisine</a></li>
                            </ul>
                        </li>
                        <li class="dropdown menu__item">
                            <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown">Tourisme & évenements<b class="caret"></b></a>
                            <ul class="dropdown-menu agile_short_dropdown">
                                <li><a href="danse_classique">Bon plan</a></li>
                                <li><a href="danse_contemporaine">sites touristiques</a></li>

                            </ul>
                        </li>
                        <li class="dropdown menu__item">
                            <a href="about" class="dropdown-toggle menu__link" data-toggle="dropdown">A propos<b class="caret"></b></a>
                            <ul class="dropdown-menu agile_short_dropdown">
                                <li><a href="infos_pratiques">Informations pratiques</a></li>
                                <li><a href="inscriptions">Inscriptions</a></li>
                                <li><a href="saisons">Saison 2018-2019</a></li>
                                <li><a href="calendrier_annuel">Calendrier annuel</a></li>
                                <li><a href="location_instrus">Location d'instruments</a></li>
                                <li><a href="actus">Actualités</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->

        </nav>
        <div class="agile_banner_info">
            <!-- <h3>music</h3>
            <div class="agile_banner_info_pos">
                <h2>w3layouts</h2>
            </div> -->
        </div>
    </div>
    @include('layouts.slider')
</div>

