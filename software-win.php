<?php include("top.php"); ?>
<?php include("nav.php"); ?>

<h1>Instalacja Pythona 3 na systemie Windows</h1>

<p>Każda stosunkowo aktualna wersja Pythona jest akceptowana 
podczas tego kursu. Jeżeli posiadasz już na swoim komputerze Pythona w wersji
3.x, to nie ma konieczności instalacji jego najnowszej wersji.</p>

<h4>Instalacja standardowa</h4>

<p>Pobierz i zainstaluj Pythona 3.x z:</p>

<p><a href="https://www.python.org/download/" target="_blank">
https://www.python.org/download/</a></p>

<p>Podczas instalacji Pythona upewnij się, że zaznaczyłeś opcję "Add Python 3.x
to PATH". Dzięki temu w wierszu poleceń (cmd.exe lub PowerShell) będziesz mógł wpisać
słowo <b>python</b> w celu uruchomienia Pythona.</p>

<h4>Inne opcje instalacji</h4>

<p>W systemie Windows 10 można zainstalować Pythona poprzez <a href="https://www.microsoft.com/pl-pl/search/shop/apps?q=python" target="_blank">Sklep (Microsoft Store)</a>, gdzie można wybrać interesującą nas wersję.</p>

<p>Jeśli na Twoim komputerze z Windowsem 10 wolisz pracę zbliżoną do takiej jak
na Linuxie, to możesz zainstalować i skonfigurować Pythona poprzez 
<a href="https://docs.microsoft.com/en-us/windows/wsl/install-win10" target="_blank">Windows Subsystem for Linux (WSL)</a>.</p>

<h1>Instalacja edytora tekstu Atom</h1>

<p>Pobierz i zainstaluj program Atom z poniższej strony:</p>
<p><a href="https://atom.io" target="_blank">https://atom.io</a></p>

<h4>Pisanie programu Python w edytorze Atom</h4>

<p>Poniższy krótki <a href="https://www.youtube.com/watch?v=uZbaYeYGYRQ" target="_blank">
film</a> pokazuje krok po kroku jak zainstalować Pythona 3 i edytor Atom oraz jak 
swój napisać pierwszy program.</p>

<h1>Uruchomienie wiersza poleceń</h1>

<p>Klasyczny wiersz poleceń cmd.exe możemy uruchomić poprzez wciśnięcie na klawiaturze klawisza
<code>Windows</code>, wpisania "cmd.exe" i wybrania odpowiedniej aplikacji. Ewentualnie można wybrać 
kombinację klawiszy <code>Windows+R</code>, wpisać "cmd.exe" i wybrać "OK". Nowszą wersją
klasycznego wiersza poleceń cmd.exe jest PowerShell, jednak na potrzeby kursu
w zupełności wystarczy nam cmd.exe.</p>

<p>Po uruchomieniu interpretera poleceń cmd.exe, domyślnie znajdujesz się w swoim
"katalogu domowym". Ścieżka do katalogu domowego zależy od wersji systemu
Windows. W każdym z poniższych przykładów, zamiast "csev" powinna być nazwa
Twojego aktualnie zalogowanego konta.</p>
<pre>
    Windows XP:             C:\Documents and Settings\csev
    Windows Vista:          C:\Users\csev
    Windows 7:              C:\Users\csev
    Windows 10:             C:\Users\csev
    Windows 10 OneDrive:    C:\Users\csev\OneDrive
</pre>

<p>W wierszu poleceń zazwyczaj znajduje się informacja o tym gdzie obecnie się znajdujesz w
hierarchii katalogów na dysku twardym. Informacja o tym zwykle wyświetlana jest
przed tzw. znakiem zachęty. Katalog, w którym obecnie się znajdujesz, nazywa
się "katalogiem roboczym".</p>

<pre>
    C:\Users\csev>
</pre>

<p>Jeśli chcesz dodatkowo wyświetlić informację o ścieżce katalogu roboczego,
wydaj polecenie "cd" bez parametrów:</p>

<pre>
    C:\Users\csev> cd
    C:\Users\csev
</pre>

<h4>W jaki sposób zmienić bieżący katalog?</h4>

<p>Generalnie pierwszą rzeczą, którą chcesz zrobić po otwarciu interfejsu wiersza
poleceń, jest przejście do właściwego katalogu. Powiedzmy, że chcesz uruchomić
plik znajdujący się na pulpicie. Polecenie <b>cd Pulpit</b> lub <b>cd OneDrive\Pulpit</b>
(ewentualnie <b>cd Desktop</b> lub <b>cd OneDrive\Desktop</b> w przypadku
angielskiej wersji językowej systemu) pozwoli Ci dostać się do katalogu, który
jest Twoim pulpitem. Możesz użyć polecenia <b>dir</b>, tak aby zobaczyć pliki 
znajdujące się w aktualnym katalogu, oraz polecenie <b>cd ..</b>, tak aby przejść
"<b style="color:black;background-color:#a0ffff">w górę</b>" katalogu.</p>

<p><b>Wskazówka:</b> W poleceniu "cd" możesz częściowo wpisać nazwę katalogu, 
np. Pul zamiast Pulpit, a następnie nacisnąć klawisz <code>Tab</code>, dzięki czemu
system automatycznie uzupełni nazwę katalogu, o ile wpisałeś ją na tyle, że 
system będzie mógł precyzyjnie wskazać katalog, który miałeś na myśli.
</p>

<p><b>Wskazówka:</b>Jeśli klikniesz na małą ikonkę w lewym górnym rogu okna wiersza poleceń i
wybierzesz Preferencje/Ustawienia, to będziesz mógł ustawić wiele rzeczy dotyczących wiersza poleceń.
Prawdopodobnie najważniejsze jest ustawienie rozmiaru bufora historii poleceń na 999.</p>

<h4>Jeśli się zgubisz...</h4>

<p>Jeżeli nie wiesz w którym katalogu się znajdujesz i/lub nie wiesz jak dostać się
do danego katalogu, to po prostu zamknij i ponownie otwórz okno wiersza
linii poleceń. Powrócisz wtedy do swojego "katalogu domowego", przez co 
zaczynając od znanej Ci lokalizacji będziesz mógł ponownie nawigować po katalogach.</p>

<h1>Uruchamianie Twojego programu z poziomu wiersza poleceń</h1>

<p>Masz dwie możliwości uruchomienia swojego program z poziomu wiersza poleceń. 
Załóżmy, że plik z programem nazywa się "mojprogram.py" i znajduje się w Twoim
katalogu roboczym.</p>

<p>Możesz wpisać "python3", a następnie po spacji nazwę Twojego programu:</p>

<pre>
    python3 mojprogram.py
</pre>

Inną opcją jest wpisanie po prostu nazwy pliku zawierającego program. Windows wie,
że pliki zakończone końcówką ".py" są programami Pythona:</p>

<pre>
    mojprogram.py
</pre>

<p>W oknie wiersza poleceń możesz wielokrotnie uruchamiać swój program.</p>

<p>Możesz użyć klawisza strzałki <b style="color:black;background-color:#a0ffff">w
górę</b> aby przewijać poprzednie polecenia, a potem nacisnąć <code>Enter</code> aby ponownie
je wykonać. Jest to szczególnie przydatne jeśli zmieniamy zawartość programu i chcemy
go szybko uruchomić w celu przetestowania dokonanych zmian.</p>

<p>Jeśli lubisz mieć porządek na ekranie, możesz wyczyścić bufor
poprzednich komend oraz ekran wydając polecenie <b>cls</b>.
</p>

<?php include('footer.php');?>
