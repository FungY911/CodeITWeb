<?php
/**
 * Yep, I host my WordPress sites on Windows IIS :)
 * @Vevida (https://vevida.com), Twitter: @Jan_Reilink
 */
if( !is_dir( "d:\www\example.com\www\example.org" ) ) {
  mkdir( "d:\www\example.com\www\example.org", 0755 );
}

$ogfile = $_GET['url'];
$ogserverurl = "http://www.example.org/".$ogfile;

/**
 * Important PHP cURL information: dont't turn off CURLOPT_SSL_VERIFYPEER
 * https://www.saotn.org/dont-turn-off-curlopt_ssl_verifypeer-fix-php-configuration/
 */
$ch = curl_init($ogserverurl);
curl_setopt( $ch, CURLOPT_NOBODY, true );
curl_exec( $ch );
$retcode = curl_getinfo( $ch, CURLINFO_HTTP_CODE );
curl_close( $ch );
  
if( ( $retcode === 200 ) || ( $retcode === 302 ) ) {
  if( !file_exists( $ogfile ) ) {
    // my Windows Server website CDN path
    $path = "d:\www\example.com\www\example.org\wp-content\" . dirname( $ogfile );
    if( !is_dir( $path ) ) {
      mkdir( $path, 0755, true );
      echo "directory created";
    }
    $content = file_get_contents( $ogserverurl );
    file_put_contents( $ogfile, $content );
  }
  header( "Location: $ogserverurl" );
  exit();
}
?>