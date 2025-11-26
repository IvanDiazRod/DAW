document.addEventListener("DOMContentLoaded", () => {

  const botones = document.querySelectorAll("button");

  botones.forEach(boton => {

    boton.addEventListener("click", (e) => {

      if (e.target.type === "submit") e.preventDefault();

      const usuario = boton.closest(".usuario");

      if (usuario) usuario.remove();

    });

  });
  
});