import KeenSlider from "keen-slider";
import "keen-slider/keen-slider.min.css";

$(window).on("load", function () {
    const sliderElement = document.querySelector("#my-keen-slider");

    // Vérifie si le carrousel existe sur la page
    if (!sliderElement) return;

    const slider = new KeenSlider(sliderElement, {
        loop: true,
        slideChanged(s) {
            updateDots(s.track.details.rel);
        },
    });

    $("#my-keen-slider").addClass("ready").removeClass("preload");

    let autoplay = setInterval(() => slider.next(), 5000);

    $("#prev").click(() => slider.prev());
    $("#next").click(() => slider.next());

    const dotsContainer = $("#dots");
    for (let i = 0; i < slider.track.details.slides.length; i++) {
        $("<button>")
            .addClass("w-3 h-3 rounded-full bg-white/50")
            .click(() => slider.moveToIdx(i))
            .appendTo(dotsContainer);
    }

    function updateDots(activeIndex) {
        dotsContainer.children().each((idx, dot) => {
            $(dot).attr(
                "class",
                idx === activeIndex
                    ? "w-3 h-3 rounded-full bg-white"
                    : "w-3 h-3 rounded-full bg-white/50"
            );
        });
    }
});
