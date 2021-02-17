@query([
  'post_type' => 'virtue_magazine',
  'post_status' => 'publish',
  'posts_per_page' => -1
])
<div class="magazine-form">
  <select class="form-control" id="virtue-selector">
    <option>Previous Issues</option>
  @posts
    <option value="@permalink">@field('issue_number') @field('issue_title')</option>
  @endposts
  </select>
</div>
