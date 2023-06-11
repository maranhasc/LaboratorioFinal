
const nombreInput = document.getElementById('nombre');
nombreInput.addEventListener('input', function () {
  if (nombreInput.checkValidity()) {
    nombreInput.classList.add('valid');
    nombreInput.classList.remove('invalid');
  } else {
    nombreInput.classList.add('invalid');
    nombreInput.classList.remove('valid');
  }
});
const emailInput = document.getElementById('correo');
emailInput.addEventListener('input', function () {
  if (emailInput.checkValidity()) {
    emailInput.classList.add('valid');
    emailInput.classList.remove('invalid');
  } else {
    emailInput.classList.add('invalid');
    emailInput.classList.remove('valid');
  }
});
const passwordInput = document.getElementById('password');
passwordInput.addEventListener('input', function () {
  if (passwordInput.checkValidity()) {
    passwordInput.classList.add('valid');
    passwordInput.classList.remove('invalid');
  } else {
    passwordInput.classList.add('invalid');
    passwordInput.classList.remove('valid');
  }
});
