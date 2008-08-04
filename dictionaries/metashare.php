<?php

$lang = array(
	'front_header' => array (
		'en' => 'MetaShare',
		'sv' => 'MetaShare',
		'es' => 'MetaShare',
		'sl' => 'MetaShare',
		'hu' => 'MetaShare (Metaadat tár)',
	),
	'front_desc' => array (
		'en' => 'This is a metadata sharing service. It allows you to add dynamically generated metadata to a shared store.',
		'sv' => 'Detta delningsjänsten för metadata. Den tillåter att du lägger till dynamiskt skapad metadata till ett delat datalager.',
		'es' => 'Servicio de compartición de metadatos. Le permite añadir metadatos generados dinámicamente a un almacenamiento compartido.',
		'sl' => 'MetaShare je storitev souporabe metapodatkov. Omogoča dodajanje dinamično generiranih metapodatkov v skladišče za skupno rabo.',
		'hu' => 'Ez egy metaadat megosztó szolgáltatás. Dinamikusan generált metaadatok megosztott tárolását teszi lehetővé.',
	),
	'add_title' => array (
		'en' => 'Add entity',
		'sv' => 'Lägg till entitet',
		'es' => 'Añadir entidad',
		'sl' => 'Dodaj entiteto',
		'hu' => 'Bejegyzés hozzáadása',
	),
	'add_desc' => array (
		'en' => 'Add new or updated metadata by specifying the URL of the metadata. This URL must match the entity identifier of the entity described in the metadata.',
		'sv' => 'Läg till ny eller uppdatera metadata genom att ange URL för metadatat. URLen måste matcha entitetsidentifieraren för entiteten som är beskriven i metatdatat.',
		'es' => 'Añadir o actualizar metadatos indicando la URL de los metadatos. Esta URL debe coincidir con el "identificador de la entidad" de la entidad descrita en los metadatos.',
		'sl' => 'Dodajte nove ali popravljene metapodatke tako, da podate njen URL. URL se mora ujemati z identifikatorjem entitete.',
	),
	'add_entityid' => array (
		'en' => 'Entity identifier of the entity:',
		'sv' => 'Entitetsidentifierare för entiteten:',
		'es' => 'Identificador de la entidad:',
		'sl' => 'Identifikator entete:',
		'hu' => 'Bejegyzés azonosítója:',
	),
	'add_do' => array (
		'en' => 'Add',
		'sv' => 'Lägg till',
		'es' => 'Añadir',
		'sl' => 'Dodaj',
		'hu' => 'Hozzáadás',
	),
	'downloadall_desc' => array (
		'en' => 'It is possible to download all the metadata as a single XML file. This file will contain a single EntitiesDescriptor which contains all the entities which are atted to this MetaShare. The EntitiesDescriptor may be signed by this MetaShare if that is enabled in the configuration.',
		'sv' => 'Det är möjligt att hämta all metadata som en enda XML-fil. Denna fil kommer innehålla en enda EntitiesDescriptor som innehåller alla enteiteter som finns lagrade i denna MetaShare. EntitiesDescriptor kan vara signerade av MetaShare om detta är aktiverat i konfgiurationen för MetaShare.',
		'es' => 'Es posible descargar todos los metatados en un único archivo XML. Este archivo contendrá un único EntitiesDescriptor con todas las entidades que se han definido en el MetaShare. El EntitiesDescriptor puede que esté firmado por este MetaShare si se habilitó la opción en la configuración.',
		'sl' => 'Celotne metapodatke si lahko prenesete kot eno XML datoteko. Ta bo vsebovala deskriptor entitet in vse entitete, ki so shranjene v MetaShareu. Deskriptor entitet je lahko digitalno podpisan, če je ta možnost v nastavitvah omogočena.',
		'hu' => 'Lehetőség van az összes metaadat letöltésére egyetlen XML fájlban. A file egyetlen EntitiesDescriptor elmet fog tartalmazni, amely magába foglalja az összes MetaShare-ben tárolt elemet. A EntitiesDescriptor A MetaShare is aláírhatja, ha engedélyezve van a beállításoknál.',
	),
	'downloadall_link' => array (
		'en' => 'Download all metadata',
		'sv' => 'Hämta alla metadata',
		'es' => 'Descargar todos los metadatos',
		'sl' => 'Prenesi vse metapodatke k sebi.',
		'hu' => 'Összes metaadat letöltése',
	),
	'entities_title' => array (
		'en' => 'Entities',
		'sv' => 'Entiteter',
		'es' => 'Entidades',
		'sl' => 'Entitete',
		'hu' => 'Bejegyzések',
	),
	'entities_desc' => array (
		'en' => 'This is a list of all the entities which are currently stored in this MetaShare. Click on a link to download the metadata of the given entity.',
		'sv' => 'Detta är en lista över alla entiteter som förnärvarande finns lagrades i denna MetaShare. Klicka på aktuell länk för att hämta för att hämta metadata för en viss entitet.',
		'es' => 'Esta es la lista de todas las entidades que están almacenadas actualmente en este MetaShare. Pulse en el enlace para descargar los metadatos de una determinada entidad.',
		'sl' => 'To je seznam vseh entitet, ki so trenutnotno shranjene v tem MetaShareu. S klikom na povezavo (entiteto), lahko prenesete njeno metadato.',
		'hu' => 'Ez a lista a jelnleg a MetaShare-ben tárolt elmeket utatja. Kattintson a linkre, hogy letölthesse a metaadatot.',
	),
	'entities_empty' => array (
		'en' => 'No entities are currently stored in this MetaShare.',
		'sv' => 'Det finns förnärvarande inga eniteter lagrade i denna MetaShare.',
		'es' => 'Actualmente no existen entidades almacenadas en este MetaShare.',
		'sl' => 'V MetaShare trenutno ni shranjene nobene entitete.',
		'hu' => 'Egyetlen bejegyzés sincs a Mataadat megosztóban',
	),
	'text' => array (
		'en' => 'text',
		'sv' => 'txt',
		'es' => 'Texto',
		'sl' => 'Besedilo',
		'hu' => 'szöveg',
	),
	'addpage_header' => array (
		'en' => 'Add metadata',
		'sv' => 'Lägg till metadata',
		'es' => 'Añadir metadatos',
		'sl' => 'Dodaj metapodatke',
		'hu' => 'Metaadat hozzáadás',
	),
	'addpage_ok' => array (
		'en' => 'The metadata from "%URL%" was successfylly added.',
		'sv' => 'Metadata från "%URL%" har lagts till.',
		'es' => 'Los metadatos de "%URL%" se han añadido correctamente.',
		'sl' => 'Metapodatki z naslova "%URL%" so bili uspešno dodani.',
		'hu' => 'A "%URL%" metaadat sikeresen hozzálett adva.',
	),
	'addpage_nourl' => array (
		'en' => 'No URL parameter given.',
		'sv' => 'Ingen URL angavs.',
		'es' => 'No indicó el parámetro URL.',
		'sl' => 'Noben URL parameter ni bil podan.',
		'hu' => 'Nem lett URL megadva!',
	),
	'addpage_invalidurl' => array (
		'en' => 'Invalid URL/entity id to metadata. The entity id should be a valid http: or https: URL. The URL you gave was "%URL%".',
		'sv' => 'Felaktig URL/Entitetsidentifierare för metadata. Entitetsidentifieraren ska vara en giltig http- eller https-adress (URL). Adressen du angav var "%URL%".',
		'es' => 'El identificador de la entidad o la URL de los metadatos no es válido. El identificador de la entidad debería ser una URL del tipo http o https. La URL indicada fue "%URL%".',
		'sl' => 'Napačen URL ali ID entitete, le-ta mora biti veljaven http ali https naslov. Posredovali ste naslednji URL: "%URL%".',
		'hu' => 'érvénytelen URL/elem azonosítót tartalmaz a metaadat. Az elem azonosítónak érvényes http: vagy https: protokolt hanáló URL-nek kell lennie. A megadott URL "%URL%".',
	),
	'addpage_nodownload' => array (
		'en' => 'Unable to download metadata from "%URL%".',
		'sv' => 'Kunde inte hämta metadata från "%URL%".',
		'es' => 'No se pudo descargar los metadatos desde "%URL%".',
		'sl' => 'Prenos metapodatkov z naslova "%URL%" ni mogoč.',
		'hu' => 'Nem lehet metaadatot letölteni a "%URL%" helyről.',
	),
	'addpage_invalidxml' => array (
		'en' => 'Malformed XML in metadata. The URL you gave was "%URL%".',
		'sv' => 'Felaktigt formaterad XML i metadata. Adressen du angav var "%URL%".',
		'es' => 'El XML con los metadatos no es un documento bien formado. La URL indicada fue "%URL%".',
		'sl' => 'Napaka v strukturi XML metapodatkov. URL, ki ste ga posredovali "%URL%".',
		'hu' => 'Hibás XML formátumú metaadat. Ez a "%URL%" lett megadva.',
	),
	'addpage_notentitydescriptor' => array (
		'en' => 'The root node of the metadata was not an EntityDescriptor element. The URL you gave was "%URL%".',
		'sv' => 'Toppnoden av metadatat var inte en EntityDescriptor. Adressen du angav var "%URL%".',
		'es' => 'El nodo raíz de los metadatos no es un elemento del tipo EntityDescriptor. La URL indicada fue "%URL%".',
		'sl' => 'Korensko vozlišče (root node) metapodakov ni element tipa entitetni deskriptor. URL, ki ste ga posredovali "%URL%".',
		'hu' => 'A metaadat gyökér elme nem tartalmaz EntityDescriptor elemet. A megadott URL "%URL%".',
	),
	'addpage_entityid' => array (
		'en' => 'The entity identifier in the metadata did not match the URL of the metadata ("%URL%").',
		'sv' => 'Entitetsidentifieraren i metadatat stämmer inte överens med adressen för metadatat ("%URL%").',
		'es' => 'El identificador de la entidad en los metadatos no coincide con la URL de los metadatos ("%URL%").',
		'sl' => 'Identifikator entitene se ne ujema z URLjem metapodatkov ("%URL%").',
		'hu' => 'A elem azonosító nem egyezik a metaadatban megadott URL-lel ("%URL%").',
	),
	'addpage_validation' => array (
		'en' => 'XML validation of the metadata from "%URL%" failed:',
		'sv' => 'XML-valideringen av metatdatat från "%URL%" misslyckades:',
		'es' => 'La validación del XML de los metadatos  desde "%URL%" ha fallado:',
		'sl' => 'XML validacija metapodatkov z naslova "%URL%" je spodletela:',
		'hu' => 'A "%URL%" metaadat XML érvénytelen:',
	),
	'addpage_gofront' => array (
		'en' => 'Go to metadata list',
		'sv' => 'Gå till metadatalistan',
		'es' => 'Ir a la lista de metadatos',
		'sl' => 'Pojdi na seznam metapodatkov',
		'hu' => 'Metaadatok listája',
	),

);


?>