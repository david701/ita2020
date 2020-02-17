@extends('layout.home')

@section('content')
  <!--Slider Area Start-->
  <div class="slider-area">
      <div class="preview-2">
          <div id="nivoslider" class="slides">
              <img src="{{asset('itaDesign')}}/img/carousel/001.jpg" alt="" title="#slider-1-caption1"/>
              <img src="{{asset('itaDesign')}}/img/carousel/002.jpg" alt="" title="#slider-1-caption2"/>
          </div>
          <div id="slider-1-caption1" class="nivo-html-caption nivo-caption">
              <div class="banner-content slider-1">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-12">
                              <div class="text-content-wrapper">
                                  <div class="text-content">
                                      <h1 class="title1 wow fadeInUp" data-wow-duration="2000ms" data-wow-delay="0s">Instituto Superior<br>
                                      AYACUCHO</h1>
                                      <p class="sub-title wow fadeInUp hidden-sm hidden-xs" data-wow-duration="2900ms" data-wow-delay=".5s"> Hacia el Desarrollo a través de la Formación Integral<br>
                                      Formando Hoy al Profesional del Mañana.<br>
                                      Tecnología, Innovación y Calidad.</p>
                                      <div class="banner-readmore wow fadeInUp" data-wow-duration="3600ms" data-wow-delay=".6s">
                                          <a class="button-default" href="#">Ver Carreras</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div id="slider-1-caption2" class="nivo-html-caption nivo-caption">
              <div class="banner-content slider-2">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-12">
                              <div class="text-content-wrapper">
                                  <div class="text-content slide-2">
                                      <h1 class="title1 wow rotateInDownLeft" data-wow-duration="1000ms" data-wow-delay="0s"> Tu Futuro<br>
                                      I.T.A</h1>
                                      <p class="sub-title wow rotateInDownLeft hidden-sm hidden-xs" data-wow-duration="1800ms" data-wow-delay="0s"> Un Compromiso con la Excelencia<br>
                                      Un Compromiso con la Excelencia.<br>
                                      Sólida Educación para tu Futuro.</p>
                                      <div class="banner-readmore wow rotateInDownLeft" data-wow-duration="1800ms" data-wow-delay="0s">
                                          <a class="button-default" href="#">Ver Carreras</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!--End of Slider Area-->
  <!--Course Area Start-->
  <div class="course-area section-padding bg-white">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="section-title-wrapper">
                      <div class="section-title">
                          <h3>Noticias</h3>
                          <p>Puedes revisar nuestros anuncios y noticias mas recientes</p>
                      </div>
                  </div>

              </div>
          </div>
          <div class="row">
              <div class="col-md-4 col-sm-6">
                  <div class="single-item">
                      <div class="single-item-image overlay-effect">
                          <a href="#"><img src="{{asset('itaDesign')}}/img/news/1.jpg" alt=""></a>
                      </div>
                      <div class="single-item-text">
                          <h4><a href="#">Seminario E-Learning con el "Ing. Gabriel Woon Kang Chung"</a></h4>
                          <div class="single-item-text-info">
                              <span>De: <span>Sistemas Informaticos</span></span><br/>
                              <span>Fecha: <span>20/5/2020</span></span>
                          </div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariat.</p>
                          <div class="single-item-content">
                             <div class="single-item-comment-view">
                                 <span><i class="zmdi zmdi-eye"></i>59</span>
                                 <span><i class="zmdi zmdi-comments"></i>19</span>
                             </div>
                             <div class="single-item-rating">
                                 <i class="zmdi zmdi-star"></i>
                                 <i class="zmdi zmdi-star"></i>
                                 <i class="zmdi zmdi-star"></i>
                                 <i class="zmdi zmdi-star"></i>
                                 <i class="zmdi zmdi-star-half"></i>
                             </div>
                          </div>
                      </div>
                      <div class="button-bottom">
                          <a href="#" class="button-default">Ver Mas</a>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 col-sm-6">
                  <div class="single-item">
                      <div class="single-item-image overlay-effect">
                          <a href="#"><img src="{{asset('itaDesign')}}/img/news/2.jpg" alt=""></a>
                      </div>
                      <div class="single-item-text">
                          <h4><a href="#">Relación con "Mi Teleferico"</a></h4>
                          <div class="single-item-text-info">
                              <span>De: <span>Construccion Civil</span></span><br/>
                              <span>Fecha: <span>20/5/2020</span></span>
                          </div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariat.</p>
                          <div class="single-item-content">
                             <div class="single-item-comment-view">
                                 <span><i class="zmdi zmdi-eye"></i>59</span>
                                 <span><i class="zmdi zmdi-comments"></i>19</span>
                             </div>
                             <div class="single-item-rating">
                                 <i class="zmdi zmdi-star"></i>
                                 <i class="zmdi zmdi-star"></i>
                                 <i class="zmdi zmdi-star"></i>
                                 <i class="zmdi zmdi-star"></i>
                                 <i class="zmdi zmdi-star-half"></i>
                             </div>
                          </div>
                      </div>
                      <div class="button-bottom">
                          <a href="#" class="button-default">Ver Mas</a>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 hidden-sm">
                  <div class="single-item">
                      <div class="single-item-image overlay-effect">
                          <a href="#"><img src="{{asset('itaDesign')}}/img/news/3.jpg" alt=""></a>
                      </div>
                      <div class="single-item-text">
                          <h4><a href="#">Agradecimiento a JICA por su permanente cooperación</a></h4>
                          <div class="single-item-text-info">
                              <span>De: <span>Sistemas Informaticos</span></span><br/>
                              <span>Fecha: <span>20.5.15</span></span>
                          </div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariat.</p>
                          <div class="single-item-content">
                             <div class="single-item-comment-view">
                                 <span><i class="zmdi zmdi-eye"></i>59</span>
                                 <span><i class="zmdi zmdi-comments"></i>19</span>
                             </div>
                             <div class="single-item-rating">
                                 <i class="zmdi zmdi-star"></i>
                                 <i class="zmdi zmdi-star"></i>
                                 <i class="zmdi zmdi-star"></i>
                                 <i class="zmdi zmdi-star"></i>
                                 <i class="zmdi zmdi-star-half"></i>
                             </div>
                          </div>
                      </div>
                      <div class="button-bottom">
                          <a href="#" class="button-default">Ver mas</a>
                      </div>
                  </div>
              </div>
              <div class="col-md-12 col-sm-12 text-center">
                  <a href="#" class="button-default button-large">Ver todas las noticias <i class="zmdi zmdi-chevron-right"></i></a>
              </div>
          </div>
      </div>
  </div>
  <!--End of Course Area-->
@endsection
