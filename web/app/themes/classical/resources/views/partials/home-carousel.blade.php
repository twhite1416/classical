@hasfield('carousel_item') 
<div id="home-carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
  <div class="carousel-inner d-flex align-items-stretch">
    @fields('carousel_item')
    <div class="carousel-item" style="background-image: url(@sub('background_image'))">
      <div class="container">
        <div class="row @sub('content_box_position')">
          <div class="col-lg-5 col-12 col-box">
            <div class="position-box @sub('content_box_position')">
              <div class="full-header-box @sub('content_box_background_color') space">
                @hassub('logo_image')
                  <img class="img-fluid pb-3" src="@sub('logo_image')" />
                @endsub
                <h1>@sub('title')</h1>
                <p>@sub('content')</p>
                
                @hassub('link')
                  <a href="@sub('link')" class="btn btn-outline-white" role="button" target="_blank">@sub('button_text')</a>
                @endsub

                @hassub('internal_link')
                  <a href="@sub('internal_link')" class="btn btn-outline-white" role="button">@sub('button_text')</a>
                @endsub

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endfields
  </div>
  <a class="carousel-control-prev" href="#home-carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#home-carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@endfield
