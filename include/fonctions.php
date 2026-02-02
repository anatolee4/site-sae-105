<?php
function chargerProduits($filtre = 'tout') {
    $produits = [];
    $fichier = __DIR__ . '/../produits.csv';
    if (file_exists($fichier) && ($handle = fopen($fichier, "r")) !== FALSE) {
        // Correction ici : ajout des paramètres par défaut pour éviter l'erreur "Deprecated"
        fgetcsv($handle, 1000, ",", "\"", "\\"); 
        
        while (($data = fgetcsv($handle, 1000, ",", "\"", "\\")) !== FALSE) {
            $p = [
                'image' => $data[0],
                'hover' => $data[1],
                'nom'   => $data[2],
                'prix'  => floatval($data[3]),
                'cat'   => $data[4]
            ];
            if ($filtre === 'tout' || $p['cat'] === $filtre) {
                $produits[] = $p;
            }
        }
        fclose($handle);
    }
    return $produits;
}
?>