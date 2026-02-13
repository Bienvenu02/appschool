// Active Turbo Drive
import "@hotwired/turbo";

// Animation sur le frame main_content
document.addEventListener("turbo:before-frame-render", (event) => {
    if (event.target.id === "main_content") {
        const main = document.getElementById("content");
        if (main) main.classList.add("transition-out");
    }
});

document.addEventListener("turbo:frame-render", (event) => {
    if (event.target.id === "main_content") {
        const main = document.getElementById("content");
        if (main) {
            main.classList.remove("transition-out");
            main.classList.add("transition-in");
            setTimeout(() => main.classList.remove("transition-in"), 500);
        }
    }

    if (event.target.id === "main_content") {
        const frame = event.target;
        frame.classList.remove("transition-out");
        frame.classList.add("transition-in");
        setTimeout(() => frame.classList.remove("transition-in"), 400);

        // Relancer les scripts après rendu du frame
        if (typeof initDataTables === "function") {
            initDataTables();
        }

        if (typeof initCustomButtons === "function") {
            initCustomButtons();
        }
    }

    // Gere le changement de l'url
    if (event.target.id === "main_content") {
        const url = event.detail.fetchResponse?.response.url;
        if (url) {
            history.pushState({}, "", url);
        }

        // Relancer les scripts
        if (typeof initDataTables === "function") initDataTables();
        if (typeof initCustomButtons === "function") initCustomButtons();
    }
});

// Animation pour navigation complète (fallback)
document.addEventListener("turbo:before-render", () => {
    const main = document.getElementById("content");
    if (main) main.classList.add("transition-out");
});

document.addEventListener("turbo:render", () => {
    const main = document.getElementById("content");
    if (main) {
        main.classList.remove("transition-out");
        main.classList.add("transition-in");
        setTimeout(() => main.classList.remove("transition-in"), 500);
    }
});
