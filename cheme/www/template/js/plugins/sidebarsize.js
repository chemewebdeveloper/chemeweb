var sideBarSize = $("#main-content").height(); // returns height of HTML document
if(sideBarSize < 750){
 $(".sidebar").height("750px"); // This should set my sidebar to the height of the page
}else{
$(".sidebar").height(sideBarSize);
}
 