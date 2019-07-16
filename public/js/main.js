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





// FORM VALIDATION
// variables
var bankDepositForm = $('#vest-funds__form');
var firstNameInput = $("#input__first-name");
var lastNameInput = $('#input__last-name');
var addressInput = $('#address');
var amountInput = $('#amount');
var firstNameLabel = $('#first-name__label');
var lastNameLabel = $('#last-name__label');
var amountLabel = $('#amount__label');
var addressLabel = $('#address__label');

// errors
var errorFirstName = false;
var errorLastName = false;
var errorAddress = false;
var errorAmount = false;

// error messages
var errorMessageFirstName = "First name cannot be empty!"
var errorMessageLastName = "Last name cannot be empty!"
var errorMessageAmount = "Invalid amount!"
var errorMessageAddress = "Address cannot be empty!"


bankDepositForm.submit(function(e) {
  e.preventDefault();

  function firstNameErrorCheck () {
    if(firstNameInput.val() === "") {
      firstNameLabel.html(errorMessageFirstName);
      firstNameLabel.addClass('form-input-error');
      errorFirstName = true;
    }else {
      firstNameLabel.removeClass('form-input-error');
      firstNameLabel.html("First name:");
      errorFirstName = false;
    }
  }

  function lastNameErrorCheck () {
    if(lastNameInput.val() === "") {
      lastNameLabel.addClass('form-input-error');
      lastNameLabel.html(errorMessageLastName);
      errorLastName = true;
    }else {
      lastNameLabel.removeClass('form-input-error');
      lastNameLabel.html("Last name:"); 
      errorLastName = false;
    }
  }

  function addressErrorCheck () {
    if(addressInput.val() === "" ) {
      addressLabel.addClass('form-input-error');
      addressLabel.html(errorMessageAddress);
      errorAddress = true;
    }else {
      addressLabel.removeClass('form-input-error');
      addressLabel.html("Address:"); 
      errorAddress = false;
    }
  }

  function amountErrorCheck () {
    if(amountInput.val() === "" || $.isNumeric(amountInput.val()) === false || amountInput.val() < 1) {
      amountLabel.addClass('form-input-error');
      amountLabel.html(errorMessageAmount);
      errorAmount = true;
    }else {
      amountLabel.removeClass('form-input-error');
      amountLabel.html("Enter amount:"); 
      errorAmount = false;
    }
  }



  function firstNameEditChecker () {
    firstNameInput.focusout(function () {
      firstNameErrorCheck ();
    }
  )
  }
    
  function lastNameEditChecker () {
      lastNameInput.focusout(function () {
        lastNameErrorCheck();
      }
    )
  }

  function amountEditChecker () {
    amountInput.focusout(function () {
      amountErrorCheck ();
    }
  )
  }

  function addressEditChecker () {
    addressInput.focusout(function () {
          addressErrorCheck ();
      }
    )
  }



  function firstNameChecker () {
    firstNameErrorCheck();
    firstNameEditChecker();
  }


  function lastNameChecker () {
    lastNameErrorCheck();
    lastNameEditChecker();
  }


  function addressChecker () {
    addressErrorCheck();
    addressEditChecker();
  }


  function amountChecker () {
    amountErrorCheck();
    amountEditChecker();
  }

firstNameChecker();
lastNameChecker();
addressChecker ();
amountChecker ();


if(errorFirstName === false && errorLastName === false && errorAddress === false && errorAmount === false ) {
  function confirmTransaction (e) { 
    swal({
      title:"Confirmation!",
      text: "Are you sure you want to proceed with this transaction",
      buttons: true,
      dangerMode: true,
    })
    .then((value) => {
      if(value === true) {
        swal({
          title: "Success!",
          text: "Your request has been successfully submitted",
          icon: "success",
        })
        $('#vest-funds__form').submit(); 
      } else {
        swal("Aborted!!", "Your request was not submitted");
      }
    }
  )}

  confirmTransaction(); 
  } else { 
    addressInput.html(errorMessageAddress);
  }
}) ;












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

    
$('#sponsor-now__form').on('submit', confirmTransaction);      
$('.vestbank-withdraw__form').on('submit', confirmTransaction);
$('.sponsor-farmcycle__form').on('submit', confirmTransaction);

