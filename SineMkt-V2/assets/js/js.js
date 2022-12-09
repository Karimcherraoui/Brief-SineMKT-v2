
const signBtn = document.querySelector(".lnr-user");
const menuSign = document.querySelector(".signinform");

let contenu = document.querySelector(".sign-box");


signBtn.onclick = () => {
    contenu.classList.toggle("active-box");
};
console.log(signBtn.onclick)