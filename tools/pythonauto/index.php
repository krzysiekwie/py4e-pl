<?php
require_once "../config.php";

use \Tsugi\Core\LTIX;
use \Tsugi\Core\Settings;
use \Tsugi\UI\SettingsForm;
use \Tsugi\Grades\GradeUtil;
use \Tsugi\UI\Lessons;

// Sanity checks
$LAUNCH = LTIX::requireData();
$p = $CFG->dbprefix;

if ( SettingsForm::handleSettingsPost() ) {
    header( 'Location: '.addSession('index.php?howdysuppress=1') ) ;
    return;
}

$oldsettings = Settings::linkGetAll();

// Get the current user's grade data
$row = GradeUtil::gradeLoad();
$OLDCODE = false;
$json = array();
$editor = 1;
if ( $row !== false && isset($row['json'])) {
    $json = json_decode($row['json'], true);
    if ( isset($json["code"]) ) $OLDCODE = $json["code"];
    if ( isset($json["editor"]) ) $editor = $json["editor"];
}

if ( isset($_GET['editor']) && ( $_GET['editor'] == '1' || $_GET['editor'] == '0' ) ) {
    $neweditor = $_GET['editor']+0;
    if ( $editor != $neweditor ) {
        GradeUtil::gradeUpdateJson(array("editor" => $neweditor));
        $json['editor'] = $neweditor;
        $editor = $neweditor;
    }
}
$codemirror = $editor == 1;

require_once "exercises3.php";

// Get any due date information
$dueDate = SettingsForm::getDueDate();

$menu = false;
if ( $LAUNCH->link && $LAUNCH->user && $LAUNCH->user->instructor ) {
    $menu = new \Tsugi\UI\MenuSet();
    $menu->addLeft('Dane kursantów', 'grades.php');
    if ( $CFG->launchactivity ) {
        $menu->addRight(__('Uruchomienia'), 'analytics');
    }
    $menu->addRight(__('Ustawienia'), '#', /* push */ false, SettingsForm::attr());
}

$OUTPUT->header();

// Defaults
$QTEXT = 'W poniższym oknie możesz napisać dowolny kod. Istnieją trzy pliki załadowane 
i gotowe do otwarcia, jeśli chcesz wykonać przetwarzanie plików:
"mbox-short.txt", "romeo.txt" oraz "words.txt".';
$DESIRED = false;
$CODE = 'fh = open("romeo.txt", "r")

count = 0
for line in fh:
    print(line.strip())
    count = count + 1

print(count,"wierszy")';

$CHECKS = false;
$EX = false;

// Check which exercise we are supposed to do - settings, then custom, then 
// inherit, then GET
if ( isset($oldsettings['exercise']) && $oldsettings['exercise'] != '0' ) {
    $ex = $oldsettings['exercise'];
} else {
    $ex = LTIX::ltiCustomGet('exercise');
}
if ( $ex === false && isset($_GET["inherit"]) && isset($CFG->lessons) ) {
    $l = new Lessons($CFG->lessons);
    if ( $l ) {
        $lti = $l->getLtiByRlid($_GET['inherit']);
        if ( isset($lti->custom) ) foreach($lti->custom as $custom ) {
            if (isset($custom->key) && isset($custom->value) && $custom->key == 'exercise' ) {
                $ex = $custom->value;
                Settings::linkSet('exercise', $ex);
            }
        }
    }
}
if ( $ex === false && isset($_REQUEST["exercise"]) ) {
    $ex = $_REQUEST["exercise"];
    Settings::linkSet('exercise', $ex);
}

