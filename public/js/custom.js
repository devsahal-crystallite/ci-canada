const items = document.querySelectorAll('.item');
lastOpen = 0;
items.forEach((el, i) => {
  el.addEventListener('click', (e) => {
    if (lastOpen != i) {
      items[lastOpen].classList.remove('open');
    }
    el.classList.toggle('open');
    lastOpen = i;
  })
})
