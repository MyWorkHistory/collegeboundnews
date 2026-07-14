<?php
/**
 * CollegeBoundNews.php
 * PHP 8+ compatible database connection and legacy mysql_* compatibility layer.
 *
 * Purpose:
 * - Keeps the old variable names used by existing pages:
 *   $hostname_CollegeBoundNews
 *   $database_CollegeBoundNews
 *   $username_CollegeBoundNews
 *   $password_CollegeBoundNews
 *   $CollegeBoundNews
 *
 * - Provides wrapper functions for removed mysql_* functions so older pages can
 *   keep working while the site is gradually converted to mysqli/PDO.
 *
 * Note:
 * - This is a compatibility bridge, not the ideal long-term architecture.
 * - Long-term, each page should be updated to native mysqli or PDO prepared statements.
 */

if (function_exists('mysqli_report')) {
    // PHP 8.1+ changed mysqli's default behavior to throw exceptions.
    // Legacy code usually expects mysqli calls to return false and then check mysql_error().
    mysqli_report(MYSQLI_REPORT_OFF);
}

// Database connection settings. Existing variable names preserved for old pages.
$hostname_CollegeBoundNews = "localhost";
$database_CollegeBoundNews = "collegeb_CollegeBoundNews";
$username_CollegeBoundNews = "collegeb_cbnnms";
$password_CollegeBoundNews = "Chicago@1122";

/**
 * Return the active mysqli connection when old code omits the connection argument.
 *
 * @param mysqli|null $link_identifier
 * @return mysqli|null
 */
function cbn_mysql_link($link_identifier = null)
{
    if ($link_identifier instanceof mysqli) {
        return $link_identifier;
    }

    global $CollegeBoundNews;
    return ($CollegeBoundNews instanceof mysqli) ? $CollegeBoundNews : null;
}


// PHP 8 removed get_magic_quotes_gpc(). Old Dreamweaver code often calls it.
// Magic quotes no longer exist, so the compatible answer is always false.
if (!function_exists('get_magic_quotes_gpc')) {
    function get_magic_quotes_gpc()
    {
        return false;
    }
}

/**
 * Compatibility wrappers for removed mysql_* functions.
 * These are only defined when the old mysql extension is not present.
 */
if (!function_exists('mysql_connect')) {
    function mysql_connect($hostname, $username, $password)
    {
        return mysqli_connect($hostname, $username, $password);
    }
}

if (!function_exists('mysql_pconnect')) {
    function mysql_pconnect($hostname, $username, $password)
    {
        // Old code used persistent connections. For stability on shared hosting,
        // use a normal mysqli connection here. This avoids persistent-connection quirks.
        return mysqli_connect($hostname, $username, $password);
    }
}

if (!function_exists('mysql_select_db')) {
    function mysql_select_db($database_name, $link_identifier = null)
    {
        $link = cbn_mysql_link($link_identifier);
        return $link ? mysqli_select_db($link, $database_name) : false;
    }
}

if (!function_exists('mysql_query')) {
    function mysql_query($query, $link_identifier = null)
    {
        $link = cbn_mysql_link($link_identifier);
        return $link ? mysqli_query($link, $query) : false;
    }
}

if (!function_exists('mysql_fetch_assoc')) {
    function mysql_fetch_assoc($result)
    {
        return ($result instanceof mysqli_result) ? mysqli_fetch_assoc($result) : false;
    }
}

if (!function_exists('mysql_fetch_array')) {
    function mysql_fetch_array($result, $result_type = MYSQLI_BOTH)
    {
        return ($result instanceof mysqli_result) ? mysqli_fetch_array($result, $result_type) : false;
    }
}

if (!function_exists('mysql_fetch_object')) {
    function mysql_fetch_object($result)
    {
        return ($result instanceof mysqli_result) ? mysqli_fetch_object($result) : false;
    }
}

if (!function_exists('mysql_num_rows')) {
    function mysql_num_rows($result)
    {
        return ($result instanceof mysqli_result) ? mysqli_num_rows($result) : 0;
    }
}

if (!function_exists('mysql_free_result')) {
    function mysql_free_result($result)
    {
        return ($result instanceof mysqli_result) ? mysqli_free_result($result) : false;
    }
}

if (!function_exists('mysql_real_escape_string')) {
    function mysql_real_escape_string($unescaped_string, $link_identifier = null)
    {
        $link = cbn_mysql_link($link_identifier);
        return $link ? mysqli_real_escape_string($link, $unescaped_string) : addslashes($unescaped_string);
    }
}

if (!function_exists('mysql_escape_string')) {
    function mysql_escape_string($unescaped_string)
    {
        return mysql_real_escape_string($unescaped_string);
    }
}

if (!function_exists('mysql_error')) {
    function mysql_error($link_identifier = null)
    {
        $link = cbn_mysql_link($link_identifier);
        return $link ? mysqli_error($link) : mysqli_connect_error();
    }
}

if (!function_exists('mysql_errno')) {
    function mysql_errno($link_identifier = null)
    {
        $link = cbn_mysql_link($link_identifier);
        return $link ? mysqli_errno($link) : mysqli_connect_errno();
    }
}

if (!function_exists('mysql_insert_id')) {
    function mysql_insert_id($link_identifier = null)
    {
        $link = cbn_mysql_link($link_identifier);
        return $link ? mysqli_insert_id($link) : 0;
    }
}

if (!function_exists('mysql_affected_rows')) {
    function mysql_affected_rows($link_identifier = null)
    {
        $link = cbn_mysql_link($link_identifier);
        return $link ? mysqli_affected_rows($link) : -1;
    }
}

// Create the connection expected by existing pages.
$CollegeBoundNews = mysql_pconnect(
    $hostname_CollegeBoundNews,
    $username_CollegeBoundNews,
    $password_CollegeBoundNews
);

if (!$CollegeBoundNews) {
    error_log('CollegeBoundNews database connection failed: ' . mysql_error());
    http_response_code(500);
    exit('Database connection failed.');
}

// Legacy site appears to use ISO-8859-1/latin1 pages. Keep DB charset conservative.
if (function_exists('mysqli_set_charset')) {
    mysqli_set_charset($CollegeBoundNews, 'latin1');
}

mysql_select_db($database_CollegeBoundNews, $CollegeBoundNews);
?>
