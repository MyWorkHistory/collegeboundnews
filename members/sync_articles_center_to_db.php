<?php
/**
 * One-time script: copy the center column HTML from articles.php into the database
 * (SiteText key CurrentIssuesPage) so articles_automatic.php shows the same content and PDF links.
 *
 * Run once from browser: https://www.collegeboundnews.com/members/sync_articles_center_to_db.php
 * Or delete this file after use for security.
 */
require_once __DIR__ . '/../../CollegeBoundNews.php';

if (!function_exists('GetSQLValueString')) {
    function GetSQLValueString($theValue, $theType, $theDefinedValue = '', $theNotDefinedValue = '') {
        $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
        $theValue = function_exists('mysql_real_escape_string') ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);
        switch ($theType) {
            case 'text': $theValue = ($theValue != '') ? "'" . $theValue . "'" : 'NULL'; break;
            case 'long':
            case 'int': $theValue = ($theValue != '') ? intval($theValue) : 'NULL'; break;
            case 'double': $theValue = ($theValue != '') ? "'" . doubleval($theValue) . "'" : 'NULL'; break;
            case 'date': $theValue = ($theValue != '') ? "'" . $theValue . "'" : 'NULL'; break;
            case 'defined': $theValue = ($theValue != '') ? $theDefinedValue : $theNotDefinedValue; break;
        }
        return $theValue;
    }
}

if (!function_exists('saveSiteText')) {
    function saveSiteText($siteKey, $siteVerbiage, $databaseName, $dbConnection) {
        mysql_select_db($databaseName, $dbConnection);
        $checkSQL = sprintf("SELECT theKey FROM SiteText WHERE theKey=%s LIMIT 1", GetSQLValueString($siteKey, 'text'));
        $checkResult = mysql_query($checkSQL, $dbConnection) or die(mysql_error());
        $siteTextExists = mysql_num_rows($checkResult) > 0;
        mysql_free_result($checkResult);
        if ($siteTextExists) {
            $updateSQL = sprintf("UPDATE SiteText SET Verbiage=%s WHERE theKey=%s", GetSQLValueString($siteVerbiage, 'text'), GetSQLValueString($siteKey, 'text'));
            mysql_query($updateSQL, $dbConnection) or die(mysql_error());
        } else {
            $insertSQL = sprintf("INSERT INTO SiteText (theKey, Verbiage) VALUES (%s, %s)", GetSQLValueString($siteKey, 'text'), GetSQLValueString($siteVerbiage, 'text'));
            mysql_query($insertSQL, $dbConnection) or die(mysql_error());
        }
    }
}

$articlesPath = __DIR__ . '/articles.php';
if (!is_readable($articlesPath)) {
    die('Cannot read articles.php');
}

$html = file_get_contents($articlesPath);
$marker = '<td width="440" valign="top" align="left">';
$pos = strpos($html, $marker);
if ($pos === false) {
    die('Center column marker not found in articles.php');
}
$pos += strlen($marker);
$end = strpos($html, '</td>', $pos);
if ($end === false) {
    die('Closing td not found');
}
$content = trim(substr($html, $pos, $end - $pos));

if ($content === '') {
    die('Extracted content is empty');
}

saveSiteText('CurrentIssuesPage', $content, $database_CollegeBoundNews, $CollegeBoundNews);

header('Content-Type: text/html; charset=utf-8');
echo '<!DOCTYPE html><html><head><meta charset="utf-8"><title>Sync done</title></head><body>';
echo '<p><strong>Done.</strong> The center content from <code>articles.php</code> has been copied into the database (SiteText key <code>CurrentIssuesPage</code>).</p>';
echo '<p><a href="articles_automatic.php">View articles_automatic.php</a> — you should now see the same issue list and PDF links as on articles.php.</p>';
echo '<p>You can delete this file (<code>members/sync_articles_center_to_db.php</code>) after use.</p>';
echo '</body></html>';
