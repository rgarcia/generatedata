<?php


$LANG = array();

// Category: Special
$LANG["language"] = "Hrvatski";
$LANG["title"] = "generatedata.com";


// Category: Content
$LANG["AlphaNumeric_example_CanPostalCode"] = "(Kan. Poštanski broj)";
$LANG["AlphaNumeric_example_Password"] = "(Lozinka)";
$LANG["AlphaNumeric_example_USZipCode"] = "(US Poštanski broj)";
$LANG["AlphaNumeric_help_1"] = "Velika <b>L</b>etter.";
$LANG["AlphaNumeric_help_10"] = "Bilo koji broj, 1-9.";
$LANG["AlphaNumeric_help_11"] = "Suglasnik (gornji ili donji).";
$LANG["AlphaNumeric_help_12"] = "<b>H</b>exidecimal broj (0-F)";
$LANG["AlphaNumeric_help_2"] = "Velika <b>V</b>owel.";
$LANG["AlphaNumeric_help_3"] = "L mala <b></b> etter.";
$LANG["AlphaNumeric_help_4"] = "V mala <b></b> owel.";
$LANG["AlphaNumeric_help_5"] = "Pismo (gornji ili donji).";
$LANG["AlphaNumeric_help_6"] = "Samoglasnika (gornji ili donji).";
$LANG["AlphaNumeric_help_7"] = "Velika <b>C</b>onsonant.";
$LANG["AlphaNumeric_help_8"] = "Bilo koji broj, 0-9.";
$LANG["AlphaNumeric_help_9"] = "Mala <b>c</b>onsonant.";
$LANG["AlphaNumeric_help_intro"] = "Ova vrsta podataka omogućuje generiranje slučajnih alfa-numeričke nizove. Sljedeća tablica sadrži lik legenda za ovo polje. Znakovi koje unesete u ovo polje će se pojaviti unescaped.";
$LANG["AlphaNumeric_incomplete_fields"] = "Vrsta alfanumeričkih podataka treba imati oblik ušao u polju Opcije teksta. Ispravite sljedeće retke:";
$LANG["AlphaNumeric_name"] = "Alfanumerički";
$LANG["AutoIncrement_help_intro"] = "Generira stupac koji sadrži jedinstveni broj u svaki red, incrementing bilo kojim Vrijednost koju unosite. Ova mogućnost može biti korisna za umetanje podataka u bazu podataka polja s auto-prirastu primarnog ključa.";
$LANG["AutoIncrement_help_para2"] = "Opcionalno rezerviranog mjesta string omogućuje da ukopavati generirana prirasta vrijednosti unutar niza, preko <b>{\$INCR}</b> rezervirano mjesto. Na primjer:";
$LANG["AutoIncrement_increment_c"] = "Prirast:";
$LANG["AutoIncrement_name"] = "Auto-prirasta";
$LANG["AutoIncrement_placeholder_str"] = "Rezervirano mjesto string:";
$LANG["AutoIncrement_start_at_c"] = "Početak u:";
$LANG["City_name"] = "Grad";
$LANG["Composite_division"] = "podjela";
$LANG["Composite_help_1"] = "Vrsta Composite podataka omogućuje kombiniranje podataka iz bilo koje druge redak ili retke, i manipuliraju, promijeniti, kombiniranje informacija i više. Sadržaj bi trebao biti utipkanim u Smarty templating jezik.";
$LANG["Composite_help_2"] = "Za izlaz iz bilo koje vrijednosti redu, samo koristiti rezervirana mjesta <b>( \$ ROW1), ( \$ ROW2),</b> itd. Ne možete naći u aktualnom redu - da ili bi se tope poslužitelja i / ili da je svemir implodirati.";
$LANG["Composite_help_3"] = "Evo nekoliko primjera:";
$LANG["Composite_help_4"] = "Prikaz vrijednosti iz retka 6: <b>( \$ ROW6)</b>";
$LANG["Composite_help_5"] = "Ako pretpostavimo da red 1 i 2 retka sadrže slučajnih brojeva, sljedeći su primjeri neke jednostavne matematike:";
$LANG["Composite_help_6"] = "Ako je redak 1 sadrži broj 5, prikazati  &quot;N / &quot;, inače pravedan pokazati broj.";
$LANG["Composite_help_7"] = "Molimo pogledajte <a href=\"http://www.smarty.net/\">Smarty web stranicu</a> za više informacija o sintaksi.";
$LANG["Composite_multiplication"] = "množenje";
$LANG["Composite_na"] = "N / A";
$LANG["Composite_name"] = "Kompozitni";
$LANG["Composite_subtraction"] = "oduzimanje";
$LANG["Constant_help_1"] = "Ova vrsta podataka omogućava vam generirati stupac podataka koji se ponavlja vrijednosti od retka do retka. Evo nekoliko primjera kako bi vam dali ideju o tome kako to radi.";
$LANG["Constant_help_2"] = "Ako želite dati vrijednost  &quot;1 &quot; za svaki redak, možete unijeti  &quot;1 &quot; u vrijednosti (s) polje i bilo koju vrijednost (&gt; 0) u polju Loop grof.";
$LANG["Constant_help_3"] = "Ako želite imati 100 redaka string  &quot;Male &quot; nakon koje slijedi 100 redova string  &quot;Ženski &quot; i ponoviti, možete unijeti  &quot;100 &quot; u polju Loop grof i  &quot;Male | Ženski  &quot;u vrijednosti (s) području.";
$LANG["Constant_help_4"] = "Ako želite 5 redaka od 1 do 10, unesite  &quot;5 &quot; za polje grof Petlja, a  &quot;1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10 &quot; u vrijednost (i) polja.";
$LANG["Constant_help_5"] = "Pokušajte tinkering okolo s njim. Vi ćete dobiti ideju.";
$LANG["Constant_incomplete_fields"] = "Stalno vrste podataka treba imati konstante bi ušao u tekst polje. Ispravite sljedeće retke:";
$LANG["Constant_loop_count"] = "Petlja count:";
$LANG["Constant_name"] = "Konstanta";
$LANG["Constant_values"] = "Vrijednost (i):";
$LANG["Country_limit_results"] = "Granica zemalja na one iznad odabrane";
$LANG["Country_name"] = "Zemlja";
$LANG["Date_char"] = "Char";
$LANG["Date_day"] = "Dan";
$LANG["Date_description"] = "Opis";
$LANG["Date_example"] = "Primjer";
$LANG["Date_format_code"] = "Format kod:";
$LANG["Date_from"] = "Od:";
$LANG["Date_help_D"] = "Tekstualni prikaz dan, tri slova";
$LANG["Date_help_D_example"] = "Ned pon";
$LANG["Date_help_F"] = "Pun tekstualni prikaz mjeseca, kao što su Siječanj ili ožujku";
$LANG["Date_help_F_example"] = "Siječnja do prosinca";
$LANG["Date_help_L"] = "Bilo da je prijestupna godina";
$LANG["Date_help_L_example"] = "1 ako je prijestupna godina, 0 inače.";
$LANG["Date_help_M"] = "Kratki tekstualni prikaz mjeseca, tri slova";
$LANG["Date_help_M_example"] = "Jan do prosinca";
$LANG["Date_help_S"] = "Engleski redni sufiks za dan u mjesecu, 2 znaka st, II, III ili th. Dobro radi sa j";
$LANG["Date_help_S_example"] = "Nedjelja do subote";
$LANG["Date_help_W"] = "ISO-8601 tjedan broj godina, početkom tjedna je u ponedjeljak";
$LANG["Date_help_W_example"] = "42 (42. tjedan u godini)";
$LANG["Date_help_Y"] = "Numerički prikaz pune godine, 4 znamenke";
$LANG["Date_help_Y_example"] = "1999 ili 2003";
$LANG["Date_help_d"] = "Dana u mjesecu, 2 znamenke s vodećim nulama";
$LANG["Date_help_d_example"] = "01 - 31";
$LANG["Date_help_intro"] = "Ova vrsta podataka nasumično generira dana između datuma određeno, i omogućava jedinstveno oblikovanje rezultat. Pogledajte donju tablicu za popis održive pravila oblikovanja (to su cribbed od standardnih PHP Date () mogućnosti oblikovanja). Pogledajte primjer dropdown odabir iz postojećih mogućnosti oblikovanja.";
$LANG["Date_help_j"] = "Dan u mjesecu bez vodeće nule";
$LANG["Date_help_j_example"] = "1 do 31";
$LANG["Date_help_l"] = "Pun tekstualni prikaz dana u tjednu";
$LANG["Date_help_l_example"] = "Nedjelja do subote";
$LANG["Date_help_m"] = "Brojčano predstavljanje mjeseca, s vodećim nulama";
$LANG["Date_help_m_example"] = "01 do 12";
$LANG["Date_help_n"] = "Brojčano predstavljanje mjesec dana, bez vodeće nule";
$LANG["Date_help_n_example"] = "1 do 12";
$LANG["Date_help_t"] = "Broj dana u tekućem mjesecu";
$LANG["Date_help_t_example"] = "28 do 31";
$LANG["Date_help_w"] = "Brojčani prikaz dana u tjednu";
$LANG["Date_help_w_example"] = "0 (za nedjelju) do 6 (za subotu)";
$LANG["Date_help_y"] = "Dvije znamenke prikaz godišnje";
$LANG["Date_help_y_example"] = "99 ili 03";
$LANG["Date_help_z"] = "Dan godine (počevši od 0)";
$LANG["Date_help_z_example"] = "0 do 365";
$LANG["Date_incomplete_fields"] = "Datumi treba imati oblik ušao u polju Opcije teksta. Ispravite sljedeće retke:";
$LANG["Date_month"] = "Mjesec";
$LANG["Date_name"] = "Datum";
$LANG["Date_to"] = "Da biste:";
$LANG["Date_week"] = "Tjedan";
$LANG["Date_year"] = "Godina";
$LANG["Emails_name"] = "E-mail";
$LANG["GUID_help"] = "Generira jedinstveno, slučajni GUID (globalno jedinstveni identifikator) u obliku: XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX, gdje je X bilo koji hexidecimal znamenka).";
$LANG["GUID_name"] = "GUID";
$LANG["LatLng_help"] = "Ova vrsta podataka generira slučajni širina i / ili duljine. Ako su oba odabrana, prikazuje i odvojene zarezom.";
$LANG["LatLng_latitude"] = "Širina";
$LANG["LatLng_longitude"] = "Dužina";
$LANG["LatLng_name"] = "Latitude / Longitude";
$LANG["List_at_most"] = "Najviše";
$LANG["List_colours"] = "crvena | narančasta | žuta | zelena | plava | indigo | violet";
$LANG["List_companies"] = "Microsoft | Macromedia | Google | Yahoo | Lycos | Altavista | Chami | Adobe | Borland | Lavasoft | Cakewalk | Sibelius | Finale | Apple Systems";
$LANG["List_company_names"] = "Računovodstvo | Oglašavanje | Asset Management | Customer Relations | Servis | Financije | Ljudski resursi | Pravne službe | odnosi s medijima | Platne | Odnosi s javnošću | Prodaja osiguranja kvalitete | and Marketing | Istraživanje i razvoj | Tehnička podrška";
$LANG["List_exactly"] = "Točno";
$LANG["List_example_1"] = "Odd Nums ispod 50";
$LANG["List_example_2"] = "Čak Nums ispod 50";
$LANG["List_example_3"] = "One-Ten";
$LANG["List_example_4"] = "Predsjednik Nums ispod 100";
$LANG["List_example_5"] = "Boje";
$LANG["List_example_6"] = "Bračno stanje";
$LANG["List_example_7"] = "Naslov";
$LANG["List_example_8"] = "Odjel Imena";
$LANG["List_example_9"] = "Tvrtke ovdje";
$LANG["List_help"] = "Unesite popis stavki, odvojeni karakter cijev |. Zatim odaberite da li želite <b>točno</b>X broj predmeta, ili <b>Na većini</b>X stavke s popisa. Više stavki se vratio u razgraničeni zarezom popis u rezultatima.";
$LANG["List_name"] = "Custom List";
$LANG["List_one_to_ten"] = "jedan | dva | tri | četiri | pet | šest | sedam | osam | devet | deset";
$LANG["List_prefix"] = "Dr. | gospodin | Gđa | Gospođa |";
$LANG["List_relationship_states"] = "Single | Oženjen | Razveden | Common-Law";
$LANG["List_separated_by_pipe"] = "Unesite vrijednosti odvojenih |";
$LANG["Names_example_FemaleName"] = "Jane (žensko ime)";
$LANG["Names_example_FemaleName_Surname"] = "Jane Smith";
$LANG["Names_example_MaleName"] = "John (Odg)";
$LANG["Names_example_MaleName_Surname"] = "John Smith";
$LANG["Names_example_Name"] = "Alex (bilo koji spol)";
$LANG["Names_example_Name4"] = "Jenny, Toby, Ben, Peter";
$LANG["Names_example_Name_Initial_Surname"] = "Alex J. Smith";
$LANG["Names_example_Name_Surname"] = "Alex Smith";
$LANG["Names_example_Surname_Name_Initial"] = "Smith, John P.";
$LANG["Names_example_fullnames"] = "Alex Smith i Alex J. Smith";
$LANG["Names_example_surname"] = "Smith (prezime)";
$LANG["Names_help_intro"] = "Ova vrsta podataka nasumično generira ljudska imena (uglavnom zapadne) prema formatu koji ste odredili. Možete navesti više formata tako da ih odvajate cijevi (|) karakter. Sljedeći nizovi će se pretvoriti u svoje ime slučajan ekvivalent:";
$LANG["Names_incomplete_fields"] = "Vrsta Naziv podataka treba imati oblik ušao u polju Opcije teksta. Ispravite sljedeće retke:";
$LANG["Names_name"] = "Ime";
$LANG["Names_type_FemaleName"] = "Žensko ime.";
$LANG["Names_type_Initial"] = "Velikim slovima pismo, AZ.";
$LANG["Names_type_MaleName"] = "Muški ime.";
$LANG["Names_type_Name"] = "Ime, muško ili žensko.";
$LANG["Names_type_Surname"] = "Slučajni prezime.";
$LANG["NumberRange_and"] = "i";
$LANG["NumberRange_between"] = "Između";
$LANG["NumberRange_help"] = "Ovaj nasumično generira broj između vrijednosti koje odredite. Oba polja omogućuju vam da unesete negativnih brojeva.";
$LANG["NumberRange_name"] = "Broj Range";
$LANG["Phone_different_formats"] = "Različiti formati";
$LANG["Phone_example_1"] = "Kanada (1)";
$LANG["Phone_example_2"] = "Kanada (2)";
$LANG["Phone_help_text1"] = "Bez obzira na tekst koji unesete u polje opcije tekstu će se koristiti za generiranje telefonskih brojeva. Kapitalni <b>X</b>&#39;s će se pretvoriti u slučajni broj između 1 i 9, lower-case <b>x </b>&#39; s će se pretvoriti u slučajan broj između 0 i 9.";
$LANG["Phone_help_text2"] = "Odaberite jednu od vrijednosti u padajućem primjerice za neke ideje. Zapamtite: ništa drugo nego <b>X</b>i <b>x</b>karakter lijevo nepretvoreni.";
$LANG["Phone_help_text3"] = "Kao i kod mnogih drugih vrsta podataka, generirati brojeve telefona u više formata ih odvojite karakter cijev |.";
$LANG["Phone_incomplete_fields"] = "Vrsta Telefon podataka treba imati oblik ušao u polju Opcije teksta. Ispravite sljedeće retke:";
$LANG["Phone_name"] = "Telefon / Fax";
$LANG["Phone_uk"] = "Velika Britanija";
$LANG["PostalZip_help_text"] = "Generira slučajni zip ili poštanski broj. Za veću kontrolu, koriste alfa-numeričke podatke opciju tipa.";
$LANG["PostalZip_name"] = "Poštanski";
$LANG["StateProvince_help_text"] = "Generira slučajni pokrajina, države, teritorije ili županija, na temelju opcijama koje odaberete. Ime <b>Puni</b>i <b>Kratica</b>pod-opcija se utvrdilo da li izlaz će sadržavati cijeli niz (npr. &quot;British Columbia&quot;) ili njegove kratice (npr. &quot;Krista&quot;). Za UK županija, kratica je standardni 3-karakter Chapman kod.";
$LANG["StateProvince_name"] = "Država / provincija / županija";
$LANG["StreetAddress_ap_num"] = "Ap #";
$LANG["StreetAddress_name"] = "Ulica";
$LANG["StreetAddress_po_box"] = "PO Box";
$LANG["StreetAddress_street_types"] = "St., sv, ulica, cesta, Rd., Rd., Ave, Av.., Avenue";
$LANG["TextFixed_generate"] = "Generirati";
$LANG["TextFixed_help"] = "Ova opcija generira određeni broj slučajnih riječi, izdvajali iz standardnih &lt;a href=&quot;http://en.wikipedia.org/wiki/Lorem_ipsum&quot; target=&quot;_blank&quot;&gt; Lorem ipsum &lt;/ a&gt; latinski tekst.";
$LANG["TextFixed_name"] = "Fiksni broj riječi";
$LANG["TextFixed_words"] = "riječima";
$LANG["TextRandom_name"] = "Random broj riječi";
$LANG["Tree_auto_increment_row_num"] = "Auto-prirast redu broj:";
$LANG["Tree_help_1"] = "Ova vrsta podataka omogućuje generiranje stabla poput podataka u kojem svaki redak je dijete drugi red - osim prvog retka, koja je deblo stabla. Ova vrsta podataka se mora koristiti zajedno sa Auto-prirast tipa podataka: koji osigurava da svaki red ima jedinstvenu numeričku vrijednost koja ovaj tip podataka koristi za referencu redaka roditelja.";
$LANG["Tree_help_2"] = "Opcija vam odrediti koji od vaših polja obrasca je odgovarajući auto-increment polje i najveći broj djece čvor može imati.";
$LANG["Tree_invalid_parent"] = "[Invalid roditelj]";
$LANG["Tree_max_num_sibling_nodes"] = "Max broj polubrat čvorova:";
$LANG["Tree_name"] = "Tree (roditelj redak ID)";
$LANG["about"] = "Oko";
$LANG["accounts"] = "Računi";
$LANG["add"] = "Dodati";
$LANG["add_default_auto_increment_col"] = "Dodaj default auto-increment stupcu";
$LANG["column_title"] = "Stupac Naslov";
$LANG["confirm_delete_form"] = "Jeste li sigurni da želite izbrisati ovaj obrazac?";
$LANG["confirm_empty_form"] = "Jeste li sigurni da želite isprazniti taj oblik?";
$LANG["countries"] = "Zemlje";
$LANG["country_australia"] = "Australija";
$LANG["country_belgium"] = "Belgija";
$LANG["country_canada"] = "Kanada";
$LANG["country_netherlands"] = "Nizozemska";
$LANG["country_uk"] = "Ujedinjeno Kraljevstvo";
$LANG["country_us"] = "Sjedinjene Države";
$LANG["data_type"] = "Vrsta podataka";
$LANG["db_table_name"] = "Tablica baze podataka name";
$LANG["db_type"] = "Tip baze podataka";
$LANG["default_save_form_empty_str"] = "Unesite naziv obrasca ovdje";
$LANG["del"] = "Del";
$LANG["del_uc"] = "DEL";
$LANG["delimiter_chars"] = "Graničnik znakova (s)";
$LANG["donate"] = "Donirajte!";
$LANG["empty_form"] = "Prazan obrazac";
$LANG["enclose_table_backquotes"] = "Priložiti stol i naziva polja sa backquotes";
$LANG["eol_char"] = "Kraj reda karaktera";
$LANG["examples"] = "Primjeri";
$LANG["fatal_error"] = "Fatalna pogreška.";
$LANG["form_deleted"] = "Obrazac je obrisana.";
$LANG["form_exists_overwrite_confirmation"] = "Ovaj oblik već postoji. Želite li je prepisati?";
$LANG["form_not_deleted"] = "Nažalost, nije moguće izbrisati ovaj obrazac. Ponovno prijavite se i pokušajte ponovno.";
$LANG["form_saved"] = "Tvoj oblik je spremljena.";
$LANG["forums"] = "Forum";
$LANG["generate"] = "Generirati";
$LANG["generator"] = "Generator";
$LANG["help"] = "Pomoć";
$LANG["hide_error"] = "Sakrij pogreške";
$LANG["human_data"] = "Ljudski podataka";
$LANG["include_create_table_query"] = "Uključite CREATE TABLE upit";
$LANG["include_drop_table_query"] = "Uključite DROP TABLE upit";
$LANG["invalid_custom_xml"] = "Postoji problem s prilagođeni XML oznake koje ste unijeli. Molimo konzultirajte dokumentaciju korisnika za više informacija.";
$LANG["invalid_node_names"] = "XML imena čvora može mora sadržavati samo alfanumeričke znakove i mora početi sa slovom. Ispravite sljedeće retke:";
$LANG["invalid_num_results"] = "Unesite valjani broj rezultata.";
$LANG["invalid_table_names"] = "Baza podataka nazive stupaca mogu samo alfanumeričke znakove i mora početi sa slovom. Ispravite sljedeće retke:";
$LANG["invalid_xml_record_node_name"] = "Molimo unesite valjani XML vrijednost čvora rekord.";
$LANG["invalid_xml_root_node_name"] = "Molimo unesite valjani XML vrijednost čvor korijen.";
$LANG["load_uc"] = "LOAD";
$LANG["misc_options"] = "Ostalo Mogućnosti";
$LANG["missing_node_names"] = "Sljedeći redovi su nestale čvor imena:";
$LANG["missing_table_names"] = "Sljedeći redovi su nestale stupca tablice imena:";
$LANG["missing_xml_record_node_name"] = "Molimo unesite vrijednosti za čvor XML zapis.";
$LANG["missing_xml_root_node_name"] = "Molimo unesite vrijednosti za XML čvor korijen.";
$LANG["no_csv_delimiter"] = "Molimo unesite CSV graničnik.";
$LANG["no_data"] = "Ups, ništa za generiranje! Unesite podatke biti generiran.";
$LANG["no_examples_available"] = "Nema dostupnih primjera.";
$LANG["no_form_name"] = "Unesite naziv obrasca.";
$LANG["no_js"] = "<b>Greška:</b>JavaScript nije omogućen.";
$LANG["no_js_blurb"] = "Original podataka generator velikoj mjeri oslanja na javascript. Morat ćete se omogućilo da u svom pregledniku zatim osvježite ovu stranicu.";
$LANG["no_num_rows"] = "Molimo unesite broj redaka koji želite dodati.";
$LANG["no_options_available"] = "Nema opcija na raspolaganju.";
$LANG["node_name"] = "Node Name";
$LANG["none"] = "Nijedan";
$LANG["num_results"] = "Num Rezultati";
$LANG["ok"] = "OK";
$LANG["options"] = "Mogućnosti";
$LANG["order"] = "Red";
$LANG["other"] = "Drugi";
$LANG["please_fix_errors"] = "Ispravite sljedeće pogreške i ponovno:";
$LANG["please_select"] = "Odaberite";
$LANG["primary_key"] = "Primarni ključ";
$LANG["record_node_name"] = "Record čvor ime";
$LANG["result_type"] = "Rezultat Tip";
$LANG["root_node_name"] = "Root čvor ime";
$LANG["row_sp"] = "Row (s)";
$LANG["save_uc"] = "SAVE";
$LANG["script_thinking"] = "Ups, na čekanju za drugi. Skripta je razmišljanja.";
$LANG["see_help_popup"] = "Pogledajte pomoć popup.";
$LANG["select_language"] = "Odaberite jezik";
$LANG["statement_type"] = "Izjava Tip";
$LANG["table_column"] = "Stupac tablice";
$LANG["text"] = "Tekst";
$LANG["use_custom_xml_format"] = "Koristi prilagođene XML obliku";
$LANG["website"] = "Website";

?>