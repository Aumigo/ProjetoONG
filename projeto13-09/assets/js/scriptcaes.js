// Exemplo de dados de cachorros para adoção (pode ser substituído por uma API real usando PHP)
const dogsData = [
    { nome: 'Robson', sexo: 'masculino', idade: 'adulto', raca: 'Vira-lata' },
    { nome: 'Pandora', sexo: 'feminino', idade: 'filhote', raca: 'desconhecido' },
    { nome: 'Clovis', sexo: 'masculino', idade: 'senhor', raca: 'Vira-lata' },
    { nome: 'lara', sexo: 'feminino', idade: 'filhote', raca: 'pinscher' },
    { nome: 'lara', sexo: 'feminino', idade: 'adulto', raca: ' Buldogue francês' },
    // Adicione mais dados de cachorros aqui...
];

function displayDogs(dogs) {
    const dogsList = document.getElementById('dogsList');
    dogsList.innerHTML = '';

    dogs.forEach((dog) => {
        const dogCard = document.createElement('div');
        dogCard.classList.add('dog-card');
        dogCard.innerHTML = `
            <h2>${dog.nome}</h2>
            <p>Sexo: ${dog.sexo}</p>
            <p>Idade: ${dog.idade}</p>
            <p>Raça: ${dog.raca}</p>
        `;
        dogsList.appendChild(dogCard);
    });
}

function applyFilters() {
    const sexoFilter = document.getElementById('sexo').value;
    const idadeFilter = document.getElementById('idade').value.toLowerCase();
    const racaFilter = document.getElementById('raca').value.toLowerCase();

    const filteredDogs = dogsData.filter((dog) => {
        return (
            (sexoFilter === '' || dog.sexo === sexoFilter) && // Corrigido o nome da variável
            (idadeFilter === '' || dog.idade === idadeFilter) &&
            (dog.raca.toLowerCase().includes(racaFilter))
        );
    });

    displayDogs(filteredDogs);
}

document.getElementById('sexo').addEventListener('change', applyFilters);
document.getElementById('idade').addEventListener('change', applyFilters);
document.getElementById('raca').addEventListener('input', applyFilters);

// Mostrar todos os cachorros quando a página for carregada
displayDogs(dogsData);
