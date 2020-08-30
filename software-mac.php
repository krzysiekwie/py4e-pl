<?php include("top.php"); ?>
<?php include("nav.php"); ?>

<h1>Rozpoczęcie pracy z Pythonem na Macintoshu</h1>

<p>Python 2 i Python 3 są już zainstalowane na systemie operacyjnym macOS, więc
jedyne co musisz dodać to edytor programistycznych kodów źródłowych.</p>

<h2>Instalacja edytora tekstu Atom</h2>

<p>Pobierz i zainstaluj program Atom z poniższej strony:</p>
<p><a href="http://atom.io" target="_blank">http://atom.io</a></p>

<h1>Pisanie programu Python 3 z Atomem na Macintoshu</h1>

<p>Mamy krótki <a href="https://www.youtube.com/watch?v=aIcLCww_kQM" target="_blank">
film pokazujący krok po kroku</a> jak używać edytora Atom i jak napisać swój
pierwszy program Python 3.</p>

<h1>Uruchomienie terminala na macOS</h1>

<p>Program Terminal jest jakby zakopany w <b>Finder -> Aplikacje -> Narzędzia ->
Terminal</b>.</p>
<p>Istnieje kilka skrótów, które mogą okazać się pomocne. Możesz w prawej górnej
części ekranu kliknąć na przycisk wyszukiwania Spotlight i wpisać
<b>terminal</b>, a następnie uruchomić Terminal, który pojawi się na liście.</p>
<p>Możesz sprawić, że Terminal po uruchomieniu pozostanie zadokowany - kliknij i
przytrzymują ikonę Terminala w Docku, a następnie wybierz opcję "Zatrzymaj w
Docku". Następnie możesz szybko uruchomić Terminal, klikając na jego ikonę w
Docku.</p>

<h1>Gdzie się znajdujesz?</h1>

<p>Po uruchomieniu wiersza poleceń domyślnie znajdujesz się w swoim
katalogu "domowym". W poniższym przykładzie, zamiast "csev" powinna być nazwa
Twojego aktualnie zalogowanego konta.</p>
<pre>
    Katalog domowy na Macu: 		/Users/csev
</pre>
<p>W wierszu poleceń zazwyczaj znajduje się wskazówka, gdzie się znajdujesz w 
strukturze katalogów na dysku twardym. Jeśli naprawdę chcesz się dowiedzieć 
gdzie się w tej hierarchii znajdujesz, użyj polecenia <b>pwd</b>.</p>
<pre>
    udhcp-macvpn-624:~ csev$ pwd
    /Users/csev
    udhcp-macvpn-624:~ csev$ 
</pre>

<h1>Gdzie możesz pójść?</h1>

<p>Generalnie pierwszą rzeczą, którą chcesz zrobić po otwarciu interfejsu
wiersza poleceń, jest przejście do właściwego folderu. Powiedzmy, że chcesz
uruchomić plik znajdujący się na Biurku. Polecenie <b>cd Desktop</b> pozwoli Ci
dostać się do katalogu, który jest Twoim Biurkiem.</p>
<pre>
    udhcp-macvpn-624:~ csev$ pwd
    /Users/csev
    udhcp-macvpn-624:~ csev$ cd Desktop
    udhcp-macvpn-624:Desktop csev$ pwd
    /Users/csev/Desktop
    udhcp-macvpn-624:Desktop csev$
</pre>
<p><b>Sprytna sztuczka:</b> w poleceniu cd możesz częściowo wpisać nazwę katalogu,
np. Des zamiast Desktop, a następnie nacisnąć klawisz TAB i system automatycznie
uzupełni nazwę katalogu, jeśli wpisałeś ją na tyle, że system będzie mógł 
dokładnie odgadnąć co masz na myśli.</p>

<h2>Przechodzenie w dół (lub do góry)</h2>

<p>Używając polecenia <b>cd ..</b> możesz zmienić bieżący katalog na katalog
nadrzędny (tj. katalog "powyżej" tego katalogu, w którym się aktualnie
znajdujesz). Komenda ta oznacza "idź do góry o jeden poziom".</p>
<pre>
    udhcp-macvpn-624:Desktop csev$ pwd
    /Users/csev/Desktop
    udhcp-macvpn-624:Desktop csev$ cd ..
    udhcp-macvpn-624:~ csev$ pwd
    /Users/csev
    udhcp-macvpn-624:~ csev$ 
</pre>

<h2>Jeśli się zgubisz...</h2>

<p>Jeżeli nie wiesz w którym katalogu się znajdujesz i/lub nie wiesz jak dostać
się do danego katalogu - po prostu zamknij i ponownie otwórz okno Terminala /
wiersza linii poleceń. Powrócisz wtedy do swojego katalogu "domowego" - możesz
więc ponownie zacząć nawigację zaczynając od znanej Ci lokalizacji.</p>

<h2>Jakie pliki i foldery się tutaj znajdują?</h2>

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

<h2>Uruchamianie Twojego programu Python w Terminalu</h2>

<p>Uruchom program Terminal, przejdź do odpowiedniego katalogu i wpisz poniższe
polecenie:</p>
<pre>
    python3 mojprogram.py
</pre>
<p>Polecenie to uruchamia interpreter Pythona 3 i uruchamia
<b>mojprogram.py</b>, pokazując w oknie Terminala wyjście programu i/lub
ewentualne błędy.</p>

<h2>Kilka ciekawych wskazówek dotyczących programu Terminal</h2>

<p>Możesz przewijać poprzednie komendy, naciskając na klawiaturze strzałki w
górę i w dół, a potem możesz ponownie wykonywać wyświetlone komendy za pomocą
klawisza Enter. Dzięki temu możesz zaoszczędzić sporo czasu podczas pisania
komend. Jeśli lubisz mieć porządek na ekranie, możesz wyczyścić bufor
poprzednich komend oraz ekran, naciskając jednocześnie klawisz Command i klawisz
K.</p>

<?php include('footer.php');?>
