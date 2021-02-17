<div class="col-12 col-md-6 col-lg-4">
  <div class="card advisor-card">
    <div class="card-body">
      
      <img src="@field('image')" class="advisor-img rounded-circle mx-auto d-block" alt="@title">
      <h3 class="card-title">@title</h3>
      <p>
        <strong>@field('department')</strong><br>
        <strong>@field('location')</strong>
      </p>
      <p class="card-text">{{ App\trunc(get_field('short_description'))}} <a data-toggle="modal" data-target="#modal-{{ get_the_ID() }}" style="white-space: nowrap" href="@permalink">Read more</a></p>
      <ul class="list-unstyled advisor-links">
        @fields('articles')
        <li>
          <a href="@permalink(get_sub_field('article'))">@title(get_sub_field('article'))</a>
        </li>
        @endfields
      </ul>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-{{ get_the_ID() }}" tabindex="-1" aria-labelledby="modal-{{ get_the_ID() }}">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        @content
      </div>
    </div>
  </div>
</div>
