<?php 

$pokemons = [
	1 => [
		'num' => '001',
		'nom' => 'Bulbizarre',
		'taille' => '0.7',
		'poids' => '6.9',
		'description' => 'Il y a une graine sur son dos depuis sa naissance. Elle grossit un peu chaque jour.',
		'categorie' => 'Graine',
		'talents' => ['Engrais'],
	],
	2 => [
		'num' => '002',
		'nom' => 'Herbizarre',
		'taille' => '1.0',
		'poids' => '13.0',
		'description' => "Son bulbe dorsal est devenu si gros qu'il ne peut plus se tenir sur ses pattes postérieures.",
		'categorie' => 'Graine',
		'talents' => ['Engrais'],
	],
	3 => [
		'num' => '003',
		'nom' => 'Florizarre',
		'taille' => '2.0',
		'poids' => '100.0',
		'description' => 'Sa plante donne une grosse fleur quand elle absorbe les rayons du soleil. Il est toujours à la recherche des endroits les plus 
ensoleillés.
',
		'categorie' => 'Graine',
		'talents' => ['Engrais'],
	],
	4 => [
		'num' => '004',
		'nom' => 'Salamèche',
		'taille' => '0.6',
		'poids' => '8.5',
		'description' => 'Il préfère ce qui est chaud. En cas de pluie, de la vapeur se forme autour de sa queue.',
		'categorie' => 'Lézard',
		'talents' => ['Brazier'],
	],
	5 => [
		'num' => '005',
		'nom' => 'Reptincel',
		'taille' => '1.1',
		'poids' => '19.0',
		'description' => 'Il est très brutal. En combat, il se sert de ses griffes acérées et de sa queue enflammée pour mettre en pièces ses adversaires.',
		'categorie' => 'Flamme',
		'talents' => ['Brazier'],
	],
	6 => [
		'num' => '006',
		'nom' => 'Dracaufeu',
		'taille' => '1.7',
		'poids' => '90.5',
		'description' => "Son souffle brûlant peut 
faire fondre la roche. Il est parfois la cause d'incendies de forêt.",
		'categorie' => 'Flamme',
		'talents' => ['Brazier'],
	],
	7 => [
		'num' => '007',
		'nom' => 'Carapuce',
		'taille' => '0.5',
		'poids' => '9.0',
		'description' => "Quand il rentre son cou dans sa carapace, il peut projeter de l'eau à haute 
pression.",
		'categorie' => 'minitortue',
		'talents' => ['Torrent'],
	],
	8 => [
		'num' => '008',
		'nom' => 'Carabaffe',
		'taille' => '1.0',
		'poids' => '22.5',
		'description' => 'Il est considéré comme un symbole de longévité. On reconnaît les spécimens les plus âgés à la mousse qui pousse sur leur carapace.',
		'categorie' => 'Tortue',
		'talents' => ['Torrent'],
	],
	9 => [
		'num' => '009',
		'nom' => 'Tortank',
		'taille' => '1.6',
		'poids' => '8.5',
		'description' => "Il écrase ses adversaires de tout son poids pour leur faire perdre connaissance. Il rentre dans sa carapace s'il se sent en danger.",
		'categorie' => 'Carapace',
		'talents' => ['Torrent'],
	],
	10 => [
		'num' => '010',
		'nom' => 'Chenipan',
		'taille' => '0.3',
		'poids' => '2.9',
		'description' => 'Pour se protéger, il émet par ses antennes une odeur nauséabonde qui fait fuir ses ennemis.',
		'categorie' => 'Ver',
		'talents' => ['Écran Poudre'],
	],
	11 => [
		'num' => '011',
		'nom' => 'Chrysacier',
		'taille' => '0.7',
		'poids' => '9.9',
		'description' => 'En attendant sa prochaine évolution, il ne peut que durcir sa carapace et rester immobile pour éviter de se faire attaquer.',  
		'categorie' => 'Cocon',
		'talents' => ['Mue'],
	],
	12 => [
			'num' => '012',
			'nom' => 'Papilusion',
			'taille' => '1.1',
			'poids' => '32.0',
			'description' => "En combat, il bat des ailes très rapidement pour projeter de la poudre toxique sur ses ennemis.",
			'categorie' => 'Papillon',
			'talents' => ['Œil Composé'],
	],

];

