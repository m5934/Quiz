# Quiz

Opis projektu:

Quiz polega na udzieleniu poprawnych odpowiedzi na pytania.
Wybór odpowiedzi następuje przez naciśnięcie odpowiedniego przycisku na kontrolerze BuzzFeed.
Wygrywa ten, kto otrzyma najwięcej punktów.
Za każdą poprawną odpowiedź zdobywa się jeden punkt.

Projekt zaimplementowano w języku Python
i uruchomiona na **Respberry Pi 3**.

## Funkcje

Gra oferuje sprawiedliwą rywalizację między graczami.

## Wymaganie funkconalne

Możliwość uruhomienia gry na Raspberry Pi 3.

## Wymagania niefunkcjonalne

1. Płynność gry.
2. Czytelny interfejs.

## Architektura systemu wbudowanego

Gra jest zaintalowana na Raspberri Pi.
Kontrolery BuzzFeed są podłączone do urządzenia.


## Wymagania wstępne
1. Należy mieć zaintalowany Python 3.
2. Należy mieć podłączyny kontroler BuzzFeed do komputera.

## Instalacja gry
1. Sklonuj grę na swój komputer poniższymi poleceniami w interfejsie tekstowym:
```
git clone https://github.com/m5934/quiz-game
cd quiz-game
```

## Uruchomienie gry

Przed uruchomieniem gry należy zaintalować oprogramowanie obsługujące język Python
i podłączyć kontrolery BuzzFeed do Raspberry Pi 3.

Grę można uruchomić przez użycie polecenia:

```python3 quiz_game_py```

   
## Planowane funkcje

W przyszłości planuje się:

- zaimplementować interfejs graficzny ( prawdopodobnie będzie to aplikacja internetowa );
- utworzyć bazę danych do gry;
- uniezaleźnić grę od Raspberry Pi.


Autor:
Michał Wojciechowski
