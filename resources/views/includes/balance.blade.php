{{-- <div class="balance dropdown mt-3">
    <a href="#" class="balance__text dropdown-toggle" role="button" id="dropdownMenu1" 
    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        0.00NGN 
    </a>
    <div  class="balance__dropdown dropdown-menu dropdown-menu-right" aria-labelledby="DropdownMenu1">
    <a href="#" data-toggle="modal" data-target="#vestbank-withdraw" role="button" class="dropdown-item balance__dropdown--link">Withdraw</a>
        <a href="{{url('/dashboard/deposit')}}" class="dropdown-item balance__dropdown--link">Deposit</a>
    </div>
</div>

<div class="vestbank-withdraw__content">
    <div class="modal fade" id="vestbank-withdraw" tabindex="-1" role="dialog" aria-labelledby="vestbankwithdrawTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title heading__secondary text-center" id="exampleModalLongTitle">Withdraw Funds</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">X</span>
                </button>
                </div>
                <div class="modal-body">
                    <p class="vestbankwithdraw__form--text mb-3 text-center">How much do would you like to withdraw?</p>
                    <form action="" class="vestbank-withdraw__form">
                        @csrf
                        <div class="form-check form-check-inline">
                            <label for="vestbank-withdraw__capital" class="radio-inline">
                                <input type="radio" name="option" value="capital" id="vestbank-withdraw__capital" class="vestbank-withdraw__form--input "> Capital
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label for="vestbank-withdraw__interest" class="radio-inline">
                                <input type="radio" name="option" value="interest" id="vestbank-withdraw__interest" class="vestbank-withdraw__form--input"> Interest
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label for="vestbank-withdraw__all" class="radio-inline">
                                <input type="radio" name="option" value="all" id="vestbank-withdraw__all" class="vestbank-withdraw__form--input"> All
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label for="vestbank-withdraw__other" class="radio-inline">
                                <input type="radio" name="option" value="other" id="vestbank-withdraw__other" class="vestbank-withdraw__form--input"> Other
                            </label>
                        </div>
                        <div class="form-group mt-3">
                            <input type="number" name="withdrawAmount" id="vestbank-withdraw__amount" 
                            class="form-control vestbank-withdraw__form--input {{ $errors->has('withdrawAmount') ? ' is-invalid' : '' }}">
                            <label for="vestbank-withdraw__amount" class="vestbank-withdraw__amount--label">
                                <small>Specify amount</small>
                            </label>
                            @if ($errors->has('withdrawAmount'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('withdrawAmount') }}</strong>
                                </span>
                            @endif
                            
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-secondary vestbankwithdraw__btn btn-lg" data-dismiss="modal">Close</button>
                            <button type="submit" class="vestbank-withdraw__btn btn btn-lg btn-success">Make withdrawal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
