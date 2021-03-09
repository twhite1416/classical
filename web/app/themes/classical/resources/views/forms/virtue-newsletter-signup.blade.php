<div class="row">
  <div class="col magazine-form">
    <div class="row">
      <div class="col">
        <h3>Sign-up today to get your first copy and join 25,000+ teachers, leaders, and friends of K-12 Classical.</h3>
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
          <input class="form-control" name="INTEREST" id="virtue-newsletter-signup-INTEREST" type="text" list="interests">
          <datalist id="interests">
            <option>English & Composition</option>
            <option>Fine Arts</option>            
            <option>History</option>
            <option>Languages, Classical & Modern</option>
            <option>Literature & Poetry</option>
            <option>Mathematics</option>
            <option>Philosophy</option>
            <option>Science</option>
          </datalist>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-outline-primary" role="button">Submit</button>
        </div>
        </x-html-forms>
      </div>
    </div>
  </div>
</div>
