var index=1;
changeimage =function(){
var imgs = ["/anh/slide1.jpg","/anh/slide2.png","/anh/slide3.png"];
    document.getElementById("img").src =imgs[index];
    index++;
    if (index==3){
        index=0;
    }
}
setInterval(changeimage,1000);