<div class="row">
  <div class="col magazine-form">
    <div class="row">
      <div class="col">
        <h3>Sign-up today to join our community and receive your first copy.</h3>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <x-html-forms :form="$form" class="my-form">
        <div class="form-group">
          <label for="virtue-newsletter-signup-NAME">Name</label>
          <input class="form-control" type="text" name="NAME" id="virtue-newsletter-signup-NAME" />
        </div>
        <div class="form-group">
          <label for="virtue-newsletter-signup-EMAIL">Email (required)</label>
          <input class="form-control" type="email" name="EMAIL" id="virtue-newsletter-signup-EMAIL" required/>
        </div>
        <div class="form-group">
          <label for="virtue-newsletter-signup-ADDRESS">Address</label>
          <textarea  class="form-control" rows="2" name="ADDRESS" id="virtue-newsletter-signup-ADDRESS"></textarea>
        </div>
        <div class="form-group">
          <label for="virtue-newsletter-signup-INTEREST">Area of Interest</label>
          <select class="form-control" name="INTEREST" id="virtue-newsletter-signup-INTEREST">
            <option>One</option>
            <option>Two</option>
          </select>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-outline-primary" role="button">Submit</button>
        </div>
        </x-html-forms>
      </div>
    </div>
  </div>
</div>
