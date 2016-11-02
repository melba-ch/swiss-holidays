# Swiss Holidays
Does this date is a holiday in these cantons ?

## Installation

### Using Composer
You can use the `composer` package manager to install. Either run:

    $ php composer.phar require melba-ch/swiss-holidays "*"

or add:

    "melba-ch/swiss-holidays": "*"

to your composer.json file

### Manual Install

You can also manually install the API easily to your project. Just download the source [ZIP](https://github.com/melba-ch/swiss-holidays/archive/master.zip) and extract its content into your project.

## Usage

Does this date is a holiday in these cantons
```php
use MelbaCH\SwissHolidays\SwissHolidays;

$date = new \DateTime("2018-4-1");
$holidays = SwissHolidays::isHoliday($date, ["VD", "SO", "BE"]);
```

Get holidays of the year in these cantons
```php
use MelbaCH\SwissHolidays\SwissHolidays;

$holidays = SwissHolidays::getHolidays("2019", ["TG", "ZH", "AG"]);
```


## Cantons

List of Swiss cantons

- AG : Aargau
- AI : Appenzell Innerrhoden
- AR : Appenzell Ausserrhoden
- BE : Bern
- BL : Basel-Landschaft
- BS : Basel-Stadt
- FR : Fribourg
- GE : Geneva
- GL : Glarus
- GR : Graubünden
- JU : Jura
- LU : Luzern
- NE : Neuchâtel
- NW : Nidwalden
- OW : Obwalden
- SG : St. Gallen
- SH : Schaffhausen
- SO : Solothurn
- SZ : Schwyz
- TG : Thurgau
- TI : Ticino
- UR : Uri
- VD : Vaud
- VS : Valais
- ZG : Zug
- ZH : Zürich

## Holidays
List of holidays

- New Year's Day : 1 January
- St. Berchtold : 2 January
- Epiphany : 	6 January
- Republic Day : 1 March
- St Joseph's Day : 19 March
- Näfelser Fahrt : 3 April
- Palm Sunday : Easter Sunday - 7 days
- Good Friday : Easter Sunday - 2 days
- Easter Sunday : 	Easter Sunday
- Easter Monday : Easter Sunday + 1 day
- Labor Day : 1 May
- Ascension : Easter Sunday + 39 days
- Pentecost : Easter Sunday + 49 days
- Whit Monday : Easter Sunday + 50 days
- Corpus Christi : Easter Sunday + 60 days
- Fête d'Indépendance : 	23 June
- Saints Peter and Paul : 29 June
- Swiss National Day : 1 August
- Assumption : 15 August
- Jeûne genevois : Thursday after 1st Sunday in September
- Federal Day of Thanksgiving, Repentance and Prayer : 3rd Sunday in September
- Lundi du Jeûne : Monday after 3rd Sunday in September
- Saint Nicholas of Flüe Day : 25 September
- All Saints Day : 1 November
- Immaculate Conception : 8 December
- Christmas Day : 25 December
- St Stephen's Day : 	26 December
- Restoration of the Republic : 31 December
- New Year's Eve : 31 December
