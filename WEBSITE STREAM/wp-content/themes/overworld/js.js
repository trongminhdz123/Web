var pic = "",
	arrayPictures = "",
	currentGalery = "",
	indexPic = 0;

//Функция fnAddEventListener добавляет всем картинкам на странице обработчик события OnClick
function fnAddEventListener () {
	var arrayGalery = document.getElementsByClassName("galery");
	for (let g=0; g < arrayGalery.length; g++) {
		arrayPictures = arrayGalery[g].getElementsByClassName("picture");
		for (let p=0; p < arrayPictures.length; p++) {
			arrayPictures[p].addEventListener("click", function(){fnIndexPic(p);}, false);
		}
	};
}

fnAddEventListener();

function fnLoadInBillboard() {
	currentGalery = pic.parentElement;
	arrayPictures = currentGalery.getElementsByClassName("picture");
	fnViewPictures (0);
};

function fnIndexPic (i){
	indexPic = i;
	pic = event.target; // Картинка которая вызвала событие 
	fnLoadInBillboard();
}

function fnViewPictures (direction) {
	var w = window.innerWidth,  // Ширина окна
    	h = window.innerHeight, // Высота окна
		nw = 0,  // Ширина, высота и оношение сторон картинки загружаемой для просмотра
		nh = 0,
		wh = 0,
		pack = document.getElementById("pack"),
		ligthbox = document.getElementById("ligthbox"),
		onBillboard = document.getElementById("onBillboard"),	
		dataclose = document.getElementById("dataclose");

	onBillboard.style.opacity = 0;	
	 
	switch (direction){
		case 0:
			document.getElementById("bg").style.display = "block";
			pack.style.display = "block";
			pack.style.top = 100 - pack.getBoundingClientRect().top + "px";
			break;
		case -1:
			pic = arrayPictures[indexPic - 1];
			indexPic--;
			break;
		case 1:	
			pic = arrayPictures[indexPic + 1];
			indexPic++;
			break;
	 };
		
		nw = pic.naturalWidth;
		nh = pic.naturalHeight;
			
	if (nw > w) { //Если реальные размеры картинки больше окна, устанавиливаем размеры для отображения
		wh = nw/nh;
		nw = Math.round(w*0.75);
		nh = Math.round(nw/wh);
		}
			
	dataclose.style.width = nw + "px";
	onBillboard.style.width = nw + "px";
	onBillboard.style.height = ligthbox.style.height = nh + "px";
	fnOpacity(onBillboard);
	onBillboard.src = pic.src;
	fnLastPicture (pic);
}

function fnOpacity(element) {
	var i=1;
	function iterate() {
		if (element.style.opacity < 1){
			element.style.opacity = (parseFloat(getComputedStyle(element).opacity) + i*0.8/150);
			i++;
			setTimeout(iterate, 75);
			}
		}
	iterate();
}

function fnLastPicture (pic) {
	if (pic == arrayPictures[0]) {
		document.getElementById("prevPic").style.display="none";}
	else {document.getElementById("prevPic").style.display="block"};
	
	if (pic == arrayPictures[arrayPictures.length - 1]) {
		document.getElementById("nextPic").style.display="none";}
	else {document.getElementById("nextPic").style.display="block"};
	
	document.getElementsByClassName("caption")[0].innerHTML = "Картинка " + (indexPic+1) + " из " + arrayPictures.length + "."
}

function fnCloseLigthbox () {
	document.getElementById("bg").style.display = "none";
	document.getElementById("pack").style.display = "none";
	document.getElementById("pack").style.top = "";
	document.getElementById("onBillboard").src = ""; 
}

document.getElementById("prevPic").addEventListener("click", function(){fnViewPictures(-1);}, false);
document.getElementById("nextPic").addEventListener("click", function (){fnViewPictures(1);}, false);
document.getElementsByClassName("close")[0].addEventListener("click", fnCloseLigthbox, false);