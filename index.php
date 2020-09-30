<?php
use \Tsugi\Core\LTIX;
use \Tsugi\UI\Output;

require_once "top.php";
require_once "nav.php";
?>
<h1>Python dla wszystkich</h1>
<?php if ( isset($_SESSION['id']) ) { ?>
<p>
Witam na moim kursie MOOC (Massive Open Online Course) "Python dla wszystkich".
Teraz, gdy jesteś już zalogowany na stronie, masz dostęp do dodatkowych funkcji związanych z kursem.
<ul class="list-group">
<li class="list-group-item">
W trakcie realizacji kolejnych <a href="lessons">lekcji</a> zauważysz dodatkowe linki związane z mechanizmem sprawdzarkowym zdań. Możesz podejść do zadań i uzyskać wynik.</li>
<li class="list-group-item">
Możesz śledzić swoje postępy w nauce za pomocą sekcji <a href="assignments">Zadania</a>, a gdy ukończysz pewną grupę zadań, możesz zdobyć <a href="badges">Odznakę</a>.
Możesz pobrać odznaki i umieścić je na swojej stronie internetowej lub podlinkować adresów URL odznak umieszczonych na tej stronie.</li>
<li class="list-group-item">
Jeśli na własnych zajęciach chcesz korzystać materiałów udostępnionych tutaj na licencji Creative Commons, to możesz <a href="materials.php">pobrać lub zamieścić link</a> do treści z tej strony, <a href="tsugi/cc/export.php">wyeksportować materiały</a> kursu jako IMS Common Cartridge® lub złożyć wniosek o <a href="tsugi/admin/key/index.php">klucz i sekret</a> IMS Learning Tools Interoperability® (LTI®), tak by uruchomić mechanizm sprawdzarkowy ze swojego LMSa. <?php if ( !($CFG->providekeys) ) { echo _m("[Obecnie generowanie kluczy LTI jest wyłączone] "); } ?>
</li>
</ul>
<?php } else { ?>
<p>
Witaj na mojej stronie, na której możesz przeglądać materiały kursowe związane z moją bezpłatną książką <a href="book.php">Python dla wszystkich</a>. Możesz zrealizować ten kurs, tak aby uzyskać certyfikat w ramach <a href="https://www.coursera.org/specializations/python" target="_blank">specjalizacji w serwisie Coursera "Python for Everybody"</a>, <a href="https://www.edx.org/bio/charles-severance" target="_blank">dwóch kursów tematycznych "Python for Everybody" na edX</a> lub <a href="https://www.futurelearn.com/courses/programming-for-everybody-python" target="_blank">dwóch kursów "Python for Everybody" na FutureLearn</a>.
</p>
<p>
Możesz korzystać z tej strony na wiele różnych sposobów:
<ul class="list-group">
<li class="list-group-item">
Możesz przeglądać moje filmy i materiały szkoleniowe umieszcone w sekcji <a href="lessons">Lekcje</a>. Wszystkie materiały, które tutaj opracowałem, są objęte licencją Creative Commons, więc możesz je pobrać lub podlinkować, tak aby włączyć je do własnego procesu nauczania, oczywiście jeśli chcesz.</li>
<li class="list-group-item">
Jeśli <a href="tsugi/login.php">zalogujesz się</a> na tej stronie, to efekt jest taki jakbyś dołączył do bezpłatnego, globalnego, otwartego kursu internetowego. Będziesz posiadał dziennik ocen, automatyczne oceniane zadań i będziesz mógł zdobywać odznaki za swoje wysiłki.</li>
<li class="list-group-item">
Na tej stronie poważnie traktujemy Twoją prywatność, możesz zapoznać się z naszą <a href="privacy">Polityką prywatności</a>, tak aby uzyskać więcej informacji.
</li>
<li class="list-group-item">
Jeśli na własnych zajęciach chcesz korzystać materiałów udostępnionych tutaj na licencji Creative Commons, to możesz <a href="materials.php">pobrać lub zamieścić link</a> do treści z tej strony, <a href="tsugi/cc/export.php">wyeksportować materiały</a> kursu jako IMS Common Cartridge® lub złożyć wniosek o <a href="tsugi/admin/key/index.php">klucz i sekret</a> IMS Learning Tools Interoperability® (LTI®), tak by uruchomić mechanizm sprawdzarkowy ze swojego LMSa. <?php if ( !($CFG->providekeys) ) { echo _m("[Obecnie generowanie kluczy LTI jest wyłączone] "); } ?>
</li>
<li class="list-group-item">
Kod tej witryny, w tym system sprawdzarkowy, slajdy i zawartość kursu, jest dostępny w serwisie <a href="https://github.com/andre-wojtowicz/py4e-pl" target="_blank">GitHub</a>. Oznacza to, że możesz stworzyć własną kopię strony kursu, opublikować ją i zremiksować w dowolny sposób. Co więcej, możesz przetłumaczyć całą witrynę (kurs) na swój język i również ją opublikować. Podałem <a href="https://github.com/csev/py4e/blob/master/TRANSLATION.md" target="_new">kilka instrukcji, jak przetłumaczyć ten kurs</a> w moim repozytorium GitHub.
</li>
</ul>
<?php } ?>
Ta strona wykorzystuje framework <a href="https://www.tsugi.org" target="_blank">Tsugi</a> do intregracji systemów LMS i udostępnienia mechanizmu sprawdzarkowego. Jeśli jesteś zainteresowany współpracą przy tworzeniu tego typu witryn na własne potrzeby, odwiedź stronę <a href="https://www.tsugi.org" target="_blank">tsugi.org</a> i/lub skontaktuj się ze mną.
</p>
<!--
<?php
echo(Output::safe_var_dump($_SESSION));
var_dump($USER);
?>
-->
<?php $OUTPUT->footer();
