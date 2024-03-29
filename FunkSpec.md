# Funkcionális Specifikáció

### 1. A rendszer céljai
Egységes weboldal elkészítése amely központi adatbázisból lekérve azonosítja a tagok hozzáférési jogosultságát,illetve az edzőterembe járó tagok egyébb igyényeit ki tudja elégíteni(informálni).</br>
A tulajdonos a központi adatbázison keresztül egy komplexebb képet kap tag létszámról, illetve a napi díjat fizető vendégek számáról.</br>
A tulajdonos távolabbi célja a rendszerrel, hogy kevesebb személyi edzőt alkalmazzon, hiszen az edzéshez szükséges információ erről a weboldalról elérhető.</br>
A tagok minden edzőtermet tudják használni, ne csak ott ahol bérletet vásároltak.</br>
### 2. Jelenlegi helyzet leírása

A jelenlegi helyzet rész a Követelmény Specifikációban van részletesen kidolgozva


### 3. Vágyálom rendszer leírása
Fontosabb szempontok:
 - Weboldal létrehozása (Laravel)
 - Regisztráció / Bejelentkező funkció
 - Különböző jogosultságok a sportolóknak és az edzőknek
 - File-ok feltöltésének és szerkesztésének lehetősége (Edzéstervek, videók)
 - Központi adatbázis létrehozása
 - Központi adatbázisból való lekérdezés lehetősége

### 4. Jelenlegi üzleti folyamatok

```mermaid
flowchart TD;
A("A sportoló vásárol egy edzőterem bérletet");
B("A sportoló fizet egy személyi edzőknek \naz egyénileg meghatározott fizikai erőnlét elérésének elősegítéséhez");
C("A személyi edzőnk felméri a sportolót \nés edzési tervet készít a korábban leegyeztetett cél elérése érdekében");
D("Az edző feltölti a videókat és a tervezetet \negy általa szimpatikusnak választott webhelyre");
A-->B;
B-->C;
C-->D;
D-->A;
```
### Adatbázis szemszögből

```mermaid
flowchart TD;
A("A sportoló vásárol egy edzőtermi bérletet");
B("A recepciós felviszi az adatait a helyi adatbázsba");
C("A sportoló csakis abba az edzőterembe járhat addíg amig le nem jár a bérlete");
D("A tulajdonos csakis helyi riportot tud készíteni");
A-->B;
B-->C;
C-->D;
D-->A;
```
### 5. Igényelt üzleti folyamatok
```mermaid
flowchart TD;
A("A sportoló vásárol egy edzőterem bérletet");
B("A sportoló fizet egy személyi edzőnknek \naz egyénileg meghatározott fizikai erőnlét elérésének elősegítéséhez");
C("A személyi edzőnk felméri a sportolót \nés edzési tervet készít a korábban leegyeztetett cél elérése érdekében");
D("Az edző feltölti a videókat és a tervezetet \naz egységes webfelületre");
A-->B;
B-->C;
C-->D;
D-->A;
```
### Adatbázis szemszögből

```mermaid
flowchart TD;
A("A sportoló vásárol egy edzőtermi bérletet");
B("A recepciós felviszi az adatait a központi adatbázsba");
C("A sportoló abba az edzőterembe járhat amelyikbe szeretne, mert adatai központilag lekérdezhető");
D("A tulajdonos teljes riportot készíthet, hiszen minden adat 1 helyen van.");
A-->B;
B-->C;
C-->D;
D-->A;
```
### 6. Követelménylista 

ID|Verzió|Név|Kifejtés
--|------|---|--------
K01|V1.0|Bejelentkezési felület|Bejelentkezés email cím és jelszó megadásával
K02|V1.0|Kezdő weblaprész|Csak bejelentkezett felhasználóknak elérhető felület a tartalmak eléréséhez
K03|V1.0|Különböző jogosultságok|Eltérő jogosultságok biztosítása az edzőknek és a sportolóknak a tartalom módosítására
K04|V1.0|Központi adatbázis létrehozása| Összes tag adatainak a tárolása
K05|V1.0|Regisztrációs felület létrehozása|Itt lehet a tagokat felvinni az adatbázisba
K06|V1.0|Jogosultsági felület létrehozása|Itt lehet a tagok egyébb jogosultságait módosítani az adatbázisban
K07|V1.0|Feltölthetőségi funkció|Itt lehet a weboldalra videót és képet feltölteni
