@extends('layouts.template-front')

@section('content')
    
    <!-- Hero Start -->
    <section class="bg-half bg-light d-table w-100 bg-bread" style="background-image: url('{{ asset('assets-front/img/custom/mufid-majnun-CAtdHwUK3qc-unsplash.jpg') }}');">
        <div class="olay-dark"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level">
                        <h4 class="title text-white"> Infografis </h4>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <!-- <ul class="breadcrumb bg-white rounded shadow mb-0 cust">
                                    <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                                    <i class="fa fa-chevron-right mx-2 small"></i>
                                    <li class="breadcrumb-item active" aria-current="page">Infografis</li>
                                </ul> -->
                            </nav>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div> <!--end container-->
    </section><!--end section-->
    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <section class="section">
        <img src="{{ asset('assets-front/img/bg-top-right.png') }}" class="olay-top-right-inf">
        <img src="{{ asset('assets-front/img/bg-left-lg.png') }}" class="olay-top-left-inf">
        <div class="container">
            <!-- <div class="row justify-content-center">
                <div class="col-12 filters-group-wrap">
                    <div class="filters-group">
                        <ul class="container-filter list-inline mb-0 filter-options text-center">
                            <li class="list-inline-item categories-name border text-dark rounded active" data-group="all">All</li>
                            <li class="list-inline-item categories-name border text-dark rounded" data-group="branding">Branding</li>
                            <li class="list-inline-item categories-name border text-dark rounded" data-group="designing">Designing</li>
                            <li class="list-inline-item categories-name border text-dark rounded" data-group="photography">Photography</li>
                            <li class="list-inline-item categories-name border text-dark rounded" data-group="development">Development</li>
                        </ul>
                    </div>
                </div>
            </div> -->

            <div id="grid" class="row">
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 picture-item" data-groups='["branding"]'>
                    <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <a href="{{ asset('assets-front/images/work/1.jpg') }}" class="lightbox d-inline-block" title="">
                                <img src="{{ asset('assets-front/images/work/1.jpg') }}" class="img-fluid" alt="work-image">
                            </a>
                            <div class="content bg-white p-3">
                                <h5 class="mb-0"><a href="portfolio-detail.html" class="text-dark title">Iphone mockup</a></h5>
                                <p class="text-muted tag mb-0 lh-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                <a class="float-right align-items-center d-flex" href="portfolio-detail.html">Selengkapnya<i class="fa fa-chevron-right ms-2 small"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 picture-item" data-groups='["designing"]'>
                    <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <a href="{{ asset('assets-front/images/work/2.jpg') }}" class="lightbox d-inline-block" title="">
                                <img src="{{ asset('assets-front/images/work/2.jpg') }}" class="img-fluid" alt="work-image">
                            </a>
                            <div class="content bg-white p-3">
                                <h5 class="mb-0"><a href="portfolio-detail.html" class="text-dark title">Mockup Collection</a></h5>
                                <p class="text-muted tag mb-0 lh-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                <a class="float-right align-items-center d-flex" href="portfolio-detail.html">Selengkapnya<i class="fa fa-chevron-right ms-2 small"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 picture-item" data-groups='["photography"]'>
                    <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <a href="{{ asset('assets-front/images/work/3.jpg') }}" class="lightbox d-inline-block" title="">
                                <img src="{{ asset('assets-front/images/work/3.jpg') }}" class="img-fluid" alt="work-image">
                            </a>
                            <div class="content bg-white p-3">
                                <h5 class="mb-0"><a href="portfolio-detail.html" class="text-dark title">Abstract images</a></h5>
                                <p class="text-muted tag mb-0 lh-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                <a class="float-right align-items-center d-flex" href="portfolio-detail.html">Selengkapnya<i class="fa fa-chevron-right ms-2 small"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 picture-item" data-groups='["development"]'>
                    <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <a href="{{ asset('assets-front/images/work/4.jpg') }}" class="lightbox d-inline-block" title="">
                                <img src="{{ asset('assets-front/images/work/4.jpg') }}" class="img-fluid" alt="work-image">
                            </a>
                            <div class="content bg-white p-3">
                                <h5 class="mb-0"><a href="portfolio-detail.html" class="text-dark title">Yellow bg with Books</a></h5>
                                <p class="text-muted tag mb-0 lh-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                <a class="float-right align-items-center d-flex" href="portfolio-detail.html">Selengkapnya<i class="fa fa-chevron-right ms-2 small"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 picture-item" data-groups='["branding"]'>
                    <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <a href="{{ asset('assets-front/images/work/5.jpg') }}" class="lightbox d-inline-block" title="">
                                <img src="{{ asset('assets-front/images/work/5.jpg') }}" class="img-fluid" alt="work-image">
                            </a>
                            <div class="content bg-white p-3">
                                <h5 class="mb-0"><a href="portfolio-detail.html" class="text-dark title">Company V-card</a></h5>
                                <p class="text-muted tag mb-0 lh-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.-card</p>
                                <a class="float-right align-items-center d-flex" href="portfolio-detail.html">Selengkapnya<i class="fa fa-chevron-right ms-2 small"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 picture-item" data-groups='["branding"]'>
                    <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <a href="{{ asset('assets-front/images/work/6.jpg') }}" class="lightbox d-inline-block" title="">
                                <img src="{{ asset('assets-front/images/work/6.jpg') }}" class="img-fluid" alt="work-image">
                            </a>
                            <div class="content bg-white p-3">
                                <h5 class="mb-0"><a href="portfolio-detail.html" class="text-dark title">Mockup box with paints</a></h5>
                                <p class="text-muted tag mb-0 lh-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                <a class="float-right align-items-center d-flex" href="portfolio-detail.html">Selengkapnya<i class="fa fa-chevron-right ms-2 small"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 picture-item" data-groups='["designing"]'>
                    <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <a href="{{ asset('assets-front/images/work/7.jpg') }}" class="lightbox d-inline-block" title="">
                                <img src="{{ asset('assets-front/images/work/7.jpg') }}" class="img-fluid" alt="work-image">
                            </a>
                            <div class="content bg-white p-3">
                                <h5 class="mb-0"><a href="portfolio-detail.html" class="text-dark title">Coffee cup</a></h5>
                                <p class="text-muted tag mb-0 lh-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                <a class="float-right align-items-center d-flex" href="portfolio-detail.html">Selengkapnya<i class="fa fa-chevron-right ms-2 small"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 picture-item" data-groups='["development"]'>
                    <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <a href="{{ asset('assets-front/images/work/8.jpg') }}" class="lightbox d-inline-block" title="">
                                <img src="{{ asset('assets-front/images/work/8.jpg') }}" class="img-fluid" alt="work-image">
                            </a>
                            <div class="content bg-white p-3">
                                <h5 class="mb-0"><a href="portfolio-detail.html" class="text-dark title">Pen and article</a></h5>
                                <p class="text-muted tag mb-0 lh-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                <a class="float-right align-items-center d-flex" href="portfolio-detail.html">Selengkapnya<i class="fa fa-chevron-right ms-2 small"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 picture-item" data-groups='["photography"]'>
                    <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <a href="{{ asset('assets-front/images/work/9.jpg') }}" class="lightbox d-inline-block" title="">
                                <img src="{{ asset('assets-front/images/work/9.jpg') }}" class="img-fluid" alt="work-image">
                            </a>
                            <div class="content bg-white p-3">
                                <h5 class="mb-0"><a href="portfolio-detail.html" class="text-dark title">White mockup box</a></h5>
                                <p class="text-muted tag mb-0 lh-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                <a class="float-right align-items-center d-flex" href="portfolio-detail.html">Selengkapnya<i class="fa fa-chevron-right ms-2 small"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 picture-item" data-groups='["photography"]'>
                    <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <a href="{{ asset('assets-front/images/work/10.jpg') }}" class="lightbox d-inline-block" title="">
                                <img src="{{ asset('assets-front/images/work/10.jpg') }}" class="img-fluid" alt="work-image">
                            </a>
                            <div class="content bg-white p-3">
                                <h5 class="mb-0"><a href="portfolio-detail.html" class="text-dark title">Logo Vectors</a></h5>
                                <p class="text-muted tag mb-0 lh-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                <a class="float-right align-items-center d-flex" href="portfolio-detail.html">Selengkapnya<i class="fa fa-chevron-right ms-2 small"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 picture-item" data-groups='["branding"]'>
                    <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <a href="{{ asset('assets-front/images/work/11.jpg') }}" class="lightbox d-inline-block" title="">
                                <img src="{{ asset('assets-front/images/work/11.jpg') }}" class="img-fluid" alt="work-image">
                            </a>
                            <div class="content bg-white p-3">
                                <h5 class="mb-0"><a href="portfolio-detail.html" class="text-dark title">Black and white T-shirt</a></h5>
                                <p class="text-muted tag mb-0 lh-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                <a class="float-right align-items-center d-flex" href="portfolio-detail.html">Selengkapnya<i class="fa fa-chevron-right ms-2 small"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 picture-item" data-groups='["branding"]'>
                    <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <a href="{{ asset('assets-front/images/work/12.jpg') }}" class="lightbox d-inline-block" title="">
                            <img src="{{ asset('assets-front/images/work/12.jpg') }}" class="img-fluid" alt="work-image">
                            </a>
                            <div class="content bg-white p-3">
                                <h5 class="mb-0"><a href="portfolio-detail.html" class="text-dark title">Yellow bg with cellphone</a></h5>
                                <p class="text-muted tag mb-0 lh-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                <a class="float-right align-items-center d-flex" href="portfolio-detail.html">Selengkapnya<i class="fa fa-chevron-right ms-2 small"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <!-- PAGINATION START -->
                <div class="col-12 mt-4 pt-2">
                    <ul class="pagination justify-content-center mb-0">
                        <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Previous">Prev</a></li>
                        <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Next">Next</a></li>
                    </ul>
                </div><!--end col-->
                <!-- PAGINATION END -->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Hero End -->

@endsection