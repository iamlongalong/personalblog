// function test () {
// 	//document.getElementById("container").style.backgroundImage="url('../image/back"+3+".jpg')";
// 	alert(ra);
// }
window.onload=function(){ //随机生成背景图片
	var ra;
	ra= Math.floor(Math.random()*10);
	document.getElementById("container").style.backgroundImage="url('image/back"+ra+".jpg')";
} 
function submitOver() { //移动鼠标到login上
	document.getElementById("submit-btn").style.boxShadow = "2px 2px 5px #007979";
}
function submitOut() { //从login上移开鼠标
	document.getElementById("submit-btn").style.boxShadow = "1.5px 1.5px 5px #333333";
}
window.onresize = function() { //窗体大小改变事件
	 function fontSizeChange(){ //greeting字体大小随页面大小改变
	 	var size=(window.innerWidth)/18;
	 	document.getElementById("greeting").style.fontSize = (size+"px");
	 	//alert("字体大小："+size+"\n窗体宽度："+window.innerWidth);
	 }
	 fontSizeChange();
}
function submitOnMouseDown(){ //sumit按下时获得边框
	document.getElementById("submit-btn").style.border="2px solid gray";
}
function submitOnMouseUp(){ //sumit放开时边框取消
	document.getElementById("submit-btn").style.border="none";
}