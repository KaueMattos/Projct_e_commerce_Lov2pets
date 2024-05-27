var contador = 1; //variável pública criada fora da function
var img1="../imagens/banner1.png";
var img2="../imagens/banner2.png";
var img3="../imagens/banner3.png";
var tempo=4000; //2000(milessegundos) : 1000 (milessegundo) = 2s
var exibir=setInterval("Exibindo()",tempo);
	  
function Exibindo()
{
	document.images["slide"].src=eval("img"+contador);
	if (contador<3)
	contador++;
	else
	contador=1;
}
	  
function Anterior()
{
		
	if (contador == 3)
	contador=2;
	else if (contador == 2)
	contador=1;
	else
	contador=3;
	document.images["slide"].src=eval("img"+contador);	
	clearInterval(exibir);//interrompe o looping
	exibir=setInterval("Exibindo()",tempo);
}
	 
function Proximo()
{	
	document.images["slide"].src=eval("img"+contador);
	if (contador<3)
	contador++;
	else
	contador=1;
	clearInterval(exibir);//interrompe o looping 
	exibir=setInterval("Exibindo()",tempo);
}