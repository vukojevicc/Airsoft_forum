/**
 * @param {int} The month number, 0 based
 * @param {int} The year, not zero based, required to account for leap years
 * @return {Date[]} List with date objects for each day of the month
 */
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
getDaysInMonth(novi_datum.getMonth(), novi_datum.getFullYear());