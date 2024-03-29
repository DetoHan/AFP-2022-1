# Rendszerspecifikáció

## 1. Rendszer célja

Egy olyan weboldal és hozzá kapcsolódó adatbázis elkészítése, amely alkalmas a követelmény specifikációban leírt igények kielégítésére.</br>
A cégünk kizárólag a weboldal és a hozzá kapcsolódó adatbázist készíti el, a weboldalon későbbiekben megjelenő tartalom elkészítése nem a projekt része.</br>

## 2. Projekt terv
### 2.1 Projekt szerepkörök, felelőségek

A scrum master feladata, hogy a folyamatosan kommunikáljon a csapat tagjaival, illetve a sprint során</br>
átlendítse a nehézségeken a projekten dolgozókat.

### 2.2 Projekt munkások és felelőségeik

A projekten 2 fő junior és 1 fő senior programozó dolgozik. Az ő feladatuk hogy a frontend és a backend feladatok elvégzése.</br>
A teszelés a 2 fő junior programozó feladata.</br>
A projekt manager feladata, hogy felügyelje a munkafolyamatokat és betartassa a határidőket.

Humán erőforrás

- 2 fő junior programozó 
- 1 fő senior programozó
- 1 fő projekt manager
- 1 fő Scrum master


###  2.3 Ütemterv

ID|Tevékenység|Időtartam-tól|Időtartam-ig|Függőség
--|------|---|--------|------
1|Igény Elemzés|2021.03.16|2021.03.17||
2|Rendszerjavaslat|2021.03.17|2021.03.18||
3|Rendszerspecifikáció|2021.03.18|2021.03.18||
4|Logikai és fizikai tervezés|2021.03.18|2021.03.19||
5|Implementáció|2021.03.19|2021.03.20||
6|Tesztelés|2021.03.20|2021.03.22||
7|Rendszerátadás és bevezetés|2021.03.22|2021.03.23||
8|Projektzárás||2021.03.23||

### 2.4 Mérföldkövek
- A prototipus bemutatása
- Az elkészült szoftver átadása

## 3.Üzleti folyamatok modellje

### 3.1 Üzleti szereplők

A weboldalt azon sportolók használhatják ingyenesen, akik a megrendelő által üzemeltetett fittnesz terembe </br>
érvényes bérlete van. Azoknak, akiknek nincs érvényes bérlete azoknak fizetni kell, ha meg szeretnék tekinteni a weboldal tartalmát.</br>


### 3.2 Üzleti folyamatok

A weboldalra való belépés egy klasszikus login funkción keresztül történik. Szükséges egy felhasználónév illetve egy jelszó megadása. </br>
Amennyiben ez sikeres akkor, a felhasználó belép a weboldalra ellenkező esetben a belépés sikertelen.</br>
A belépés után megjelenik a weboldal tartalma ahol a felhasználó megtekintheti a kívánt tartalmat.

üzleti folyamatok recepciós szemszögből:

Azon felhasználók (dolgozók), akiknek van jogosultsága új tagot regisztrálni az adatbázisba annak egy bővitett funkcióval ellátott oldal jelenik meg. 

* új sportoló regisztrálása
* sportoló törlése
* sportoló adatainak a módosítása
* napi jegyet vásárló személy hozzáadása

Azon felhasználók akik redszergazdai vagy üzeltvezetői jogosultsággal rendelkeznek azoknak megjelenik az összes funkció

* új dolgozó hozzáadása a rendszerhez
* dolgozó törlése a rendszerből
* jogosultság beállítása
* dolgozói funkciók

### 3.3 Üzleti Entitások

* napi jegy
* bérlet

## 4.Követelménylista:

Itt azon funkciók vannak felsorolva, amely el is fog készülni.

