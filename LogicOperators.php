<?php
  /**
   * Operadores lógicos: ¿qué son las tablas de verdad?
   * and , or, not
   */

   if(true && true){
    //Verdadero
   }

   if(false && true){
    //falso
   }

   if(false && false){
    //falso
   }

/**OR */

   if(true || true){
    //verdadero
   }

   if(true || false){
    //verdadero
   }

   if(false || false){
    //falso
   }

//NOT o negacion

  if(!false){
    //verdadero
  }
  else if (!true){
    //falso
  }