var capital = document.getElementById('vestbank-withdraw__capital');
var interest = document.getElementById('vestbank-withdraw__interest');
var all = document.getElementById('vestbank-withdraw__all');
var other = document.getElementById('vestbank-withdraw__other');

var amount = document.querySelector('.vestbank-withdraw__amount--label');

// amount.style.display = 'none';

var choice = " ";

function showAmount() {
    if(!other.checked) {
        console.log("other is not checked");
        // amount.style.display = "none";
    } else {
        console.log("other is checked");
        // amount.style.display = "block";

    }

    // switch (choice){
    //     case "capital":
    //         capital.checked;
    //         amount.style.display = "none";
    //     break;
    //     case "interest":
    //         interest.checked;
    //         amount.style.display = "none";
    //     break;
    //     case "all":
    //         all.checked;
    //         amount.style.display = "none";
    //     break;
    //     case "other":
    //         other.checked;
    //         amount.style.display = "block";
    //     break;
    // }

}

other.addEventListener('click', showAmount);