ID|Verzió|Név|Kifejtés
--|------|---|--------
K01|V1.0|Bejelentkezési felület|Bejelentkezés email cím és jelszó megadásával
K02|V1.0|Kezdő weblaprész|Csak bejelentkezett felhasználóknak elérhető felület a tartalmak eléréséhez
K03|V1.0|Különböző jogosultságok|Eltérő jogosultságok biztosítása az edzőknek és a sportolóknak a tartalom módosítására
K04|V1.0|Központi adatbázis létrehozása| Összes tag adatainak a tárolása
K05|V1.0|Regisztrációs felület létrehozása|Itt lehet a tagokat felvinni az adatbázisba
K06|V1.0|Jogosultsági felület létrehozása|Itt lehet a tagok egyébb jogosultságait módosítani az adatbázisban
K07|V1.0|Feltölthetőségi funkció|Itt lehet a weboldalra videót és képet feltölteni
K08|V1.0|Új dolgozó hozzáadás az adatbázisba|Az újonnan felvett dolgozó adatainak a felvitele az adatbázisba
K09|V1.0|Dolgozó törlése az adatbázisból|Megszünt munkaviszony esetén a dolgozó törlése az adatbázisból

### 4.1 Törvényi Előírások, szabványok

  *  2013 évi L. törvény az állami és önkormányzati szervek elektronikus információbiztonságáról 1. § </br>
  *  A weboldal minden részének megfeleltetése a W3C szabványnak </br>
  

## 5 Funkcionális Terv

### 5.1 Rendszer szereplői

A rendszerben két nagyobb csoport van jelen. Az egyik a bérlettel rendelkezők sportolók csoportja, a másik az adminisztrációt végzők csoportja.</br>
A sportolók igénybe veszik az edzőterem illetve a weboldal szolgáltatásait, a dolgozók a sportoló adatait regisztrálják, módosítják és törlik.
A rendszergazdai jogosultsággal rendelkezők új dolgozót képesek felvinni a rendszerbe, módosítani az eltárolt adatokat illetve törölni azokat. 


### 5.2 Rendszerhasználati esetek

![használati eset](use_case.drawio.png)

### 5.3 Képernyőtervek
A képernyőtervek a figma software-el készülnek.

Főbb oldalak:
- **kezdolap**, amely minden felhasználó számára először jelenik meg.  

- **belépés / regisztáció**. A kezdőlapon a kiválasztott gomb megnyomását követően érhetjük el.

- **dashboard**, a már regisztrációval rendelkező és belépett felhasználóknak elérhető. Innen tudunk a weblap lényegesebb részeibe továbblépni(Feltöltés, dokumentumok letöltése, file-ok, videók)  

- **dokumentumok**, file-ok felsorolva nevük és szerzőjük alapján elérhetőek és letölthetőek.   

- **upload**, file-ok feltöltése az adatbázisba.  


## 6. Fizikai Környezet

A megrendelt weboldal a Laravel 9 weboldalfejlesztői környezetbe fog elkészülni.</br>
Az elkészítendő weboldal platform független, így bármely internettel és webböngészővel rendelkező hardware-rel elérhető lesz.</br>
Az adatbázisba való regisztráláshoz, lekérdezéshez, módosításhoz illetve törléshez szükség lesz egy kliens alkalmazás fejlesztésére is,</br>
amely C# nyelven, Visual Studio szoftverfejlesztői környezetben fog elkészülni.</br>
Ennek az alkalmazásnak a futtatásához szükséges lesz valamely .net keretrendszerrel működő számítógép vagy laptop stb...


## 7 Adatbázis terv
Táblák:
- Felhasználó
	- táblanév: users
	- mező nevek:
        - ID
        - name
        - email
        - password
        
- Browser sessions
	- táblanév: session
	- mező nevek:
        - ID
        - user_id
        - ipaddress
        - user_agent
        - payload
        - last activity

- Dokumentumok
	- táblanév: files
	- mező nevek:
        - ID
        - name
        - author
        - date

### Felhasználói adatbázis modell

![Egyed kapcsolat diagramm](database_diagramm.png)

### A fájlfeltöltéshez kapcsolódó adatbázis modell

![Egyed kapcsolat diagramm](files_diagramm.png)


## 8 Implementációs terv
A felhasználói felület HTML, CSS, JavaScript és Laravel blade sablonrendszeri technológiák felhasználásával készülnek. 
Mysql adabázist használunk az adatok tárolására. Visual studio code használata implementáláshoz.



