let numero1=0;
let numero2=1;
let string=numero1+","+numero2;
let total=numero1+numero2;
let total2=numero2;
cont=0;

while(cont<10){
    numero1=numero2;
    numero2=total;
  total+=numero1;

    string+=","+total;
        cont++;
}
alert (string);



  
    