if ( $ex !== false && $ex != "code" ) {
    if ( isset($EXERCISES[$ex]) ) $EX = $EXERCISES[$ex];
    if ( $EX !== false ) {
        $CODE = '';
        $QTEXT = $EX["qtext"];
        $DESIRED = $EX["desired"];
        $DESIRED2 = isset($EX["desired2"]) ? $EX["desired2"] : '';
        $DESIRED = rtrim($DESIRED);
        $DESIRED2 = rtrim($DESIRED2);
        if ( isset($EX["code"]) ) $CODE = $EX["code"];
        if ( isset($EX["checks"]) ) $CHECKS = json_encode($EX["checks"]);
    }
    if ( $EX === false ) {
        echo("</head><body><h1>Błąd, ćwiczenie ".htmlentities($ex).
            " nie jest dostępne. Skontaktuj się z instruktorem.</h1></body>");
        return;
    }
}

// If we are not using settings, update the default settings.
if ( (! isset($oldsettings['exercise'])) || $oldsettings['exercise'] != $ex ) {
    $oldsettings['exercise'] = $ex;
}

?>
<style>
body { font-family: sans-serif; }
.inputarea { width: 100%; height: 250px; }
</style>
<link href="static/splitter/jquery.splitter.css" rel="stylesheet"/>
<?php if ( $codemirror ) { ?>
<link href="static/codemirror/codemirror.css" rel="stylesheet"/>
<script type="text/javascript" src="static/codemirror/codemirror.js"></script>
<script type="text/javascript" src="static/codemirror/python.js"></script>
<?php } ?>
<script src="static/skulpt-004/skulpt.min.js?v=1" type="text/javascript"></script>
<script src="static/skulpt-004/skulpt-stdlib.js?v=1" type="text/javascript"></script>
<script type="text/javascript">

function builtinRead(x)
{
    if (Sk.builtinFiles === undefined || Sk.builtinFiles["files"][x] === undefined)
        throw "Nie odnaleziono pliku: '" + x + "'";
    return Sk.builtinFiles["files"][x];
}

function makefilediv(name,text) {
    text.replace("&","&amp;");
    text.replace("<","&lt;");
/*
    var msgContainer = document.createElement('div');

    var msg2 = document.createTextNode(text);
    msgContainer.appendChild(msg2);
    msgContainer.setAttribute('id', name);  //set id
    msgContainer.setAttribute('style', 'display:none');  //set CSS
    document.body.appendChild(msgContainer);
*/
    $('body').append('<div id="'+name+'" style="display: none">'+text+'</div>');
}

// May want this under the control of the exercises.
// Instead of always retrieving them

function load_files() {
    $.get('static/files/romeo.txt', function(data) {
        makefilediv('romeo.txt', data);
    });
    $.get('static/files/words.txt', function(data) {
        makefilediv('words.txt', data);
    });
    $.get('static/files/mbox-short.txt', function(data) {
        makefilediv('mbox-short.txt', data);
    });
}

<?php
    if ( $CHECKS === false ) {
        echo("   window.CHECKS = false;\n");
    } else {
        echo("   window.CHECKS = $CHECKS;\n");
    }
