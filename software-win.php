<?php include("top.php"); ?>
<?php include("nav.php"); ?>

<h1>Instalacja Pythona 3 na Windows 10</h1>

<p><b>Uwaga:</b> Każda stosunkowo aktualna wersja Pythona jest akceptowana 
podczas tego kursu. Jeżeli posiadasz już na swoim komputerze Pythona w wersji
3.x, to powinieneś mieć możliwość korzystania z niego w tym kursie.</p>
<p>Pobierz i zainstaluj Pythona 3.x z:</p>
<p><a href="http://www.python.org/download/" target="_blank">
http://www.python.org/download/</a></p>
<p>Podczas instalacji Pythona, upewnij się, że zaznaczyłeś opcję "Add Python 3.x
to PATH", tak abyś mógł wpisać <b>python</b> w wierszu poleceń w celu 
uruchomienia Pythona.</p>
<p>Ewentualnie można zainstalować Pythona przez Sklep (Microsoft Store).</p>

<h2>Instalacja edytora tekstu Atom</h2>

<p>Pobierz i zainstaluj program Atom z poniższej strony:</p>
<p><a href="http://atom.io" target="_blank">http://atom.io</a></p>

<h1>Pisanie programu Python 3 z Atomem na Windows 10</h1>
<p>Mamy krótki <a href="https://www.youtube.com/watch?v=uZbaYeYGYRQ" target="_blank">
film pokazujący krok po kroku</a> jak zainstalować Pythona 3 i Atom oraz jak 
swój napisać pierwszy program.</p>

<h1>Uwagi dotyczące wiersza poleceń Windows</h1>

<p>Klasyczny wiersz poleceń cmd.exe możemy uruchomić poprzez wciśnięcie klawisza
Windows, wpisania "cmd.exe" i wybrania aplikacji. Ewentualnie można wybrać 
kombinację klawiszy Windows+R, wpisać "cmd.exe" i wybrać "OK". Nowszą wersją
klasycznego wiersza poleceń cmd.exe jest PowerShell, jednak na potrzeby kursu
w zupełności wystarczy nam cmd.exe.</p>
<p>Po uruchomieniu interpretera poleceń cmd.exe domyślnie znajdujesz się w swoim
katalogu "domowym". Twój katalog domowy jest różny dla każdej z wersji systemu
Windows. W każdym z poniższych przykładów, zamiast "csev" powinno być nazwa
Twojego aktualnie zalogowanego konta.</p>
<pre>
    Windows XP:             C:\Documents and Settings\csev
    Windows Vista:          C:\Users\csev
    Windows 7:              C:\Users\csev
    Windows 10:             C:\Users\csev
    Windows 10 OneDrive:    C:\Users\csev\OneDrive
</pre>
<p>W wierszu poleceń zazwyczaj znajduje się wskazówka, gdzie znajdujesz się w
hierarchii katalogów na dysku twardym.</p>
<p>Jeśli naprawdę chcesz się dowiedzieć gdzie się w tej hierarchii znajdujesz,
użyj polecenia "cd" bez parametrów:</p>
<pre>
    C:\Users\csev> cd
    C:\Users\csev
</pre>

<h1>Gdzie możesz pójść?</h1>

<p>Generalnie pierwszą rzeczą, którą chcesz zrobić po otwarciu interfejsu wiersza
poleceń, jest przejście do właściwego katalogu. Powiedzmy, że chcesz uruchomić
plik z pulpitu. Polecenie <b>cd Pulpit</b> lub <b>cd OneDrive\Pulpit</b>
(ewentualnie <b>cd Desktop</b> lub <b>cd OneDrive\Desktop</b> w przypadku
angielskiej wersji językowej systemu) pozwoli Ci dostać się do katalogu, który
jest Twoim pulpitem. Możesz użyć polecenia <b>dir</b> aby zobaczyć pliki 
znajdujące się w aktualnym katalogu, oraz polecenie <b>cd ..</b> aby przejść
"<b style="color:black;background-color:#a0ffff">w górę</b>" katalogu.</p>
<p><b>Sprytna sztuczka:</b> W poleceniu cd możesz częściowo wpisać nazwę katalogu, 
np. Pul zamiast Pulpit, a następnie nacisnąć klawisz TAB i system automatycznie
uzupełni nazwę katalogu jeśli wpisałeś ją na tyle, że system będzie mógł 
dokładnie odgadnąć co masz na myśli.
</p>

<h2>Jeśli się zgubisz...</h2>

<p>Jeżeli nie wiesz w którym katalogu się znajdujesz i/lub nie wiesz jak dostać się
do danego katalogu - po prostu zamknij i ponownie otwórz okno terminala / wiersza
linii poleceń. Powrócisz wtedy do swojego katalogu "domowego" - możesz więc
ponownie zacząć nawigację zaczynając od znanej Ci lokalizacji.</p>

<h2>Kilka ciekawych wskazówek dotyczących interfejsu wiersza poleceń Windows</h2>

<p>Jeśli klikniesz na małą ikonkę w lewym górnym rogu okna wiersza poleceń i
wybierzesz Preferencje/Ustawienia - możesz ustawić wiele rzeczy dotyczących wiersza poleceń
- prawdopodobnie najważniejsze jest ustawienie rozmiaru bufora historii poleceń
na 999.</p>

<h1>Uruchamianie Twojego programu Python w wierszu poleceń</h1>

<p>Aby uruchomić swój program w wierszu poleceń, wpiszesz go w wierszu poleceń.
Windows wie, że pliki zakończone końcówką ".py" są programami Pythona.</p>
<pre>
    python mojprogram.py
</pre>
<p>lub</p>
<pre>
    mojprogram.py
</pre>
<p>gdzie mojprogram.py jest nazwą pliku zawierającego Twój program Python. Upewnij
się by przy pomocy polecenia cd znaleźć się w odpowiednim katalogu, w którym
znajduje się Twój plik programu.</p>
<p>W oknie wiersza poleceń możesz uruchamiać swój program w kółko. Wskazówka: 
możesz użyć klawisza strzałki <b style="color:black;background-color:#a0ffff">w
górę</b> aby przewinąć poprzednie polecenia, a potem nacisnąć Enter by ponownie
je wykonać. Pozwala to na szybką edycję i ponowne uruchomienie programu w celu
dokonania i przetestowania zmian.</p>

<?php include('footer.php');?>
