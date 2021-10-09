/*Name*/

function validateName() {
    let nameInput = document.getElementById("name").value;
    let tst = tst_name(nameInput);
    
    if (tst) {
      console.log("Input is ok");
    } 
    else {
      alert("Pls enter alphabets only");
    }
}

function tst_name(namee) {
    var ok = namee.search(/^[a-zA-Z ]+$/);
     
    if (ok == 0)
        return true;
    else
        return false;
}

/*E-mail*/

function validateEmail() {
    let emailInput = document.getElementById("email").value;

    if (!emailInput.includes("@"))
        alert("Pls enter a correct email")

    emailarray = emailInput.split('@');
    let result1 = tst_email(emailarray[0]);
    let result2 = tst_email2(emailarray[1]);
    
    if (result1 && result2) {
      console.log("Input is ok");
    } 
    else {
      alert("Pls enter a correct email");
    }
}

function tst_email(user) {
    var ok = user.search(/^[a-zA-Z-.]+$/);
     
    if (ok == 0) {
        console.log('correct username');
        return true; }
    else {
        console.log('username incorrect');
        return false; }
}

function tst_email2(domain) {
    var ok = domain.search(/^[a-zA-Z_0-9.]+$/)
    if (ok == 0) {
        list = domain.split(".")

        if (list.length > 4 || list.length < 2 || list.includes("")) {
            console.log('extension incorrect');
            return false; }

        if (list[list.length-1].length > 3 || list[list.length-1].length < 2) {
            console.log('last extension incorrect');
            return false; }

        else {
            console.log('correct domain');
            return true; }
    }
    else
        return false;
}

/*Date*/

function setDate() {
    let today = new Date();
    let tmr = new Date();
    tmr.setDate(today.getDate()+1);
    var tzoffset = (new Date()).getTimezoneOffset() * 60000;
    tmr = (new Date(tmr - tzoffset)).toISOString().slice(0, 10)
    console.log(tmr);
    dateInput = document.getElementById("calendar");
    dateInput.min = tmr;
}

setDate()