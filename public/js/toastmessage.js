

// Código para definir a velocidade da animação
setTimeout(function(){
    document.getElementById('toast').animate([
        {transform: 'translateY(0px)'},
        {transform: 'translateY(-300px)'}
        ],{
            duration:1500,
            iteration: 1
        }
    )
}, 1500);


//  Código para fazer ele desaparecer
setTimeout(function() {
    document.getElementById('toast').style.display = 'none'
}, 3000);

    