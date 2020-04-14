<?php 

	
	 //Ambil data json dari UrL
	    $contentUrlPositif = file_get_contents('https://api.kawalcorona.com/positif/');
	    $contentUrlSembuh = file_get_contents('https://api.kawalcorona.com/sembuh/');
	    $contentUrlMeninggal = file_get_contents('https://api.kawalcorona.com/meninggal/');

	    $contentUrlGlobal = file_get_contents('https://api.kawalcorona.com/');
	    $contentUrlGlobal = utf8_encode($contentUrlGlobal);
	    $jsonGlobal = json_decode($contentUrlGlobal, true);



	    //Mengubah Standar Encoding
	    $contentUrlPositif = utf8_encode($contentUrlPositif);
	    $contentUrlSembuh = utf8_encode($contentUrlSembuh);
	    $contentUrlMeninggal = utf8_encode($contentUrlMeninggal);


	    //Mengubah data json Menjadi Array Assosiatif
	    $resJsonPositif = json_decode($contentUrlPositif, true);
	    $resJsonSembuh = json_decode($contentUrlSembuh, true);
	    $resJsonMeninggal = json_decode($contentUrlMeninggal, true);

	    $positif = $resJsonPositif['value'];
	    $sembuh = $resJsonSembuh['value'];
	    $meninggal = $resJsonMeninggal['value'];


 ?>