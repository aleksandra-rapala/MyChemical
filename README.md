# MyChemical

Dokumentacja aplikacji „MyChemical”

Aplikacja jest przeznaczona dla młodych ludzi uczących się chemii.
Dzięki niej można mieć zawsze pod ręką ulubione tablice chemiczne lub przydatne kalkulatory.
Dodatkowo jest możliwość dodawania reackji chemicznych.

1. DOKUMENTACJE W README.MD
2. KOD NAPISANY OBIEKTOWO (CZĘŚĆ BACKENDOWA) -> Kod został napisany obiektowo.
3. DIAGRAM ERD -> Wygenerowany diagram ERD -> Link
4. GIT - commity, a wersja ostateczna jest zmergowana do gałęzi main.
5. REALIZACJA TEMATU -> Temat projektu zgodny z przesłanym zgłoszeniem, funkcjonalność projektu została pokryta w co najmniej ~60%.
6. HTML - niektóre widoki zostały umieszczone w szablonach, aby nie replikować kodu, np. <?php include('footer.php') ?>
7. POSTGRESQL -> Połączenie z bazą PostgreSQL, stosowano odpowiednie typy, połączenia przez PDO itd.
8. ZŁOŻONOŚĆ BAZY DANYCH -> Baza danych zawiera wszystkie typy relacji, co widać na wygenerowanym diagramie ERD -> Link
9. PHP -> Wersja języka PHP co najmniej 7.4, użyto funkcji wbudowanych w PHP oraz bardzo dobra umiejętność posługiwania się składnią.
10. JAVA SCRIPT
    Zastosowanie języka Javascript w utworzeniu
    → walidacji formularzy (Przy rejestracji)   -> Link
    → zapytań Fetch API (Przy dawaniu serduszek)  -> Link
    → do tworzenia, pobierania oraz manipulowania elementami DOM (np. przy tworzeniu kalkulatora Molar Mass) -> Link
11. FETCH API (AJAX) -> Zastosowanie Fetch API z użyciem metody POST oraz GET. Przetworzenie otrzymanych danych z serwera w blokach then(). (Przy wyszukiwaniu w search-bar) -> Link
12. DESIGN -> Projekt utrzymany jest w starannej i czytelnej stylistyce. Stosowane są klasy CSS, brak mieszania styli w plikach HTML. Kod CSS jest czytelny i poprawny.
13. RESPONSYWNOŚĆ -> Zaprezentowano co najmniej 5 widoków responsywnych, działających pod różne urządzanie wybrane z Narzędzi Deweloperskich przeglądarki. Zastosowano CSS media queries.
14. LOGOWANIE -> Proces logowania użytkowników w oparciu o bazę danych, zastosowanie odpowiedniego mapowania i weryfikacji. -> Link
15. SESJA UŻYTKOWNIKA
    Sesja zostaje utrzymana, aż do wylogowania użytkownika. Zastosowano $_SESSION, jak i również  $_COOKIE. -> Link
16. UPRAWNIENIA UŻYTKOWNIKÓW -> Uprawnienia użytkowników są weryfikowane przez system w trakcie działania aplikacji.
17. ROLE UŻYTKOWNIKÓW -> Aplikacja posiada przypisane role dla użytkowników - dwa typy ról: zwykły użytkownik oraz administrator.
18. WYLOGOWYWANIE -> Usunięto sesję/ ciasteczka przy wylogowaniu użytkownika oraz zaktualizowano bazę danych.
19. WIDOKI, WYZWALACZ/ FUNKCJE, TRANSAKCJE NA BAZIE DANYCH    -> brak
20. AKCJE NA REFERENCJACH -> W zapytaniach stosowane są JOINY, odwołanie się do relacyjnych tabel.
21. BEZPIECZEŃSTWO -> Hasła są hashowane (dodatkowo zastosowano sól). Dostęp do zawartości dla zalogowanych użytkowników nie jest osiągalny bez autoryzacji.
22. BRAK REPLIKACJI KODU -> Starałam się, aby kod nie był replikowany.
23. CZYSTOŚĆ I PRZEJRZYSTOŚĆ KODU -> Zachowano czystość i przejrzystość kodu.
    *24. BAZA DANYCH ZRZUCONA DO PLIKU .SQL
    Pobrałam kopię bazy danych wyeksportowaną do pliku .sql, który umieściłam w repozytorium.
    → Link