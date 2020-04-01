
var origen = 11;
var myArray = []
while(myArray.length < origen ){
  var numeroAleatorio = Math.floor(Math.random()*origen);
  var existe = false;
  for(var i=0;i<myArray.length;i++){
	if(myArray [i] == numeroAleatorio){
        existe = true;
        break;
    }
  }
  if(!existe){
    myArray[myArray.length] = numeroAleatorio;
  }

}
console.log("números aleatorios : " + myArray);
var origen= 11;
var myArray = []
var destino =origen
while(myArray.length < origen ){
  var numeroAleatorio = Math.floor(Math.random()*origen);
  var existe = false;
  myArray.sort((a, b ) => a- b );
  for(var i=0;i<myArray.length;i++){
	if(myArray [i] == numeroAleatorio){
        existe = true;
        break;
    }
  }
  if(!existe){
    myArray[myArray.length] = numeroAleatorio;
  }

}
console.log("ordenar : " + myArray);
