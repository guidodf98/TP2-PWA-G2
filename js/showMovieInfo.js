function showInfo(movie) {
  for (let i = 1; i < 13; i++) {
    document.getElementById(`img-info-${i}`).classList.add("d-none");
  }
  datos = document.getElementById(`img-info-${movie}`);
  datos.classList.remove("d-none");
}

var myCarousel = document.getElementById('myCarousel');

myCarousel.addEventListener('slide.bs.carousel', function(item){
  showInfo(item.to+1)
  document.getElementById(`btn-${item.to+1}`).classList.add("active");
  document.getElementById(`btn-${item.from+1}`).classList.remove("active");
})