?>
    window.GLOBAL_ERROR = true;
    window.GLOBAL_TIMER = false;
    window.CM_EDITOR = false;
    window.SPLIT_1 = false;
    window.SPLIT_2 = false;
    window.MOBILE = false;

    if (typeof console == "undefined") {
        console = {log: function() {}};
    }

    function hideall() {
        $("#check").hide();
        $("#grade").hide();
        $("#redo").hide();
        $("#complete").hide();
        $("#gradegood").hide();
        $("#gradelow").hide();
        $("#gradebad").hide();
    }

    // http://stackoverflow.com/questions/1418050/string-strip-for-javascript
    if(typeof(String.prototype.trim) === "undefined")
    {
        String.prototype.trim = function()
        {
            return String(this).replace(/^\s+|\s+$/g, '');
        };
    }

    function finalcheck() {
        if ( window.GLOBAL_TIMER != false ) window.clearInterval(window.GLOBAL_TIMER);
        window.GLOBAL_TIMER = false;
        hideall();
        var output = document.getElementById("output");
        oldtext = output.innerHTML;
        if ( oldtext.trim().length < 1 ) {
            alert('Twój program nie generuje żadnego wyniku');
            window.GLOBAL_ERROR = true;
        }
        window.console && console.log('finalcheck oldtext='+oldtext);
        if ( oldtext.indexOf('42<span') === 0 ) {
            alert('Chociaż 42 jest odpowiedzią na ostateczne pytanie dotyczące życia, wszechświata i wszystkiego, wydaje się, że nie jest to poprawna odpowiedź na to zadanie.');
        }
        $("#spinner").hide();
        var prog = document.getElementById("code").value;
        var lines = prog.split("\n");
        prog = '';
        for ( var i = 0; i < lines.length; i++ ) {
            line = lines[i];
            if ( line.substring(0,1) == '#' ) continue;
            var pos = line.indexOf('#');
            if ( pos > 0 ) {
                line = line.substring(0,pos);
            }
            prog = prog + line + "\n";
        }
        for ( var key in window.CHECKS ) {
            // The key can be inverted if the first character is !
            if ( key.length > 1 && key.substring(0,1) == '!' ) {
                xkey = key.substring(1);
                if ( prog.indexOf(xkey) < 0 ) continue;
            } else {
                if ( prog.indexOf(key) >= 0 ) continue;
            }
            alert(window.CHECKS[key]);
            window.GLOBAL_ERROR = true;
            break;
        }

        if ( window.GLOBAL_ERROR ) {
<?php if ( $EX !== false ) { ?>
            $("#redo").show();
<?php } else { ?>
            $("#complete").show();
<?php } ?>
        } else {
            $("#check").show();
            // $("#grade").show();
            gradeit();
        }
    }

