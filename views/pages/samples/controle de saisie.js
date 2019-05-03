function reset() {
    document.getElementById("f").reset();
}
var valueDate = document.getElementById('myDate').value;
function validerdated(field)
{
if(field.value < document.getElementById("datef").value)
{
	setValid(field);
} else {
	setInvalid(field, "date de départ doit être inférieure à la date de fin");
}
}

function validerdatef(field)
{
if(field.value > document.getElementById("dated").value)
{
	setValid(field);
	return true;
} else {
	setInvalid(field, "date incorrecte doit être supérieure à la date d'arrivée");
	return true;
}
}
function validernbre (field)
{
if(field.value>0 && /^[0-9]+$/.test(field.value))
{
setValid(field);
}
else{
	setInvalid(field, "Doit contenir seulement des chiffres");
}
}
function setInvalid(field, message) {
	//field.className = 'invalid';
	if (!field.parentElement.querySelector("p"))
		field.insertAdjacentHTML("afterend", "<p style='color:red;'>" + message + "</p>");
	else field.parentElement.querySelector("p").textContent = message;
	//field.innerHTML = message;
	field.style.borderColor = red;
}
function setValid(field) {
	//field.className = 'valid';
	if (!field.parentElement.querySelector("p"))
		field.insertAdjacentHTML("afterend", "<p style='color:red;'>" + "" + "</p>");
	else field.parentElement.querySelector("p").textContent = "";
	//field.innerHTML = '';
	field.style.borderColor = green;
}
function valider()
{
	if (validerdatef(document.getElementById("datef"))&& validerdated(document.getElementById("dated")) && validernbre(document.getElementById("idclient")) && validernbre(document.getElementById("idarticle")))
	{
		alert("corrrecyt");
	}
	else {
		alert("errrheh");
	}
}
function checkIfOnlyLetters(field) {
	if (/^[a-zA-Z ]+$/.test(field.value)) {
		setValid(field);
		return true;
	} else {
		setInvalid(field, " Doit contenir seulement des lettres");
		return false;
	}
}
