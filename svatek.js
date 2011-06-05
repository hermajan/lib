// Pole se svátky v jednotlivých měsících
  var Leden=new Array ("Nový rok -> Den obnovy samostatného českého státu","Karina","Radmila","Diana","Dalimil","Tři králové","Vilma","Čestmír",
    "Vladan","Břetislav","Bohdana","Pravoslav","Edita","Radovan","Alice","Ctirad",
    "Drahoslav","Vladislav","Doubravka","Ilona","Běla","Slavomír","Zdeněk","Milena",
    "Miloš","Zora","Ingrid","Otýlie","Zdislava","Robin","Marika");
  var Unor=new Array ("Hynek","Nela","Blažej","Jarmila","Dobromila","Vanda","Veronika","Milada",
    "Apolena","Mojmír","Božena","Slavěna","Věnceslav","Valentýn","Jiřina","Ljuba",
    "Miloslava","Gizela","Patrik","Oldřich","Lenka","Petr","Svatopluk","Matěj",
    "Liliana","Dorota","Alexandr","Lumír","Horymír");
  var Brezen=new Array("Bedřich","Anežka","Kamil","Stela","Kazimír","Miroslav","Tomáš","Gabriela",
    "Františka","Viktorie","Anděla","Řehoř","Růžena","Matylda, Růt","Ida","Elena, Herbert",
    "Vlastimil","Eduard","Josef","Světlana","Radek","Leona","Ivona","Gabriel",
    "Marián","Emanuel","Dita","Soňa","Taťána","Arnošt","Kvido");
  var Duben=new Array("Hugo","Erika","Richard","Ivana","Miroslava","Vendula","Heřman, Hermína","Ema",
    "Dušan","Darja","Izabela","Julius","Aleš","Vincenc","Anastázie","Irena",
    "Rudolf","Velérie","Rostislav","Marcela","Alexandra","Evženie","Vojtěch","Jiří",
    "Marek","Oto","Jaroslav","Vlastislav","Robert","Blahoslav");
  var Kveten=new Array("Svátek práce","Zikmund","Alexej","Květoslav","Klaudie","Radoslav","Stanislav","Den vítězství",
    "Ctibor","Blažena","Svatava","Pankrác","Servác","Bonifác","Žofie","Přemysl",
    "Aneta","Nataša","Ivo","Zbyšek","Monika","Emil","Vladimír","Jana",
    "Viola","Filip","Valdemar","Vilém","Maxmilián a Maxim","Ferdinand","Kamila");
  var Cerven=new Array("Laura","Jarmil","Tamara","Dalibor","Dobroslav","Norbert","Iveta","Medard",
    "Stanislava","Gita","Bruno","Antonie","Antonín","Roland","Vít","Zbyněk",
    "Adolf","Milan","Leoš","Květa","Alois","Pavla","Zdeňka","Jan",
    "Ivan","Adriana","Ladislav","Lubomír","Petr a Pavel","Šárka");
  var Cervenec=new Array("Jaroslava","Patricie","Radomír","Prokop","Cyril a Metoděj -> Den slovanských věrozvěstů","Den upálení mistra Jana Husa","Bohuslava","Nora",
    "Drahoslava","Libuše, Amálie","Olga","Bořek","Markéta","Karolína","Jindřich",
    "Luboš","Martina","Drahomíra","Čeněk","Ilja","Vítězslav","Magdaléna","Libor",
    "Kristýna","Jakub","Anna","Věroslav","Viktor","Marta","Bořivoj","Ignác");
  var Srpen=new Array("Oskar","Gustav","Miluše","Dominik","Kristián","Oldřiška","Lada","Soběslav",
    "Roman","Vavřinec","Zuzana","Klára","Alena","Alan","Hana","Jáchym",
    "Petra","Helena","Ludvík","Bernard","Johana","Bohuslav","Sandra","Bartoloměj",
    "Radim","Luděk","Otakar","Augustýn","Evelína","Vladěna","Pavlína");
  var Zari=new Array("Linda, Samuel","Adéla","Bronislav","Jindřiška","Boris","Boleslav","Regína","Mariana",
    "Daniela","Irma","Denisa","Marie","Lubor","Radka","Jolana","Ludmila",
    "Naděžda","Kryštov","Zita","Oleg","Matouš","Darina","Berta","Jaromír",
    "Zlata","Andrea","Jonáš","Václav -> Den české státnosti","Michal","Jeroným");
  var Rijen=new Array("Igor","Olívie, Galina, Oliver","Bohumil","František","Eliška","Hanuš","Justýna","Věra",
    "Štafan, Sára","Marina","Andrej","Marcel","Renáta","Agáta","Tereza","Havel",
    "Hedvika","Lukáš","Michaela","Vendelín","Brigita","Sabina","Teodor","Nina",
    "Beáta","Erik","Šarlota, Zoja, Zoe","Den vzniku samostatného československého státu","Silvie","Tadeáš","Štěpánka");
  var Listopad=new Array("Felix","Dušičky","Hubert","Karel","Miriam","Liběna","Saskie","Bohumír",
    "Bohdan","Evžen","Martin","Benedikt","Tibor","Sáva","Leopold","Otmar",
    "Mahulena -> Den boje za svobodu a demokracii","Romana","Alžběta","Nikola","Albert","Cecílie","Klement","Emílie",
    "Kateřina","Artur","Xenie","René","Zina","Ondřej");
  var Prosinec=new Array("Iva","Blanka","Svatoslav","Barbora","Jitka","Mikuláš","Ambrož, Benjamín","Květoslava",
    "Vratislav","Julie","Dana","Simona","Lucie","Lýdie","Radana, Radan","Albína",
    "Daniel","Miloslav","Ester","Dagmar","Natálie","Šimon","Vlasta","Adam a Eva -> Štědrý den",
    "Boží hod - 1.svátek vánoční","Štěpán - 2.svátek vánoční","Žaneta","Bohumila","Judita","David","Silvestr");

