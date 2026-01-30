document.addEventListener("DOMContentLoaded", () => {

    const passwords = document.querySelectorAll(`main article > section:nth-child(1) div form input[type="password"]`);

    const submit = document.querySelector(`main article > section:nth-child(1) div form button`);

    const errorText = document.querySelector(`main article > section:nth-child(1) div form .text-red-600`);

    const[passwd, confirmpasswd] = passwords;

    submit.addEventListener(`click`, (event) => {

        if (passwd.value.trim() !== confirmpasswd.value.trim()) {

            event.preventDefault();

            errorText.innerHTML = `Passwords didn´t match, try it again`;

        }

    });

});