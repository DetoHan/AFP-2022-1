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


## 1. Felhasználó bejelentkezés regisztráció
|Lépés| Feladat | Teszt |
| --- | ------- | ----------- |
|1.   | Weboldal megjelenik |success|
|2.   | Login gombra kattintva megjelenik a bejelentkező oldal |success|
|3.   | Helyes adatok megadását követően Login gombra kattintva megjelenik a kezdőoldal |success|
|3.1  | Helytelen adatok megadásával a Login gombra kattintva hibaüzenet jelenik meg. " Whoops! Something went wrong. " |success|
|3.2  | Elfelejtett jelszó gombra kattintva password reset e-mailt küld a felhasználónak " |success|
|4.   | Register gombra kattintva megjelenik a regisztrációhoz szükséges weboldal |success|
|4.1  | Helytelen e-mail cím kitöltése esetén hibaüzenet jelenik meg: "Kérjük írjon egy '@' karaktert e-mail címébe" |success|
|4.2  | Rövid jelszó megadása esetén hibaüzenet jelenik meg: "The password must be at least 8 characters." |success| 

## 2. Felhasználó adatainak megváltoztatása
|Lépés| Feladat | Teszt |
| --- | ------- | ----------- |
|1.   | Profile-gombra kattintva megjelennek a felhasználóval kapcsolatos beállítási lehetőségek |success|
|2.   | Név és email sikeres megváltoztatása után "saved"-üzenet megjelenése a save-gomb mellett |success|
|2.1  | Helytelen e-mail cím kitöltése esetén hibaüzenet jelenik meg: "Kérjük írjon egy '@' karaktert e-mail címébe" |success|
|3.   | Jelszó megváltoztatása során ha rövid jelszót adunk meg "The password must be at least 8 characters."-üzenetet kapunk |success|
|3.1  | Jelszó megváltoztatása során ha nem azonos a kétszer megadott jelszó, akkor hibaüzenet jelenik meg: "The password confirmation does not match."|success|

## 3. Felhasználói fiók törlése
|Lépés| Feladat | Teszt |
| --- | ------- | ----------- |
|1.   | Delete account gomb megjelenik. |success|
|2.   | Delete account gomb megnyomására megjelenik egy ablak, ahová jelszavunkat szükséges megadni. |success|
|2.1  | Helytelen jelszó megadása esetén hibaüzenet jelenik meg: "This password does not match our records."   |success|
|2.2  | Helyes jelszó megadást követően kiléptet minket és átnavigál a weboldal az index.php-ra |success|

## 4. Bejelentkezett felhasználók kiléptetése
|Lépés| Feladat | Teszt |
| --- | ------- | ----------- |
|1.   | Log out gomb megjelenik. |success|
|1.   | Log out other browser sessions-gomb megnyomása után megjelenik egy ablak, ahová jelszavunkat szükséges megadni.|success|
|1.2  | Helytelen jelszó megadása esetén hibaüzenet jelenik meg: "This password does not match our records." |success|
|1.3  | Helyes jelszó megadása esetén minden session megszűnik a jelenleg használt eszközünkön kívül.|success|
|1.4  | Helyes jelszó megadása esetén megjelenik egy "Done." Felirat a Log out other browser sessions-gomb mellett.|success|



