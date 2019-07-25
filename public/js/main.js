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





// variables - vestbank sponsorship
var bankDepositForm = $('#vest-funds__form');
var firstNameInput = $("#input__first-name");
var lastNameInput = $('#input__last-name');
var addressInput = $('#address');
var amountInput = $('#amount');

var firstNameLabel = $('#first-name__label');
var lastNameLabel = $('#last-name__label');
var amountLabel = $('#amount__label');
var addressLabel = $('#address__label');

// variables - sponsor now
var sponsorNowForm = $('#sponsor-now__form');

var snFirstNameInput = $('#sn-input__first-name');
var snLastNameInput = $('#sn-input__last-name');
var snPhoneNumberInput = $('#sn-phone-number');
var snAddressInput = $('#sn-address');
var snUnitsInput = $('#sn-units');
var snAmountInput = $('#sn-amount');

var snFirstNameLabel = $('#sn-first-name__label');
var snLastNameLabel = $('#sn-last-name__label');
var snPhoneNumberLabel = $('#sn-phone-number__label');
var snAddressLabel = $('#sn-address__label');
var snUnitsLabel = $('#sn-units__label');
var snAmountLabel = $('#sn-amount__label');

// errors
var errorFirstName = false;
var errorLastName = false;
var errorEmail = false;
var errorResume = false;
var errorAddress = false;
var errorUnits = false;
var errorPhoneNumber = false;
var errorAmount = false;

// error messages
var errorMessageFirstName = "First name cannot be empty!"
var errorMessageLastName = "Last name cannot be empty!"
var errorMessagePhoneNumber = "Phone number cannot be empty!"
var errorMessageEmail = "Email cannot be empty!"
var errorMessageAmount = "Invalid amount!"
var errorMessageUnits = "Invalid unit!"
var errorMessageAddress = "Address cannot be empty!"


// VESTBANK DEPOSIT FORM VALIDATION
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



