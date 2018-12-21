<div class="filter-page">
  <div class="container">

    <a class="filter-page__btn" onclick="openFilter()" data-toggle="collapse" role="button" data-target="#select-list"><h4>Sort by <span>All from A to Z</span></h4></a>

  </div>

    <form id="select-list" class="form form--select collapse" action="index.html" method="post">
      <div class="container">

        <ul>
          <li>
            <input type="radio" name="category" value="1" id="1">
            <label for="1">Category 1</label>
          </li>
          <li>
            <input type="radio" name="category" value="2" id="2">
            <label for="2">Category 2</label>
          </li>
          <li>
            <input type="radio" name="category" value="3" id="3">
            <label for="3">Category 3</label>
          </li>
        </ul>

        <button type="button" class="btn centered">Clear all</button>

      </div>
    </form>

</div>


@push('scripts')
<script>


function openFilter() {
   $(".wrapper").toggleClass("active");
}
</script>
@endpush
