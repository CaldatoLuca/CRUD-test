# Creazione di un progetto CRUD

Spiegazione e esercitazione passo passo di un progetto in cui implementare

-   Migration
-   Model
-   Seeder
-   Resource Controller per le CRUD

## Migration

La migration ci permette di lavorare sul db presente, in questo caso, su phpMyAdmin.

Questo sarà possibile se il file .env conterrà il collegamento al db con relativa porta e password.

### Creazione di una Migration

Per creare una migration è necessario avere un db a cui fare riferimento: **creo il db su phpMyAdmin**.

Successivamente si può creare la migration: **lancio il comando 'php artisan make:migration nome_della_migration'** create_comics_table (seguendo le convenzioni)

Definisco le operazioni della migration: **inserisco i campi che riempiranno la tabella**

### Modifiche o Update

Per modificare il dato si può creare una nuova migration lanciando il comando: **'php artisan make:migration update_nometabella_table --table=nometabella'**

Per controllare lo stato delle migrazioni lancio il comando: **'php artisan migrate:status'**

### Metodi up e down

Per eseguire una migration si lancia il comando: **'php artisan migarte'** che eseguirà il codice contenuto nella funzione up

Per ritornare allo stato precedente si lancia il comando: **'php artisan migrate:rollback'** che eseguirà il codice contenuto in down (sempre antagonista a up)

## Model

Il Model è La classe che mappa le tabelle del database e rappresentano la struttura della tabella.

Ogni tabella del nostro database sarà mappata con un modello Laravel che ci permetterà facilmente di leggerne il contenuto, crearlo, aggiornarlo o cancellarlo.

Questa modalità prende il nome di ORM (Object Relationship Mapping) e serve ad ottenere,
attraverso un’interfaccia orientata agli oggetti, tutti i servizi inerenti alla persistenza del dato.

Ogni tabella del database verrà quindi mappata in una classe PHP che faciliterà la gestione, la scrittura e la lettura dei dati, attraverso dei metodi forniti dall’ORM stesso.

### Creazione di un Model

Per creare un model lancio il comando: **'php artisan make:model NomeModel'** dove il nome è singolare e in pascaCase: se ho una tabella comics il suo model sarà Comic.

## Seeder

I Seeder ci permettorno di popolare le tabelle coi dati desiderati

### Creazione di un Seeder

Per creare un Seeder lancio il comando: **'php artisan make:seeder NometabellaTableSeeder'**

### Utilizzo del Seeder

Al suo interno troviamo al funzione run dove andremo a a inserire la logica per popolare la tabella.

Le operazioni obbligatorie sono creare una nuova istanza della tabella, richaimando il Model e salvarla sul db. Nel mezzo si inseriscono i dati.

Nel mio caso includo un file contenente un array su cui ciclare per riempire la tabella.

### Eseguire un Seeder

Per eseguire un Seeder lancio il comando: **'php artisan db:seed --class:NometabellaTableSeeder'**

## CRUD

CRUD è un acronimo che sta per:

-   Create: creare un dato da inserire nel db
-   Read: leggere/visualizzare tutti i dati presenti nel db
-   Update: aggiornare/modificare i dati del db
-   Delete: cancellare dati dal db

Queste sono le operazioni base (minimo necessario) per ogni applicativo.

Alle CRUD è applicata l' architettura REST (REpresentational State Transfer) che prevede una struttura ben definita per scambiare risorse tra client e server:

-   una struttura degli URL ben definita e univoca per ogni risorsa

-   l'utilizzo dei metodi HTTP per azioni specifiche sulle risorse:
    -   **GET** per il recupero dei dati
    -   **POST** per la creazione di nuovi dati
    -   **PUT/PATCH** per l' aggiornamento dei dati
    -   **DELETE** per la cancellazione dei dati

## Resource Controller

Laravel ci permette di creare un Controller con integrate funzioni e rotte per le CRUD.

### Creazione di un Resource Controller

Per creare un Resource Controller lancio il comando: **'php artisan make:controller --resource NomeController'** usando la naming convenction e un eventuale divisione di controllere tra admin e user vado a chiamarlo Admin/ComicController.

Al suo interno troveremo le funzioni che gestiscono le CRUD:

-   index --> mostra tutte le risorse
-   create --> crea una nuova risorsa (avrà un form)
-   store --> memorizza nel db la risorsa creata da crate
-   show --> mostra una risorsa specifica (pagina di dettaglio)
-   edit --> modifica una risorsa (avrà un form)
-   update --> salva la risorsa modifica da edit nel db
-   destroy --> rimuove una risorsa specifica

### Gestione delle rotte con un Resource Controller

Un altra comodità è quella di avere molte rotte disponibili per visualizzare le pagine relative alle CRUD.

Invece di creare una rotta specifica per ogni pagina basterà lanciare il seguente comando: \_\_'Route::resource('nomerotta', NomeController::class);

In questo modo dando un nome solo alla rotta principale (comics nel mio caso) Laravel creerà una serie di rotte da usare.

Per visualizzare le rotte a disposizione lancio il comando: **'php artisan route:list'**

### Index, visualizzare la lista delle risorse

Nel metodo index vado a raccogliere tutti i dati presenti nel db: **'$comics = Comic::all();'**

Questi poi vengono passati alla view (per convenzione di nome index in una cartella comics):m **'return view('comics.index', compact('comics'));'**

Ora nella pagina index.blade.php ho a disposizione tutti i dati per fare un foreach e mostrare le classiche card di ogni prodotto.

### Show, mostra il dettaglio della risorsa

Al metodo show passo un istanza del model Comic(Dependency injection): **'public function show(Comic $comic)'** se passassi l' id dovrei usare il metodo find, pasando un instanza avviene lo stesso ma sotto al cofano

Al return passo l' istanza creata: **'return view('comics.show', compact('comic'));'**

Poi nell mia index creo un link, dentro al foreach, che rimanda alla pagina show: **'<a href="{{ route('comics.show', $comic->id) }}">view details</a>'** a cui passo l' id
