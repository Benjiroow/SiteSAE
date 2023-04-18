var liste_pokemons = document.getElementById('var-select')
current_pokemon = document.getElementById('pokemon-0')

liste_pokemons.addEventListener("change", () => {
    current_pokemon.classList.remove('active')
    var selectedId = liste_pokemons.options[liste_pokemons.selectedIndex].value
    active_pokemon = document.getElementById('pokemon-' + selectedId)
    active_pokemon.classList.add('active')
    current_pokemon = active_pokemon
})



var all_pokex = document.querySelectorAll('.pokeball-x')
for (var pokex of all_pokex) {
    console.log(pokex)
    pokex.addEventListener("click", (element) => {
        var pokeball = element.currentTarget
        var numForm = pokeball.dataset.numtarget
        console.log(numForm)
        pokeball.classList.add('active')
        document.getElementById('pokeball-y-' + numForm).classList.remove('active')
        document.getElementById('description-x-' + numForm).classList.add('active')
        document.getElementById('description-y-' + numForm).classList.remove('active')
    })
}

var all_pokey = document.querySelectorAll('.pokeball-y')
for (var pokey of all_pokey) {
    pokey.addEventListener("click", (element) => {
        var pokeball = element.currentTarget
        var numForm = pokeball.dataset.numtarget
        console.log(numForm)
        pokeball.classList.add('active')
        document.getElementById('pokeball-x-' + numForm).classList.remove('active')
        document.getElementById('description-y-' + numForm).classList.add('active')
        document.getElementById('description-x-' + numForm).classList.remove('active')
    })
}

