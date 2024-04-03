
var giohang1 = new Array();

function themvaogiohang1(x) {
  var boxsp = x.parentElement.children;
  var tensp = boxsp[0].innerText;
  var gia =  boxsp[1].innerText;
  var soluong = boxsp[3].children[1].value;
  

  if(checkspgiohang(tensp)>=0){
    capnhatslsp(checkspgiohang(tensp));
  }
  else{
    var sp = new Array(tensp, gia, soluong);
    giohang1.push(sp);
  }
  // console.log(giohang);
  // showcountsp();

  // lưu giỏ hàng tren sessionStorage
  sessionStorage.setItem("giohang1", JSON.stringify(giohang1));

}
