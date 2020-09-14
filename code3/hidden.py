# Przechowuj ten plik oddzielnie

# 1. Zaloguj się lub utworz konto na https://twitter.com
# 2. Wejdź na stronę https://developer.twitter.com/en/apps
#    i spróbuj utworzyć nową aplikację ("Create an app"):
#    a) zostaniesz poproszony o utworzenie konta deweloperskiego
#       (Please apply for a Twitter developer account);
#    b) kliknij na "Apply"
#    c) wybierz "Hobbyist" > "Exploring the API" i wybierz "Next"
#    d) uzupełnij formularz (może być wymagana weryfikacja numeru telefonu)
#    e) w kolejnym kroku opisz po angielsku jak zamierzasz wykorzystać dane
#       Twittera (możesz wspomnieć, że uczysz się Pythona, chcesz dowiedzieć
#       się jak korzystać z API, pobrać oś czasu użytkownika oraz
#       listę jego znajomych); w sekcji "Specifics" zaznacz wszystko
#       na "No"
#    f) zweryfikuj zgłoszenie, przeczytaj warunki umowy i wyślij zgłoszenie
#    g) potwierdz zgłoszenie klikając na link w wiadomości mailowej,
#       którą otrzymasz po wysłaniu zgłoszenia
# 3. Gdy Twoje zgłoszenie zostanie zaakceptowane, wejdź jeszcze raz
#    na https://developer.twitter.com/en/apps i ponownie spróbuj
#    utworzyć nową aplikację ("Create an app")
# 4. Utwórz aplikację i podmień poniżej cztery ciągi znaków dotyczące
#    consumer_key, consumer_secret, token_key i token_secret

def oauth():
    return {"consumer_key":    "h7Lu...Ng",
            "consumer_secret": "dNKenAC3New...mmn7Q",
            "token_key":       "10185562-eibxCp9n2...P4GEQQOSGI",
            "token_secret":    "H0ycCFemmC4wyf1...qoIpBo"}
