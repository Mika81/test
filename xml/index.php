<?php
// test/xml/index.php

/* file_get_contents() permet de lire les documents.
 *
 */


//
//$xml = simplexml_load_file("http://www.france24.com/fr/sports/rss");
////print"<pre>";print_r($xml);print"</pre>";
//
//foreach($xml->channel as $channel){
//    echo $channel->lastBuildDate . " :<br/><br/>";
//    foreach($channel->item as $item){
//        echo "<strong>".$item[0]->category. "</strong><br/>";
//        echo $item->title. "<br/>";
//        echo "<i>".$item->description. "</i><br/>";
//        echo "<br/>";
//    }
//}

//$xml = file_get_contents('contacts.xml');
//header('Content-Type: text/xml');
//echo $xml;

/* simplexml_load_file -> class naive de php
 *
 * Convertit un fichier XML en objet
 */

//$xml = simplexml_load_file('contacts.xml');
//print"<pre>";print_r($xml);print"</pre>";
/*
echo "Type : " . $xml["type"] . "</br>";
//echo $xml->contact->prenom . " ";
//echo $xml->contact->nom;
echo "</br>";
foreach($xml->contact as $contact){
    echo $contact->prenom ." ". $contact->nom."<br/>";
    foreach($contact->emails->email as $email){
        echo "Category " . $email['categorie'] . ': ';
        echo $email . "</br>";
    }
    echo "<br/>";
}
*/
//var_dump($xml->contact->nom);