# Tesztelési jegyzőkönyv

| 1.0 verzió|

## Tesztelési jegyzőkönyvet írta:
| | |
| --- | --- |
| Név: | Lecza Tamás |
| Dátum: | 2022.01.17. |
| Böngésző: | Google Chrome; 109.0.5414.74 |
| Operációs rendszer: | Windows 10 Home |


## Tesztelendő feladatok:
#### 1. Dashboard weblaprész
#### 2.	File feltölttő weblaprész
#### 3. Dokumentumok weblaprész
#### 4. Kétfaktoros authentikáció



## 1. Dashboard weblaprész

|Lépés|Feladat|Teszt |
|-----|-------|------|
|1.   | Weboldal megjelenik |success|
|2.   | Kettő "nézd meg gomb" és egy "feltöltés" gomb kattintható |success|
|2.1  | Dokumentumok "Nézd meg" gomja átnavigál bennünket a dokumentumok weblaprészre |success|
|2.2  | FIT video "Nézd meg" gomja átnavigál bennünket egy workout playlistre |success|
|2.3  | "feltöltés" gomb átnavigál bennünet a dokumentum feltöltő oldalra |success|
|3.   | Jobb felső sarokban a nevünkre kattintva felugrik egy ablak "Profile" és "Log out" lehetőségekkel
|3.1  | "profile" gombra kattintva megjelenik a profil beállítások weblaprész |success|
|3.2  | "Log out" gombra kattintva kiléptet profilunkból és visszatérünk a bejelentkezés / regisztráció oldalra |success|
|3.4  | Kijelentkezést követően "Login" , "register" gomb kattintható, megjeleníti a belépés / regisztráció weblaprészt |success|

## 2. File feltöltés
|Lépés|Feladat|Teszt |
|-----|-------|------|
|1.   | Weboldal megjelenik |success|
|2.   | "Fájl kiválasztása" és "Kész" gomb kattintható |success|
|2.1. | "Fájl kiválasztása" gomb megnyomása után tallózhatunk a saját file-jaink között |success|
|3.   | Tallózást követően a gomb mellett megjelenik a kiválasztott file neve |success|
|3.1  | "Kész" gombra kattintva kiírásra kerül a feltöltött titkosított file név a weblapon|success|
|3.2  | Feltöltést követően a file eltárolódik a storage --> app --> docs mappában|success|

## 3. Dokumentumok weblaprész

|Lépés|Feladat|Teszt |
|-----|-------|------|
|1.   | Weboldal megjelenik |success|
|2.   | Dokumentum neveket, szerzőket megjeleníti |success|
|3.   | Dokumentumok melletti letöltés gomb kattintható |success|
|4.   | "Letöltés" gombra kattintva letölti a megadott dokumentumot |failed|

## 4. Kétfaktoros authentikáció
|Lépés|Feladat|Teszt |
|-----|-------|------|
|1.   | Enable-gomb megnyomása után megjelenik egy ablak, ahová jelszavunkat szükséges megadni.|success|
|1.2  | Helytelen jelszó megadása esetén hibaüzenet jelenik meg: "This password does not match our records." |success|
|1.3  | Helyes jelszó megadása esetén egy beolvasandó QR kód jelenik meg. |success|
|1.4  | Google authenticator applikáción a qr kód beolvasása után egy kódot kapunk |success|
|1.4  | A megkapott kódot ha beírjuk helyesen a weboldal "Code" mezőjébe, akkor recovery kódokat szükséges látni valamint a disable gombot |success|
|1.5  | A megkapott kód helytelen rögzítése esetén hibaüzenetet kapunk: "The provided two factor authentication code was invalid."|success|

