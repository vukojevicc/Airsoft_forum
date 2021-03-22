<div class="calendar_parent">
    <table id="kalendar">
        <caption id="naslov">Susreti</caption>
        <caption id="mesec"></caption>
        <thead>
            <tr>
                <th>p</th>
                <th>u</th>
                <th>s</th>
                <th>č</th>
                <th>p</th>
                <th>s</th>
                <th>n</th>
            </tr>
        </thead>
        <tbody>
            <tr class="red">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="red">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="red">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="red">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="red">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="red last_two_rows">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="red last_two_rows">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <div class="arrow_parent">
        <div id="prethodni_mesec" class="arrows left_arrow">&laquo;</div>
        <div id="novi_mesec" class="arrows righ_arrow">&raquo;</div>
    </div>
    <button id="novi_susret">Novi susret <span>&DownArrow;</span></button>
    <div class="novi_susret">
        <form method="post" action="styles/prosilver/template/logika/unesisusret.php">
            <h2>Novi susret</h2><br>
            <label for="datum">Unesite datum susreta:</label><br>
            <input type="date" id="datum" name="datum"><br>
            <textarea rows="2" cols="50" placeholder="Unesite opis susreta" name="opis"></textarea><br>
            <input type="submit" value="Evidentiraj susret">
        </form>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
<?php
require_once __DIR__ . '/tabele/susret.php';

$susreti = Susret::izlistajSusrete();
//        var_dump($susreti);
?>
    var opis = <?php
foreach ($susreti as $key => $value) {
    $unix = strtotime($value->datum_susreta);
    echo (int) date('m', $unix) - 1;
}
?>;
    console.log(opis);
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

            $('#kalendar td')[j + 6].innerHTML = dani[i].getDate() + '<span class="tooltiptext">Nema susreta</span>';

            // Dodeljivanje crvenog okvira danasnjem datumu
            if ($('#kalendar td')[j + 6].innerText == novi_datum.getDate()
                    && $('#mesec').text().includes(meseci[novi_datum.getMonth()])
                    && $('#mesec').text().includes(novi_datum.getFullYear())) {
                $('#kalendar td')[j + 6].style.border = '1px solid red';
                $('#kalendar td')[j + 6].children[0].innerText = 'hej';
            } else {
                $('#kalendar td')[j + 6].style.border = 'none';
            }

            j++;
        }

        var empty_rows = document.querySelectorAll('.last_two_rows');
        empty_rows.forEach(function (red) {
            if (red.children[0].innerHTML == '') {
                red.style.display = 'none';
            } else {
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
        if ($('#mesec').html().includes(meseci[11])) {
            year_increment++;
            month_increment -= 12;
        }

        month_increment++;
        fill_calendar_table(month_increment, year_increment);
    })

    $('#prethodni_mesec').on('click', function () {
        if ($('#mesec').html().includes(meseci[0])) {
            year_increment--;
            month_increment = 10;
        }

        month_increment--;
        fill_calendar_table(month_increment, year_increment);
    }
    )

    var newEventClicked = true;
    $('#novi_susret').on('click', function () {

        if (newEventClicked) {
            $(this).html('Novi susret <span>&#8593;</span>');
            newEventClicked = false;
        } else {
            $(this).html('Novi susret <span>&#8595;</span>');
            newEventClicked = true;
        }

        $('.novi_susret').slideToggle();
    })
</script>

