<form action="{{route('funding.searchname')}}" method="GET" class="active-cyan-4 searchbar__form">
    <div class="input-group mb-3">
        <input type="text" class="form-control searchbar__input" placeholder="Enter name" name="value" value="{{$searchNameValue ?? ' '}}">
        <div class="input-group-append searchbar__button-box">
            <button class="btn btn-secondary searchbar__button" type="submit">Search</button>
            <a class="btn btn-warning searchbar__button" href="{{route('admin.bankdeposits')}}">Clear Search</a>
        </div>
    </div>
</form>
