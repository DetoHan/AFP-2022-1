# Funkcionális Specifikáció

### 1. A rendszer céljai
Egységes weboldal elkészítése a sportolók és edzők számára a file-ok megosztásához.
### 2. Jelenlegi helyzet leírása
Az edzéstervek és videók különböző weboldalakra és alkalmazásokra vannak feltöltve.

A sportolók vagy nem találják meg a korábban átküldött linkeket, vagy a megadott weboldalakon idő előtt eltűnnek a file-ok.
### 3. Vágyálom rendszer leírása
Fontosabb szempontok:
 - Weboldal létrehozása (Laravel)
 - Regisztráció / Bejelentkező funkció
 - Különböző jogosultságok a sportolóknak és az edzőknek
 - File-ok feltöltésének és szerkesztésének lehetősége (Edzéstervek, videók)

### 3. Jelenlegi üzleti folyamatok
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

### 4. Igényelt üzleti folyamatok
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

### 5. Követelménylista 

ID|Verzió|Név|Kifejtés
--|------|---|--------
K01|V1.0|Bejelentkezési felület|Bejelentkezés email cím és jelszó megadásával
K02|V1.0|Kezdő weblaprész|Csak bejelentkezett felhasználóknak elérhető felület a tartalmak eléréséhez
K03|V1.0|Különböző jogosultságok|Eltérő jogosultságok biztosítása az edzőknek és a sportolóknak a tartalom módosítására
