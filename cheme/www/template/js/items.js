<script type="text/javascript">

this.randomtip = function(){
	var length = $("items li").length;
	var ran = Math.floor(Math.random()*length) + 1;
	$("#tips li:nth-child(" + ran + ")").show();
};

$(document).ready(function(){	
	randomtip();
});

</script>