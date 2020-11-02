<?php include("top.php"); ?>
<?php include("nav.php"); ?>

<h1>Używanie Pythona w usłudze PythonAnywhere</h1>

<p></a>(<a href="https://www.pythonanywhere.com" target="_blank">PythonAnywhere</a>)
to bezpłatna usługa online, która umożliwia tworzenie i uruchamianie w
przeglądarce internetowej programów napisanych w języku Python. Jest to w pełni
funkcjonalne środowisko Linuxa z opartym na przeglądarce internetowej edytorem
tekstu z podświetlaniem składni. Wszystko czego potrzebujesz do napisania i 
uruchomienia kodu Pythona, to przeglądarka internetowa. W ogóle nic nie musisz 
u siebie instalować.</p>

<p>Oznacza to, że możesz ukończyć ten kurs w "zamkniętym środowisku", pracując na systemach
i urządzeniach takich jak iPad, iPhone, Android, ChromeBook, Windows 10 itp. 
PythonAnywhere możesz również użyć jeśli korzystasz z komputera w pracy lub w szkole,
gdzie nie możesz zainstalować żadnego oprogramowania.</p>

<h2>Rejestracja w celu utworzenia konta</h2>

<p>Aby korzystać z PythonAnywhere, musisz założyć konto (prawy górny róg "Pricing & signup
"). Mają bezpłatnę ofertę ("Beginner Account"),
która spełni wszystkie Twoje potrzeby związane z tym kursem aż do rozdziału 15.
</p>

<p>PythonAnywhere zobowiązuje się do umożliwienia Ci posiadania bezpłatnego konta
na zawsze (pod warunkiem, że będziesz się na to konto logować i z niego korzytać).
Usługa posiada również niedrogie ofety, które sprawdzą się w sytuacji, w której
będziesz potrzebować więcej miejsca na dysku, większej mocy obliczeniowej dla swoich 
projektów, większej elastyczności lub dodatkowych funkcji. Podkreślmy jednak, że 
bezpłatna oferta wystarczy do ukończenia tego kursu.</p>

<h2>Pierwszy program</h2>

<p>Po zarejestrowaniu się, potwierdzeniu adresu e-mail i zalogowaniu się, 
przejdź do zakładki plików ("Files") i utwórz nowy
w swoim katalogu domowym plik o nazwie <b>hello.py</b> (jeśli tworzysz plik w panelu kontrolnym "Dashboard",
to musisz dodatkowo podać pełną ścieżkę do pliku; powinno to być coś w
rodzaju <b>/home/drchuck</b>). Umieść w pliku następujący wiersz:</p>
<pre>
print('Witaj świecie')
</pre>
<p>Zapisz plik, wybierz <b>Run</b>, a następnie powinieneś zobaczyć:</p>
<pre>
Witaj świecie
&gt;&gt;&gt;
</pre>
<p>Następnie zamień tekst wewnątrz "print(...)" na 'Witaj PY4E świecie', wybierz <b>Save</b>, a potem
<b>Run</b>, co powinno uruchomić Twój zmodyfikowany program.</p>

<p>O ile przycisk <b>Run</b> działa w przypadku kilkulinijkowych programów, 
po rozpoczęciu pracy nad bardziej złożonymi programami konieczne będzie
użycie powłoki systemu Linux (wiersza poleceń). Na początku może się to wydawać
trochę nieintuicyjne, ale nauczenie się absolutnych podstaw Linuxa to świetny pomysł, ponieważ jest
to system, który dominuje na różnego rodzaju serwerach.</p>

<h2>Korzystanie z powłoki systemu Linux</h2>

<p>Najlepiej będzie jeśli będziesz mieć dwa okna przeglądarki internetowej, jedno obok drugiego.
W pierwszym oknie otwórz pliki (<b>Files</b>), a w drugim konsole (<b>Consoles</b>).
Jeśli masz już uruchomioną konsolę Bash, to możesz do
niej teraz powrócić; w przeciwnym razie uruchom nową konsolę <b>Bash</b>. Po
uruchomieniu konsoli Bash powinieneś zobaczyć mniej więcej coś takiego:</p>

<pre>
14:12 ~ $
</pre>

<p>Jest to wiersz poleceń systemu Linux. Uruchommy program "hello.py" z poziomu
wiersza poleceń:</p>

<pre>
14:12 ~ $ cd
14:14 ~ $ pwd
/home/drchuck
14:15 ~ $ ls -l
-rw-rw-r--  1 drchuck registered_users   27 Mar 29 14:15 hello.py
14:16 ~ $ python3 hello.py
Witaj PY4E świecie
14:16 ~ $
</pre>

<p>Wytłumaczmy po kolei co robią powyższe polecenia:</p>

<ul>
<li><b>cd</b> - zmień katalog na mój katalog domowy; robimy to aby upewnić
się, że zaczynamy w odpowiednim miejscu w hierarchii katalogów.</li>
<li><b>pwd</b> - wyświetl katalog roboczy; to polecenie informuje gdzie
znajdujemy się w hierarchii katalogów; jesteśmy obecnie w naszym katalogu
domowym; Linux to system, z którego jednocześnie może korzystać wielu użytkowników, 
a każdy użytkownik ma swój własny "katalog domowy"; możesz zbudować własną 
hierarchię katalogu idąc w głąb od swojego katalogu domowego. 
</li>
<li><b>ls -l</b> - pokaż pliki i podkatalogi w bieżącym katalogu; opcja
<b>-l</b> pokazuje dodatkowe szczegóły takie jak uprawnienia, data modyfikacji
i rozmiar pliku.</li>
<li><b>python3 hello.py</b> - uruchom Pythona 3 na pliku "hello.py".</li>
</ul>

<p>Zalecamy abyś już od samego początku korzystał w Linuxie z powłoki Bash do
uruchamiania swojego kodu, ponieważ ostatecznie i tak będziesz musiał z niej
korzystać aby uruchomić bardziej skomplikowane programy.</p>

<p>W oknie wiersza poleceń możesz wielokrotnie uruchamiać swój program.</p>

<p>Możesz użyć klawisza strzałki <b style="color:black;background-color:#a0ffff">w
górę</b> aby przewijać poprzednie polecenia, a potem nacisnąć <code>Enter</code> aby ponownie
je wykonać. Jest to szczególnie przydatne jeśli zmieniamy zawartość programu i chcemy
go szybko uruchomić w celu przetestowania dokonanych zmian.</p>

<p>Jeśli lubisz mieć porządek na ekranie, możesz wyczyścić bufor
poprzednich komend oraz ekran, naciskając jednocześnie klawisz <code>Ctrl+L</code>.</p>

<h2>Edycja plików</h2>

<p>Istnieją trzy sposoby edytowania plików w środowisku PythonAnywhere,
od najłatwiejszego do najfajniejszych. Wystarczy, że będziesz potrafić edytować
plik przy pomocy jednego z poniższych sposobów.
</p>
<ol>
<li>
Przejdź do panelu kontrolnego PythonAnywhere ("Dashboard"), następnie do plików ("Files"), 
a potem do właściwego katalogu i edytuj plik klikając na niego.
</li>
<li>
W Bashu przejdź do odpowiedniego katalogu i otwórz plik przy pomocy edytora <b>nano</b>:
<pre>
cd ~
nano hello.py
</pre>
Zapisz plik poprzez kombinację klawiszy <code>Ctrl+X</code>, <code>Y</code>, 
a potem <code>Enter</code>.
</li>
<li>
Jeśli po raz pierwszy korzystasz z edytora tekstu <b>vi</b>, to bez dodatkowej pomocy
lepiej nie próbuj tego najtrudniejszego i zarazem najfajniejszego sposobu edycji
plików w systemie Linux.

<pre>
cd ~
vi hello.py
</pre>

Po otwarciu <b>vi</b> przesuń kursor w dół w miejsce, w którym chcesz dokonać
zmiany, i naciśnij klawisz <code>i</code> aby przejść do trybu 'INSERT' (jest to tryb
wstawiania), następnie wpisz nowy tekst, a gdy skończysz, to naciśnij klawisz
<code>Esc</code>. Aby zapisać plik wpisz <b>:wq</b>, a następnie wciśnij <code>Enter</code>.
Jeśli się pogubisz, naciśnij <code>Esc</code>, wpisz <b>:q!</b> i wciśnij <code>Enter</code>, tak
aby wyjść z pliku bez zapisywania.
</li>
</ol>
<p>Jeśli znasz jakiś inny edytor tekstu działający z poziomu wiersza poleceń, to
oczywiście możesz go używać do edycji plików.</p>

<p>Przekonasz się, że często szybsze i łatwiejsze jest wprowadzanie niewielkich
zmian w plikach z poziomu wiersza poleceń, a nie w pełnoekranowym graficznym interfejsie
użytkownika. A kiedy zaczniesz już wdrażać rzeczywiste aplikacje w środowiskach chmurowych dostarczanych przez Google,
Amazon, Microsoft itp., to wszystko, a zarazem jedyne co będziesz mieć do dyspozycji, to
wiersz poleceń.</p>

<?php include('footer.php');?>