## 9 Tesztterv
### 9.1 A teszteléshez 8 kisebb csoportra osztjuk a feladatokat

1. Dashboard weblaprész
- Innen tudjuk elérni a weboldal főbb részeit. A gombok használata során teszteljük a helyes navigálást a weblaprészek között.

2. File feltöltő weblaprész
- Gombok helyes működése és a feltöltés megfelelő működésének tesztelése

3. Dokumentumok weblaprész
- Letöltés gomb működése, dokumentumok megjelenése.

4. Kétfaktoros authentikáció
- Helyes jelszó megadást követően meg kell jelennie egy qr kódnak. Amit a google authenticator telefonos applikációnak el kell fogadnia. Ezt követően
a telefonos applikáción megjelenő kódot be kell írni a "code" sorba. Csak helyes kód megadása esetén mehet végbe a párosítás.

5. Felhasználó bejelentkezés és regisztráció
- Regisztráció során az e-mail címre olyan megkötés vonatkozik, hogy a " @ " karakternek kötelezően szerepelnie kell benne. Ellelkező esetben a regisztráció sikertelen.
Jelszó megadásához minimum 8 karakter szükséges.

6. Felhasználó adatainak megváltoztatása
- A felhasználó megváltoztathatja a felhasználónevét nagyobb megkötések nélkül. 
Szerepelhet benne kis és nagybetű, speciális karakter, számok. 1től 32 karakterig is terjedhet.

7. Felhasználói fiók törlése
- Törlés esetén meg kell jelenni egy ablaknak, amely bekéri a jelszavunkat. Helyes jelszó megadást követően törlődhet a regisztrált profil.

8. Bejelentkezett eszközök kiléptetése
- Kiléptetés esetén szintén helyes jelszó megadása szükséges és a folyamat ezt követően futhat le.

### 9.1 Dashboard weblaprész teszt

|Lépés|Feladat|
|-----|-------|
|1.   | Weboldal megjelenik 
|2.   | Kettő "nézd meg gomb" és egy "feltöltés" gomb kattintható 
|2.1  | Dokumentumok "Nézd meg" gomja átnavigál bennünket a dokumentumok weblaprészre 
|2.2  | FIT video "Nézd meg" gomja átnavigál bennünket egy workout playlistre 
|2.3  | "feltöltés" gomb átnavigál bennünet a dokumentum feltöltő oldalra 
|3.   | Jobb felső sarokban a nevünkre kattintva felugrik egy ablak "Profile" és "Log out" lehetőségekkel
|3.1  | "profile" gombra kattintva megjelenik a profil beállítások weblaprész 
|3.2  | "Log out" gombra kattintva kiléptet profilunkból és visszatérünk a bejelentkezés / regisztráció oldalra 
|3.4  | Kijelentkezést követően "Login" , "register" gomb kattintható, megjeleníti a belépés / regisztráció weblaprészt 

### 9.2 File feltöltés teszt
|Lépés|Feladat|
|-----|-------|
|1.   | Weboldal megjelenik 
|2.   | "Fájl kiválasztása" és "Kész" gomb kattintható 
|2.1. | "Fájl kiválasztása" gomb megnyomása után tallózhatunk a saját file-jaink között 
|3.   | Tallózást követően a gomb mellett megjelenik a kiválasztott file neve 
|3.1  | "Kész" gombra kattintva kiírásra kerül a feltöltött titkosított file név a weblapon
|3.2  | Feltöltést követően a file eltárolódik a storage --> app --> docs mappában

### 9.3 Dokumentumok weblaprész teszt

|Lépés|Feladat|
|-----|-------|
|1.   | Weboldal megjelenik 
|2.   | Dokumentum neveket, szerzőket megjeleníti
|3.   | Dokumentumok melletti letöltés gomb kattintható
|4.   | "Letöltés" gombra kattintva letölti a megadott dokumentumot 

