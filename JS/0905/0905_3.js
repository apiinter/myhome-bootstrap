// 결과를 보관할 전역변수를 선언한다. 문자열을 통합하기 위해, 문자열로 초기화함.
var getVals="입력: ";
document.getElementById("text").innerHTML = getVals;

function showText() {
  document.getElementById("text").innerHTML = getVals;
}

function clearText() {
  getVals="입력: ";
  document.getElementById("text").innerHTML = getVals;
}