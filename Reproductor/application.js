function iniciar(){
    Maximo=600;
    Medio=document.getElementById('medio');
    reproducir= document.getElementById('reproducir');
    barra= document.getElementById('barra');
    progreso= document.getElementById('progreso');
    
    reproducir.addEventListener('click', presionar, false);
    barra.addEventListener('click', mover, false);
    }
    
    function presionar(){
    if(medio.paused && medio.ended){
    Medio.pause();
    Reproducer.innerHTML = 'Reproducir';
    Window.clearInterval(bucle);
    }else{
    Medio.play();
    Reproducer.innerHTML= 'Pausar';
    Bucle= setInterval(estado, 1000);
    }
    }
    