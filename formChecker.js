function formChecker() {

var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
var apples = document.getElementById("apple").value;
var oranges = document.getElementById("orange").value;
var pears = document.getElementById("pear").value;
var shipping1 = document.getElementById("7").checked;
var shipping2 = document.getElementById("50").checked;
var shipping3 = document.getElementById("5").checked;

if(username == "" || password == "" || apples == "" || oranges == "" || pears == "") {
	alert("All fields must be filled in.");
	return false;
}	

if(username.search("@") == -1 || username.slice(-4,-1) != ".co") {
	alert("The username must be in the format user@name.com.");
	return false;
}

if(apples < 0 || oranges < 0 || pears < 0) {
	alert("You cannot buy less than 0 of something.");
	return false;
}

if(shipping1 == false && shipping2 == false && shipping3 == false) {
	alert("You must choose a shipping option");
	return false;
}

}
