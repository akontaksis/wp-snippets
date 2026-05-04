/**
 * Snippet Name: Open External Links in New Tab
 * Description: Vazei target="_blank" + rel="noopener" se ola ta external links.
 * WPCode Type: JS Snippet
 * WPCode Location: Site Wide Footer
 * Tags: frontend, links
 */

(function () {
    document.addEventListener('DOMContentLoaded', function () {
        var host = window.location.hostname;
        var links = document.querySelectorAll('a[href^="http"]');

        links.forEach(function (link) {
            try {
                var url = new URL(link.href);
                if (url.hostname && url.hostname !== host) {
                    link.target = '_blank';
                    link.rel = (link.rel ? link.rel + ' ' : '') + 'noopener noreferrer';
                }
            } catch (e) {}
        });
    });
})();
