document.addEventListener("DOMContentLoaded", () => {

  const form = document.querySelector("form");

  form.addEventListener("submit", (e) => {
    
    e.preventDefault();

    const formData = new FormData(form);

    const user = {

      username: formData.get("username"),

      firstname: formData.get("firstname"),

      lastname: formData.get("lastname"),

      email: formData.get("email")

    };

    localStorage.setItem("user", JSON.stringify(user));

    window.location.href = "index.html";

  });

});