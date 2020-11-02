<?php include("top.php"); ?>
<?php include("nav.php"); ?>

<h1>Instalacja Pythona 3 na systemie macOS</h1>

<p>Python w wersji 2 jest już zainstalowany na systemie operacyjnym macOS.
Zainstalujemy Pythona 3 poprzez ściągnięcie instalatora.</p>

<h4>Instalacja standardowa</h4>

<p>Pobierz i zainstaluj Pythona 3.x z:</p>

<p><a href="https://www.python.org/download/" target="_blank">
https://www.python.org/download/</a></p>

<h2>Instalacja edytora tekstu Atom</h2>

<p>Pobierz i program Atom z poniższej strony:</p>
<p><a href="https://atom.io" target="_blank">https://atom.io</a></p>

Po pobraniu i rozpakowaniu, przenieś go do Aplikacji/Applications.

Po instalacji, w opcjach pakietów programu <code>Packages > Settings View > Manage Packages</code>
możesz wyłączyć pakiety "git-diff" i "github".

<h4>Pisanie programu Python w edytorze Atom</h4>

<p>Poniższy krótki <a href="https://www.youtube.com/watch?v=aIcLCww_kQM" target="_blank">
film</a> pokazuje krok po kroku jak zainstalować Pythona 3 i edytor Atom oraz jak 
swój napisać pierwszy program.</p>

<h1>Uruchomienie terminala</h1>

<p>Program Terminal znajduje się w <b>Finder > Aplikacje > Narzędzia >
Terminal</b>.</p>

<p>Alternatywnie możesz w prawej górnej części ekranu kliknąć na przycisk
wyszukiwania Spotlight i wpisać <b>terminal</b>, a następnie uruchomić Terminal, który pojawi się na liście.</p>

<p>Możesz sprawić, że Terminal po uruchomieniu pozostanie zadokowany. Kliknij i
przytrzymują ikonę Terminala w Docku, a następnie wybierz opcję "Zatrzymaj w
Docku". Następnie klikając na jego ikonę w Docku możesz szybko go uruchomić.</p>

<h4>Gdzie się znajdujesz?</h4>

<p>Po uruchomieniu wiersza poleceń domyślnie znajdujesz się w swoim
"katalogu domowym". W poniższym przykładzie, zamiast "csev" powinna być nazwa
Twojego aktualnie zalogowanego konta.</p>

<pre>
    Katalog domowy: 		/Users/csev
</pre>

<p>Katalog domowy skrótowo oznacza się znakiem "~".</p>

<p>W wierszu poleceń zazwyczaj znajduje się informacja o tym gdzie obecnie się znajdujesz w
hierarchii katalogów na dysku twardym. Informacja o tym zwykle wyświetlana jest
przed tzw. znakiem zachęty. Katalog, w którym obecnie się znajdujesz, nazywa
się "katalogiem roboczym".</p>

<pre>
    udhcp-macvpn-624:~ csev$
</pre>

<p>Jeśli chcesz wyświetlić pełną informację o ścieżce katalogu roboczego,
wydaj polecenie "pwd" bez parametrów:</p>

<pre>
    udhcp-macvpn-624:~ csev$ pwd
    /Users/csev
    udhcp-macvpn-624:~ csev$ 
</pre>

<p>Jak widać, skrótowy zapis "~" katalogu domowego został rozwinięty do "/Users/csev".</p>

<h4>W jaki sposób zmienić bieżący katalog?</h4>

<p>Generalnie pierwszą rzeczą, którą chcesz zrobić po otwarciu terminala, jest
przejście do właściwego katalogu. Powiedzmy, że chcesz
uruchomić plik znajdujący się na Biurku. Polecenie <b>cd Desktop</b> pozwoli Ci
dostać się do odpowiedniego katalogu.</p>
<pre>
    udhcp-macvpn-624:~ csev$ pwd
    /Users/csev
    udhcp-macvpn-624:~ csev$ cd Desktop
    udhcp-macvpn-624:Desktop csev$ pwd
    /Users/csev/Desktop
    udhcp-macvpn-624:Desktop csev$
</pre>

<p><b>Wskazówka:</b> W poleceniu "cd" możesz częściowo wpisać nazwę katalogu, 
np. Des zamiast Desktop, a następnie nacisnąć klawisz <code>Tab</code>, dzięki czemu
system automatycznie uzupełni nazwę katalogu, o ile wpisałeś ją na tyle, że 
system będzie mógł precyzyjnie wskazać katalog, który miałeś na myśli.
</p>

<p>Używając polecenia <b>cd ..</b> możesz zmienić bieżący katalog na katalog
nadrzędny (tj. katalog "powyżej" tego katalogu, w którym się aktualnie
znajdujesz). Komenda ta oznacza "idź do góry o jeden poziom":</p>
<pre>
    udhcp-macvpn-624:Desktop csev$ pwd
    /Users/csev/Desktop
    udhcp-macvpn-624:Desktop csev$ cd ..
    udhcp-macvpn-624:~ csev$ pwd
    /Users/csev
    udhcp-macvpn-624:~ csev$ 
</pre>

<h4>Jeśli się zgubisz...</h4>

<p>Jeżeli nie wiesz w którym katalogu się znajdujesz i/lub nie wiesz jak dostać się
do danego katalogu, to po prostu zamknij i ponownie otwórz okno Terminala. Powrócisz wtedy do swojego "katalogu domowego", przez co 
zaczynając od znanej Ci lokalizacji będziesz mógł ponownie nawigować po katalogach.</p>

<h4>Jakie pliki i foldery się tutaj znajdują?</h4>

<p>Za pomocą polecenia <b>ls -l</b> możesz wyświetlić zawartość aktualnego
katalogu.</p>
<pre>
    udhcp-macvpn-624:Desktop csev$ pwd
    /Users/csev/Desktop
    udhcp-macvpn-624:Desktop csev$ ls -l 
    total 8
    -rw-r--r--  1 csev  staff   15 Sep 16 15:17 hello.py
    udhcp-macvpn-624:Desktop csev$ 
</pre>

<h1>Uruchamianie Twojego programu z poziomu Terminala</h1>

<p>Uruchom program Terminal, przejdź do odpowiedniego katalogu i wpisz poniższe
polecenie:</p>
<pre>
    python3 mojprogram.py
</pre>
<p>Polecenie to uruchamia interpreter Pythona 3 i uruchamia
<b>mojprogram.py</b>, pokazując w oknie Terminala wyjście programu i/lub
ewentualne błędy.</p>

<p>W oknie wiersza poleceń możesz wielokrotnie uruchamiać swój program.</p>

<p>Możesz użyć klawisza strzałki <b style="color:black;background-color:#a0ffff">w
górę</b> aby przewijać poprzednie polecenia, a potem nacisnąć <code>Enter</code> aby ponownie
je wykonać. Jest to szczególnie przydatne jeśli zmieniamy zawartość programu i chcemy
go szybko uruchomić w celu przetestowania dokonanych zmian.</p>

<p>Jeśli lubisz mieć porządek na ekranie, możesz wyczyścić bufor
poprzednich komend oraz ekran, naciskając jednocześnie klawisz <code>Command+K</code>.
</p>

<?php include('footer.php');?>
