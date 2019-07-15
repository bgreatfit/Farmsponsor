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



function confirmTransaction (e) { 
 var checker = e.preventDefault();
 $(this).bind(checker);
    swal({
        title:"Confirmation!",
        text: "Are you sure you want to proceed with this transaction",
        buttons: true,
        dangerMode: true,
    })
    .then((value) => {
      if(value === true) {
        $(this).unbind(checker);
        $(this).submit();
        swal({
            title: "Success!",
            text: "Your request has been successfully submitted",
            icon: "success",
        })
      } else {
        swal("Aborted!!", "Your request was not submitted");
      }
    }
  )}




    
$('#vest-funds__form').on('submit', confirmTransaction);      
$('#sponsor-now__form').on('submit', confirmTransaction);      
$('.vestbank-withdraw__form').on('submit', confirmTransaction);
$('.sponsor-farmcycle__form').on('submit', confirmTransaction);

var bankTransfer = document.querySelector(".deposit-method");
function suspendDeposit () {
  swal({
    title: "Transfers Suspended!",
    text: "All funds transfers have been temprarily suspended due to the ongoing sponsoring windows, vestbank funding will be resumed shortly."
  })
}


