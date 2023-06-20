let portletBox = document.getElementById('portlet')
let dashBoardVisualizar = document.getElementsByClassName('more')

let previousColor = 'grey'

/* cria um array de dashboard */
Array.from(dashBoardVisualizar).forEach((element, index) => {
    element.addEventListener('click', ()=>{
        /* muda as cores de acordo com a cor do dashboard clicado */
        switch(index){
            case 0 :
                portletBox.classList.remove(previousColor)
                portletBox.classList.add('blue')
                previousColor = 'blue'
            break;
            case 1 :
                portletBox.classList.remove(previousColor)
                portletBox.classList.add('green')
                previousColor = 'green'
            break;
            case 2 :
                portletBox.classList.remove(previousColor)
                portletBox.classList.add('purple')
                previousColor = 'purple'
            break;
            default:
                portletBox.classList.add('grey')
                previousColor = 'grey'
            break
        }
    })
});

console.log(dashBoardVisualizar)
