@extends('layouts.second_master')
@section('content')
<!-- breadcrumbs -->
<div class="breadcrumbs">
		<div class="container">
			<div class="w3l_breadcrumbs_left">
				<ul>
					<li><a href="index.html">Acceuil</a><i>/</i></li>
					<li>Musique</li>
				</ul>
			</div>
			<div class="w3_agile_breadcrumbs_right">
				<h2>Musique</h2>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- music -->
<div class="features" >
		<div class="container">
			<h3 class="agileits_w3layouts_head"  style="color:white;">Instruments de <span>musique</span></h3>
		<!-- <p class="w3_agileits_para">Quisque faucibus vel leo a luctus.</p> -->
			<div class="wthree_latest_albums_grids">
				<div class="cntl"> <span class="cntl-bar cntl-center"> <span class="cntl-bar-fill"></span> </span>
					<div class="cntl-states" style="background: #000000a3;">
						<div class="cntl-state">
							<div class="cntl-content" style="color:white;background:#e60003d1">
								<p style="color:white;">Instruments à cordes</p><br />
								<h3 style="color:white;">Le son de ses instruments est&nbsp;produit par la mise en vibration d’une ou plusieurs cordes. <br>
								Il existe trois catégories d’instruments à cordes : <br>
								Les instruments à cordes frottées: dont le son est produit par le frottement de l’archet sur les cordes<br>
								Les instruments à cordes pincées: dont le son est produit par le pincement des
								 cordes avec les doigts ou un plectre<br>
								 Les instruments à cordes frappées: dont le son est produit par la percussion
								  d’un marteau ou d’une baguette sur les cordes</h4>
                            </div>
                            <div class="row" style="display:table-cell">
                                <div class="col-md-4">
                                    <div class="cntl-image hovereffect" >
									<a href="#" data-toggle="modal" data-target="#MyGuitar">
										<img src="layouts/images/corde/guitar.png" alt=" " class="img-responsive" />
									</a>
										<!-- <div class="w3ls_cntl_image_pos">
											<p>Duis a diam nec dui rutrum dapibus eget vitae nulla</p>
										</div> -->
							        </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="cntl-image hovereffect">
									<a href="#" data-toggle="modal" data-target="#MyBasse">
										<img src="layouts/images/corde/guitar_basse.png" alt=" " class="img-responsive" />
                                    </a>	
										<!-- <div class="w3ls_cntl_image_pos">
											<p>Duis a diam nec dui rutrum dapibus eget vitae nulla</p>
										</div> -->
							        </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="cntl-image hovereffect">
										<img src="layouts/images/corde/harpe.png" alt=" " class="img-responsive" />
										<!-- <div class="w3ls_cntl_image_pos">
											<p>Duis a diam nec dui rutrum dapibus eget vitae nulla</p>
										</div> -->
							        </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="cntl-image hovereffect">
										<img src="layouts/images/corde/violon.png" alt=" " class="img-responsive" />
										<!-- <div class="w3ls_cntl_image_pos">
											<p>Duis a diam nec dui rutrum dapibus eget vitae nulla</p>
										</div> -->
							        </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="cntl-image hovereffect">
										<img src="layouts/images/corde/violoncelle.png" alt=" " class="img-responsive" />
										<!-- <div class="w3ls_cntl_image_pos">
											<p>Duis a diam nec dui rutrum dapibus eget vitae nulla</p>
										</div> -->
							        </div>
                                </div>
                                <div class="col-md-4 hovereffect">
                                    <div class="cntl-image">
										<img src="layouts/images/corde/piano.png" alt=" " class="img-responsive" />
										<!-- <div class="w3ls_cntl_image_pos">
											<p>Duis a diam nec dui rutrum dapibus eget vitae nulla</p>
										</div> -->
							        </div>
                                </div>
                            </div>
							
							<div class="cntl-icon cntl-center">01</div>
						</div>
						<div class="cntl-state">
							<div class="cntl-content">
								<h4>18 December 2016</h4>
								<p>Nulla ut tellus eu ante dapibus euismod ut sit amet est. Sed posuere scelerisque turpis, in bibendum magna feugiat non.</p>
							</div>
							<div class="cntl-image w3_cntl_image"><img src="layouts/images/10.jpg" alt=" " class="img-responsive" /></div>
							<div class="cntl-icon cntl-center">02</div>
						</div>
						<div class="cntl-state">
							<div class="cntl-content">
								<h4>21 December 2016</h4>
								<p>Hormonica Classes</p>
							</div>
							<div class="cntl-image">
								<img src="layouts/images/3.jpg" alt=" " class="img-responsive" />
								<div class="w3ls_cntl_image_pos">
									<p>Duis a diam nec dui rutrum dapibus eget vitae nulla</p>
								</div>
							</div>
							<div class="cntl-icon cntl-center">03</div>
						</div>
						<div class="cntl-state">
							<div class="cntl-content">
								<h4>25 December 2016</h4>
								<p>Nulla ut tellus eu ante dapibus euismod ut sit amet est. Sed posuere scelerisque turpis, in bibendum magna feugiat non.</p>
							</div>
							<div class="cntl-image">
								<img src="layouts/images/2.jpg" alt=" " class="img-responsive" />
								<div class="w3ls_cntl_image_pos">
									<p>Duis a diam nec dui rutrum dapibus eget vitae nulla</p>
								</div>
							</div>
							<div class="cntl-icon cntl-center">04</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- //music -->

@endsection