/*
// Brad Miller Python3 hack - breaks printing of tuples
function outf(text) {
    var mypre = document.getElementById(Sk.pre);
    // bnm python 3
    x = text;
    if (x.charAt(0) == '(') {
        x = x.slice(1, -1);
        x = '[' + x + ']';
        try {
            var xl = eval(x);
            xl = xl.map(pyStr);
            x = xl.join(' ');
        } catch (err) {
        }
    }
    text = x;
    text = text.replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/\n/g, "<br/>");
    mypre.innerHTML = mypre.innerHTML + text;
}
*/
    function outf(text)
    {
        // window.console && console.log('Text='+text+':');
        var output = document.getElementById("output");
        oldtext = output.innerHTML;
        // window.console && console.log(oldtext);
        oldtext = oldtext.replace(/<span.*span>/g,"")
        text = text.replace(/</g, '&lt;');
        newtext = oldtext + text;
        output.innerHTML = newtext;

        if ( window.GLOBAL_TIMER != false ) window.clearInterval(window.GLOBAL_TIMER);
        window.GLOBAL_TIMER = setTimeout("finalcheck();",1500);

        var desired = document.getElementById("desired");

        if ( desired == null ) return;

        var desired = desired.innerHTML;
        var desired2 = document.getElementById("desired2").innerHTML;

        deslines = desired.split('\n');
        deslines2 = desired2.split('\n');
        newlines = newtext.split('\n');
        newoutput = '';
        err = false;
        for ( i=0, newlength = newlines.length; i < newlength; i++ ) {
            if ( i > 0 ) newoutput += '\n';
            nl = newlines[i];
            newoutput += nl;
            // Extra blank lines are no problem.
            if ( i >= deslines.length && $.trim(nl) == '' ) {
                continue;
            }
            if ( i >= deslines.length ) {
                if ( !err ) newoutput += '<span style="color:red"> &larr; Dodatkowe wyjście</span>';
                err = true;
                continue;
            }
            dl = deslines[i];
            dl2 = dl;
            if ( i < deslines2.length ) {
                dl2 = deslines2[i];
            }
            if ( dl != nl && dl2 != nl) {
                if ( !err ) newoutput += '<span style="color:red"> &larr; Brak dopasowania</span>';
                err = true;
                continue;
            }
        }
        if ( !err && deslines.length > newlines.length ) {
            newoutput += '<span style="color:red"> &larr; Brak wyników</span>';
            err = true;
        }
        window.GLOBAL_ERROR = err;
        console.log(err);
        output.innerHTML = newoutput;
    }

    function runit()
    {
        hideall();
        if ( window.CM_EDITOR !== false ) window.CM_EDITOR.save();
        var prog = document.getElementById("code").value;
        window.console && console.log('code');
        window.console && console.log(prog);
        if ( prog.length < 1 ) {
            alert("Nie masz żadnego kodu Python");
            return false;
        }
        $("#spinner").show();

<?php if ( $RESULT->id ) { ?>
        var toSend = { code : prog };
        $.ajax({
            type: "POST",
            url: "<?php echo addSession('sendcode.php'); ?>",
            dataType: "json",
            beforeSend: function (request)
            {
                request.setRequestHeader("X-CSRF-Token", CSRF_TOKEN);
            },
            data: toSend
        }).done( function (data) {
            console.log("Kod zaktualizowany na serwerze.");
        });
<?php } ?>

        var output = document.getElementById("output");
        output.innerHTML = '';
        if ( window.GLOBAL_TIMER != false ) window.clearInterval(window.GLOBAL_TIMER);
        window.GLOBAL_TIMER = setTimeout("finalcheck();",2500);
        Sk.python3 = true;
        Sk.configure({output:outf, read: builtinRead, python3: false});
        // Sk.execLimit = 10000; // Ten Seconds

        try {
            var module = Sk.importMainWithBody("<stdin>", false, prog);
        } catch (e) {
            $("#spinner").hide();
            var f = e + ''; // Convert to a string.
            if ( f.startsWith('SystemExit') ) return true;
            if ( window.GLOBAL_TIMER != false ) window.clearInterval(window.GLOBAL_TIMER);
            window.GLOBAL_TIMER = false;
            window.GLOBAL_ERROR = true;
            hideall();
            $("#redo").show();
            alert(e);
        }
        return false;
    }

    function resetcode() {
        if ( ! confirm("Czy na pewno chcesz zresetować obszar kodu do oryginalnego przykładowego kodu?") ) return;
        if ( window.CM_EDITOR !== false ) window.CM_EDITOR.toTextArea();
        window.CM_EDITOR = false;
        document.getElementById("code").value = document.getElementById("resetcode").value;
        if ( window.MOBILE === false ) load_cm();
    }

    function gradeit() {
        $("#check").hide();
        $("#spinner").show();

        var oldgrade = <?php echo($row && isset($row['grade']) ? $row['grade'] : '0.0'); ?>;
        var grade = 1.0 - <?php echo( $dueDate->penalty); ?>;
        if ( oldgrade > grade ) grade = oldgrade;  // Never go down
        window.console && console.log("Sending grade="+grade);

        if ( window.CM_EDITOR !== false ) window.CM_EDITOR.save();
        var code = document.getElementById("code").value;
        var toSend = { grade : grade, code : code };

        $.ajax({
            type: "POST",
            url: "<?php echo addSession('sendgrade.php'); ?>",
            dataType: "json",
            beforeSend: function (request)
            {
                request.setRequestHeader("X-CSRF-Token", CSRF_TOKEN);
            },
            data: toSend
        }).done( function (data) {
            window.console && console.log("Otrzymano ocenę...");
            window.console && console.log(data);
            $("#spinner").hide();
            if ( data.status == "success") {
                $("#gradegood").show();
                $('#curgrade').text('1');
            } else {
                $("#gradebad").show();
            }
        }).error( function(data) {;
            window.console && console.log("Otrzymano ocenę...");
            window.console && console.log(data);
            $("#spinner").hide();
            $("#gradebad").show();
        });
        return false;
    }

// Deal with missing IE String functions
// http://stackoverflow.com/questions/2308134/trim-in-javascript-not-working-in-ie
// https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/TrimLeft

