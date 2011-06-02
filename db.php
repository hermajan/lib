<?php
 function pripojit() {
    // připojení do databáze
    $spojeni=new mysqli("localhost","root","heslo","adm");
	   
	// ohlídání chyb připojení
    if($spojeni->connect_errno) {
        echo "Připojení se nezdařilo: ".$spojeni->connect_error;
        $spojeni->close();
        exit();
    }
	
    //nastavení znakové sady
	$spojeni->query("SET NAMES UTF8")
	   or die("Nelze nastavit kódování UTF-8: ".$spojeni->error);
	   
	return $spojeni;
 }
 function ukonceni($pripojeni) {
    //ukončení spojení
    $pripojeni->close();
 }
 
 function vypis($dotaz) {
    $pripojeni=pripojit();
    //zadání a připravení dotazu SQL na spuštění
    $vysledek=$pripojeni->prepare($dotaz) or die("Špatný dotaz: ".$pripojeni->error);

    //spuštění dotazu SQL
    $vysledek->execute();
    
    // pošle výsledek dotazu do paměti
    $vysledek->bind_result($vypsana);
      
    //vrácení údaje z databáze
    $vysledek->fetch();
    echo $vypsana;
	
	// uvolnění výpisu dotazu z paměti
	$vysledek->free_result();
	$pripojeni->close();
}
 function vraceni($dotaz) {
    $pripojeni=pripojit();
    //zadání a připravení dotazu SQL na spuštění
    $vysledek=$pripojeni->prepare($dotaz) or die("Špatný dotaz: ".$pripojeni->error);

    //spuštění dotazu SQL
    $vysledek->execute();
    
    // pošle výsledek dotazu do paměti
    $vysledek->bind_result($vypsana);
      
    //vrácení údaje z databáze
    $vysledek->fetch();
    return $vypsana;
	
	// uvolnění výpisu dotazu z paměti
	$vysledek->free_result();
	$pripojeni->close();
}
 function dotazSQL($dotaz) {
    $pripojeni=pripojit();
    //zadání a připravení dotazu SQL na spuštění
    $vysledek=$pripojeni->prepare($dotaz) or die("Špatný dotaz: ".$pripojeni->error);

    //spuštění dotazu SQL
    $x=$vysledek->execute();

	// uvolnění výpisu dotazu z paměti
	$vysledek->free_result();
	$pripojeni->close();
}
?>
