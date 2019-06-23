$(document).ready(function() {
    $('.vestbank-withdraw__form--input').click(function() {
        $WithdrawalOption = $(this).val();
        if ($WithdrawalOption != 'other') {
            console.log($WithdrawalOption);
            console.log($('.others-hide'));
            $('.others-hide').addClass('hide-content');
            return;
        }
        $('.others-hide').removeClass('hide-content');
    });
});