$t_types = [
	1 => ['Plante', 'Poison'],
	2 => ['Plante', 'Poison'],
	3 => ['Plante', 'Poison'],
	4 => ['Feu'],
	5 => ['Feu'],
	6 => ['Feu', 'Vol'],
	7 => ['Eau'],
	8 => ['Eau'],
	9 => ['Eau'],
	10 => ['Insecte'],
	11 => ['Insecte'],
	12 => ['Insecte', 'Vol'],
];
	
$t_faiblesses = [
	1 => ['Feu', 'Psy', 'Vol', 'Glace'],
	2 => ['Feu', 'Psy', 'Vol', 'Glace'],
	3 => ['Feu', 'Psy', 'Vol', 'Glace'],
	4 => ['Sol', 'Roche', 'Eau'],
	5 => ['Sol', 'Roche', 'Eau'],
	6 => ['Électrik', 'Roche', 'Eau'],
	7 => ['Électrik', 'Plante'],
	8 => ['Électrik', 'Plante'],
	9 => ['Électrik', 'Plante'],
	10 => ['Feu', 'Vol', 'Roche'],
	11 => ['Feu', 'Vol', 'Roche'],
	12 => ['Feu', 'Électrik', 'Vol', 'Glace', 'Roche'],
];

$t_next = [
	1 => ['num'=>2, 'nom'=>'Herbizarre'], 
	2 => ['num'=>3, 'nom'=>'Florizarre'],
	3 => ['num'=>4, 'nom'=>'Salamèche'],
	4 => ['num'=>5, 'nom'=>'Reptincel'],
	5 => ['num'=>6, 'nom'=>'Dracaufeu'],
	6 => ['num'=>7, 'nom'=>'Carapuce'],
	7 => ['num'=>8, 'nom'=>'Carabaffe'],
	8 => ['num'=>9, 'nom'=>'Tortank'],
	9 => ['num'=>10, 'nom'=>'Chenipan'],
	10 => ['num'=>11, 'nom'=>'Chrysacier'],
	11 => ['num'=>12, 'nom'=>'Papilusion'],
	12 => ['num'=>25, 'nom'=>'Pikachu'],
	25 => ['num'=>1, 'nom'=>'Bulbizarre'],
];

$t_previous = [
	
	1 => ['num'=>25, 'nom'=>'Pikachu'],
	2 => ['num'=>1, 'nom'=>'Bulbizarre'],
	3 => ['num'=>2, 'nom'=>'Herbizarre'], 
	4 => ['num'=>3, 'nom'=>'Florizarre'],
	5 => ['num'=>4, 'nom'=>'Salamèche'],
	6 => ['num'=>5, 'nom'=>'Reptincel'],
	7 => ['num'=>6, 'nom'=>'Dracaufeu'],
	8 => ['num'=>7, 'nom'=>'Carapuce'],
	9 => ['num'=>8, 'nom'=>'Carabaffe'],
	10 => ['num'=>9, 'nom'=>'Tortank'],
	11 => ['num'=>10, 'nom'=>'Chenipan'],
	12 => ['num'=>11, 'nom'=>'Chrysacier'],
	25 => ['num'=>12, 'nom'=>'Papilusion'],
];

$t_variations = [
	3 => [
		['name' => 'Florizarre', 'code' => 'Florizarre'],
		['name' => 'Méga Florizzare', 'code' => 'MegaFlorizarrre'],
		['name' => 'Florizarre Gigamax', 'code' => 'Florizarregiga'],
	],
	6 => [
		['name' => 'Dracaufeu', 'code' => 'Dracaufeu'],
		['name' => 'Méga Dracaufeu X', 'code' => 'MegaDracaufeuX'],
		['name' => 'Méga Dracaufeu Y', 'code' => 'MegaDracaufeuY'],
		['name' => 'Dracaufeu Gigamax', 'code' => 'Dracaufeugiga'],
	],
	9 => [
		['name' => 'Tortank', 'code' => 'Tortank'],
		['name' => 'Méga Tortank', 'code' => 'MegaTortank'],
		['name' => 'Tortank Gigamax', 'code' => 'Tortankgiga'],
	],
	12 => [
		['name' => 'Papilusion', 'code' => 'Papilusion'],
		['name' => 'Papilusion Gigamax', 'code' => 'Papilusiongiga'],
	],
	25 => [
		['name' => 'Pikachu', 'code' => 'Pikachu'],
		['name' => 'Pikachu Gigamax', 'code' => 'Pikachugiga'],
	],
];