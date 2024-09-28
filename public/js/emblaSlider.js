const emblaNode = document.querySelector('.__testimonial .__embla')
const options = { loop: true, align: "center" }
const plugins = [EmblaCarouselAutoplay()]
const emblaApi = EmblaCarousel(emblaNode, options, plugins)

console.log(emblaApi.slideNodes()) // Access API