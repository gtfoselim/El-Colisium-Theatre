function togglePopup(){
    document.getElementById('popup-1').classList.toggle('active');
  }
function showOccupiedSeats(idSeat){
  document.getElementById(idSeat).classList.toggle('occupied');
}
function showSelectedSeats(){
  const selectedSeats = document.querySelectorAll('.seat.selected');
  var resultat = '';
  console.log(selectedSeats);
  for (var i = 0; i < selectedSeats.length; i++) {
    resultat = resultat + ' ' + selectedSeats[i].id;
  }
  console.log(resultat);
  document.getElementsByName("seatsReserver")[0].value = resultat;
  document.getElementById('popup-1').classList.toggle('active');
}