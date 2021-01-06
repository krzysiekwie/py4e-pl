# Szukaj linii, które zaczynają się od 'X',
# po których występują dowolne niebiałe znaki oraz ':',
# po których występuje spacja i dowolna liczba.
# Liczba może być całkowita.
# Wypisz liczbę jeśli jest ona większa od zera.
import re
hand = open('mbox-short.txt')
for line in hand:
    line = line.rstrip()
    x = re.findall('^X\S*: ([0-9.]+)', line)
    if len(x) > 0:
        print(x)
