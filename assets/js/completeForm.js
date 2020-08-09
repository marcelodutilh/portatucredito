var email = window.location.search;
emailFinal = email.split("=")[1].split("&")[0].replace("%40","@");

var email2 = document.getElementById("email2");
email2.value = emailFinal;

