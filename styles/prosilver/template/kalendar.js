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
function fill_calendar_table(month, year) {
    if (month != null) {
        $('#mesec').html(meseci[novi_datum.getMonth() + month] + ' ' + (novi_datum.getFullYear() + year));
        var dani = getDaysInMonth(novi_datum.getMonth() + month, novi_datum.getFullYear() + year);
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
                $('#kalendar td')[i].classList.add('tooltip');
                $('#kalendar td')[i].innerHTML = '';
            }
            jTrue = false;
        }
        
        $('#kalendar td')[j + 6].innerHTML = dani[i].getDate() + '<span class="tooltiptext">test</span>';
        
        if ($('#kalendar td')[j + 6].innerText == novi_datum.getDate()
                && $('#mesec').text().includes(meseci[novi_datum.getMonth()])
                && $('#mesec').text().includes(novi_datum.getFullYear())) {
            $('#kalendar td')[j + 6].style.border = '1px solid red';
        } else {
            $('#kalendar td')[j + 6].style.border = 'none';
        }

        j++;
    }
    
    var empty_rows = document.querySelectorAll('.last_two_rows');
    empty_rows.forEach(function(red){
        if(red.children[0].innerHTML == ''){
            red.style.display = 'none';
        }else{
            red.style.display = 'table-row';
        }
    })
    
    if ($('#kalendar td')[6].innerHTML != '') {
        $('.red')[0].style.display = 'table-row';
    } else {
        $('.red')[0].style.display = 'none';
    }

}
fill_calendar_table();

var month_increment = 0;
var year_increment = 0;
$('#novi_mesec').on('click', function () {
    if ($('#mesec').html().includes('Decembar')) {
        year_increment++;
        month_increment -= 12;
    }

    month_increment++;
    fill_calendar_table(month_increment, year_increment);
})

$('#prethodni_mesec').on('click', function () {
    if ($('#mesec').html().includes('Januar')) {
        year_increment--;
        month_increment = 10;
    }

    month_increment--;
    fill_calendar_table(month_increment, year_increment);
}
)