<!-- <?php 
$myfile = fopen("newfile.txt","w") or die("Unable to open file!");
$txt = "Abdullah \n";
fwrite($myfile, $txt);
$txt = "Fahad";
fwrite($myfile, $txt);
fclose($myfile);
 ?> -->

 <?php 
$simplexml= new SimpleXMLElement('<?xml version ="1.0"?><books/>');
	$book1= $simplexml->addChild('book');
	$book1 -> addChild("Booktitle","The wandering oz");
	$book1->addChild("PublicationDate",2007);

	file_put_contents('book.xml',$simplexml->asXML());

  ?>