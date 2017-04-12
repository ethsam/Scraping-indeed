<?php
//Requis la classe
require 'simple_html_dom.php';

//traitement des variables
$motclef = !empty($_POST['motclef']) ? $_POST['motclef'] : 'informatique'; //si vide alors mot clef : informatique
$pays = !empty($_POST['pays']) ? $_POST['pays'] : '974'; //si vide alors pays = 974 ;)

//class init
$html = new simple_html_dom();
//Appel a l'api avec les variables motclef et pays
$html->load_file('http://api.indeed.com/ads/apisearch?publisher=8833851245211404&q='.$motclef.'&l='.$pays.'%2C+&sort=&radius=&st=&jt=&start=&limit=&fromage=&filter=&latlong=1&co=fr&chnl=&userip=1.2.3.4&useragent=Mozilla/%2F4.0%28Firefox%29&v=2');

foreach($html->find('result') as $result)
    {

        echo '<hr>';
        echo '<div class="row">';
        echo '<div class="col-sm-8">';
        echo '<h2>'.$result->find('jobtitle',0)->plaintext.'</h2>';
        echo '<p>'.$result->find('snippet',0)->plaintext.'</p>';

        echo '<a class="btn btn-default btn-lg" href="'.$result->find('url',0)->plaintext.'">En savoir plus &raquo;</a>';
        echo '</p>';
        echo '</div>';
        echo '<div class="col-sm-4">';
        echo '      <address>';
        echo '          <strong>'.$result->find('date',0)->plaintext.'</strong>';
        echo '          <br>'.$result->find('formattedLocation',0)->plaintext;
        echo '          <br>';
        echo '      </address>';
        echo '  </div>';
        echo '</div>';
    }

 ?>
