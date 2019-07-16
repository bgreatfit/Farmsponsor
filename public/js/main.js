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
var errorMessageAmount = "Invalid amount"
var errorMessageAddress = "Address cannot be empty!"

// function firstNameEditChecker () {
//   firstNameInput.focusout(function () {
//     if(firstNameInput.val() === "") {
//       firstNameLabel.html(errorMessageFirstName);
//       errorFirstName = true;
//     }else {
//       firstNameLabel.html("First name:");
//       errorFirstName = false;
//     }
//   }
// )
// }

// function lastNameEditChecker () {
//   lastNameInput.focusout(function () {
//     if(lastNameInput.val() === "") {
//       lastNameLabel.addClass('form-input-error');
//       lastNameLabel.html(errorMessageLastName);
//       errorLastName = true;
//     }else {
//       lastNameLabel.addClass('form-input-success');
//       lastNameLabel.html("Last name:"); 
//       errorLastName = false;
//     }
//   }
// )
// }

// function amountEditChecker () {
//   amountInput.focusout(function () {
//     if(amountInput.val() === "" || $.isNumeric(amountInput.val()) === false || amountInput.val() < 1) {
//       amountLabel.html(errorMessageAmount);
//       errorAmount = true;
//     }else {
//       amountLabel.html("Enter vesting amount:"); 
//       errorAmount = false;
//     }
//   }
// )
// }

// function addressEditChecker () {
//   addressInput.focusout(function () {
//     if(addressInput.val() === "" ) {
//       addressLabel.html(errorMessageAddress);
//       errorAddress = true;
//     }else {
//       addressLabel.html("Address:"); 
//       errorAddress = false;
//     }
//   }
// )
// }

// firstNameEditChecker();
// lastNameEditChecker();
// addressEditChecker();
// amountEditChecker();

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
    amountLabel.html("Amount:"); 
    errorAmount = false;
  }
}





  function firstNameEditChecker () {
    firstNameInput.focusout(function () {
      // if(firstNameInput.val() === "") {
      //   firstNameLabel.html(errorMessageFirstName);
      //   errorFirstName = true;
      // }else {
      //   firstNameLabel.html("First name:");
      //   errorFirstName = false;
      // }
      firstNameErrorCheck ();
    }
  )
  }
  
  function lastNameEditChecker () {
    lastNameInput.focusout(function () {
      // if(lastNameInput.val() === "") {
      //   lastNameLabel.addClass('form-input-error');
      //   lastNameLabel.html(errorMessageLastName);
      //   errorLastName = true;
      // }else {
      //   lastNameLabel.removeClass('form-input-error');
      //   lastNameLabel.html("Last name:"); 
      //   errorLastName = false;
      // }
      lastNameErrorCheck();
    }
  )
}


function amountEditChecker () {
  amountInput.focusout(function () {
    // if(amountInput.val() === "" || $.isNumeric(amountInput.val()) === false || amountInput.val() < 1) {
    //   amountLabel.html(errorMessageAmount);
    //   errorAmount = true;
    // }else {
    //   amountLabel.html("Enter vesting amount:"); 
    //   errorAmount = false;
    // }
    amountErrorCheck ();
  }
)
}
  function addressEditChecker () {
    addressInput.focusout(function () {
      // if(addressInput.val() === "" ) {
        //   addressLabel.html(errorMessageAddress);
        //   errorAddress = true;
        // }else {
          //   addressLabel.html("Address:"); 
          //   errorAddress = false;
          // }
          addressErrorCheck ();
        }
        )
  }
  
  firstNameEditChecker();
  lastNameEditChecker();
  addressEditChecker();
  amountEditChecker();






 function firstNameChecker () {
   if(firstNameInput.val() === ""){
     firstNameLabel.html("First name cannot be empty"); 
     errorFirstName = true;
   }else {
     firstNameLabel.html("First name:");
   }
  }
  firstNameChecker();

  function lastNameChecker () {
   if(lastNameInput.val() === ""){
     lastNameLabel.html("Last name cannot be empty!"); 
     errorLastName = true;
   }else {
     lastNameLabel.html("Last name:");
   }
  }
  lastNameChecker();

  function addressChecker () {
    if(addressInput.val() === "" ) {
      addressLabel.html("Address cannot be empty!"); 
      errorAddress = true;
    }else {
      addressLabel.html("Address:");
    }
   }
   addressChecker ();
  
  function amountChecker () {
    if(amountInput.val() === "" || $.isNumeric(amountInput.val()) === false || amountInput.val() < 1) {
      amountLabel.html("Invalid amount:"); 
      errorAmount =true;
    }else {
      amountLabel.html("Enter amount:");
    }
   }
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












// function confirmTransaction (e) { 
//  var checker = e.preventDefault();
//  $(this).bind(checker);
//     swal({
//         title:"Confirmation!",
//         text: "Are you sure you want to proceed with this transaction",
//         buttons: true,
//         dangerMode: true,
//     })
//     .then((value) => {
//       if(value === true) {
//         $(this).unbind(checker);
//         $(this).submit();
//         swal({
//             title: "Success!",
//             text: "Your request has been successfully submitted",
//             icon: "success",
//         })
//       } else {
//         swal("Aborted!!", "Your request was not submitted");
//       }
//     }
//   )}

    
// $('#vest-funds__form').on('submit', confirmTransaction);      
// $('#sponsor-now__form').on('submit', confirmTransaction);      
// $('.vestbank-withdraw__form').on('submit', confirmTransaction);
// $('.sponsor-farmcycle__form').on('submit', confirmTransaction);

