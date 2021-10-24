/*FRONT END*/

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
        alert("Pls enter positive numbers only"); 
    }
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
    else {
        alert("Pls enter positive numbers only");
    }
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
        alert("Pls enter positive numbers only"); 
    }
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

/*BACK END*/

/*Just Java*/
function editJava() {
    if (document.getElementById('javaRadio').checked) {
        document.getElementById('javaForm').innerHTML=`<label>New Price: </label>
        <input type="number" size="3" min="0" step="0.01" name="updatedJavaPrice">`        
    } 
    else {
    document.getElementById('javaForm').innerHTML='';
    }
}

/*Cafe au Lait*/
function editCafe(){
    if (document.getElementById('cafeRadio').checked) {
      document.getElementById('cafeForm').innerHTML=`<label>New Price (Single Shot): </label>
      <input type="number" size="3" min="0" step="0.01" name="updatedCafeSinglePrice">
      <label>New Price (Double Shot): </label>
      <input type="number" size="3" min="0" step="0.01" name="updatedCafeDoublePrice">`        
    } 
    else {
      document.getElementById('cafeForm').innerHTML='';
    }
}

/*Iced Cappucino*/
function editCappu(){
    if (document.getElementById('cappuRadio').checked) {
        document.getElementById('cappuForm').innerHTML=`<label>New Price (Single Shot): </label>
        <input type="number" size="3" min="0" step="0.01" name="updatedCappuSinglePrice">
        <label>New Price (Double Shot): </label>
        <input type="number" size="3" min="0" step="0.01" name="updatedCappuDoublePrice">`        
    } 
    else {
        document.getElementById('cappuForm').innerHTML='';
    }
}