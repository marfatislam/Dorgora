<?php

/**
 * List of cities for: Guatemala
 * Source: https://en.wikipedia.org/wiki/List_of_places_in_Guatemala
 * Version: 1.0
 * Author: Condless
 * Author URI: https://www.condless.com/
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

/**
 * Exit if accessed directly
 */
defined( 'ABSPATH' ) || exit;

$country_states = ( include WC()->plugin_path() . '/i18n/states.php' )['GT'];

$country_cities = [
	'AV' => [
		'GTCOBÁN' => 'Cobán',
		'GTSAN_CRISTÓBAL_VERAPAZ' => 'San Cristóbal Verapaz',
		'GTPANZÓS' => 'Panzós',
		'GTCHISEC' => 'Chisec',
		'GTSAN_PEDRO_CARCHÁ' => 'San Pedro Carchá',
		'GTSANTA_CATALINA_LA_TINTA' => 'Santa Catalina la Tinta',
	],
	'BV' => [
		'GTSALAMÁ' => 'Salamá',
	],
	'CM' => [
		'GTCHIMALTENANGO' => 'Chimaltenango',
		'GTTECPÁN_GUATEMALA' => 'Tecpán Guatemala',
		'GTPATZÚN' => 'Patzún',
		'GTSAN_ANDRÉS_ITZAPA' => 'San Andrés Itzapa',
		'GTPATZICÍA' => 'Patzicía',
		'GTEL_TEJAR' => 'El Tejar',
	],
	'CQ' => [
		'GTCHIQUIMULA' => 'Chiquimula',
		'GTESQUIPULAS' => 'Esquipulas',
	],
	'PR' => [
		'GTSANARATE' => 'Sanarate',
		'GTGUASTATOYA' => 'Guastatoya',
	],
	'QC' => [
		'GTCHICHICASTENANGO' => 'Chichicastenango',
		'GTSANTA_CRUZ_DEL_QUICHÉ' => 'Santa Cruz del Quiché',
		'GTSANTA_MARIA_NEBAJ' => 'Santa Maria Nebaj',
		'GTCHAJUL' => 'Chajul',
	],
	'ES' => [
		'GTESCUINTLA' => 'Escuintla',
		'GTSANTA_LUCÍA_COTZUMALGUAPA' => 'Santa Lucía Cotzumalguapa',
		'GTPALÍN' => 'Palín',
		'GTPUERTO_SAN_JOSÉ' => 'Puerto San José',
		'GTLA_GOMERA' => 'La Gomera',
		'GTTIQUISATE' => 'Tiquisate',
		'GTNUEVA_CONCEPCIÓN' => 'Nueva Concepción',
	],
	'GU' => [
		'GTGUATEMALA_CITY' => 'Guatemala City',
		'GTMIXCO' => 'Mixco',
		'GTVILLA_NUEVA' => 'Villa Nueva',
		'GTSAN_MIGUEL_PETAPA' => 'San Miguel Petapa',
		'GTSAN_JUAN_SACATEPÉQUEZ' => 'San Juan Sacatepéquez',
		'GTVILLA_CANALES' => 'Villa Canales',
		'GTCHINAUTLA' => 'Chinautla',
		'GTAMATITLÁN' => 'Amatitlán',
		'GTSANTA_CATARINA_PINULA' => 'Santa Catarina Pinula',
		'GTSAN_JOSÉ_PINULA' => 'San José Pinula',
		'GTSAN_PEDRO_AYAMPUC' => 'San Pedro Ayampuc',
		'GTFRAIJANES' => 'Fraijanes',
		'GTPALENCIA' => 'Palencia',
		'GTSAN_PEDRO_SACATEPÉQUEZ' => 'San Pedro Sacatepéquez',
	],
	'HU' => [
		'GTHUEHUETENANGO' => 'Huehuetenango',
		'GTJACALTENANGO' => 'Jacaltenango',
		'GTLA_DEMOCRACIA' => 'La Democracia',
		'GTSANTA_CRUZ_BARILLAS' => 'Santa Cruz Barillas',
	],
	'IZ' => [
		'GTPUERTO_BARRIOS' => 'Puerto Barrios',
		'GTMORALES' => 'Morales',
		'GTEL_ESTOR' => 'El Estor',
		'GTLIVINGSTON' => 'Livingston',
	],
	'JA' => [
		'GTJALAPA' => 'Jalapa',
	],
	'JU' => [
		'GTJUTIAPA' => 'Jutiapa',
		'GTASUNCIÓN_MITA' => 'Asunción Mita',
	],
	'PE' => [
		'GTSAN_BENITO' => 'San Benito',
		'GTFLORES' => 'Flores',
		'GTPOPTÚN' => 'Poptún',
		'GTMELCHOR_DE_MENCOS' => 'Melchor de Mencos',
	],
	'QZ' => [
		'GTQUETZALTENANGO' => 'Quetzaltenango',
		'GTCOATEPEQUE' => 'Coatepeque',
		'GTOSTUNCALCO' => 'Ostuncalco',
		'GTOLINTEPEQUE' => 'Olintepeque',
		'GTCANTEL' => 'Cantel',
		'GTCOLOMBA' => 'Colomba',
		'GTEL_PALMAR' => 'El Palmar',
		'GTLA_ESPERANZA' => 'La Esperanza',
		'GTALMOLONGA' => 'Almolonga',
		'GTSALCAJÁ' => 'Salcajá',
	],
	'RE' => [
		'GTRETALHULEU' => 'Retalhuleu',
		'GTSAN_SEBASTIÁN' => 'San Sebastián',
		'GTNUEVO_SAN_CARLOS' => 'Nuevo San Carlos',
	],
	'SA' => [
		'GTANTIGUA_GUATEMALA' => 'Antigua Guatemala',
		'GTCIUDAD_VIEJA' => 'Ciudad Vieja',
		'GTSANTIAGO_SACATEPÉQUEZ' => 'Santiago Sacatepéquez',
		'GTSUMPANGO' => 'Sumpango',
		'GTJOCOTENANGO' => 'Jocotenango',
		'GTSAN_LUCAS_SACATEPÉQUEZ' => 'San Lucas Sacatepéquez',
		'GTSANTA_MARÍA_DE_JESÚS' => 'Santa María de Jesús',
		'GTALOTENANGO' => 'Alotenango',
	],
	'SM' => [
		'GTSAN_PEDRO_SACATEPÉQUEZ' => 'San Pedro Sacatepéquez',
		'GTSAN_MARCOS' => 'San Marcos',
		'GTMALACATÁN' => 'Malacatán',
		'GTCOMITANCILLO' => 'Comitancillo',
		'GTAYUTLA' => 'Ayutla',
		'GTSAN_PABLO' => 'San Pablo',
	],
	'SR' => [
		'GTBARBERENA' => 'Barberena',
		'GTCUILAPA' => 'Cuilapa',
		'GTCHIQUIMULILLA' => 'Chiquimulilla',
	],
	'SO' => [
		'GTSOLOLÁ' => 'Sololá',
		'GTNAHUALÁ' => 'Nahualá',
		'GTSAN_LUCAS_TOLIMÁN' => 'San Lucas Tolimán',
		'GTPANAJACHEL' => 'Panajachel',
	],
	'SU' => [
		'GTMAZATENANGO' => 'Mazatenango',
		'GTCHICACAO' => 'Chicacao',
		'GTSAN_PABLO_JOCOPILAS' => 'San Pablo Jocopilas',
		'GTPATULUL' => 'Patulul',
		'GTSAN_FRANCISCO_ZAPOTITLÁN' => 'San Francisco Zapotitlán',
	],
	'TO' => [
		'GTTOTONICAPÁN' => 'Totonicapán',
		'GTSAN_FRANCISCO_EL_ALTO' => 'San Francisco El Alto',
		'GTMOMOSTENANGO' => 'Momostenango',
	],
	'ZA' => [
		'GTZACAPA' => 'Zacapa',
		'GTGUALÁN' => 'Gualán',
	]
];
