// Exemplo de dados de cachorros para adoção (pode ser substituído por uma API real usando PHP)
const dogsData = [
    { name: 'Rex', sex: 'male', age: 'adult', breed: 'Labrador Retriever' },
    { name: 'Fluffy', sex: 'female', age: 'puppy', breed: 'Golden Retriever' },
    { name: 'Max', sex: 'male', age: 'senior', breed: 'German Shepherd' },
    // Adicione mais dados de cachorros aqui...
];

function displayDogs(dogs) {
    const dogsList = document.getElementById('dogsList');
    dogsList.innerHTML = '';

    dogs.forEach((dog) => {
        const dogCard = document.createElement('div');
        dogCard.classList.add('dog-card');
        dogCard.innerHTML = `
            <h2>${dog.name}</h2>
            <p>Sexo: ${dog.sex}</p>
            <p>Idade: ${dog.age}</p>
            <p>Raça: ${dog.breed}</p>
        `;
        dogsList.appendChild(dogCard);
    });
}

function applyFilters() {
    const sexFilter = document.getElementById('sex').value;
    const ageFilter = document.getElementById('age').value.toLowerCase();
    const breedFilter = document.getElementById('breed').value.toLowerCase();

    const filteredDogs = dogsData.filter((dog) => {
        return (
            (sexFilter === '' || dog.sex === sexFilter) &&
            (ageFilter === '' || dog.age === ageFilter) &&
            (dog.breed.toLowerCase().includes(breedFilter))
        );
    });

    displayDogs(filteredDogs);
}

document.getElementById('sex').addEventListener('change', applyFilters);
document.getElementById('age').addEventListener('change', applyFilters);
document.getElementById('breed').addEventListener('input', applyFilters);

// Mostrar todos os cachorros quando a página for carregada
displayDogs(dogsData);
