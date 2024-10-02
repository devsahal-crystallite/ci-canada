const emblaNode = document.querySelector('.__testimonial .embla')
const options = { loop: true, align: "start", }
const plugins = [EmblaCarouselAutoplay(),EmblaCarouselClassNames()]
const emblaApi = EmblaCarousel(emblaNode, options, plugins)

console.log(emblaApi.slideNodes()) // Access API