### 4. Kétfaktoros authentikáció
|Lépés|Feladat|
|-----|-------|
|1.   | Enable-gomb megnyomása után megjelenik egy ablak, ahová jelszavunkat szükséges megadni.
|1.2  | Helytelen jelszó megadása esetén hibaüzenet jelenik meg: "This password does not match our records." 
|1.3  | Helyes jelszó megadása esetén egy beolvasandó QR kód jelenik meg. 
|1.4  | Google authenticator applikáción a qr kód beolvasása után egy kódot kapunk 
|1.4  | A megkapott kódot ha beírjuk helyesen a weboldal "Code" mezőjébe, akkor recovery kódokat szükséges látni valamint a disable gombot 
|1.5  | A megkapott kód helytelen rögzítése esetén hibaüzenetet kapunk: "The provided two factor authentication code was invalid."

### 9.4 Felhasználó bejelentkezés regisztráció teszt
|Lépés| Feladat |
| --- | ------- | 
|1.   | Weboldal megjelenik 
|2.   | Login gombra kattintva megjelenik a bejelentkező oldal 
|3.   | Helyes adatok megadását követően Login gombra kattintva megjelenik a kezdőoldal 
|3.1  | Helytelen adatok megadásával a Login gombra kattintva hibaüzenet jelenik meg. " Whoops! Something went wrong. " 
|3.2  | Elfelejtett jelszó gombra kattintva password reset e-mailt küld a felhasználónak " 
|4.   | Register gombra kattintva megjelenik a regisztrációhoz szükséges weboldal 
|4.1  | Helytelen e-mail cím kitöltése esetén hibaüzenet jelenik meg: "Kérjük írjon egy '@' karaktert e-mail címébe" 
|4.2  | Rövid jelszó megadása esetén hibaüzenet jelenik meg: "The password must be at least 8 characters." 

### 9.5 Felhasználó adatainak megváltoztatása teszt
|Lépés| Feladat 
| --- | ------- | 
|1.   | Profile-gombra kattintva megjelennek a felhasználóval kapcsolatos beállítási lehetőségek 
|2.   | Név és email sikeres megváltoztatása után "saved"-üzenet megjelenése a save-gomb mellett 
|2.1  | Helytelen e-mail cím kitöltése esetén hibaüzenet jelenik meg: "Kérjük írjon egy '@' karaktert e-mail címébe" 
|3.   | Jelszó megváltoztatása során ha rövid jelszót adunk meg "The password must be at least 8 characters."-üzenetet kapunk 
|3.1  | Jelszó megváltoztatása során ha nem azonos a kétszer megadott jelszó, akkor hibaüzenet jelenik meg: "The password confirmation does not match."

### 9.6 Felhasználói fiók törlése teszt
|Lépés| Feladat | 
| --- | ------- | 
|1.   | Delete account gomb megjelenik. 
|2.   | Delete account gomb megnyomására megjelenik egy ablak, ahová jelszavunkat szükséges megadni. 
|2.1  | Helytelen jelszó megadása esetén hibaüzenet jelenik meg: "This password does not match our records."  
|2.2  | Helyes jelszó megadást követően kiléptet minket és átnavigál a weboldal az index.php-ra 

### 9.7 Bejelentkezett felhasználók kiléptetése teszt
|Lépés| Feladat | 
| --- | ------- | 
|1.   | Log out gomb megjelenik.
|1.   | Log out other browser sessions-gomb megnyomása után megjelenik egy ablak, ahová jelszavunkat szükséges megadni.
|1.2  | Helytelen jelszó megadása esetén hibaüzenet jelenik meg: "This password does not match our records." 
|1.3  | Helyes jelszó megadása esetén minden session megszűnik a jelenleg használt eszközünkön kívül.
|1.4  | Helyes jelszó megadása esetén megjelenik egy "Done." Felirat a Log out other browser sessions-gomb mellett.

Amennyiben megfelelő eredményt kapunk, úgy a teszt jegyzőkönyben a feladat "success" eredmént kap, ellenkező esetben "failed" kimenetellel rögzítjük. Ezt követően a feljegyzett hibákat kijavítjuk és újabb teszteléseket végzünk.



