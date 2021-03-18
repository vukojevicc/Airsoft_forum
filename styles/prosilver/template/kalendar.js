var novi_datum = new Date();

function getDaysInMonth(month, year) {
  var date = new Date(year, month);
  var days = [];
  while (date.getMonth() === month) {
    days.push(new Date(date));
    date.setDate(date.getDate() + 1);
  }
  return days;
}
var dani = getDaysInMonth(novi_datum.getMonth(), novi_datum.getFullYear());

for(let i = 0; i<dani.length; i++){
        $('#kalendar td')[i].innerHTML = dani[i].getDate();
}