// Dvourozměrné pole svátků, které obsahuje svátky za celý rok
  var jmena=new Array(Leden, Unor, Brezen, Duben, Kveten, Cerven, Cervenec, Srpen, Zari, Rijen, Listopad, Prosinec);

// Vrátí která k zadanému datu jméno oslavence nebo prázdný řetězec
  function getJmeno(datum){
    // Zjistí se číslo měsíce (0-11)
    var mesic=datum.getMonth();
    // Zjistí se číslo dne (1-31), kvůli indexaci v poli od 0 je třeba odečíst jedničku
    var den=datum.getDate() - 1;

    // Kontrola, zda pole obsahuje příslušnou položku a vrácení jména oslavence
    if((mesic<jmena.length) && (den<jmena[mesic].length)) {
      return jmena[mesic][den];
    }
    else {
      return '';
    }
  }
    
  function dnesniSvatek() {
    // Získání aktuálního data
    var dnes=new Date();
    // Zjištění jména oslavence
    var jmeno=getJmeno(dnes);
    // Vypsání jména oslavence
    if (jmeno!='') {
      document.write('Dnes má svátek <B>'+jmeno+'</B>.');
    }
    else {
      document.write('Dnes asi nemá nikdo svátek.');
    }
  }
  function svatek(den,mesic) {
    // Získání aktuálního data
    var datum=new Date();
    // Nastavení data, měsíc se indexuje od 0
    var month=mesic-1;
    datum.setFullYear(0,month,den)
    // Zjištění jména oslavence
    var jmeno=getJmeno(datum);
    // Vypsání jména oslavence
    if (jmeno!='') {
      document.write(den+'.'+mesic+' má svátek <B>'+jmeno+'</B>.');
    }
    else {
      document.write(den+'.'+mesic+' asi nemá nikdo svátek.');
    }
  }