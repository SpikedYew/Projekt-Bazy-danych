const signUpButton=document.getElementById('signUpButton');
const signInButton=document.getElementById('signInButton');
const signInForm=document.getElementById('signIn');
const signUpForm=document.getElementById('signup');
//nie moze byc spacji przed i po = w document.getElementById  //
signUpButton.addEventListener('click', function(){
    signInForm.style.display="none";
    signUpForm.style.display="block";
})
signInButton.addEventListener('click', function(){
    signInForm.style.display="block";
    signUpForm.style.display="none";
})
// jest to skrypt zmieniający "display:none na block" w danym divie, pokazując na przemiennie inne ekrany logowania lub rejestracji //
