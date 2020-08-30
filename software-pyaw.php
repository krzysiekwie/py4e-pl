<?php include("top.php"); ?>
<?php include("nav.php"); ?>

<h1>Używanie Pythona w usłudze PythonAnywhere</h1>

<p>PythonAnywhere</a>
(<a href="https://www.pythonanywhere.com" target="_blank">www.pythonanywhere.com</a>)
to bezpłatna usługa online, która umożliwia tworzenie i uruchamianie w
przeglądarce internetowej programów w języku Python. Jest to w pełni
funkcjonalne środowisko Linuxa z opartym na przeglądarce internetowej edytorem
tekstu z podświetlaniem składni. Aby używać PythonAnywhere podczas tego kursu, 
wszystko, czego potrzebujesz do napisania i uruchomienia kodu Pythona, to
przeglądarka internetowa. W ogóle nic nie musisz instalować.</p>
<p>Oznacza to, że możesz ukończyć ten kurs w "zamkniętym" środowisku na systemach
i urządzeniach np. takich jak iPad, iPhone, Android, ChromeBook lub Windows 10. 
Możesz także użyć PythonAnywhere jeśli używasz komputera w pracy lub w szkole,
gdzie nie pozwalają Tobie na instalację żadnego oprogramowania.</p>

<h2>Rejestracja w celu utworzenia konta</h2>

<p>Aby korzystać z PythonAnywhere, musisz założyć konto. Mają bezpłatnę ofertę,
która pokryje wszystkie Twoje potrzeby związane z tym kursem aż do rozdziału 15.
</p>
<p>PythonAnywhere zobowiązuje się do umożliwienia Ci posiadania bezpłatnego konta
na zawsze, o ile będziesz się logować i je używać. Mają tanie, płatne ofety, 
które sprawdzą się jeśli będziesz potrzebować więcej miejsca na dysku, większej
mocy obliczeniowej dla swoich projektów, większej elastyczności lub dodatkowych
funkcji. Zapewniamy jednak, że ich darmowa oferta wystarczy by ukończyć ten
kurs.</p>

<h2>Pisanie pierwszego programu na PythonAnywhere</h2>

