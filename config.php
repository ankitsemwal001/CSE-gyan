<?php
/**
 * config.php
 * -----------------------------------------------------------------
 * Ye file project ke ROOT me rehti hai. Iska kaam sirf ek hi hai:
 * BASE_URL define karna, taaki header.php, footer.php, aur kisi bhi
 * nested page (jaise explore/dsa/sidebar.php) se assets/links
 * (CSS, JS, images, internal page links) hamesha sahi resolve ho —
 * chahe page kitni bhi gehri folder me kyu na ho.
 *
 * PROBLEM jo isse solve hoti hai:
 * header.php me likha "./assets/book.svg" browser ke current URL
 * ke hisaab se resolve hota hai, PHP file ke location se nahi.
 * Isliye root se to chal jata hai, lekin explore/dsa/sidebar.php
 * se wahi path tootta hai. BASE_URL is problem ko hamesha ke liye
 * khatam karta hai.
 *
 * Har entry-point page (index.php, sidebar.php, dsa.php, etc.) ke
 * sabse upar isko require karo:
 *      require_once __DIR__ . '/config.php';   // root se
 *      require_once __DIR__ . '/../../config.php'; // 2 level neeche se
 * -----------------------------------------------------------------
 */

if (!defined('BASE_URL')) {

    // Is config.php ka real filesystem folder = project root
    $projectRoot = str_replace('\\', '/', __DIR__);

    // Server ka document root (e.g. C:/xampp/htdocs ya /var/www/html)
    $docRoot = str_replace('\\', '/', rtrim($_SERVER['DOCUMENT_ROOT'], '/\\'));

    // Project root document root ke andar kis subfolder me hai, wo nikaalo
    $basePath = str_replace($docRoot, '', $projectRoot);

    // Trailing slash ensure karo: "/cse-gyan/"
    define('BASE_URL', rtrim($basePath, '/') . '/');
}

/**
 * TRAINER NOTE:
 * Agar tumhara project folder "cse gyan" (space ke saath) hai, to URL me
 * space %20 ban jayega — kabhi-kabhi issues deta hai. Best practice:
 * folder ka naam "cse-gyan" (bina space) rakho XAMPP/htdocs me.
 * Code me kahin bhi hardcoding ki zarurat nahi — BASE_URL apne aap
 * sahi nikal lega chahe folder ka naam kuch bhi ho.
 */
