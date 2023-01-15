# Tesztelési jegyzőkönyv
| 1.0 verzió


| | |
| --- | --- |
| Név: | Vas Ádám |
| Böngésző: | Google Chrome; 109.0.5414.74 |
| Operációs rendszer: | Windows 11 Home |


## Tesztelendő feladatok:
#### 1. Felhasználó bejelentkezés és regisztráció
#### 2.	Felhasználó adatainak megváltoztatása
#### 3. Felhasználói fiók törlése
#### 4.	Bejelentkezett eszközök kiléptetése
#### 5.	Kétfaktoros authentikáció


## 1. Felhasználó bejelentkezés regisztráció
|Lépés| Feladat | Teszt |
| --- | ------- | ----------- |
|1.   | Weboldal megjelenik ||
|2.   | Login gombra kattintva megjelenik a bejelentkező oldal ||
|3.   | Helyes adatok megadását követően Login gombra kattintva megjelenik a kezdőoldal ||
|3.1  | Helytelen adatok megadásával a Login gombra kattintva hibaüzenet jelenik meg. " Whoops! Something went wrong. " ||
|3.2  | Elfelejtett jelszó gombra kattintva password reset e-mailt küld a felhasználónak " ||
|4.   | Register gombra kattintva megjelenik a regisztrációhoz szükséges weboldal ||
|4.1  | Helytelen e-mail cím kitöltése esetén hibaüzenet jelenik meg: "Kérjük írjon egy '@' karaktert e-mail címébe" ||
|4.2  | Rövid jelszó megadása esetén hibaüzenet jelenik meg: "The password must be at least 8 characters." || 

## 2. Felhasználó adatainak megváltoztatása
|Lépés| Feladat | Teszt |
| --- | ------- | ----------- |
|1.   | Profile-gombra kattintva megjelennek a felhasználóval kapcsolatos beállítási lehetőségek ||
|2.   | Név és email sikeres megváltoztatása után "saved"-üzenet megjelenése a save-gomb mellett ||
|2.1  | Helytelen e-mail cím kitöltése esetén hibaüzenet jelenik meg: "Kérjük írjon egy '@' karaktert e-mail címébe" ||
|3.   | Jelszó megváltoztatása során ha rövid jelszót adunk meg "The password must be at least 8 characters."-üzenetet kapunk ||
|3.1  | Jelszó megváltoztatása során ha nem azonos a kétszer megadott jelszó, akkor hibaüzenet jelenik meg: "The password confirmation does not match."||

## 3. Felhasználói fiók törlése
|Lépés| Feladat | Teszt |
| --- | ------- | ----------- |
|1.   | Delete account gomb megnyomására megjelenik egy ablak, ahová jelszavunkat szükséges megadni. ||
|1.2  | Helytelen jelszó megadása esetén hibaüzenet jelenik meg: "This password does not match our records."   ||
|1.3  | Helyes jelszó megadást követően kiléptet minket és átnavigál a weboldal az index.php-ra ||

## 4. Bejelentkezett felhasználók kiléptetése
|Lépés| Feladat | Teszt |
| --- | ------- | ----------- |
|1.   | Log out other browser sessions-gomb megnyomása után megjelenik egy ablak, ahová jelszavunkat szükséges megadni.||
|1.2  | Helytelen jelszó megadása esetén hibaüzenet jelenik meg: "This password does not match our records." ||
|1.3  | Helyes jelszó megadása esetén minden session megszűnik a jelenleg használt eszközünkön kívül.||
|1.4  | Helyes jelszó megadása esetén megjelenik egy "Done." Felirat a Log out other browser sessions-gomb mellett.||

## 5. Kétfarkos authentikáció 
|Lépés| Feladat | Teszt |
| --- | ------- | ----------- |
|1.   | Enable-gomb megnyomása után megjelenik egy ablak, ahová jelszavunkat szükséges megadni.
|1.2  | Helytelen jelszó megadása esetén hibaüzenet jelenik meg: "This password does not match our records." ||
|1.3  | Helyes jelszó megadása esetén egy beolvasandó QR kód jelenik meg. ||
|1.4  | Google authenticator applikáción a qr kód beolvasása után egy kódot kapunk ||
|1.4  | A megkapott kódot ha beírjuk helyesen a weboldal "Code" mezőjébe, akkor recovery kódokat szükséges látni valamint a disable gombot ||
|1.5  | A megkapott kód helytelen rögzítése esetén hibaüzenetet kapunk: "The provided two factor authentication code was invalid."

