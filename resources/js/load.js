// Fonction pour afficher le loader
function showLoader() {
    document.documentElement.classList.remove("loaded")
    const loader = document.getElementById("loader")
    if (loader) loader.style.opacity = "1"
}

// Fonction pour masquer le loader
function hideLoader() {
    document.documentElement.classList.add("loaded")
}

// --- Turbo Drive Events --- //
document.addEventListener("turbo:visit", showLoader)
document.addEventListener("turbo:render", hideLoader)
document.addEventListener("turbo:load", () => {
    hideLoader()
    if (window.jQuery && $('.datatable').length) {
        $('.datatable').DataTable()
    }
})
window.addEventListener("load", hideLoader)