<p>Po zalogowaniu się do PythonAnywhere, przejdź do zakładki plików i utwórz nowy
plik o nazwie <b>hello.py</b> w swoim katalogu domowym (powinno to być coś w
rodzaju <b>/home/drchuck</b>. Umieść w pliku następujący wiersz:</p>
<pre>
print('Witaj świecie')
</pre>
<p>Zapisz plik, wybierz <b>Run</b>, a następnie powinieneś zobaczyć:</p>
<pre>
Witaj świecie
&gt;&gt;&gt;
</pre>
<p>Następnie zamień tekst na 'Witaj PY4E świecie', wybierz <b>Save</b>, a potem
<b>Run</b>, co powinno uruchomić Twój zmodyfikowany program.</p>
<p>O ile przycisk <b>Run</b> działa w przypadku programów składających się z kilku
linijek, po rozpoczęciu pracy nad bardziej złożonymi programami konieczne będzie
użycie powłoki systemu Linux (wiersza poleceń). Na początku może się to wydawać
trochę dziwne, ale nauczenie się trochę Linuxa to świetny pomysł, ponieważ jest
to system, który dominuje na serwerach.</p>

<h2>Używanie powłoki systemu Linux na PythonAnywhere</h2>

<p>Działa to najlepiej gdy w przeglądarce internetowej w tym samym czasie masz
otwarte dwie karty. W jedną karcie należy mieć otwarty ekran <b>Files</b>, a w 
drugiej <b>Consoles</b>. Jeśli masz już uruchomioną konsolę Bash, to możesz do
niej teraz wrócić - w przeciwnym razie uruchom nową konsolę <b>Bash</b>. Po
uruchomieniu powinieneś zobaczyć mniej więcej coś takiego:</p>
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
<p>Oto, co robią te polecenia:</p>
<ul>
<li><b>cd</b> - zmień katalog na mój katalog domowy - robimy to, aby upewnić
się, że zaczynamy w odpowiednim miejscu w hierarchii katalogów.</li>
<li><b>pwd</b> - wyświetl katalog roboczy - to polecenie informuje gdzie
znajdujesz się w hierarchii katalogów. Jesteśmy obecnie w naszym katalogu
domowym. Linux to system dla wielu użytkowników, a każdy użytkownik ma swój
własny katalog "domowy". Możesz zbudować własną hierarchię folderów idąc w głąb
od swojego katalogu domowego. 
</li>
<li><b>ls -l</b> - pokaż pliki i podkatalogi w bieżącym katalogu. Opcja
<b>-l</b> pokazuje dodatkowe szczegóły takie jak uprawnienia, data modyfikacji
i rozmiar pliku.</li>
<li><b>python3 hello.py</b> - uruchom Pythona na pliku "hello.py".</li>
</ul>
<p>Zalecamy rozpoczęcie od samego początku używania powłoki Bash w Linuxie do
uruchamiania kodu, ponieważ ostatecznie będziesz musiał używać Basha do
uruchamiania bardziej złożonych programów.</p>

<h2>Kilka fajnych wskazówek dotyczących konsoli Basha</h2>

<p>Możesz przewijać poprzednie polecenia poprzez naciśnięcie na klawiaturze 
klawiszów strzałki w górę i w dół, a potem ponownie wykonywać polecenia za
pomocą klawisza Enter. Może Ci to zaoszczędzić wiele pisania. Jeśli chcesz
zachować porządek na ekranie, możesz wyczyścić bufor przewijania wstecz,
naciskając jednocześnie klawisz <b>Command</b>/<b>Ctrl</b> i klawisz <b>K</b>.
</p>

<h2>Edycja plików na PythonAnywhere</h2>

<p>Istnieją trzy sposoby edytowania plików w środowisku PythonAnywhere,
od najłatwiejszego do najfajniejszych. Wystarczy, że będziesz umiał edytować
plik jednym z poniższych sposobów.
</p>
<ol>
<li>
Przejdź do kokpitu głównego PythonAnywhere, przejdź do plików, przejdź do 
właściwego katalogu i edytuj plik.
</li>
<li>
Lub w wierszu linii poleceń wykonaj:
<pre>
cd ~
nano hello.py
</pre>
Zapisz plik poprzez kombinację klawiszy <b>Ctrl+X</b>, <b>Y</b>, a potem
<b>Enter</b>.
</li>
<li>
Jeśli po raz pierwszy korzystasz z edytora tekstu <b>vi</b>, to bez pomocy
lepiej nie próbuj tego najtrudniejszego i zarazem najfajniejszego sposobu edycji
plików w systemie Linux. 
<pre>
cd ~
vi hello.py
</pre>
Po otwarciu <b>vi</b> przesuń kursor w dół w miejsce, w którym chcesz dokonać
zmiany, i naciśnij klawisz <b>i</b> aby przejść do trybu 'INSERT' (jest to tryb
wstawiania), następnie wpisz nowy tekst, a gdy skończysz, to naciśnij klawisz
<b>Esc</b>. Aby zapisać plik wpisz <b>:wq</b>, a następnie wciśnij <b>Enter</b>.
Jeśli się pogubisz, naciśnij <b>Esc</b>, wpisz <b>:q!</b> i wciśnij <b>Enter</b>
aby wyjść z pliku bez zapisywania.
</li>
</ol>
<p>Jeśli znasz jakiś <i>inny</i> edytor tekstu wiersza poleceń w Linuxie, to możesz
go używać do edycji plików. Ogólnie przekonasz się, że często szybsze i
łatwiejsze jest wprowadzanie niewielkich zmian w plikach z poziomu wiersza
poleceń, a nie w pełnoekranowym interfejsie użytkownika. A kiedy zaczniesz już
wdrażać rzeczywiste aplikacje w środowiskach produkcyjnych takich jak Google,
Amazon, Microsoft itp., to wszystko i jedyne co będziesz mieć do dyspozycji to
wiersz poleceń.</p>

<?php include('footer.php');?>
