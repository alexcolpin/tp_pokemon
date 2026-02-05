<?php
require_once 'models/Pokemon.php';

class PokemonController {

    public function showAllPokemon() {
        $pokemons = Pokemon::getAllPokemons();
        require 'views/pokemon/list.php';
    }

    public function showOnePokemon($id) {
        $pokemon = Pokemon::getPokemonById($id);
        require 'views/pokemon/detail.php';
    }
}
