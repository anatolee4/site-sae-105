<?php
function chargerProduits($filtre = 'tout') {
    $produits = [];
    $fichier = __DIR__ . '/../produits.csv';
    
    if (file_exists($fichier) && ($handle = fopen($fichier, "r")) !== FALSE) {
        fgetcsv($handle, 1000, ",", "\"", "\\"); // Sauter l'en-tête
        
        while (($data = fgetcsv($handle, 1000, ",", "\"", "\\")) !== FALSE) {
            if (count($data) < 7) continue; // Sécurité si ligne incomplète
            
            $p = [
                'img1' => $data[0],
                'img2' => $data[1],
                'img3' => $data[2],
                'img4' => $data[3],
                'nom'  => $data[4],
                'prix' => floatval($data[5]),
                'cat'  => $data[6]
            ];
            
            if ($filtre === 'tout' || $p['cat'] === $filtre) {
                $produits[] = $p;
            }
        }
        fclose($handle);
    }
    return $produits;
}

function trouverProduitParNom($nomCherche) {
    $tous = chargerProduits('tout');
    foreach ($tous as $p) {
        if ($p['nom'] === $nomCherche) {
            return $p;
        }
    }
    return null;
}
?>