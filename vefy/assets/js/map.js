// var markers = [
//     {
//         position: new kakao.maps.LatLng(37.317942470498586, 126.83614568279839)
//     },
//     {
//         position: new kakao.maps.LatLng(37.317942470498586, 126.83614568279839), 
//         text: '텍스트를 표시할 수 있어요!' // text 옵션을 설정하면 마커 위에 텍스트를 함께 표시할 수 있습니다     
//     }
// ];

// 지도
var container = document.getElementById('map'); //지도를 담을 영역의 DOM 레퍼런스
var options = { //지도를 생성할 때 필요한 기본 옵션
    center: new kakao.maps.LatLng(37.317942470498586, 126.83614568279839), //지도의 중심좌표.
    level: 4, //지도의 레벨(확대, 축소 정도)
    // marker: markers // 이미지 지도에 표시할 마커 
};
var map = new kakao.maps.Map(container, options); //지도 생성 및 객체 리턴

// 지도 레벨을 표시합니다
displayLevel();
 
// 지도 레벨은 지도의 확대 수준을 의미합니다
// 지도 레벨은 1부터 14레벨이 있으며 숫자가 작을수록 지도 확대 수준이 높습니다
function zoomIn() {        
    // 현재 지도의 레벨을 얻어옵니다
    var level = map.getLevel();
    
    // 지도를 1레벨 내립니다 (지도가 확대됩니다)
    map.setLevel(level - 1);
    
    // 지도 레벨을 표시합니다
    displayLevel();
}    

function zoomOut() {    
    // 현재 지도의 레벨을 얻어옵니다
    var level = map.getLevel(); 
    
    // 지도를 1레벨 올립니다 (지도가 축소됩니다)
    map.setLevel(level + 1);
    
    // 지도 레벨을 표시합니다
    displayLevel(); 
}   
function displayLevel(){
    var levelEl = document.getElementById('maplevel');
}

function setCenter() {            
    // 이동할 위도 경도 위치를 생성합니다 
    var moveLatLon = new kakao.maps.LatLng(37.317942470498586, 126.83614568279839);
    
    // 지도 중심을 이동 시킵니다
    map.setCenter(moveLatLon);
}

function panTo() {
    // 이동할 위도 경도 위치를 생성합니다 
    var moveLatLon = new kakao.maps.LatLng(37.51687422176634, 126.90710990628916);
    
    // 지도 중심을 부드럽게 이동시킵니다
    // 만약 이동할 거리가 지도 화면보다 크면 부드러운 효과 없이 이동합니다
    map.panTo(moveLatLon);    
}        

function NextMap() {
    // 이동할 위도 경도 위치를 생성합니다 
    var moveLatLon = new kakao.maps.LatLng(37.317942470498586, 126.83614568279839);
    
    // 지도 중심을 부드럽게 이동시킵니다
    // 만약 이동할 거리가 지도 화면보다 크면 부드러운 효과 없이 이동합니다
    map.NextMap(moveLatLon);      
}        


// 일반 지도와 스카이뷰로 지도 타입을 전환할 수 있는 지도타입 컨트롤을 생성합니다
var mapTypeControl = new kakao.maps.MapTypeControl();
// 지도에 컨트롤을 추가해야 지도위에 표시됩니다
// kakao.maps.ControlPosition은 컨트롤이 표시될 위치를 정의하는데 TOPRIGHT는 오른쪽 위를 의미합니다
map.addControl(mapTypeControl, kakao.maps.ControlPosition.TOPRIGHT);

// 지도 확대 축소를 제어할 수 있는  줌 컨트롤을 생성합니다
var zoomControl = new kakao.maps.ZoomControl();
map.addControl(zoomControl, kakao.maps.ControlPosition.RIGHT);

var marker = new kakao.maps.Marker({ 
    // 지도 중심좌표에 마커를 생성합니다 
    position: map.getCenter()
}); 
// 지도에 마커를 표시합니다
marker.setMap(map);

// 마커를 생성합니다
// var marker = new kakao.maps.Marker({
//     position: markerPosition, 
//     image: markerImage // 마커이미지 설정 
// });