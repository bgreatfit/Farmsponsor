<div class="balance dropdown mt-3">
    <a href="#" class="balance__text dropdown-toggle" role="button" id="dropdownMenu1" 
    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        0.00NGN 
    </a>
    <div  class="balance__dropdown dropdown-menu dropdown-menu-right" aria-labelledby="DropdownMenu1">
    <a href="{{url('/dashboard/payout')}}" class="dropdown-item balance__dropdown--link">Payout</a>
        <a href="{{url('/dashboard/deposit')}}" class="dropdown-item balance__dropdown--link">Deposit</a>
    </div>
</div>
