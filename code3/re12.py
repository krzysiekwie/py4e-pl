# Szukaj linii, które mają postać 'Details:...rev='
# i są zakończone liczbą
# Jeśli liczba jest większa niż zero, to wypisz jej wartość
import re
hand = open('mbox-short.txt')
for line in hand:
    line = line.rstrip()
    x = re.findall('^Details:.*rev=([0-9.]+)', line)
    if len(x) > 0:
        print(x)
