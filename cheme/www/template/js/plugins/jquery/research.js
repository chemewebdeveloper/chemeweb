 $(document).ready(function() {
 $("#researchareas").fadeIn(500);

 //Function for the Biochemical Page
 $("#openbiochemical").click(function () {
 	 $("#researchareas").hide("slow");
 	 $("#close").show("fast");
    $(".biochemical").show("highlight", {color:"#abc8e4"},1500);
    });
$("#close").click(function () { 
 $("#close").hide("slow");
    $(".biochemical").hide("slow");
    $("#researchareas").fadeIn(1000);
  });
  //Function for the Biomedical Page
 $("#openbiomedical").click(function () {
	 $("#researchareas").hide("slow");
 	 $("#close").show("fast");
    $(".biomedical").show("highlight", {color:"#abc8e4"},1500);  
    });
    $("#close").click(function () {
 $("#close").hide("slow");
    $(".biomedical").hide("slow");
    $("#researchareas").fadeIn(1000);
  });
//Function for the Catalysis Page
$("#opencatalysis").click(function () {
	 $("#researchareas").hide("slow");
 	 $("#close").show("fast");
    $(".catalysis").show("highlight", {color:"#abc8e4"},1500);
    });
    $("#close").click(function () {
 $("#close").hide("slow");
    $(".catalysis").hide("slow");
    $("#researchareas").fadeIn(1000);
  });
//Function for the Combustion Page
   $("#opencombustion").click(function () {
 	 $("#researchareas").hide("slow");
 	 $("#close").show("fast");
    $(".combustion").show("highlight", {color:"#abc8e4"},1500);
    });
$("#close").click(function () {
	$("#close").hide("slow");
    $(".combustion").hide("slow");
    $("#researchareas").fadeIn(1000);
  });
  //Function for the Electrochemical Systems Page
   $("#openelectrochemicalsystems").click(function () {
 	 $("#researchareas").hide("slow");
 	 $("#close").show("fast");
    $(".electrochemicalsystems").show("highlight", {color:"#abc8e4"},1500);
    });
$("#close").click(function () {
	$("#close").hide("slow");
    $(".electrochemicalsystems").hide("slow");
    $("#researchareas").fadeIn(1000);
  });
  //Function for the Molecular Simulations Page
   $("#openmolecularsimulations").click(function () {
 	 $("#researchareas").hide("slow");
 	 $("#close").show("fast");
    $(".molecularsimulations").show("highlight", {color:"#abc8e4"},1500);
    });
$("#close").click(function () {
	$("#close").hide("slow");
    $(".molecularsimulations").hide("slow");
    $("#researchareas").fadeIn(1000);
  });
   //Function for the Sustainable Energy Page
   $("#opensustainableenergy").click(function () {
 	 $("#researchareas").hide("slow");
 	 $("#close").show("fast");
    $(".sustainableenergy").show("highlight", {color:"#abc8e4"},1500);
    });
$("#close").click(function () {
	$("#close").hide("slow");
    $(".sustainableenergy").hide("slow");
    $("#researchareas").fadeIn(1000);
  });
  //Function for the Reservoir Simulations Page
   $("#openreservoirsimulations").click(function () {
 	 $("#researchareas").hide("slow");
 	 $("#close").show("fast");
    $(".reservoirsimulations").show("highlight", {color:"#abc8e4"},1500);
    });
$("#close").click(function () {
	$("#close").hide("slow");
    $(".reservoirsimulations").hide("slow");
    $("#researchareas").fadeIn(1000);
  });
    //Function for the Thermophysical Properties Page
   $("#openthermophysicalproperties").click(function () {
 	 $("#researchareas").hide("slow");
 	 $("#close").show("fast");
    $(".thermophysicalproperties").show("highlight", {color:"#abc8e4"},1500);
    });
$("#close").click(function () {
	$("#close").hide("slow");
    $(".thermophysicalproperties").hide("slow");
    $("#researchareas").fadeIn(1000);
  });
  });