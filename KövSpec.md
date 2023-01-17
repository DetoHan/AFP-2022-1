# Követelmény specifikáció


## 1. Jelenlegi helyzet

A vállalkozás Magyarországon edzőterem hálózatot üzemeltet.
Cégünket a partner 2021-ben kereste meg azzal a szándékkal, hogy készítsünk nekik egy olyan webfelületet, ahol az általuk elkészített edzésterveket, videóikat fel tudják tölteni.
Mivel a megrendelő foglalkoztat dietetikusokat is ezért a táplálkozás tudomány is szerepet kapna a webfelületen.
 Mivelaz elmúlt években többször be kellett zárni az edzőtermeket a vírushelyzettel kapcsolatos korlátozások miatt, ezért a tagok az edzéseiket otthon vagy más helyen végezték el sokszor segítség nélkül.
A megrendelő ezért egy weboldalt szeretne cégünkkelmegcsináltatni, ahol egy helyen számos igény tudna kielégíteni.
A korlátozások alatt az edzők különböző felületeken próbálták megosztani az edzésterveiket. A sportolóknak sokszor nem egyértelmű, hogy egy adott edzőtől mely linkeken elérhetőek a feltöltött videóik, illetve mely táplálkozási tanácsot és kitől fogadjanak el.

## 2. Megrendelői vízió (vágyálom)

A megrendelő a jelenlegi weboldallal az a célja, hogy a vállalkozásának a szolgáltatási színvonalát javítsa, illetve az általa foglakoztatott személyi edzők számát redukálja, mert az élő munkára rakódó közteher évről évre nő és ezáltal szeretné a költségeit csökkenteni, optimalizálni.
A bejelentkezés után a felhasználó rögtön egy igényes webfelülettel találkozna. 3 navigációs lehetősséggel.

  •	Videók

  •	Edzéstervek

  •	Diéták

A rendszergazdai oldalról viszont lehetőséget biztosítanák videók, képek feltöltésére és módosítására.
Mivel a megrendelő számos edzőtermet üzemeltet, így szeretne egy központi adatbázist is létrehozni azzal a szándékkal, hogy 
aki érvényes bérlettel rendelkezik ne csak ott tudjon edzeni ahol kiváltotta a bérletet, hanem az összes edzőtermeiben.

## 3. Jelenlegi üzleti folyamatok

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

## 4. Igényelt üzleti folyamatok

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

## 5. A rendszerre vonatkozó szabályok
 - General Data Protection Regulation (Általános adatvédelmi rendelet)

## 6. Követelménylista

ID|Verzió|Név|Kifejtés
--|------|---|--------
K01|V1.0|Bejelentkezési felület|Bejelentkezés email cím és jelszó megadásával
K02|V1.0|Kezdő weblaprész|Csak bejelentkezett felhasználóknak elérhető felület a tartalmak eléréséhez
K03|V1.0|Különböző jogosultságok|Eltérő jogosultságok biztosítása az edzőknek és a sportolóknak a tartalom módosítására
