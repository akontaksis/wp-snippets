# wp-snippets

Prosopiki silogi apo WordPress code snippets, etoima gia copy-paste sto plugin **WPCode**.

## Pos to xrisimopoio

1. Vriskeis to snippet apo ton pinaka parakato (i ston katalogo).
2. Anigeis to arxeio sto GitHub kai patas to **Copy raw file** koumpi.
3. Sto WordPress: **WPCode -> Add Snippet -> Add Your Custom Code**.
4. Pernas to perehomeno (gia PHP, **xoris to `<?php`** sto pano).
5. Vazeis ta pedia apo to header tou snippet:
   - **Title** -> `Snippet Name`
   - **Code Type** -> `WPCode Type`
   - **Insertion -> Location** -> `WPCode Location`
6. **Save & Activate**.

Gia odigies sto pos grafo neo snippet, des to [TEMPLATE.md](TEMPLATE.md).

## Index

### PHP

| Snippet | Kategoria | Location |
|---|---|---|
| [Disable XML-RPC](php/security/disable-xmlrpc.php) | security | Run Everywhere |
| [Disable File Editor](php/security/disable-file-editor.php) | security | Admin Only |
| [Hide WordPress Version](php/security/hide-wp-version.php) | security | Run Everywhere |
| [Disable User Enumeration](php/security/disable-user-enumeration.php) | security | Run Everywhere |
| [Add Basic Security Headers](php/security/add-security-headers.php) | security | Run Everywhere |
| [Restrict REST API to Logged-In](php/security/restrict-rest-api-to-logged-in.php) | security | Run Everywhere |
| [Hide Login Error Details](php/security/hide-login-errors.php) | security | Run Everywhere |
| [Force SSL on Admin](php/security/force-ssl-admin.php) | security | Run Everywhere |
| [Disable Application Passwords](php/security/disable-application-passwords.php) | security | Run Everywhere |
| [Hide Admin Bar for Non-Admins](php/admin/hide-admin-bar-non-admins.php) | admin | Run Everywhere |
| [Custom Admin Footer Text](php/admin/custom-admin-footer-text.php) | admin | Admin Only |
| [Custom Dashboard Widget](php/admin/custom-dashboard-widget.php) | admin | Admin Only |
| [Hide Menu Items by Role](php/admin/hide-menu-items-by-role.php) | admin | Admin Only |
| [Featured Image Column in Post List](php/admin/featured-image-column.php) | admin | Admin Only |
| [Disable WP Emojis](php/performance/disable-emojis.php) | performance | Run Everywhere |
| [Increase Autosave Interval](php/performance/increase-autosave-interval.php) | performance | Run Everywhere |
| [Allow SVG Uploads](php/media/allow-svg-uploads.php) | media | Admin Only |
| [Custom Login Logo](php/login/custom-login-logo.php) | login | Run Everywhere |
| [Change Add to Cart Text (WC)](php/woocommerce/change-add-to-cart-text.php) | woocommerce | Run Everywhere |
| [Redirect Attachment Pages](php/seo/redirect-attachment-pages.php) | seo | Frontend Only |
| [Change From Email](php/emails/change-from-email.php) | emails | Run Everywhere |

### JS

| Snippet | Location |
|---|---|
| [Open External Links in New Tab](js/external-links-new-tab.js) | Site Wide Footer |

### CSS

| Snippet | Location |
|---|---|
| [Hide Admin Notices](css/hide-admin-notices.css) | Admin Footer |

## Domi

```
wp-snippets/
├── php/
│   ├── admin/
│   ├── woocommerce/
│   ├── security/
│   ├── performance/
│   ├── seo/
│   ├── login/
│   ├── media/
│   ├── editor/
│   ├── emails/
│   └── users/
├── js/
├── css/
└── html/
```

## Prosthiki neou snippet

```bash
# 1. Ftiakse arxeio sto sosto fakelo me to template apo TEMPLATE.md
# 2. Commit & push
git add .
git commit -m "add: <snippet name>"
git push
```

Min ksexnas na ananeoneis ton pinaka parapano otan prostheteis kainourio snippet.
