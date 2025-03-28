
function ativarContraste() { 
    const contraste = document.querySelector('#contraste').value;
    
    const body = document.querySelector('body');
    const container = document.querySelectorAll('.container');

    
    /*alterar o texto */
    // container[0].style.color = 'red';
   
    if(contraste == 'Claro'){

        body.style.background = 'rgb(192, 206, 193)';
        
        for(let item of container){
            body.style.background = 'rgb(154, 165, 155)';
            item.style.color = 'rgb(238, 199, 172)';
        }
    }else if(contraste == 'Escuro'){

        body.style.background = 'rgb(6, 53, 10)';
        
        for(let item of container){
            item.style.background = 'rgb(85, 117, 88)';
            item.style.color = 'rbg(241, 171, 121)';
        }


    }else   {

        body.style.background = ' rgb(223, 236, 243)';
        
        for(let item of container){
            body.style.background = 'rgb(255, 255, 255)';
            item.style.color = 'black';
        }

    }

}

// /*
//  e para função funcionar vc tem que chamar ela fazendo o codigo abaixo*/

const botaoativar = document.querySelector('#botaoativar');
botaoativar.addEventListener('click', ativarContraste);
