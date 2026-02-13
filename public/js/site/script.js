// Le menu deroulant sur mobile
$(document).ready(function () {
    // Toggle menu mobile avec slide
    $("#menu-btn").click(function () {
        $("#mobile-menu").stop(true, true).slideToggle(300);
    });

    // Fermer menu quand on clique sur un lien mobile
    $("#mobile-menu a").click(function () {
        $("#mobile-menu").slideUp(300);
    });
});

