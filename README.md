# Steps Laravel

## 1. cartella routes e definire le rotte

- definire le rotte get per le varie pagine

```php

Route::get('/news', function () {
    return view('news');
})->name('news');
```

## 2. cartella view e definere il layout

- definire il file di layout in layout/app.blade.php
- definire le views per le varie rotte ed estendere il layout principale  con extends('layout.app')
- definire con i place holder le varie sezione | @yield() @section() e @endsection

## 3. installa dependencies con npm install

```bash
npm install
npm run dev
```

Monitorare gli assets

```bash
npm run watch
```

## 4. Prendete i dati e mostrateli a schermo

## Se qualcosa non funziona e non ci sono errori riavviare server php e nmp
