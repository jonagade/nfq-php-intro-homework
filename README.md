PHP - Intro. Namų darbų užduotis.

1. Autoloader.
Paskaičius internete randu, kad nėra autoloader'io skirto funkcijoms. Tačiau galima naudoti:
"autoload": {
    "files": []
}
Čia galima nurodyti failus, kuriuos norime autoload'inti. Panaudoti psr-4 autoload galima su klasėmis. Tačiau tada tai tampa objektiniu programavimu. 
Atrodytų taip:
"autoload": {
    "psr-4": {
        "Function\\": "functions/"
        }
    }
}  

2. Funkcijos.
Dokumentacijoje aprašyta, kad PHP bandys pakeisti argumento tipą į tokį kurio funkcija tikisi, jei tai yra įmanoma.
Kviečiant kiekvieną funkciją matome, kad pirma funkcija grąžina rezultatą 6.2, o visos likusios grąžina 6. 
Pirmos funkcijos atveju, mes visai neatsižvelgiame į paduodamų argumentų tipą, todėl funkcija tiesiog susumuoja reikšmes ir gauname 6.2.
Antros funkcijos atveju, mes pasakome, kad norime rezultatą grąžinti kaip int tipo, paduodamuose argumentuose yra float tipo reikšmė, todėl susumavus reikšmes (6.2) ir pavertus tai į int tipą gauname 6.
Trečios funkcijos pakeitimas buvo, kad funkcija gali priimti tik int tipo reikšmes, tačiau siunčiant pvz. '1' ši validacija yra apeinama ir funkcijoje '1' yra pakeičiamas į 1. Panaši situacija yra ir su 2.2, kuris yra float tipo, funkcijos vidui jis jau yra pakeičiamas į int tipo 2, ir rezultatas gaunamas taip pat 2. Tačiau vietoje '1' pasuojant kitokią String reikšmę pvz. 'hello' jau gausime TypeError, nes funkcijos viduj to negalime pakeisti į int tipo reikšmę (funkcijoje panaudojus var_dump galime matyti pakeistus tipus ir reikšmes).
Ketvirta funkcija turi papildymą declare(strict_values = 1). Tačiau kviečiant testinę funkciją su duomenimis 3, 2.2, '1' taipogi gauname atsakymą 6 ir strict validacija nesuveikia. Dokumentacijoje aprašyta, kad strict_values = 1 suveiks tame faile, kuriame funkcija yra kviečiama, ir jeigu kviečiamos funkcijos faile yra nurodyta strict_values = 1, o root faile ne, tai bus atsižvelgiama į root failo aprašymą (weak typing).

3. Error'ai.
Panaudojus try / catch buvo sugauti Type error'ai galiojantys soft ir strict funkcijoms, jei paduodamas argumentas yra žodis (pvz: 'hello').
Taip pat sugautas namespace error'as, jeigu būtų panaudotas neteisingas namespace aprašymas (pvz: Pridėtas papildomas žodis).
Taip error'as suveiks jeigu bus pakeistas pačios funkcijos pavadinimas į neegzistuojantį.