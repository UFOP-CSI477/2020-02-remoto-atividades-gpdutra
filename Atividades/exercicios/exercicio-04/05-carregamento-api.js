function cleanSelect(campo){
    while( campo.length > 1 ){
        campo.remove(1);
    }
}

function fullCountrySelect(data){
    let country = document.getElementById("country");
    cleanSelect(country);

    for( let index in data ){
        const { id, nome } = data[index];
        let option = document.createElement("option");
        option.value = id['M49'];
        option.innerHTML = `${nome} - ${id['ISO-ALPHA-2']}`;

        country.appendChild(option)
    }
}

function fullStateSelect(data){
    let state = document.getElementById("state");
    cleanSelect(state);

    for( let index in data ){
        const { id, nome, sigla } = data[index];
        let option = document.createElement("option");
        option.value = id;
        option.innerHTML = `${nome}-${sigla}`;

        state.appendChild(option)
    }
}

function fullCitySelect(data) {

    let city = document.getElementById("city");
    cleanSelect(city);

    for( let index in data ) {
        //const id = data[index].id;
        const { id, nome } = data[index];

        let option = document.createElement("option");
        option.value = id;
        option.innerHTML = nome;

        city.appendChild(option);

    }

}

function loadCountry() {
    fetch("https://servicodados.ibge.gov.br/api/v1/localidades/paises")
    .then(response => response.json())
    .then(data => fullCountrySelect(data))
    .catch(error => console.error(error))
}

function loadState() {
    const country = document.getElementById("country");
    const country_index = country.selectedIndex;
    const country_id = country.options[ country_index ].value;

    const state = document.getElementById("state");
    cleanSelect(state);

    if(country_id == ""){
        return;
    }

    const url_state = "https://servicodados.ibge.gov.br/api/v1/localidades/estados";

    fetch(url_state)
        .then(response => response.json())
        .then(data => fullStateSelect(data))
        .catch(error => console.error(error))

}

function loadCity() {
    const state = document.getElementById("state");
    const state_index = state.selectedIndex;
    const state_id = state.options[ state_index ].value;

    const city = document.getElementById("city");
    cleanSelect(city);

    if(state_id == ""){
        return;
    }

    const url_city = `https://servicodados.ibge.gov.br/api/v1/localidades/estados/${state_id}/municipios`;

    fetch(url_city)
        .then(response => response.json())
        .then(data => fullCitySelect(data))
        .catch(error => console.error(error))

}