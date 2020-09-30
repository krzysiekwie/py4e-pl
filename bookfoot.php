<?php
use \Tsugi\Core\LTIX;
use \Tsugi\UI\Output;

$pos_head_start = strpos($HTML,'<head');
$pos_head_start = strpos($HTML,'<',$pos_head_start+1);
$pos_head_end = strpos($HTML,'</head',$pos_head_start);
$pos_body = strpos($HTML,'<body',$pos_head_end);
$pos_body = strpos($HTML,'<',$pos_body+1);
$pos_end = strpos($HTML,'</body',$pos_body);
$head = substr($HTML, $pos_head_start, $pos_head_end-$pos_head_start);
$body = substr($HTML, $pos_body, $pos_end-$pos_body);
require_once "top.php";
require_once "nav.php";

function x_sel($file) {
    global $HTML_FILE;
    $retval = 'value="'.$file.'"';
    if ( strpos($HTML_FILE, $file) === 0 ) {
        $retval .= " selected";
    }
    return $retval;
}

?>
<script>
function onSelect() {
    console.log($('#chapters').val());
    window.location = $('#chapters').val();
}
</script>    
<div style="float:right">
<select id="chapters" onchange="onSelect();">
  <option <?= x_sel("01-intro") ?>>Rozdział 1: Wstęp</option>
  <option <?= x_sel("02-variables") ?>>Rozdział 2: Zmienne, wyrażenia i instrukcje</option>
  <option <?= x_sel("03-conditional") ?>>Rozdział 3: Wykonanie warunkowe</option>
  <option <?= x_sel("04-functions") ?>>Rozdział 4: Funkcje</option>
  <option <?= x_sel("05-iterations") ?>>Rozdział 5: Pętle i iteracje</option>
  <option <?= x_sel("06-strings") ?>>Rozdział 6: Ciągi znaków</option>
  <option <?= x_sel("07-files") ?>>Rozdział 7: Pliki</option>
  <option <?= x_sel("08-lists") ?>>Rozdział 8: Listy</option>
  <option <?= x_sel("09-dictionaries") ?>>Rozdział 9: Słowniki</option>
  <option <?= x_sel("10-tuples") ?>>Rozdział 10: Krotki</option>
  <option <?= x_sel("11-regex") ?>>Rozdział 11: Wyrażenia regularne</option>
  <option <?= x_sel("12-network") ?>>Rozdział 12: Programy sieciowe</option>
  <option <?= x_sel("13-web") ?>>Rozdział 13: Korzystanie z usług sieciowych</option>
  <option <?= x_sel("14-objects") ?>>Rozdział 14: Programowanie obiektowe</option>
  <option <?= x_sel("15-database") ?>>Rozdział 15: Bazy danych i SQL</option>
  <option <?= x_sel("16-viz") ?>>Rozdział 16: Wizualizacja danych</option>
</select>
</div>

<?php
echo($body);
?>
<hr/>
<p>
Jeśli znajdziesz błąd w tej książce, wyślij poprawkę za pomocą
<a href="https://github.com/andre-wojtowicz/py4e-pl/tree/master/book3" target="_blank">Githuba</a>.
</p>
<?php

$OUTPUT->footer();
