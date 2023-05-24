import "./bootstrap";
import "~resources/scss/app.scss";

// Import all of Bootstrap's JS
import * as bootstrap from "bootstrap";

// gestione immagini build
import.meta.glob(["../img/**"]);

const switcher = document.getElementById("image-handler");

switcher.addEventListener("change", () => {
    const linkInput = document.getElementById("link-input");
    const fileInput = document.getElementById("link-file");
    if (switcher.checked) {
        linkInput.classList.remove("d-none");
        linkInput.classList.add("d-block");
        fileInput.classList.remove("d-block");
        fileInput.classList.add("d-none");
    } else {
        linkInput.classList.remove("d-block");
        linkInput.classList.add("d-none");
        fileInput.classList.remove("d-none");
        fileInput.classList.add("d-block");
    }
});
