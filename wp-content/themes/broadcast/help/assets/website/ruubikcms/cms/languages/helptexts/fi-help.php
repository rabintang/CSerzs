<?php
/*
RuubikCMS helptext language file
Language: 'fi'
Author: Iisakki Piril�
Email: info[at]ruubikcms[dot]com
*/
		define("H_TITLE", "<h5>Sivun nimi</h5><p>Valikossa n�kyv� sivun nimi.</p><p>N�kyy sek� <b>web-sivuston valikossa</b> ett� <b>CMS:n valikossa</b>.</p><p>Jos luot uutta sivua, etk� sy�t� mit��n kentt��n <b>URL</b>, niin sivun nimen pohjalta luodaan yksil�llinen URL-osoiteeseen kelpaava nimi.</p>");
		define("H_HEADER1", "<h5>H1-otsikko</h5><p>Web-sivulla n�kyv� p��otsikko eli <b>H1-elementti</b>.</p><p>Jos H1-otsikko j�tet��n uudella sivulla tyhj�ksi, niin kent�ss� k�ytet��n samaa teksti� kuin yl�puolella olevassa <b>Sivun nimi</b> -kent�ss�.</p><p><b>SEO</b>: H1-teksti on merkityksellinen my�s hakukoneille.</p>");
		define("H_PAGEURL", "<h5>Sivun URL</h5><p><b>Sivun URL-osoitteen loppuosa.</b></p><p>Vaikuttaa URL:n tiedostonimi-osaan eli siihen, mit� tulee viimeisen kauttaviivan (/) j�lkeen.</p><p>URL n�kyy selaimen osoiterivill� ja selke� URL on t�rke� my�s hakukoneille.</p><p><b>SEO:</b> Hakusanan l�ytyminen URL-osoitteesta vaikuttaa voimakkaasti sijoittumiseen Googlen hakutuloksissa.</p><p>Katso my�s koko sivustoa koskevat URL-asetukset <b>Sivuston asetukset</b> -v�lilehdelt�.</p>");
		define("H_PAGELINK", "<h5>Sis�inen linkki</h5><p>T�st� kent�ss� voit kopioida sivun linkin, jos haluat k�ytt�� sit� esimerkiksi sivuston sis�isiss� linkeiss�.</p>");
		define("H_LEVEL", "<h5>Sivun valikkotaso</h5><p>Sivulla voi olla kolme valikkotasoa: <b>p��valikko</b>, <b>1. alavalikko</b> tai <b>2. alavalikko</b>.</p><p>Jos haluat sivun p��valikkoon, j�t� valituksi <b>P��taso</b>. Jos taas haluat sivun jonkin sivun alle alavalikkoon, valitse t�h�n sivu, jonka alle sivu tulee. Sivu lis�t��n automaattisesti oikeaan valikkoon.</p><p>Jos et halua sivua n�kym��n miss��n valikossa, valitse vaihtoehto <b>Vapaa sivu</b>.</p>");
		define("H_PAGESTATUS", "<h5>Sivun tila</h5><p><b>Julkaistu:</b> n�kyy normaalisti sivustolla.</p><p><b>Luonnos:</b> ei n�y julkisesti, mutta voit silti muokata sivua.</p>");
		define("H_PAGETYPE", "<h5>Sivun tyyppi</h5><p>Voit m��ritell� t�m�n sivun tavallisen lis�ksi my�s joksikin erikoissivuksi.</p><p>Erikoissivu n�kyy yl�puolella m��ritellyss� osoitteessa ja valikkotasolla, mutta siihen liittyv�t asetukset ja sis�lt� muokataan omalla CMS:n v�lilehdell��n.</p>");
		define("H_PAGETITLE", "<h5>Sivun otsikko (title)</h5><p>Web-sivun otsikko eli <b>Title-elementti</b>, joka on <b>eritt�in t�rke� hakukoneille</b>.</p><p>T�m� n�kyy vierailijoille my�s Web-selainikkunan otsikkorivill� ja mm. selaimen v�lilehden tekstin�.</p>");
		define("H_DESCRIPTION", "<h5>Sivun kuvaus</h5><p>Sivun lyhyt kuvaus, joka lis�t��n sivun l�hdekoodin <b>description</b>-metatietona.</p><p>T�t� lyhytt� tiivistelm�� voidaan k�ytt�� mm. <b>Googlen hakutuloksissa sivun esittelytekstin�</b>.</p>");
		define("H_KEYWORDS", "<h5>Avainsanat</h5><p>Avainsanat lis�t��n sivun l�hdekoodiin <b>keywords</b>-metatietona.</p><p>Osa hakukoneista saattaa k�ytt�� n�it�, vaikka Google j�tt��kin n�m� t�ll� hetkell� huomioimatta.</p>");
		define("H_IMAGE", "<h5>Kuvituskuvat</h5><p>Sivuston pohjaan ja kuvitukseen kuuluva vakiokuva tai flash-animaatio.</p><p>Sivun pohja m��rittelee yleens� sopivan kuvakoon.</p><p>Sivuston asetuksista saa saman oletuskuvan kaikille sivuille.</p>");
		define("H_SITENAME", "<h5>Sivuston/yrityksen nimi</h5><p>T�t� tietoa on mahdollista k�ytt�� sivustolla paikoissa, johon halutaan automaattisesti sivuston/yrityksen nimi (esim. alatunnisteen copyright-tiedoissa).</p>");
		define("H_DOCTYPE", "<h5>Sivuston dokumenttityyppi</h5><p>L�hdekoodin alkuun tuleva tieto, joka m��rittelee kielen, jolla sivupohja on tehty.</p><p>Jos et tied�, mit� teet, �l� vaihda oletusarvoa!</p><p>Lis�tietoa esim. <a href='http://en.wikipedia.org/wiki/Document_Type_Declaration' target='_blank'>Wikipedian artikkelissa</a>.</p>");
		define("H_CHARSET", '<h5>Merkist�</h5><p>T�ss� ilmoitetaan, mit� merkist�koodausta sivuston tallennuksessa on k�ytetty.</p><p>Jos et tied�, mit� teet, �l� vaihda oletusarvoa!</p>');
		define("H_ROBOTS", '<h5>Robots</h5><p>Sivuston l�hdekoodissa ilmoitettava tieto, jolla kerrotaan hakukoneroboteille, halutaanko sivuston sis�lt� indeksoida mukaan hakukoneen tietokantaan.</p><p>Erikseen voidaan m��ritell�, seuraako hakukone sivulla olevia linkkej� indeksoidakseen my�s n�m� sivut</p><p>Huomioi, ett� huonosti k�ytt�ytyv�t hakukonerobotit eiv�t v�ltt�m�tt� noudata t�t� pyynt��.</p>');
		define("H_SETUPDEFAULT", '<p>T�m� on koko sivustoa koskeva oletusarvo. Jos j�t�t yksitt�iselt� sivulta t�m�n kent�n t�ytt�m�tt�, k�ytet��n t�h�n kentt��n sy�tetty� oletusarvoa.</p>');
		define("H_DEFAULTIFEMPTY", '<p>Jos j�t�t t�m�n kent�n tyhj�ksi, sivustolla k�ytet��n automaattisesti <b>Sivuston asetukset</b> -v�lilehdell� m��ritelty� oletusarvoa.</p>');
		define("H_COPYRIGHT", '<h5>Copyright</h5><p>Tieto tulee sivuston l�hdekoodiin metatietona sek� haluttaessa sivuston alatunnisteeseen.</p>');
		define("H_AUTHOR", '<h5>Author</h5><p>Sivuston l�hdekoodiin tuleva author-metatieto, jolla ilmoitetaan sivuston tekij�n nimi/nimet.</p>');
		define("H_LANGUAGE", '<h5>Sivuston sis�ll�n kieli</h5><p>Tieto ilmoitetaan l�hdekoodissa HTML-elementiss�.</p><p>Hakukoneet saattavat k�ytt�� t�t� tietoa hakutulosten kohdistamiseksi oikealle kieliryhm�lle.</p>');
		define("H_IMGMISSING", '<h5>Vakiokuvan puuttuminen</h5><p>Miten toimitaan, jos jollekin yksitt�iselle sivulle ei ole m��ritelty vakiokuvaa.</p><p>Oletusarvona on, ett� k�ytet��n etusivun eli sivunhallinnassa ylimm�isen� olevan p��tason sivun kuvaa.</p><p>Toinen vaihtoehto on j�tt�� kuva t�llaiselta sivulta kokonaan pois.</p>');
		define("H_CLEANURL", '<h5>Siisti URL</h5><p>T�ll� valinnalla voidaan ottaa k�ytt��n hakukoneyst�v�lliset URL-osoitteet, joista on siivottu mm. kysymysmerkki pois. Osa hakukoneista ei indeksoi kysymysmerkin sis�lt�vi� dynaamisia sivustoja kunnolla. Siisi URL kertoo my�s loogisesti, mill� alasivulla ollaan.</p><p>Siisti URL on muotoa: </p><p>http://www.sivusto.com/index.php/tuotteet/putket.html</p><p>Ei siistityss� muodossa t�m� olisi:</p><p>http://www.sivusto.com/index.php?p=putket</p><p>Huom! K�ytett�ess� Siisti URL -valintaa sivupohjassa olevat linkit on ilmoitettava absoluuttisina (/-merkki alkuun ja polku www-juuresta asti). Esim. CSS-tiedostojen linkitys:</p><p>/ruubikcms/website/css/stylesheet.css</p>');
		define("H_URLSUFFIX", '<h5>URL-loppuliite</h5><p>Voit erikseen p��tt��, mik� pisteell� varustettu loppuliite tulee jokaisen URL-osoitteen loppuun, kun k�yt�ss� on Siisti URL -toiminto.</p><p>Tyypillisin esimerkki on .html, mutta my�s muut arvot ovat sallittuja ja toimivia. K�yt�nn�ss� t�ll� halutaan imitoida staattisia sivustoja, joita esim. Googlen hakurobotti arvostaa.</p><p>Tiedolla ei ole vaikutusta, jos Siisti URL -toiminto ei ole p��ll�.</p>');
		define("H_GACODE", '<h5>Google Analytics -koodi</h5><p>Kopioi ja liit� t�h�n <b>Google Analytics -seurantakoodi</b>. T�m� lis�t��n automaattisesti jokaiselle sivulle ja voit seurata sivuston k�vij�it� Analyticsissa.</p>');
		define("H_READMORELINK", '<h5>Lue lis�� -linkki</h5><p>Voit valita, haluatko jokaisen uutisen j�lkeen viel� erikseen <b>Lue lis��</b> -linkin, joka avaa uutisen.</p><p><b>Lue lis��</b> -linkki on saman linkin toistoa eik� se ole merkityksellinen hakukoneille, mutta se voi olla k�ytt�j�yst�v�llinen ja saada useammat ihmiset lukemaan uutisen.</p>');
		define("H_SHOWDATE", '<h5>N�yt� p�iv�m��r�</h5><p>Voit valita, n�ytet��nk� uutisen p�iv�m��r� web-sivustolla. Jos et valitse t�t�, p�iv�m��r� n�kyy vain CMS-puolella.</p>');
		define("H_NEWSTEXTASLINK", '<h5>Uutisteksti linkkin�</h5><p>Voit valita, toimiiko uutisten listassa n�kyv� tiivistelm� my�s linkkin� uutiseen.</p><p><b>SEO:</b> Linkiss� esiintyv�t hakusanat auttavat sijoittumista hakutuloksissa.</p>');
		define("H_SHORTCHARNUM", '<h5>Tiivistelm�n merkkim��r�</h5><p>Kuinka monta merkki� uutistekstin alusta n�ytet��n uutisen tiivistelm�ss�.</p>');
		define("H_NEWSSHOWNUM", '<h5>N�ytett�v� m��r�</h5><p>Kuinka monta uusinta uutista n�ytet��n uutispalstalla.</p>');
		define("H_READMORETEXT", '<h5>Lue lis�� -linkin teksti</h5><p>Voit muokata valinnaisen <b>Lue lis�� -linkin</b> teksti�.</p>');
		define("H_NEWSTITLE", '<h5>Uutisen otsikko</h5><p>Uutisen otsikko, joka n�kyy sek� web-sivustolla ett� CMS:n valikossa.</p><p>Uutisen otsikosta ei luoda URL-osoitetta, vaan tavalliset uutiset saavat numerotunnuksen (id), joka n�kyy linkiss�.</p>');
		define("H_NEWSSTATUS", '<h5>Uutisen tila</h5><p>Jos haluat, ett� uutinen n�kyy web-sivuilla, valitse tilaksi <b>Aktiivinen</b>.</p><p>Jos haluat s�ilytt�� uutisen CMS:n arkistossa, mutta et haluat, ett� uutinen tulee en�� n�kyviin julkisesti web-sivuilla, valitse <b>Arkistoitu, ei n�y sivustolla</b>.</p><p><b>Sivuston asetuksissa</b> voit m��ritell�, montako uusinta aktiivista uutista n�ytet��n.</p>');
		define("H_NEWSDATE", '<h5>Uutisen julkaisup�iv�m��r�</h5><p>P�iv�m��r�, jolloin uutinen on julkaistu. Uudelle uutiselle tulee valmiiksi nykyinen p�iv�m��r�.</p><p>Uutiset j�rjestet��n CMS:n valikkoon p�iv�m��r�n mukaan vuosittain ryhmiteltyn�.</p><p><b>Sivuston asetuksista</b> voit m��ritell�, n�ytet��nk� julkaisup�iv�m��r� web-sivustolla julkisesti.</p>');
		define("H_NEWSEXTRACT", '<h5>Uutisen tiivistelm�</h5><p>Uutisen tiivistelm�, joka n�ytet��n web-sivuston uutislistassa.</p><p><b>T�m� kentt� on vaapaaehtoinen.</b> Jos j�t�t kent�n tyhj�ksi, k�ytet��n automaattisesti varsinaisen uutistekstin alkua.</p><p><b>Sivuston asetuksissa</b> voit m��ritell�, kuin monta merkki� uutisen alusta otetaan lyhyeen tekstiin.</p>');
		define("H_NEWSLINKTOPAGE", '<h5>Linkit� sivuun</h5><p>Voit linkitt�� uutisen suoraan johonkin sivuston tavalliseen sivuun.</p><p>Kirjoita t�ll�in uutisten listassa n�kyv� teksti kohtaan <b>Uutisen tiivistelm�.</b></p>');
		define("H_SNIPPETNAME", '<h5>Sivunosan nimi</h5><p>Tarvitset sivunosan nime�, kun lis��t osan sivupohjaan - tarvittava koodi on sivun alalaidassa.</p>');
		define("H_SNIPPETTYPE", '<h5>Sivunosan tyyppi</h5><p><b>TinyMCE:</b> Voit muokata sivunosan HTML-sis�lt�� helppok�ytt�isell� TinyMCE-editorilla.</p><p><b>Koodi:</b> Voit lis�t� sivunosaan koodia (HTML/JavaScript/PHP) sellaisenaan.</p>');
		define("H_SNIPPETCODE", '<h5>Sivupohjaan lis�tt�v� koodi</h5><p>Voit kopioida t�ss� kent�ss� olevan koodin ja lis�t� sen haluamaasi kohtaan sivupohjan HTML-koodia.</p>');
		define("H_SNIPPETCODEPHP", '<h5>Koodi (PHP)</h5><p>K�yt� t�t� koodia, kun sivunosa sis�lt�� <b>PHP-koodia.</b></p>');
		define("H_CMSLANG", '<h5>CMS:n kieli</h5><p>Voit valita t�m�n <b>CMS-ty�kalun kielen</b>.</p><p>T�ll� ei ole vaikutusta web-sivujen sis�lt��n tai asetuksiin.</p>');
		define("H_SITEROOT", '<h5>Sivuston juurikansio</h5><p>Kirjoita t�h�n alikansio, jos sivusto, jota p�ivit�t t�lle CMS-ty�kalulla ei sijaitse suoraan www-juuressa.</p><p><b>T�rke��:</b> Jos t�m� tieto ei ole oikein, ty�kalu ja sivusto eiv�t v�ltt�m�tt� toimi linkkien ja kuvien lis��misen osalta oikein.</p>');
		define("H_LOGOUTTIME", '<h5>Uloskirjautumisaika</h5><p>Kuinka kauan sis��nkirjautuminen on voimassa, jos CMS-ty�kalua ei k�ytet�.</p>');
		define("H_AUTOWIDTH", '<h5>Autom. kuvan leveys</h5><p>T�h�n voit m��ritell� <b>pikseleiss�</b> leveyden, johon palvelimelle ladattavat kuvat automaattisesti pienennet��n.</p><p>0 = ei muutosta.</p><p>Jos Autom. kuvan korkeus on m��ritelty, niin 0 muuttaa leveytt� samassa suhteessa korkeuden kanssa.</p><p><b>Esimerkki: </b>Jos t�ss� kent�ss� on arvo <b>800</b> ja Autom. kuvan korkeus = <b>0</b>, niin kaikki 800 pikseli� leve�mm�t kuvat pienennet��n 800 pikselin leveyteen s�ilytt�en kuvien mittasuhteet.</p>');
		define("H_AUTOHEIGHT", '<h5>Autom. kuvan korkeus</h5><p>T�h�n voit m��ritell� <b>pikseleiss�</b> korkeuden, johon palvelimelle ladattavat kuvat automaattisesti pienennet��n.</p><p>0 = ei muutosta.</p><p>Jos Autom. kuvan leveys on m��ritelty, niin 0 muuttaa korkeutta samassa suhteessa leveyden kanssa.</p>');
		define("H_PAGINATIONROWS", '<h5>Lokirivej� / sivu</h5><p>Montako rivi� n�ytet��n per sivu lokeissa ja k�ytt�j�listauksissa.</p>');
		define("H_USEHELPTEXTS", '<h5>Ohjetekstien lataaminen</h5><p>Ohjetekstien poistaminen k�yt�st� lyhent�� hieman CMS:n latausaikoja.</p>');
		define("H_EXTRACODE", "<h5>Lis�koodi</h5><p>Lis�koodi-kentt��n voit sy�tt�� esim. <b>HTML/JavaScript-</b> tai <b>PHP-koodia</b> sellaisenaan. <a href='http://www.ruubikcms.com/index.php/documentation' target='_blank'>Dokumentaatiossa</a> kerrotaan tarkemmin, kuinka koodi otetaan sivupohjassa k�ytt��n.</p>");
		define("H_NEWPASSWORD", '<h5>Uusi salasana</h5><p>T�ss� voit vaihtaa salasanan yll�olevalle k�ytt�j�lle.</p><p>Vahvista salasana alla olevaan kentt��n.</p>');
		define("H_ROLE", "<h5>Rooli</h5><p>L�yd�t lis�tietoja rooleista <a href='http://www.ruubikcms.com/index.php/documentation/roles' target='_blank'>dokumentaatiosta</a>.</p>");
		define("H_BACKUP", "<h5>Tallenna varmuuskopio</h5><p>Napsauta <b>Varmuuskopioi</b> tallentaaksesi koko SQLite-tietokannan omalle kiintolevyllesi.</p><p>Varmuuskopioi sis�lt�� sivuston sis�ll�n HTML-koodin ja asetukset.</p>");
		define("H_UNDOLASTLOGIN", "<h5>Kumoa t�m� kirjautuminen</h5><p>Napsauta <b>Kumoa</b> kumotaksesi kaikki t�ll� kirjautumiskerralla tehdyt muutokset.<p><b>K�yt� harkiten!</b></p>");
		define("H_RESTORE", "<h5>Palauta varmuuskopio</h5><p>Selaa tietokoneellesi tallennettu <b>kelvollinen varmuuskopio SQLite-tietokannasta</b> ja napsauta <b>Palauta</b> korvataksesi nykyisen tietokannan t�ll� varmuuskopiolla.<p><b>K�yt� varovaisesti!</b></p>");
?>