// SPONSOR NOW FORM VALIDATION
sponsorNowForm.submit(function(e) {
  e.preventDefault();

  function firstNameErrorCheck () {
    if(snFirstNameInput.val() === "") {
      snFirstNameLabel.html(errorMessageFirstName);
      snFirstNameLabel.addClass('form-input-error');
      errorFirstName = true;
    }else {
      snFirstNameLabel.removeClass('form-input-error');
      snFirstNameLabel.html("First name:");
      errorFirstName = false;
    }
  }

  function lastNameErrorCheck () {
    if(snLastNameInput.val() === "") {
      snLastNameLabel.addClass('form-input-error');
      snLastNameLabel.html(errorMessageLastName);
      errorLastName = true;
    }else {
      snLastNameLabel.removeClass('form-input-error');
      snLastNameLabel.html("Last name:"); 
      errorLastName = false;
    }
  }

  function phoneNumberErrorCheck () {
    if(snPhoneNumberInput.val() === "") {
      snPhoneNumberLabel.addClass('form-input-error');
      snPhoneNumberLabel.html(errorMessagePhoneNumber);
      errorPhoneNumber = true;
    }else {
      snPhoneNumberLabel.removeClass('form-input-error');
      snPhoneNumberLabel.html("Phone number:"); 
      errorPhoneNumber = false;
    }
  }

  function addressErrorCheck () {
    if(snAddressInput.val() === "" ) {
      snAddressLabel.addClass('form-input-error');
      snAddressLabel.html(errorMessageAddress);
      errorAddress = true;
    }else {
      snAddressLabel.removeClass('form-input-error');
      snAddressLabel.html("Address:"); 
      errorAddress = false;
    }
  }

  function unitsErrorCheck () {
    if(snUnitsInput.val() === "" || $.isNumeric(snUnitsInput.val()) === false || snUnitsInput.val() < 1) {
      snUnitsLabel.addClass('form-input-error');
      snUnitsLabel.html(errorMessageUnits);
      errorAmount = true;
    }else {
      snUnitsLabel.removeClass('form-input-error');
      snUnitsLabel.html("Number of units:"); 
      errorAmount = false;
    }
  }

  function amountErrorCheck () {
    if(snAmountInput.val() === "" || $.isNumeric(snAmountInput.val()) === false || snAmountInput.val() < 1) {
      snAmountLabel.addClass('form-input-error');
      snAmountLabel.html(errorMessageAmount);
      errorAmount = true;
    }else {
      snAmountLabel.removeClass('form-input-error');
      snAmountLabel.html("Enter sponsorship amount:"); 
      errorAmount = false;
    }
  }



  function firstNameEditChecker () {
    snFirstNameInput.focusout(function () {
      firstNameErrorCheck ();
    }
  )
  }
    
  function lastNameEditChecker () {
      snLastNameInput.focusout(function () {
        lastNameErrorCheck();
      }
    )
  }

  function phoneNumberEditChecker () {
    snPhoneNumberInput.focusout(function () {
          phoneNumberErrorCheck ();
      }
    )
  }

  function addressEditChecker () {
    snAddressInput.focusout(function () {
          addressErrorCheck ();
      }
    )
  }

  function unitsEditChecker () {
    snUnitsInput.focusout(function () {
          unitsErrorCheck ();
      }
    )
  }

  function amountEditChecker () {
    snAmountInput.focusout(function () {
      amountErrorCheck ();
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

  function phoneNumberChecker () {
    phoneNumberErrorCheck();
    phoneNumberEditChecker();
  }

  function addressChecker () {
    addressErrorCheck();
    addressEditChecker();
  }

  function unitsChecker () {
    unitsErrorCheck();
    unitsEditChecker();
  }

  function amountChecker () {
    amountErrorCheck();
    amountEditChecker();
  }

firstNameChecker();
lastNameChecker();
phoneNumberChecker();
addressChecker ();
unitsChecker ();
amountChecker ();


if(errorFirstName === false && errorLastName === false && errorPhoneNumber === false && errorAddress === false && errorUnits === false && errorAmount === false ) {
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
        $('#sponsor-now__form').submit(); 
      } else {
        swal("Aborted!!", "Your request was not submitted");
      }
    }
  )}

  confirmTransaction(); 
  } else { 
    swal({
      title: "Missing fields!",
      text: "Please complete your profile in the 'Profile' page and try again",
    })
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
    
$('.vestbank-withdraw__form').on('submit', confirmTransaction);
$('.sponsor-farmcycle__form').on('submit', confirmTransaction);



// CUSTOM FILE UPLOAD
var resumeInput = document.getElementById('resume__input');
var coverLetterInput = document.getElementById('cover-letter__input');
var resumeFileInfo = document.getElementById('resume-file-info')
var coverLetterFileInfo = document.getElementById('cover-letter-file-info')
var realInputs = [resumeInput,coverLetterInput];
var customResumeUploadButton = document.getElementById('resume-input__btn')
var customCoverLetterUploadButton = document.getElementById('cover-letter-input__btn')

function hideFileInputElements (item, index, arr) {
  arr[index] = item.style.display = "none";
}

realInputs.forEach(hideFileInputElements);

function simulateRealResumeInputClick () {
  resumeInput.click();
}

function simulateRealCoverLetterInputClick () {
  coverLetterInput.click();
}

function displayResumeFileInfo () {
  resumeInput.addEventListener('change', function () {
    if(this.value) {
      resumeFileInfo.innerHTML = (this.value.split(/\\|\//).pop());
    }
  })
}
displayResumeFileInfo();

function displayCoverLetterFileInfo () {
  coverLetterInput.addEventListener('change', function () {
    if(this.value) {
      coverLetterFileInfo.innerHTML = (this.value.split(/\\|\//).pop());
    }
  })
}
displayCoverLetterFileInfo();


customResumeUploadButton.addEventListener('click', simulateRealResumeInputClick);
customCoverLetterUploadButton.addEventListener('click', simulateRealCoverLetterInputClick);



// CAREERS APPLICATION FORM VALIDATION
// variables
var careerApplicationForm = $('#careers-application__form');
var applicantFirstName = $('#first-name__input');
var applicantLastName = $('#last-name__input');
var applicantEmail = $('#email__input');
var applicantResume = $('#resume__input');

var applicantEmailLabel = $('#email__label');
var resumeLabel = $('#resume__label');


careerApplicationForm.submit(function(e) {
  e.preventDefault();

  
 
 

  function applicantFirstNameChecker () {
    function applicantFirstNameErrorCheck () {
      if(applicantFirstName.val() === "") {
        firstNameLabel.addClass('form-input-error');
        errorFirstName = true;
      }else {
        firstNameLabel.removeClass('form-input-error');
        errorFirstName = false;
      }
    }
    applicantFirstNameErrorCheck();
  }

  function applicantLastNameChecker () {
    function applicantLastNameErrorCheck () {
      if(applicantLastName.val() === "") {
        lastNameLabel.addClass('form-input-error');
        errorLastName = true;
      }else {
        lastNameLabel.removeClass('form-input-error');
        errorLastName = false;
      }
    }
    applicantLastNameErrorCheck ();
  }

  function emailChecker () {
    function applicantEmailErrorCheck () {
      if(applicantEmail.val() === "" ) {
        applicantEmailLabel.addClass('form-input-error');
        errorEmail = true;
      }else {
        applicantEmailLabel.removeClass('form-input-error');
        errorEmail = false;
      }
    }
    applicantEmailErrorCheck ();
  }

  function resumeChecker () {
    function resumeErrorCheck () {
      if(!applicantResume.val()) {
        resumeLabel.addClass('form-input-error');
        errorResume = true;
      }else {
        resumeLabel.removeClass('form-input-error');
        errorResume = false;
      }
    }
    resumeErrorCheck ();
  }

applicantFirstNameChecker ();
applicantLastNameChecker ();
emailChecker ();
resumeChecker (); 


if(errorFirstName === false && errorLastName === false && errorEmail === false && errorResume === false ) {
  function confirmTransaction (e) { 
    swal({
      title:"Confirmation!",
      text: "Are you sure you want to submit this application",
      buttons: true,
      dangerMode: true,
    })
    .then((value) => {
      if(value === true) {
        swal({
          title: "Success!",
          text: "Your application has been successfully submitted",
          icon: "success",
        })
        $('#careers-application__form').submit(); 
      } else {
        swal("Aborted!!", "Your application was not submitted");
      }
    }
  )}

  confirmTransaction(); 
  } 
  else { 
    swal({
      title: "Missing fields!",
      text: "Please fill all required fields and try again.",
    })
  }
}) ;