if(typeof String.prototype.trimLeft !== 'function') {
    String.prototype.trimLeft = function() {
        return this.replace(/^\s+/,"");
    }
}

if(typeof String.prototype.trimRight !== 'function') {
    String.prototype.trimRight = function() {
        return this.replace(/\s+$/,"");
    }
}

</script>
<style>
pre {
white-space: -moz-pre-wrap; /* Mozilla, supported since 1999 */
white-space: -pre-wrap; /* Opera 4 - 6 */
white-space: -o-pre-wrap; /* Opera 7 */
white-space: pre-wrap; /* CSS3 */
word-wrap: break-word; /* IE 5.5+ */
font-size: 14px;
}
</style>
<?php
$OUTPUT->bodyStart();
$OUTPUT->topNav($menu);

if ( $USER->instructor ) {
    SettingsForm::start();
    SettingsForm::select('exercise', __('Brak ćwiczeń - Pythonowy plac zabaw'), array_keys($EXERCISES));
    SettingsForm::dueDate();
    SettingsForm::done();
    SettingsForm::end();

} // end isInstructor() 
?>

<div class="modal fade" id="info">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">
<?php
if ( isset($LINK->title) ) {
    echo(htmlent_utf8($LINK->title));
} else {
    $OUTPUT->welcomeUserCourse();
}
?></h4>
      </div>
      <div class="modal-body">
<?php if ( $EX === false ) { ?>
        <p>Oto otwarta przestrzeń do pisania i uruchamiania programów w języku Python. 
        Ta strona nie sprawdza wyników i nie odsyła oceny. Jest to miejsce, w
        którym możesz tworzyć niewielkie programy i testować różne rzeczy.</p>
<?php if ( $RESULT->id !== false ) { ?>
        <p>
        Kod, który tutaj wpiszesz, zostanie zapisany i przywrócony, gdy wrócisz na tę stronę.</p>
<?php } ?>
        <p>
        Pamiętaj, że jest to emulator Pythona działający w przeglądarce i gdy Twoje
        programy będą bardziej wyrafinowane, to możesz napotkać sytuacje, w których
        ten emulator zwróci <i>inne</i> wyniki niż prawdziwy Python działający
        na Twoim laptopie, komputerze stacjonarnym lub serwerze. Emulator 
        przeznaczony jest do prostych programów pisanych przez początkujących
        programistów w trakcie nauki programowania.
        </p> <p>
        W tym środowisku załadowane są trzy pliki ze strony
        <a href="https://py4e.pl/" target="_blank">Python dla wszystkich</a>,
        gotowe do otwarcia jeśli potrzebujesz przetwarzać pliki:
        "mbox-short.txt", "romeo.txt" i "words.txt".
        </p>
<?php } else { ?>
<?php if ( isset($LTI['grade']) ) { ?>
        <p style="border: blue 1px solid">Twój obecny wynik z tego ćwiczenia wynosi 
        <span id="curgrade"><?php echo($LTI['grade']); ?></span>.</p>
<?php } ?>
        <p>Twoim celem w tym automatycznie sprawdzanym ćwiczeniu jest napisanie lub
        wklejenie programu, który implementuje specyfikację zadania. Program uruchomisz
        naciskając przycisk "Sprawdź kod". Wynik programu będzie wyświetlany w
        sekcji "Twój wynik". Jeśli wynik nie jest zgodny z "Wynikiem oczekiwanym",
        nie zostaną Tobie przyznane żadne punkty.
        </p><p>
        Nawet jeśli "Twój wynik" dokładnie odpowiada "Wynikowi oczekiwanemu", 
        mechanizm sprawdzarkowy nadal sprawdzi kod źródłowy, tak aby upewnić się,
        że zaimplementowałeś zadanie przy użyciu oczekiwanych technik z danego 
        rozdziału książki. Komunikaty zwrotne wyświetlane przez system mogą
        również pomóc kursantom mającym problemy, będąc wskazówkami mówiącymi 
        czego potencjalnie może brakować w ich kodzie.
        </p>
        <p>
        Sprawdzarka zachowuje Twój najwyższy wynik, a nie ostatni wynik. Po
        uruchomieniu kodu otrzymasz komplet punktów (1.0) lub zero punktów (0.0)
        - ale jeśli posiadasz już 1.0 punkt i wykonasz niepoprawne uruchomienie kodu,
        Twój wynik nie zostanie zmieniony.
        </p>
<?php } ?>
<?php
    $identity = __("Zalogowano jako: ").$USER->key;
    if ( strlen($USER->email) > 0 ) {
        $identity .= ' ' . htmlentities($USER->email);
    }
    if ( strlen($USER->displayname) > 0 ) {
        $identity .= ' ' . htmlentities($USER->displayname);
    }
    echo("<p>".$identity."</p>")
