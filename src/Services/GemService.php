<?php

namespace App\Services;


class GemService
{
    const GEM_PRICES = [
        'Diamant' => 102,
        'Émeraude' => 48,
        'Rubis' => 87,
        'Saphir' => 101,
        'Agate' => 14,
        'Agate blanche' => 44,
        'Agate bleue' => 67,
        'Agate en camée' => 63,
        'Agate rose' => 43,
        'Agate rubanée' => 32,
        'Agate verte' => 32,
        'Ambre' => 70,
        'Améthyste' => 74,
        'Amétrine' => 101,
        'Ammolite' => 78,
        'Auralite' => 48,
        'Aventurine' => 13,
        'Aventurine bleue' => 97,
        'Aventurine verte' => 100,
        'Azurite' => 89,
        'Azurite Malachite' => 35,
        'Béryl' => 39,
        'Bronzite' => 63,
        'Calcédoine' => 27,
        'Calcite miel' => 86,
        'Calcite verte' => 33,
        'Carborandite' => 79,
        'Chrysocolle' => 14,
        'Chrysoprase' => 107,
        'Chrysoprase citron' => 50,
        'Citrine' => 69,
        'Citrine chauffée' => 24,
        'Cornaline bandée' => 102,
        'Crisal aqua aura' => 14,
        'Cristal de roche' => 33,
        'Cristal fumé' => 90,
        'Cyanite bleue' => 12,
        'Cyanite verte' => 35,
        'Dioptase' => 76,
        'Fluorite' => 14,
        'Fluorine jaune' => 39,
        'Fuschite' => 67,
        'Galène' => 43,
        'Grenat almadin' => 85,
        'Grenat rhodolite' => 111,
        'Howlite' => 99,
        'Iolite' => 79,
        'Iris' => 101,
        'Jade vert' => 82,
        'Jade blanc' => 77,
        'Jade noir' => 87,
        'Jaspe breshia' => 21,
        'Jaspe paysage' => 63,
        'Jaspe polychrome' => 58,
        'Jaspe rouge' => 64,
        'Jaspe zébré' => 62,
        'Kunzite rose' => 104,
        'Kunzite verte' => 14,
        'Labradorite' => 86,
        'Lapis-lazuli' => 46,
        'Larimar' => 38,
        'Lépidolite' => 45,
        'Malachite' => 17,
        'Moldavite' => 79,
        'Obsidienne dorée' => 13,
        'Onyx' => 47,
        'Opale' => 99,
        'Pierre de lune' => 87,
        'Pierre de soleil' => 13,
        'Prehnite' => 82,
        'Pyrite' => 71,
        'Pyromorphite' => 29,
        'Quartz blanc' => 16,
        'Quartz rose' => 95,
        'Quartz vert' => 18,
        'Serpentine' => 43,
        'Sodalite' => 65,
        'Shungite' => 42,
        'Stibine' => 18,
        'Turquoise' => 33,
        'Tanzanite' => 37,
        'Tourmaline' => 42,
        'Tourmaline rose' => 31,
        'Tourmaline noire' => 79,
        'Vanadinite' => 19,
        'Wulfénite' => 21,
        'Zircon' => 94
    ];
}