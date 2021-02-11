<div class="col-12 col-md-6 col-lg-4">
  <div class="card advisor-card">
    <div class="card-body">
      
      <img src="@field('image')" class="advisor-img rounded-circle mx-auto d-block" alt="@title">
      <h3 class="card-title">@title</h3>
      <p>
        <strong>@field('department')</strong><br>
        <strong>@field('location')</strong>
      </p>
      <p class="card-text">@field('short_description')</p>
      <ul class="list-unstyled advisor-links">
        <li>
          <a href="@permalink">Full Bio</a>
        </li>
        @fields('articles')
        <li>
          <a href="@permalink(get_sub_field('article'))">@title(get_sub_field('article'))</a>
        </li>
        @endfields
      </ul>
    </div>
  </div>
</div>
