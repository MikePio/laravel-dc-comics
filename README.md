**laravel-dc-comics**
===
# **PARTE 1**
## **Descrizione**

Creare un nuovo progetto `Laravel 9` per ***gestire un archivio di fumetti***.

**Milestone 1**

Tramite gli appositi comandi artisan creare un model con relativa migration e un resource controller.

**Milestone 2**

Iniziare a definire le prime operazioni `CRUD` con le relative view:

- index()

- show()

### **BONUS**

Creare il seeder per la tabella comics utilizzando il file `comics.php`.


# **PARTE 2**
## **Descrizione**

Terminare la CRUD.

**Note:**

comics.store e comics.update devono validare i dati. Se non sono validi reindirizza comics.create passando in sessione gli errori e in old() tutti i campi compilati.

### **BONUS**

Per la validazione la soluzione migliore è creare una request custom:
- php artisan make:request ComicRequest
- settare authorize -> true
- mettere i rules
- aggiungere la funzione messages con i messaggi errore

## **Breve riepilogo: Rotte resource**

**comics.index** -> GET -> funzione del controller: index -> view: comics.index

**comics.show/{comic}** -> GET -> funzione del controller: show -> view: comics.show

---------------------------------------------------

**comics.create** -> GET -> funzione del controller: create -> view: comics.create (contiene il form di creazione)

**comics.create** INVIA IL FORM IN ***POST*** a comics.store

**comics.store** -> ***POST*** -> controlla la validità del dato, lo salva  e reindirizza a comics.show

---------------------------------------------------

**comics.edit{comic}** -> GET -> funzione del controller: edit -> view: **comics.edit** (contiene il form di modifica)

**comics.edit** INVIA IL FORM IN PUT a comics.update

---------------------------------------------------

**comics.update** -> ***PUT*** -> controlla la validità del dato, lo aggiorna  e reindirizza a comics.show

---------------------------------------------------

**comics.destroy** -> ***DELETE*** -> elimina il dato e reindirizza a comics.index




