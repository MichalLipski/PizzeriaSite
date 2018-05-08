const form = document.getElementById('pizzaOrderForm');

const pizzaTypes = [
    'Apollo',
    'Amerykanska',
    'Everest',
    'Peperoni',
    'Cukinio',
    'Fireball',
    'Trzy sery',
    'Grecka',
    'Capricciosa',
    'Tomato',
    'Zbójnicka',
    'Vegetariana',
];

const pizzaSizes = [
    'Mała',
    'Średnia',
    'Duża',
];

let i = 1;
// form.addEventListener('submit', event => {
//     event.preventDefault();
//     const tab = [];
    
//     for (let j = 0; j < i; j++) {
        
//         const values = event.target;
//         const val = values[j*4 + 5].value;
//         const val2 = values[j*4 + 6].value;
//         const val3 = values[j*4  + 7].value;
    
//         const obj = {
//             pizzaType: val,
//             pizzaSize: val2,
//             pizzaAmount: val3,
//         }
    
//         tab.push(obj);
//     }

//     const json = JSON.stringify(tab, null, 2);
//     console.log(json)
// })



const addNewPizzaBtn = document.getElementById('addNewPizzaBtn');
addNewPizzaBtn.addEventListener('click', event => {
    const mainDiv = document.createElement('div');
    mainDiv.classList.add('pizzaContainer')

    const div1 = document.createElement('div');
    div1.classList.add('form-in-line');
    const select1 = document.createElement('select');
    select1.name = "pizzaType" + i;

    pizzaTypes.forEach(pizzaType => {
        const option = document.createElement('option');
        option.value = pizzaType;
        option.textContent = pizzaType;
        select1.appendChild(option);
    });
    div1.appendChild(select1);

    const div2 = document.createElement('div');
    div2.classList.add('form-in-line');
    const select2 = document.createElement('select');
    select2.name = "pizzaSize" + i;
    pizzaSizes.forEach(pizzaSize => {
        const option = document.createElement('option');
        option.value = pizzaSize;
        option.textContent = pizzaSize;
        select2.appendChild(option);
    });
    div2.appendChild(select2);

    const div3 = document.createElement('div');
    div3.classList.add('form-in-line');
    const pizzaAmount = document.createElement('input');
    pizzaAmount.name = "pizzaAmount" + i;
    pizzaAmount.type = "number";
    pizzaAmount.id = "pizzaAmount";
    pizzaAmount.min ="1";
    pizzaAmount.max="100";
    pizzaAmount.value="1"; 

    div3.appendChild(pizzaAmount);

    mainDiv.appendChild(div1);
    mainDiv.appendChild(div2);
    mainDiv.appendChild(div3);

    const deleteButton = document.createElement('button');
    deleteButton.textContent = "Usuń pizza"
    deleteButton.id="deleteFirstPizza"
    deleteButton.addEventListener('click', deleteOnePizza);
    i++;

    mainDiv.appendChild(deleteButton);
    
    form.appendChild(mainDiv);
})

function deleteOnePizza(event) {
    event.target.parentNode.parentNode.removeChild(event.target.parentNode);
}

const deleteFirstPizza = document.getElementById('deleteFirstPizza')
deleteFirstPizza.addEventListener('click', deleteOnePizza);