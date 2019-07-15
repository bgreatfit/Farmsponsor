<form action="{{route('farms.search')}}" method="GET" class="active-cyan-4 searchbar__form">
  <div class="input-group mb-3">
    <input type="hidden" name="farm_id" value="{{$farm->id}}">
    <input type="text" class="form-control searchbar__input" placeholder="Search" name="value">
    <div class="input-group-append searchbar__button-box">
      <button class="btn btn-secondary searchbar__button" type="submit">Search</button>
    </div>
  </div>
</form>
