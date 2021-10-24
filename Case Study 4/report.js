function generateDollarByProduct() {
    if (document.getElementById('generateDollar').checked) {
        document.getElementById('generateDollar').checked=false;
        document.location.href="dollarByProduct.php";
    }
}

function generateQuantityByCategory() {
    if (document.getElementById('generateQuantity').checked) {
        document.getElementById('generateQuantity').checked=false;
        document.location.href="quantityByCategory.php";
    }
}