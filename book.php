<?php include("top.php"); ?>
<?php include("nav.php");?>
<!-- paper-start -->

<!-- paper-end -->
<h2>Python dla wszystkich</h2>
<p>
    Celem książki jest wprowadzenie do tematyki programowania. Szczególny nacisk położono na wykorzystanie Pythona do rozwiązywania podstawowych problemów związanych z danymi, które mogą pojawić się w codziennej pracy.
</p>
<ul>
    <li>
        Polskie tłumaczenie:
        <ul class="menu vertical nested is-active">
            <li class="menu-text">ostatnia aktualizacja: <?php exec('git log -1 --format="%at" | xargs -I{} date -d @{} "+%Y-%m-%d"', $commit_date); echo($commit_date[0]); ?></li>
            <li class="menu-text">
                do czytania na ekranie: <a href="html3">HTML</a>, <a href="translations/PL/py4e-pl-a4-online-latest.pdf" target="_blank">PDF</a>, <a href="translations/PL/py4e-pl-latest.epub" target="_blank">EPUB</a>, <a href="translations/PL/py4e-pl-latest.mobi" target="_blank">MOBI</a>
            </li>
            <li class="menu-text">
                do druku (PDF): <a href="translations/PL/py4e-pl-a4-latest.pdf" target="_blank">A4 kolor</a>, <a href="translations/PL/py4e-pl-print-latest.pdf" target="_blank">7 × 10 " kolor</a>, <a href="translations/PL/py4e-pl-print-bw-latest.pdf" target="_blank">7 × 10 " czarno-biały</a>
            </li>
            <li class="menu-text"><a href="https://github.com/andre-wojtowicz/py4e-pl" target="_blank">Kod źródłowy książki na GitHubie</a> (zmiany w repozytorium powodują automatyczne przebudowanie ww. formatów na tej stronie)</li>
        </ul>
        <p>Współtwórcy: <a href="https://github.com/andre-wojtowicz" target="_blank">Andrzej Wójtowicz</a></p>
    </li>
    <li>
        <a href="https://www.py4e.com/book">Inne języki</a>
    </li>
</ul>

<p>Wykorzystywane w książce przykładowe kody programów oraz pliki danych znajdują się <a href="code3" target="_blank">tutaj</a>.</p>
<p>
Rozdziały 2-10 są mocno zaczerpnięte z otwartej książki zatytułowanej "<a href="https://greenteapress.com/wp/learning-with-python/" target="_blank">Think Python: How to Think like a Computer Scientist</a>" autorstwa
    <a href="https://www.allendowney.com/wp/" target="_blank">Allena B. Downeya</a> i <a href="https://elkner.net/" target="_blank">Jeffa Elknera</a>.
</p>

<?php
include("footer.php");
?>
