<?php

$dnaurl = "https://raw.githubusercontent.com/LafeLabs/trashmagic/main/data/dna.txt";

if(isset($_GET["dna"])){
    $dnaurl = $_GET["dna"];
}


$baseurl = explode("data/",$dnaurl)[0];
$dnaraw = file_get_contents($dnaurl);
$dna = json_decode($dnaraw);

mkdir("data");
mkdir("php");
mkdir("images");
mkdir("media");
mkdir("web");
mkdir("scrolls");
mkdir("jscode");
mkdir("iconsymbols");
mkdir("maps");
mkdir("symbolfeed");

mkdir("media/zines");
mkdir("media/books");
mkdir("media/music");
mkdir("media/fashion");
mkdir("media/market");
mkdir("media/trashmagic");
mkdir("media/cardboard");
mkdir("media/arduino");
mkdir("media/jupyter");
mkdir("media/measurement");


copy("https://raw.githubusercontent.com/LafeLabs/trashmagic/main/php/replicator.txt","replicator.php");

foreach($dna->html as $value){
    
    copy($baseurl.$value,$value);

}


foreach($dna->data as $value){
    
    copy($baseurl."data/".$value,"data/".$value);
    
}

foreach($dna->scrolls as $value){
        
    copy($baseurl."scrolls/".$value,"scrolls/".$value);

}

foreach($dna->php as $value){
 
    copy($baseurl."php/".$value,"php/".$value);
    copy($baseurl."php/".$value,explode(".",$value)[0].".php");

}


foreach($dna->web as $value){
    
    copy($baseurl."web/".$value,"web/".$value);
    
}
    
foreach($dna->maps as $value){
        
    copy($baseurl."maps/".$value,"maps/".$value);

}
    
    
foreach($dna->javascript as $value){
    copy($baseurl."jscode/".$value,"jscode/".$value);
}

foreach($dna->iconsymbols as $value){
    
    copy($baseurl."iconsymbols/".$value,"iconsymbols/".$value);

}


?>
<a href = "index.html">CLICK TO GO TO PAGE</a>
<style>
a{
    font-size:3em;
}
</style>
