<?php
class Pokemon {

    public static function getAllPokemons() {
        $data = file_get_contents('data/pokemons.json');
        return json_decode($data, true);
    }

    public static function getPokemonById($id) {
        $pokemons = self::getAllPokemons();
        foreach ($pokemons as $pokemon) {
            if ($pokemon['pokedex_id'] == $id) {
                return $pokemon;
            }
        }
        return null;
    }
}
