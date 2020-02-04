var registreerHier = document.querySelector("#registreerHier");

registreerHier.addEventListener('click', function () {
    var loginForm = document.querySelector("#registreerHier");
    var registreerForm = document.querySelector("#LoginHier");
    console.log(registreerForm);
    loginForm.classList.toggle('regOn');
    registreerForm.classList.toggle('regoff');
});