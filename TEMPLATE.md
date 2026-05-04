# Pos na grapsis neo snippet

Kathe snippet = ena arxeio. Vale to sto sosto fakelo (px `php/security/`, `js/`, `css/`).

## PHP snippet template

```php
<?php
/**
 * Snippet Name: Sintomos perigrafikos titlos
 * Description: Ti kanei se mia protasi.
 * WPCode Type: PHP Snippet
 * WPCode Location: Run Everywhere
 * Tags: tag1, tag2
 */

// O kodikas sou edo
```

## JS snippet template

```js
/**
 * Snippet Name: ...
 * Description: ...
 * WPCode Type: JS Snippet
 * WPCode Location: Site Wide Footer
 * Tags: ...
 */

(function () {
    // kodikas
})();
```

## CSS snippet template

```css
/**
 * Snippet Name: ...
 * Description: ...
 * WPCode Type: CSS Snippet
 * WPCode Location: Site Wide Header
 * Tags: ...
 */

/* kodikas */
```

## WPCode Locations - cheat sheet

| Location | Pote to xrisimopoieis |
|---|---|
| `Run Everywhere` | PHP pou trexei pantou (default gia ta perissotera hooks) |
| `Admin Only` | PHP mono sto wp-admin |
| `Frontend Only` | PHP mono sto frontend |
| `Site Wide Header` | CSS/JS sto `<head>` olou tou site |
| `Site Wide Footer` | JS prin to `</body>` |
| `Shortcode` | PHP pou kaleis me `[shortcode]` |
| `Auto Insert - Before/After Post Content` | PHP/HTML mesa sto post content |

## Workflow

1. Grafis to snippet topika me to header parapano.
2. `git add . && git commit -m "add: <snippet name>" && git push`
3. Sto WordPress: WPCode -> Add Snippet -> Add Your Custom Code
4. Copy-paste **xoris to `<?php`** (gia PHP).
5. Vale Title, Code Type, kai Insertion -> Location apo to header.
6. Save & Activate.
