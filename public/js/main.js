var other = document.getElementById('vestbank-withdraw__other');
var amount = document.querySelector('.vestbank-withdraw__amount--label');

amount.style.display = 'none';

function showAmount() {
    if(!other.checked) {
        console.log("other is not checked");
        amount.style.display = "none";
    } else {
        console.log("other is checked");
        amount.style.display = "block";

    }
    
}
// showAmount();

other.addEventListener('click', showAmount);
