$(document).ready(function() {
    var quantityInput = $('#quantity');
    var pricePerPerson = $('#pricePerPerson').text();
    var formTotalPrice = $('#formTotalPrice');

    setTotalPrice(Number(pricePerPerson) * Number(quantityInput.val()));

    quantityInput.on('mouseup keyup', function() {
        var quantity = quantityInput.val();
        setTotalPrice(Number(pricePerPerson) * Number(quantity));
    });

    function setTotalPrice(price) {
        var totalPriceHolder = $('#totalPrice');
        totalPriceHolder.text(price);
        formTotalPrice.val(price);
    }
});
