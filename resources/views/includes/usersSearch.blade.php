<form action="{{route('users.searchname')}}" method="GET" class="active-cyan-4 searchbar__form">
    <div class="input-group mb-3">
        <input type="text" class="form-control searchbar__input" placeholder="Enter name" name="value" value="{{$searchValue ?? ' '}}">
        <div class="input-group-append searchbar__button-box">
            <button class="btn btn-secondary searchbar__button" type="submit">Search</button>
            <a class="btn btn-warning searchbar__button" href="{{route('admin.users')}}">Clear Search</a>
        </div>
    </div>
</form>