?>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div id="overall" style="border: 3px solid black;">
<div id="inputs">
<div class="well" style="background-color: #EEE8AA">
<?php
if ( $dueDate->message ) {
    echo('<p style="color:red;">'.$dueDate->message.'</p>'."\n");
}
?>
<?php echo($QTEXT); ?>
</div>
<form id="forminput">
<?php
    if ( $EX !== false ) {
         echo('<button onclick="runit()" class="btn btn-primary" style="margin-left: 5px;" type="button">Sprawdź kod</button>'."\n");
    } else {
        echo('<button onclick="runit()" class="btn btn-warning" style="margin-left: 5px;" type="button">Uruchom Pythona</button>'."\n");
    }
    if ( strlen($CODE) > 0 ) {
        echo('<button onclick="resetcode()" class="btn btn-default" type="button">Zresetuj kod</button> ');
    }
    echo('<button onclick="$(\'#info\').modal();return false;" class="btn btn-default" type="button"><span class="glyphicon glyphicon-info-sign"></span></button>'."\n");
?>
<img id="spinner" src="static/spinner.gif" style="vertical-align: middle;display: none">
<span id="redo" style="float: inline-end;color:red;display:none"> Popraw swój kod i uruchom ponownie. </span>
<span id="complete" style="float: inline-end;color:green;display:none"> Zakończono uruchomienie. </span>
<span id="gradegood" style="float: inline-end;color:green;display:none"> Wynik zaktualizowany na serwerze. </span>
<span id="gradelow" style="float: inline-end;color:green;display:none"> Wynik zaktualizowany na serwerze. </span>
<span id="gradebad" style="float: inline-end;color:red;display:none"> Błąd zapisywania wyniku na serwerze. </span>
<br/>
&nbsp;<br/>
<div id="textarea" class="inputarea">
<textarea id="code" style="width:100%; height: 100%; font-family:Courier,fixed;font-size:16px;color:blue;">
<?php
if ( $OLDCODE !== false ) {
    echo(htmlentities($OLDCODE));
} else {
    echo(htmlentities($CODE));
}
?>
</textarea>
</div>
</div>
<div id="outputs">
<div id="left">
<b style="margin-left: 5px;">Twój wynik</b>
<pre id="output" class="inputarea"></pre>
</pre>
</div>
<?php if ( $EX !== false ) { ?>
<div id="right">
<b style="margin-left: 5px;">Oczekiwany wynik</b>
<pre id="desired" class="inputarea"><?php echo($DESIRED); echo("\n"); ?></pre>
<span id="desired2" style="display:none"><?php echo($DESIRED2); echo("\n"); ?></span>
</div>
<?php } ?>
</div>
</div>
</form>
</div>
<div id="footer" style="text-align: center">
Ustawienia:
<?php
    if ( $codemirror ) {
        $editurl = reconstruct_query('index.php',array("editor" => 0));
        $textval = "Ukryj edytor";
    } else {
        $editurl = reconstruct_query('index.php',array("editor" => 1));
        $textval = "Pokaż edytor";
    }
    echo('<a href="'.$editurl.'">'.$textval.'</a>. ');
