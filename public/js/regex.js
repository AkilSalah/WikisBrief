
let form = document.querySelector('#inscriptionForm'); 
form.querySelector('#nom').addEventListener('change', function() {
    
    validateName(this);
});

form.querySelector('#prenom').addEventListener('change', function() {
    validatePrenom(this);
});

form.querySelector('#emailValidation').addEventListener('change', function() {
    validateEmail(this);
});

form.querySelector('#passValidation').addEventListener('change', function() {
    validatePassword(this);
});

 const validateInput = function(inputElement,regex,errorMessage ){

    let small = inputElement.nextElementSibling;

    if(regex.test(inputElement.value)){
        small.innerHTML = "<b>Valider</b>";
        small.classList.remove("text-danger");
        small.classList.add("text-success");
    }else {
        small.innerHTML = errorMessage;
        small.classList.remove("text-success");
        small.classList.add("text-danger");
    }
 };

 const validateName = function(inputElement) {
    validateInput(
        inputElement,
        /^[A-Za-z]+\s?[A-ZA-z]+$/,
        "<b>Nom non valide</b>"
    );
};

const validatePrenom = function(inputElement) {
    validateInput(
        inputElement,
        /^[A-Za-z]+\s?[A-ZA-z]+$/,
        "<b>Prénom non valide</b>"
    );
};

const validateEmail = function(inputElement) {
    validateInput(
        inputElement,
        /^[A-Za-z0-9.-_]+@{1}[a-zA-Z]+[.]{1}[a-z]{2,3}$/,
        "<b>Email non valide</b>"
    );
};

const validatePassword = function(inputElement) {
    validateInput(
        inputElement,
        /^(?=.*[a-zA-Z])(?=.*\d)[a-zA-Z\d!@#$%^&*()_+]{8,20}$/,
        "<b>Mot de passe non valide, veuillez saisir au moins 8 caractères</b>"
    );
};


