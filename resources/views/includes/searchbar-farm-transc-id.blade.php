<form action="{{route('farms.searchtransactionid')}}" method="GET" class="active-cyan-4 searchbar__form">
        <div class="input-group mb-3">
        <div class="input-group-prepend searchbar__button-box">
            <button class="btn btn-secondary searchbar__button" type="submit">Search</button>
        </div>
            <input type="hidden" name="farm_id" value="{{$farm->id}}">
            <input type="text" class="form-control searchbar__input" placeholder="Enter transaction id" aria-label="transaction id searchbar" aria-describedby="basic-addon1" name="value" value="{{$transactionSearchValue ?? ' '}}">
    </div>
</form>
      