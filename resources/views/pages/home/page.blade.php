@extends('template')
@section('title') Web Design Company in Abuja Nigeria @endsection
@section('content')
  @include('pages.home.banner')
  @include('pages.home.domain-search')

<section class="plans-one"> <!-- FIRST PLAN SEECTION -->
    <div class="container"> <!-- CONTAINER -->
        <span class="first-cirl wow fadeInUp">
          <b>
          <em class="hockup-mo-tootl">
          <i class="fa fa-fire" aria-hidden="true"></i>
          <label>fast server</label>
          <small>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small>
          </em>
          </b>
          </span>
        <span class="second-cirl wow fadeInUp">
          <b>
          <em class="hockup-mo-tootl">
          <i class="fa fa-hdd-o" aria-hidden="true"></i>
          <label>data backup</label>
          <small>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small>
          <span><u class="fa fa-check-circle" aria-hidden="true"></u>protect your filles all days</span>
        <span><u class="fa fa-check-circle" aria-hidden="true"></u>backup your doc</span>
        </em>
        </b>
        </span>
        <span class="third-cirl wow fadeInUp">
          <b>
          <em class="hockup-mo-tootl">
          <i class="fa fa-heart-o" aria-hidden="true"></i>
          <label>data migration</label>
          </em>
          </b>
          </span>

        <div class="container"> <!-- CONTAINER -->
            <div class="row justify-content-left bckbgpadd"> <!-- ROW -->
                <div class="col-4 plansshadow">
                    <ul class="nav" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="planoneone-tab" data-toggle="tab" href="#planoneone" role="tab" aria-controls="planoneone" aria-expanded="true">extended <span>$12<b>monthly</b></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="planonetow-tab" data-toggle="tab" href="#planonetow" role="tab" aria-controls="planonetow">pro <span>$19<b>monthly</b></span></a>
                        </li>
                    </ul>

                    <div class="tab-content" id="hosttab">
                        <div class="tab-pane fade show active" id="planoneone" role="tabpanel" aria-labelledby="planoneone-tab"><!-- FIST PLAN -->
                            <h5>included :</h5>
                            <span class="includedpans"><b>10gb space</b></span>
                            <span class="includedpans"><b>1000gb bandwith</b></span>
                            <ul class="morinfoul">
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i> free support all days</li>
                                <li><i class="fa fa-times-circle" aria-hidden="true"></i> free domain included</li>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i> free wordpress setup</li>
                            </ul>
                            <div class="pln-price">
                                <span>$80.99</span> yarly TTC
                            </div>
                            <a href="#">add to cart</a>
                        </div><!-- END FIST PLAN -->

                        <div class="tab-pane fade" id="planonetow" role="tabpanel" aria-labelledby="planonetow-tab"><!-- SECOND PLAN -->
                            <h5>included :</h5>
                            <span class="includedpans"><b>10gb space</b></span>
                            <span class="includedpans"><b>1000gb bandwith</b></span>
                            <ul class="morinfoul">
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i> free support all days</li>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i> free domain included</li>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i> free wordpress setup</li>
                            </ul>
                            <div class="pln-price">
                                <span>$92.99</span> yarly TTC
                            </div>
                            <a href="#">add to cart</a>
                        </div><!-- END SECOND PLAN -->

                    </div>
                </div>

            </div><!-- END ROW -->
            <p class="plans-ss-bottom"><img src="img/plans/box.png" alt="" /> <span>you will fell safe !</span> free support with profitionel team</p>
        </div><!-- END CONAINER -->
    </div><!-- END CONATINER -->
</section> <!-- END FIRST PLAN SEECTION -->
  @include('pages.home.why-us')
  <!-- Newsletter Section -->
  <div class="index-ads">
      <div class="container">
          <p><span>Get latest news and updates about our offers and deals right in your inbox. </span><a href="#">Subscribe Newsletter</a></p>

      </div>
  </div>
  @include('pages.home.testimonials')
@endsection
