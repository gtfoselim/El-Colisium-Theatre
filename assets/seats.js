function togglePopup(){
    document.getElementById('popup-1').classList.toggle('active');
  }
  const container = document.querySelector('.spaceContainer');
  console.log(container);
  const seats = document.querySelectorAll('.row.seat:not(.occupied)');
  const count = document.getElementById('count');
  const total = document.getElementById('total');
  const evenement = document.getElementById('NomEvenement');
  
  function updateSelectedCount(){
      const selectedSeats = document.querySelectorAll('.seat.selected');
      const selectedSeatsCount = selectedSeats.length;
      count.innerText = selectedSeatsCount;
  }
  
  container.addEventListener('click',(e) => {
    if (e.target.classList.contains('seat') && !e.target.classList.contains('occupied')) {
      e.target.classList.toggle('selected');
    }
    updateSelectedCount();
  })