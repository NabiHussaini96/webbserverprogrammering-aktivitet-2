# Aktivitet 2 – Serverside-programmering med PHP

## Projektbeskrivning

Detta projekt skapades inom kursen Webbserverprogrammering 1 och demonstrerar grunderna i serverside-programmering med PHP.

Projektet består av ett HTML-formulär där användaren kan ange sitt namn och ett meddelande. Informationen skickas till ett PHP-skript som bearbetar datan på serversidan och genererar ett personligt svar.

Projektet körs lokalt med hjälp av XAMPP och Apache-webbserver.

---

## Funktioner

- HTML-formulär
- PHP-bearbetning på serversidan
- POST-metod för formulärdata
- Validering av tomma fält
- Skydd mot XSS med `htmlspecialchars()`
- Enkel och responsiv design med CSS

---

## Projektstruktur

```text
aktivitet2/
│
├── index.php
├── process.php
├── style.css
└── README.md
```

---

## Tekniker

Projektet använder:

- PHP
- HTML5
- CSS3
- Apache
- XAMPP

---

## Hur projektet fungerar

1. Användaren fyller i namn och meddelande.
2. Formuläret skickas via POST till `process.php`.
3. PHP tar emot datan.
4. PHP kontrollerar att alla fält är ifyllda.
5. Om valideringen lyckas visas ett personligt meddelande.
6. Om något fält är tomt visas ett felmeddelande.

---

## Säkerhet

Projektet använder:

```php
htmlspecialchars()
```

för att skydda mot Cross-Site Scripting (XSS).

Exempel:

```php
echo htmlspecialchars($namn);
```

Detta gör att användarinmatning visas som text istället för att köras som kod.

---

## Validering

Server-side validering används för att säkerställa att användaren fyller i alla fält.

Exempel:

```php
if(empty($namn) || empty($meddelande))
{
    echo "Alla fält måste fyllas i.";
}
```

---

## Installation

### 1. Installera XAMPP

Ladda ner och installera XAMPP.

### 2. Starta Apache

Öppna XAMPP Control Panel och starta Apache.

### 3. Placera projektet i htdocs

Projektet placeras i:

```text
C:\xampp\htdocs\aktivitet2
```

### 4. Öppna projektet

Besök:

```text
http://localhost/aktivitet2
```

---

## Testning

Projektet testades lokalt med:

- XAMPP
- Apache
- Google Chrome

Följande funktioner verifierades:

- formuläret visas korrekt
- data skickas med POST
- PHP bearbetar datan korrekt
- validering fungerar
- felmeddelanden visas vid tomma fält

---

## Lärandemål

Genom projektet har följande moment tränats:

- klient-serverkommunikation
- formulärhantering
- PHP-grunder
- POST-metoden
- validering
- säkerhet i webbapplikationer
- lokal servermiljö med XAMPP

---

## Författare

Ghulam Nabi Hussaini

Webbserverprogrammering 1