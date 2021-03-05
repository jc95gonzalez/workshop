<?php 
require_once 'database.php';

$sql = "SELECT * from rss order by rss_id desc limit 0,6";

foreach ($pdo->query($sql) as $nt) {
    $body .="
                <item>
                    <title> $nt[title]</title>
                    
            <link> $nt[link]</link> 
                    <description> $nt[description]</description>				
                    
                    <pubDate>$nt[pubdate]</pubDate>
                </item>";
    }
    
    $body .="
    </channel>
    </rss>";
    echo $body;
    $path="rss.xml";
        $filenum=fopen($path,"w");
        fwrite($filenum,$body);
        fclose($filenum);
    