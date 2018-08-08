@extends('layouts.second_master')
@section('content')
    <!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="w3l_breadcrumbs_left">
                <ul>
                    <li><a href="index.html">Home</a><i>/</i></li>
                    <li>Gallery</li>
                </ul>
            </div>
            <div class="w3_agile_breadcrumbs_right">
                <h2>Gallery</h2>
                <p>Quisque faucibus vel leo a luctus.</p>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <!-- gallery -->
    <div class="latest-albums">
        <div class="container">
            <h3 class="agileits_w3layouts_head">Our Latest <span>Gallery</span></h3>
            <p class="w3_agileits_para">Quisque faucibus vel leo a luctus.</p>
            <div class="wthree_latest_albums_grids gallery">
                <div class="col-md-4 agile_gallery_grid">
                    <div class="agileits_w3layouts_gallery_grid w3_agileits_gallery_grid">
                        <a href="layouts/images/15.jpg">
                            <img src="layouts/images/15.jpg" alt=" " class="img-responsive" />
                            <div class="caption">
                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h3>Symphony</h3>
                                    <p>Quisque faucibus vel luctus.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="agileits_w3layouts_gallery_grid">
                        <a href="layouts/images/8.jpg">
                            <img src="layouts/images/8.jpg" alt=" " class="img-responsive" />
                            <div class="caption">
                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h3>Symphony</h3>
                                    <p>Quisque faucibus vel luctus.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="agileits_w3layouts_gallery_grid">
                        <a href="layouts/images/9.jpg">
                            <img src="layouts/images/9.jpg" alt=" " class="img-responsive" />
                            <div class="caption">
                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h3>Symphony</h3>
                                    <p>Quisque faucibus vel luctus.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 agile_gallery_grid">
                    <div class="agileits_w3layouts_gallery_grid">
                        <a href="layouts/images/2.jpg">
                            <img src="layouts/images/2.jpg" alt=" " class="img-responsive" />
                            <div class="caption">
                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h3>Symphony</h3>
                                    <p>Quisque faucibus vel luctus.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="agileits_w3layouts_gallery_grid w3_agileits_gallery_grid">
                        <a href="layouts/images/13.jpg">
                            <img src="layouts/images/13.jpg" alt=" " class="img-responsive" />
                            <div class="caption">
                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h3>Symphony</h3>
                                    <p>Quisque faucibus vel luctus.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="agileits_w3layouts_gallery_grid">
                        <a href="layouts/images/3.jpg">
                            <img src="layouts/images/3.jpg" alt=" " class="img-responsive" />
                            <div class="caption">
                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h3>Symphony</h3>
                                    <p>Quisque faucibus vel luctus.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 agile_gallery_grid">
                    <div class="agileits_w3layouts_gallery_grid">
                        <a href="layouts/images/10.jpg">
                            <img src="layouts/images/10.jpg" alt=" " class="img-responsive" />
                            <div class="caption">
                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h3>Symphony</h3>
                                    <p>Quisque faucibus vel luctus.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="agileits_w3layouts_gallery_grid">
                        <a href="layouts/images/9.jpg">
                            <img src="layouts/images/9.jpg" alt=" " class="img-responsive" />
                            <div class="caption">
                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h3>Symphony</h3>
                                    <p>Quisque faucibus vel luctus.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="agileits_w3layouts_gallery_grid w3_agileits_gallery_grid">
                        <a href="layouts/images/14.jpg">
                            <img src="layouts/images/14.jpg" alt=" " class="img-responsive" />
                            <div class="caption">
                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h3>Symphony</h3>
                                    <p>Quisque faucibus vel luctus.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //gallery -->
    <!-- gallery-pop-up -->
    <script type="text/javascript" src="js/simple-lightbox.js"></script>
    <script>
        $(function(){
            var $gallery = $('.gallery a').simpleLightbox();

            $gallery.on('show.simplelightbox', function(){
                console.log('Requested for showing');
            })
                .on('shown.simplelightbox', function(){
                    console.log('Shown');
                })
                .on('close.simplelightbox', function(){
                    console.log('Requested for closing');
                })
                .on('closed.simplelightbox', function(){
                    console.log('Closed');
                })
                .on('change.simplelightbox', function(){
                    console.log('Requested for change');
                })
                .on('next.simplelightbox', function(){
                    console.log('Requested for next');
                })
                .on('prev.simplelightbox', function(){
                    console.log('Requested for prev');
                })
                .on('nextImageLoaded.simplelightbox', function(){
                    console.log('Next image loaded');
                })
                .on('prevImageLoaded.simplelightbox', function(){
                    console.log('Prev image loaded');
                })
                .on('changed.simplelightbox', function(){
                    console.log('Image changed');
                })
                .on('nextDone.simplelightbox', function(){
                    console.log('Image changed to next');
                })
                .on('prevDone.simplelightbox', function(){
                    console.log('Image changed to prev');
                })
                .on('error.simplelightbox', function(e){
                    console.log('No image found, go to the next/prev');
                    console.log(e);
                });
        });
    </script>
    <!-- //gallery-pop-up -->
    <!-- bootstrap-pop-up -->
    <div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    Symphony
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <section>
                    <div class="modal-body">
                        <div class="col-md-6 w3_modal_body_left">
                            <img src="layouts/images/15.jpg" alt=" " class="img-responsive" />
                        </div>
                        <div class="col-md-6 w3_modal_body_right">
                            <h4>Suspendisse et sapien ac diam suscipit posuere</h4>
                            <p>Ut enim ad minima veniam, quis nostrum
                                exercitationem ullam corporis suscipit laboriosam,
                                nisi ut aliquid ex ea commodi consequatur? Quis autem
                                vel eum iure reprehenderit qui in ea voluptate velit
                                esse quam nihil molestiae consequatur.
                                <i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit
                                    esse quam nihil molestiae consequatur.</i>
                                Fusce in ex eget ligula tempor placerat. Aliquam laoreet mi id felis commodo
                                interdum. Integer sollicitudin risus sed risus rutrum
                                elementum ac ac purus.</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- //bootstrap-pop-up -->
@endsection