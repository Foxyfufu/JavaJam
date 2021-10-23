/*Just Java*/
function computeJava() {
    let javaQty = document.getElementById("javaQty").value;
    console.log(javaQty)
    
if (test_alpha(javaQty)) {
    console.log(javaQty);
    let javaPrice = javaQty * 2.0;
    document.getElementById("javaPrice").innerHTML = javaPrice;
    computeTotal(); 
}
else {
    alert("Pls enter positive numbers only"); }
}

/*Cafe au Lait*/
function computeCafe() {
    let cafeQty = document.getElementById("cafeQty").value;
    let cafePrice = 0;
        if (test_alpha(cafeQty) || cafeQty=="") {
            if (document.getElementById("singleCafe").checked) {
                cafePrice = cafeQty * 2.0; }
            else if (document.getElementById("doubleCafe").checked) {
                cafePrice = cafeQty * 3.0; }
            document.getElementById("cafePrice").innerHTML = cafePrice;
            computeTotal(); 
        }
        else 
            alert("Pls enter positive numbers only");
}

/*Iced Cappucino*/
function computeCappu() {
    let cappuQty = document.getElementById("cappuQty").value;
    let cappuPrice = 0;
    if (test_alpha(cappuQty) || cappuQty=="") {
        if (document.getElementById("singleCappu").checked) {
            cappuPrice = cappuQty * 4.75; }
        else if (document.getElementById("doubleCappu").checked) {
            cappuPrice = cappuQty * 5.75; }
        document.getElementById("cappuPrice").innerHTML = cappuPrice;
        computeTotal(); 
    }
    else {
        alert("Pls enter positive numbers only"); }
}

/*Total*/
function computeTotal() {
    let total = 0
    let javaPrice = Number(document.getElementById("javaPrice").innerHTML);
    let cafePrice = Number(document.getElementById("cafePrice").innerHTML);
    let cappuPrice = Number(document.getElementById("cappuPrice").innerHTML);
    if (!javaPrice) {
        javaPrice = 0; }
    if (!cafePrice) {
        cafePrice = 0; }
    if (!cappuPrice) {
        cappuPrice = 0; }
    total = javaPrice + cafePrice + cappuPrice;
    document.getElementById("total").innerHTML = total;
}

/*For All*/
function test_alpha(quantity) {
    return /^[0-9]+$/.test(quantity); 
}
