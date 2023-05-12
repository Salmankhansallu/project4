<!DOCTYPE html>
<html lang="en">

<head>
    <title>LRP - Media</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <style>
        body {
            background: #E4FFEE;
        }
        .col-12 ,.login,.f{
            text-align: center;
        }
        .cb{
            text-align: center;
        }
        .ch{
            text-align: center;
            color: white;
            background-color:#00b341;
        }
        .card{
           box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
           transition: 0.5s;
           width: 100%;
           padding: 5;
       }
       .card:hover{
           box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
       }
       .container{
           padding:2px 16px ;
       }
        .nav-item {
            border-left: 1px solid #B3B3B3;
            width: 100px;
            text-align: center;
        }

        @media only screen and (max-width: 600px) {
            .nav-item {
                border: none;
            }
        }


        /* gallery Carousel start */
        @media (max-width: 767px) {
            #galleryCarousel .carousel-inner .carousel-item>div, #galleryCarousel2 .carousel-inner .carousel-item>div {
                display: none;
            }
            #galleryCarousel .carousel-inner .carousel-item>div:first-child ,#galleryCarousel2 .carousel-inner .carousel-item>div:first-child{
                display: block;
            }
        }

        #galleryCarousel .carousel-inner .carousel-item.active,
        .carousel-inner .carousel-item-next,
        .carousel-inner .carousel-item-prev ,#galleryCarousel2 .carousel-inner .carousel-item.active,
        .carousel-inner .carousel-item-next,
        .carousel-inner .carousel-item-prev {
            display: flex;
        }

        /* medium and up screens */
        @media (min-width: 768px) {

            #galleryCarousel  .carousel-inner .carousel-item-end.active,
            .carousel-inner .carousel-item-next ,#galleryCarousel2  .carousel-inner .carousel-item-end.active,
            .carousel-inner .carousel-item-next {
                transform: translateX(25%);
            }
            #galleryCarousel .carousel-inner .carousel-item-start.active,
            .carousel-inner .carousel-item-prev,#galleryCarousel2 .carousel-inner .carousel-item-start.active,
            .carousel-inner .carousel-item-prev {
                transform: translateX(-25%);
            }
        }
        #galleryCarousel .carousel-inner .carousel-item-end,
        .carousel-inner .carousel-item-start, #galleryCarousel2 .carousel-inner .carousel-item-end,
        .carousel-inner .carousel-item-start  {
            transform: translateX(0);
        }
        #galleryCarousel .carousel-inner .card,#galleryCarousel2 .carousel-inner .card {
            margin: 0 4px;
        }
        /* gallery Carousel end */
       #card-img {
          height: 350px;
        }
        .img-gallery-carasuel {
            height: 200px !important;
            width: 100%;
        }

        .notification {
            position: fixed;
            left: 0;
            right: 0;
            bottom: 0;
            padding: 5px 15px;
            margin: 0;
            text-align: center;
            z-index: 1;
            background: var(--yellow);
        }

        @media (max-width: 700px) {
            .notification {
                display: none;
            }
        }


        /* IMAGE GRID STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
        .image-grid figure {
            margin-bottom: 0;
        }

        .image-grid img {
            box-shadow: 0 1rem 1rem rgba(0, 0, 0, 0.15);
            transition: box-shadow 0.2s;
        }

        .image-grid a:hover img {
            box-shadow: 0 1rem 1rem rgba(0, 0, 0, 0.35);
        }


        /* LIGHTBOX STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
        .lightbox-modal .modal-content,.lightbox-modal2 .modal-content {
            background: var(--lightbox);
        }

        .lightbox-modal .btn-close, .lightbox-modal2 .btn-close {
            position: absolute;
            top: 20px;
            right: 18px;
            font-size: 1.2rem;
            z-index: 10;
        }

        .lightbox-modal .modal-body ,.lightbox-modal2 .modal-body {
            display: flex;
            align-items: center;
            padding: 0;
            text-align: center;
        }

        .lightbox-modal img,.lightbox-modal2 img {
            width: auto;
            max-height: 100vh;
            max-width: 100%;
        }

        .lightbox-modal .carousel-caption,.lightbox-modal2 .carousel-caption {
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(36, 36, 36, 0.75);
        }

        .lightbox-modal .carousel-control-prev,
        .lightbox-modal .carousel-control-next, .lightbox-modal2 .carousel-control-prev,
        .lightbox-modal2 .carousel-control-next {
            top: 50%;
            bottom: auto;
            transform: translateY(-50%);
            width: auto;
        }

        .lightbox-modal .carousel-control-prev,.lightbox-modal2 .carousel-control-prev {
            left: 10px;
        }

        .lightbox-modal .carousel-control-next, .lightbox-modal2 .carousel-control-next {
            right: 10px;
        }
    </style>
</head>

<body>
   
    <!-- jQuery -->
    <script src="https://lrp.okcl.co.in/assets/admin/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="https://lrp.okcl.co.in/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="https://lrp.okcl.co.in/assets/admin/dist/js/adminlte.min.js"></script>

    <header>

        <nav class="navbar navbar-expand-sm bg-success navbar-dark" style="background: #019934 !important; height:60px">
            <div class="container-fluid " style="height:20px;">
            <marquee width="100%" onmouseover="this.stop();" onmouseout="this.start();" style="line-height: 17px;">
                <h2 style="color:white;font-family: ui-sans-serif;">
		        	Welcome to Learning Recovery programme
				</h2>
            </marquee>
            </div>
        </nav>

        <!-- Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel" style="background: #12B886;">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>

            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/images/slide1.jpg" alt="LRP" class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/slide2.jpg" alt="LRP" class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/slide3.jpg" alt="LRP" class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/slide4.jpg" alt="LRP" class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/slide5.jpg" alt="LRP" class="d-block" style="width:100%">
                </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>

        <nav class="navbar navbar-expand-sm bg-success navbar-dark" style="background:#00B0DC !important;">
            <div class="container-fluid">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bs-example-navbar-collapse-1">
                    <span class="navbar-toggler-icon" style="width:1em; height:1em;"></span>
                </button>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                            <a class="nav-link  " href="<?= base_url('login')?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('about')?>">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('download')?>">Download</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('media')?>">Media</a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('support')?>">Support</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="dcontainer-fluid bg-transparent" >

    <!-- ======= Media Section press realease======= -->
    <section id="media" class="media">
        <div class="row">       
            <div class="col-md-12">            
                <h3 class="mt-3 text-center text-dark"><i class="fa fa-newspaper p-2"></i>Press Releases</h3>        
                <div class="px-5 mt-4 mb-5 image-grid">
                    <div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="assets/images/p1.jpg" class="img-fluid img-gallery-carasuel" onclick="viewGallery(this)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="assets/images/p2.jpg" class="img-fluid img-gallery-carasuel" onclick="viewGallery(this)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="assets/images/p3.jpg" class="img-fluid img-gallery-carasuel" onclick="viewGallery(this)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="assets/images/p4.jpg" class="img-fluid img-gallery-carasuel" onclick="viewGallery(this)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="assets/images/p5.jpg" class="img-fluid img-gallery-carasuel" onclick="viewGallery(this)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="assets/images/p6.jpg" class="img-fluid img-gallery-carasuel" onclick="viewGallery(this)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="assets/images/p7.jpg" class="img-fluid img-gallery-carasuel" onclick="viewGallery(this)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev bg-transparent w-aut" href="#galleryCarousel" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next bg-transparent w-aut" href="#galleryCarousel" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div> 
            <div class="modal lightbox-modal" id="lightbox-modal" tabindex="-1">
                <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content">
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="modal-body">
                            <div class="container-fluid p-0">
                                <!-- JS content here -->
                                <img id="lightbox-modal-img" src="" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>   
    </section> <br><br>
    <!-- =======End  Media Section ======= -->
    <!-- ======= Media Section TEACHER ======= -->
    <section id="media2" class="media2">
        <div class="row">       
            <div class="col-md-12">            
                <h3 class="mt-3 text-center text-dark"><i class="fas fa-user-graduate p-2"></i>Teacher Training</h3>            
                <div class="px-5 mt-4 mb-5 image-grid">
                    <div id="galleryCarousel2" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="assets/images/t1.jpg" class="img-fluid img-gallery-carasuel" onclick="viewGallery(this)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="assets/images/t2.jpg" class="img-fluid img-gallery-carasuel" onclick="viewGallery(this)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="assets/images/t3.jpg" class="img-fluid img-gallery-carasuel" onclick="viewGallery(this)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="assets/images/t4.jpg" class="img-fluid img-gallery-carasuel" onclick="viewGallery(this)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="assets/images/t5.jpg" class="img-fluid img-gallery-carasuel" onclick="viewGallery(this)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="assets/images/t6.jpg" class="img-fluid img-gallery-carasuel" onclick="viewGallery(this)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="assets/images/t7.jpg" class="img-fluid img-gallery-carasuel" onclick="viewGallery(this)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="assets/images/t8.jpg" class="img-fluid img-gallery-carasuel" onclick="viewGallery(this)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="assets/images/t9.jpg" class="img-fluid img-gallery-carasuel" onclick="viewGallery(this)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="assets/images/t10.jpg" class="img-fluid img-gallery-carasuel" onclick="viewGallery(this)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="assets/images/t11.jpg" class="img-fluid img-gallery-carasuel" onclick="viewGallery(this)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="assets/images/t13.jpg" class="img-fluid img-gallery-carasuel" onclick="viewGallery(this)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="assets/images/t12.jpg" class="img-fluid img-gallery-carasuel" onclick="viewGallery(this)">
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                        <a class="carousel-control-prev bg-transparent w-aut" href="#galleryCarousel2" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next bg-transparent w-aut" href="#galleryCarousel2" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div>  
            <div class="modal lightbox-modal" id="lightbox-modal2" tabindex="-1">
                <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content">
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="modal-body">
                            <div class="container-fluid p-0">
                                <!-- JS content here -->
                                <img id="lightbox-modal-img2" src="" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
         </div>   
    </section> <br><br>
    <!-- ======= End  Media Section TEACHER ======= -->
    <!-- =======   Media Section STUDENT    
    <section id="media" class="media">
        <div class="row">       
            <div class="col-md-12">            
                <h3 class="mt-3 text-center text-dark"><i class="fas fa-book-reader p-2"></i>Learning Recovery Programme</h3>           
                <div class="px-5 mt-4 mb-5 image-grid">
                    <div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="assets/images/s1.jpg" class="img-fluid img-gallery-carasuel" onclick="viewGallery(this)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="assets/images/s2.jpg" class="img-fluid img-gallery-carasuel" onclick="viewGallery(this)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="assets/images/s3.jpg" class="img-fluid img-gallery-carasuel" onclick="viewGallery(this)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="assets/images/s4.jpg" class="img-fluid img-gallery-carasuel" onclick="viewGallery(this)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="assets/images/s5.jpg" class="img-fluid img-gallery-carasuel" onclick="viewGallery(this)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="assets/images/s6.jpg" class="img-fluid img-gallery-carasuel" onclick="viewGallery(this)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="assets/images/s7.jpg" class="img-fluid img-gallery-carasuel" onclick="viewGallery(this)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="assets/images/s8.jpg" class="img-fluid img-gallery-carasuel" onclick="viewGallery(this)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="assets/images/s9.jpg" class="img-fluid img-gallery-carasuel" onclick="viewGallery(this)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="assets/images/s10.jpg" class="img-fluid img-gallery-carasuel" onclick="viewGallery(this)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="assets/images/s11.jpg" class="img-fluid img-gallery-carasuel" onclick="viewGallery(this)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="assets/images/s13.jpg" class="img-fluid img-gallery-carasuel" onclick="viewGallery(this)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="assets/images/s12.jpg" class="img-fluid img-gallery-carasuel" onclick="viewGallery(this)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <a class="carousel-control-prev bg-transparent w-aut" href="#galleryCarousel" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next bg-transparent w-aut" href="#galleryCarousel" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div> 
            <div class="modal lightbox-modal" id="lightbox-modal" tabindex="-1">
                <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content">
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="modal-body">
                            <div class="container-fluid p-0">                          
                                <img id="lightbox-modal-img" src="" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>   
    </section> <br><br>  ======= -->
    <!-- ======= Media Section STUDENT      ======= -->
    </div>
    <footer>
        <div class="container-fluid ">
            <div class="row p-4" style="background: #006634 ;">
                <div class="col-md-12 my-3 f">
                    <h4 class="text-light">Supported by Odisha School Education programme Authority (OSEPA), Govt. of Odisha</h4>
                </div>
                <div class="col-md-3 my-2">
                    <img src="assets/images/osepa-logo.png" class="img-responsive center-block d-block mx-auto" />
                </div>
                <div class="col-md-3 my-2">
                    <img src="assets/images/odisha-map.png" class="img-responsive center-block d-block mx-auto w-75" />
                </div>
                <div class="col-md-3 my-2">
                    <div class="card bg-light text-dark">
                        <div class="card-body bg-light bg-light">
                            <h5 class="text-center">Site Map</h5>
                            <ul style="list-style-type:circle;">
                                <li><a  href="login">Home</a></li>  
                                <li><a  href="about">About</a></li> 
                                <li><a  href="download">Download</a></li>   
                                <li><a  href="media">Media</a></li>                        
                                <li><a  href="support">Support</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-2">
                    <h5 class="text-center text-light">Contact Us</h5><hr style="color:white">
                    <div class="row text-light mt-3">
                        <div class="col-2 text-end mt-2">
                            <i class='fa fa-home'></i>
                        </div>
                        <div class="col-10 mt-2">
                            Sikshya Soudha Unit - V, Bhubaneswar, Odisha.
                        </div>
                        <div class="col-2 text-end mt-2">
                            <i class='fas fa-phone-alt'></i>
                        </div>
                        <div class="col-10 mt-2">
                            0674-2395325
                        </div>
                        <div class="col-2 text-end mt-2">
                            <i class='fas fa-fax'></i>
                        </div>
                        <div class="col-10 mt-2">
                            0674-2392721
                        </div>
                        <div class="col-2 text-end mt-2">
                            <i class='fas fa-envelope'></i>
                        </div>
                        <div class="col-10 mt-2">
                            opepaedu(at)yahoo(dot)co(dot)in
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script>
        let items = document.querySelectorAll('#galleryCarousel .carousel-item')
        items.forEach((el) => {
            const minPerSlide = 4
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        });

        function viewGallery(elm) {
            $("#lightbox-modal-img").attr("src", elm.src);
            $("#lightbox-modal").modal("show");
        }
        let item = document.querySelectorAll('#galleryCarousel2 .carousel-item')
        item.forEach((el) => {
            const minPerSlide = 4
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = item[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        });

        function viewGallery(elm) {
            $("#lightbox-modal-img2").attr("src", elm.src);
            $("#lightbox-modal2").modal("show");
        }
    </script>    
</body>
</html>