?>
To oprogramowanie wykorzystuje <a href="http://skulpt.org/" target="_blank">Skulpt</a>
oraz <a href="http://codemirror.net/" target="_blank">CodeMirror</a>.
Kod źródłowy sprawdzarki jest dostępny na
<a href="https://github.com/andre-wojtowicz/tsugi" target="_blank">GitHubie</a>.
<textarea id="resetcode" cols="80" style="display:none">
<?php   echo(htmlentities($CODE)); ?>
</textarea>
<?php
$OUTPUT->footerStart();
?>
<script type="text/javascript" src="static/splitter/jquery.splitter-0.14.0.js"></script>
<script type="text/javascript">
// $(document).ready(function() { doc_ready(); } );
function compute_divs() {
    $doc = $(window).height();
    $ot = $('#overall').offset().top;
    $ft = $('#forminput').offset().top;
    window.console && console.log('doc='+$doc+' ft='+$ft+' overall='+$ot);
    $avail = $doc - ($ot - 30);
    if ( $avail < 400 ) $avail = 400;
    if ( $avail > 700 ) $avail = 700;
    $favail = $avail - $ft + $ot;

    $('#overall').width('95%').height($avail);
    $('#inputs').width('45%').height($avail);
    $('#forminput').width('95%').height($favail);
    $('#outputs').width('45%').height($avail);
    $('#textarea').height('100%');
    $('#output').height('100%');
<?php if ( $EX !== false ) { ?>
    $('#desired').height('100%');
<?php } ?>

    if ( window.SPLIT_1 == false ) {
        window.SPLIT_1 = $('#overall').split({orientation:'vertical', limit:100});
        window.console && console.log(window.SPLIT_1);
<?php if ( $EX !== false ) { ?>
        window.SPLIT_2 = $('#outputs').split({orientation:'horizontal', limit:100});
<?php } ?>
    } else {
        window.SPLIT_1.position('50%');
<?php if ( $EX !== false ) { ?>
        window.SPLIT_2.position('50%');
<?php } ?>
    }
    window.console && console.log('avail='+$avail+' favail='+$favail);
}

<?php if ( $codemirror ) { ?>
// Setup Codemirror
function load_cm() {
    window.CM_EDITOR = CodeMirror.fromTextArea(document.getElementById("code"),
    {
        mode: {name: "python",
        version: 2,
        singleLineStringErrors: false},
        lineNumbers: true,
        indentUnit: 4,
        matchBrackets: true
    });
    window.CM_EDITOR.setSize('100%', '100%');
}
<?php } ?>

 $().ready(function(){
    // I cannot make this reliable :(
    $(window).resize(function () { compute_divs(); });
    window.MOBILE = $(window).width() <= 480;
    // window.MOBILE = TRUE;
<?php if ( $EX === false && ! isset($_REQUEST['howdysuppress']) ) { ?>
    // You know it is a hack when you are doing setTimeOut() :)
    $('#info').on('hidden.bs.modal', function (e) {
        if ( MOBILE === false ) {
            compute_divs();
            setTimeout('compute_divs();', 1200);
        }
    })
    $('#info').modal();
<?php } ?>
    load_files();
    if ( MOBILE === false ) {
<?php if ( $codemirror ) { ?>
        load_cm();
<?php } ?>
        compute_divs();
        setTimeout('compute_divs();', 1200);
    }
 });
</script>
<?php
if ( $USER->instructor ) {
    echo("<!--\n");
    echo(">Globale obiekty Tsugi:\n\n");
    var_dump($USER);
    var_dump($CONTEXT);
    var_dump($LINK);
    echo("\n<hr/>\n");
    echo("Dane sesji (niskopoziomowe):\n");
    echo($OUTPUT->safe_var_dump($_SESSION));
    echo("\n-->\n");
}
?>
<?php
$OUTPUT->footerEnd();
