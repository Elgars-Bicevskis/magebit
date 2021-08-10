
// check if funcetions return value is true and proceed to success page
function MainFunction(){

var url = "http://localhost/magebit/Task2/congrats.html";

 if(!checkBoxVal() || !inputbase.oninput  ){
     return false;
 }
  window.location.href = url;
  }


// check if checkbox is checked
function checkBoxVal(){
  var errorElement = document.getElementById('errors')
  errorElement.innerHTML = "";
    var toscheck = document.getElementById('chckbx');
    if (toscheck.checked ==true) {
           return true;
       } else {

           errorElement.innerHTML = 'You must accept the terms and conditions';
           errorElement.style.visibility = 'visible';
       }
}




// function runs on page load
window.onload = function() {


// get elements
var btn1 = document.getElementById("button1");
var inputbase = document.getElementById("inputbase");
var errorElement = document.getElementById('errors')
errorElement.innerHTML = "";
btn1.style.visibility = 'hidden';

// function on input change
  inputbase.oninput = function emailValid(){

// get elements
    var mail = document.getElementById('inputbase').value;
    var form = document.getElementById('mainform')
    var email = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
    var emailCo = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[coCO]{2}$/;


// conditions for email validation
    if (mail === "" ){
      errorElement.innerHTML = 'Email is required';
      errorElement.style.visibility = 'visible';
      btn1.style.visibility = 'hidden';

    }else if (mail.match(emailCo)) {

      errorElement.innerHTML = ('We are not accepting subscriptions from Colombia emails')
      errorElement.style.visibility = 'visible';
      btn1.style.visibility = 'hidden';

    }else if ((mail !== "") && (!mail.match(email))) {

      errorElement.innerHTML = ('Please provide a valid email adress');
      errorElement.style.visibility = 'visible';
      btn1.style.visibility = 'hidden';

    }else if (mail.match(email)) {

      errorElement.style.visibility = 'hidden';
      btn1.style.visibility = 'visible';

    }else{
      errorElement.style.visibility = 'hidden';
    }


}
}
