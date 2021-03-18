var novi_datum = new Date();
var meseci = ['Januar', 'Februar', 'Mart', 'April', 'Maj', 'Jun', 'Jul', 'Avgust', 'Septembar', 'Oktobar', 'Novembar', 'Decembar'];

function getDaysInMonth(month, year) {
    var date = new Date(year, month);
    var days = [];
    while (date.getMonth() === month) {
        days.push(new Date(date));
        date.setDate(date.getDate() + 1);
    }
    return days;
}
function fill_calendar_table(month) {
    if (month != null) {
        $('#mesec').html(meseci[novi_datum.getMonth() + month] + ' ' + novi_datum.getFullYear());
        var dani = getDaysInMonth(novi_datum.getMonth() + month, novi_datum.getFullYear());
    } else {
        $('#mesec').html(meseci[novi_datum.getMonth()] + ' ' + novi_datum.getFullYear());
        var dani = getDaysInMonth(novi_datum.getMonth(), novi_datum.getFullYear());
    }

    var jTrue = true;

    for (let i = 0; i < dani.length; i++) {
        if (jTrue) {
            var j = i;
            j += dani[i].getDay();
            for (let i = 0; i < $('#kalendar td').length; i++) {
                $('#kalendar td')[i].innerHTML = ' ';
            }
            jTrue = false;
        }
        $('#kalendar td')[j + 6].innerHTML = dani[i].getDate();
        j++;
    }
}
fill_calendar_table();

var month_increment = 0;
$('#novi_mesec').on('click', function () {
    month_increment++;
    fill_calendar_table(month_increment);
})

$('#prethodni_mesec').on('click', function () {
    month_increment--;
    fill_calendar_table(month_increment);
})