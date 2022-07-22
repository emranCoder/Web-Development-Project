<footer></footer>

<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="bootstrap-4.5.2-dist/js/bootstrap-popper.min.js"></script>		
<script type="text/javascript" src="bootstrap-4.5.2-dist/js/bootstrap.min.js"></script>		
<script src="js/canvasjs.min.js"></script>	
<script src="js/gijgo.min.js" type="text/javascript"></script>
<script type="text/javascript">

$(document).ready( ()=>{

	$(".a_c_i").eq(0).hover( ()=>{
		$(".de-toltips").eq(0).css({
			"visibility":"visible",
		});
	}, ()=> {
		$(".de-toltips").eq(0).css({
			"visibility":"hidden",
		});
	});
	$(".a_c_i").eq(1).hover( ()=>{
		$(".de-toltips").eq(1).css({
			"visibility":"visible",
		});
	}, ()=> {
		$(".de-toltips").eq(1).css({
			"visibility":"hidden",
		});
	});
	$(".a_c_i").eq(2).hover( ()=>{
		$(".de-toltips").eq(2).css({
			"visibility":"visible",
		});
	}, ()=> {
		$(".de-toltips").eq(2).css({
			"visibility":"hidden",
		});
	});
	$(".a_c_i").eq(3).hover( ()=>{
		$(".de-toltips").eq(3).css({
			"visibility":"visible",
		});
	}, ()=> {
		$(".de-toltips").eq(3).css({
			"visibility":"hidden",
		});
	});
	$(".slide-bar").click(()=>{
		$(".de_s_menu").toggleClass("su_active");
	});
	$('.de_s_menu').click(function(e) {
        e.stopPropagation();
    });
    $('.slide-bar').click(function(e) {
        e.stopPropagation();
    });
    $('.modal-dialog').click(function(e) {
        e.stopPropagation();
    });

$('.u_profile').click(function(e) {
        e.stopPropagation();
    });

	$("body").click(()=>{
		$(".de_s_menu").removeClass("su_active");
	});  

  $("body").click(()=>{
    $('.de-dropdown-profile').slideUp();
  });

  $('.admin-tab-profile-settings .input').focus(function(){
    $(this).parent().find(".admin-tab-profile-settings .label-text").addClass('label-active');
  });

  $(".admin-tab-profile-settings .input").focusout(function(){
    if ($(this).val() == '') {
      $(this).parent().find(".admin-tab-profile-settings .label-text").removeClass('label-active');
    };
  });
  $('#datepicker').datepicker({
      uiLibrary: 'bootstrap',
      format: 'dd-mm-yyyy'
    });
  $('.datePicker').datepicker({
      uiLibrary: 'bootstrap',
      format: 'dd-mm-yyyy'
    });
function RefreshTable() {
       $( ".all-booking-table" ).load( "all-booking.php .all-booking-table tbody" );
   }

   $(".table-redo").on("click", RefreshTable);
   $(".search-box-active").click(()=> {
	$(".has-feedback").slideToggle();
   });

   $(".total-person").keyup(()=> { 
   	var x = $(".total-person").val();
   	$(".avater_img_target_box").eq(0).css("display","block");
   	$(".avater_img_target_box").eq(0).html('<input class="avater_image_add" hidden="hidden" type="file" name="avater_first" required onkeyup="this.setAttribute("value", this.value);"  value="" required=""><div class="avater_img_target" onclick="i_in_bo_tar(0)"></div><label>First Person*</label>');
   	$(".box .target_nid_field").eq(0).css("display","block");
   	$(".box .target_nid_field .nid_img_target_box").eq(0).html('<input class="avater_image_add" hidden="hidden" type="file" name="nid_front" required onkeyup="this.setAttribute("value", this.value);"  value=""><div class="nid_img_target" onclick="i_in_bo_tar(1)"></div><div class="nid-photo-text" onclick="i_in_bo_tar(1)"><p>Nid Fornt Photo*</p></div><label>NID Fornt Photo*</label>');
   	$(".box .target_nid_field .nid_img_target_box").eq(1).html('<input class="avater_image_add" hidden="hidden"  type="file" name="nid_back" required onkeyup="this.setAttribute("value", this.value);"  value=""><div class="nid_img_target" onclick="i_in_bo_tar(2)"></div><div class="nid-photo-text" onclick="i_in_bo_tar(2)"><p>Nid Fornt Photo*</p></div><label>NID Back Photo*</label>');
    });
   

   $(".total-person").keydown(()=> { 
   	var x = $(".total-person").val();
   	$(".avater_img_target_box").css("display","none");
   	$(".target_nid_field").css("display","none");
    });

   $(".de-colose").click(()=> {
    $(".modal").fadeOut();
   });
   $(".modal2").click(()=> {
    $(".modal2").fadeOut();
    window.location.replace("new-booking.php?trueNewBooking");
   });

$(".table-search-box").keyup(()=> {

	var searchItam = $(".table-search-box").val();
	// if (searchItam == ) {}
	$(".emran").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(searchItam) > -1);
    });

});
$(".search-form").keyup(()=> {

	var searchItam = $(".search-form").val();
	// if (searchItam == ) {}
	$(".table tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(searchItam) > -1);
    });

});
var totalbooking = $('.total-booking-dtl').text();
var progrsswidth = $('.de-progress').width();
 $('.de-progress').css('width',totalbooking+'px');
 if (totalbooking >= 200) {
 	$('.de-progress').css('width',totalbooking/10);
 }

$(".check_out").click(()=>{

  $("#chekoutModal").css({
    'transform' : 'scale(1)',
});

});


$(".checkoutSubmit-btn").click(()=> {

var val1 = $(".checkoutModalForm .inputBox input").eq(0).val();
var val2 = $(".checkoutModalForm .inputBox input").eq(1).val();
var val3 = $(".checkoutModalForm .inputBox input").eq(2).val();
var val4 = $(".checkoutModalForm .inputBox input").eq(3).val();
var val5 = $(".checkoutModalForm .inputBox input").eq(4).val();
var val6 = $(".checkoutModalForm .inputBox input").eq(5).val();
var val7 = $(".checkoutModalForm .inputBox input").eq(6).val();
var val8 = $(".checkoutModalForm .inputBox select").eq(0).val();
var val9 = $(".checkoutModalForm .inputBox input").eq(7).val();
var val10 = $(".checkoutModalForm .inputBox input").eq(8).val();
var val11 = $(".checkoutModalForm .inputBox input").eq(9).val();

var tokenTarget = $(".token_target").val();

  $.ajax({
  url: "php-core/check_out_core.php",
  type: "POST",
  data: {
    checkOut : "checkout",
    token:tokenTarget,
    roomPrice:val1,
    cash:val2,
    extraChange:val3,
    extraCharges_descript:val4,
    disCount:val5,
    due:val6,
    bill:val7,
    paymentBy:val8,
    pyumbear:val9,
    billBy:val10,
    billBy_phone_no:val11,
    
  },
  success: function(e){
      window.location.replace(e);
  }
});


});




$(".modal3").css("display","block");

$('.u_profile').click(()=> {
	$('.de-dropdown-profile').slideToggle();
});
 
$('.edit-room-btn').click(()=>{

  $('.user-edit-box input').attr('type','text');
  $('.user-edit-box span').slideUp();
  $('.edit-save-btn-room').slideDown();

});



});

function findTotal(){
    var arr = document.getElementsByClassName('qty')[0].value;
    var arr1 = document.getElementsByClassName('qty')[1].value;
    var arr2 = document.getElementsByClassName('qty')[2].value;
    var arr3 = document.getElementsByClassName('qty')[3].value;
    var arr4 = document.getElementsByClassName('qty')[4].value;
    var tot = (parseInt(arr)-parseInt(arr1))+parseInt(arr2);
    
    var primary =(((parseInt(arr)+parseInt(arr2))*parseInt(arr3))/+"100");
    if (tot < 0) {
    var result = (arr1-primary)+tot;
  var due = arr1-result;
  }else {
    var result = (arr1-primary)-tot;
    var due = arr1-result;
  }

    if (!isNaN(due)) {
      //document.getElementsByClassName('total')[0].value = tot;
      document.getElementsByClassName('qty')[4].value=Math.abs(due);
    }
    if (!isNaN(result)) {
      document.getElementsByClassName('total')[0].value = result;
      
    }
}


//checkbox select
  function checkboxStafsToggle(source) {

  var checkboxesStafs = document.getElementsByName('stafsCheckbox');

  for(var i=0, n=checkboxesStafs.length;i<n;i++) {
    checkboxesStafs[i].checked = source.checked;
    singleSelect(source);

  }
}


function trashmovalsingle(athor) {

      deletBooking(athor);
}
function trashmoval(data) {
  if ( data == 'stafsTruth' ) {
      window.location.href = "php-core/delete_core.php?allAuthDelet&"+data;
     }else {
      window.location.href = "php-core/delete_core.php?allAuthDelet&";
     }
}

function trashreoval() {

  if (confirm("Ar you sure to delete this person?")) {
        window.location.href = "php-core/delete_core.php?4uthmubh15v14ct1v3t35" 
    } else {
        window.location.reload();
    }
}

//recover iteam 
function recoverDelet (target,data) {
  if ( data == 'stafsRecover' ) {
    window.location.href = "php-core/delete_core.php?token="+target+"&recoverTrashrecoverStafsActive";
 }else {
    window.location.href = "php-core/delete_core.php?token="+target+"&recoverTrashrecoverBookinActive";
 }

}
//delet iteam 
function deletBooking (target) {

 window.location.href = "php-core/delete_core.php?token="+target+"&moveTrashdeletBookinActive"

}
function deletStafs (target) {
 window.location.href = "php-core/delete_core.php?token="+target+"&moveTrashdeletStafsActive"

}

//single checkbox select
function singleSelect(data,uniq,auth){  

  var checkboxes = document.getElementsByName('bookingCheckBox');
  var selectedDelet = document.getElementsByClassName('table-slected-del')[0];
    if (data.checked) {
           selectedDelet.style.transform='scale(1)';
    }else {
      selectedDelet.style.transform='scale(0)';
    }
    if (uniq == 'single') {
    selectedDelet.setAttribute('onclick','trashmovalsingle("'+auth+'")');
  }
}

//checkbox select
  function checkboxToggle(source) {

  var checkboxes = document.getElementsByName('bookingCheckBox');
 //getAttribute('data-auth')
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
     singleSelect(source);
  }
}
//cjeclbpx slect


///image slector 
function i_in_bo_tar(e) {
  document.getElementsByClassName('avater_image_add')[e].click();
}


	function sAuActive(e) {
		var targert = document.getElementsByClassName("sub_admin_ul")[e];
		var targert_p = document.getElementsByClassName("hidden-menu-active")[e];
		var targert_main_head = document.getElementsByClassName("main-head")[e];
		if (targert.style.display === "none") {
			targert.style.display="block";
			targert_p.textContent="-";
			targert_p.style.color="Black";
			targert_main_head.style.fontWeight="bold";
			targert_main_head.style.color="Black";
		}else {
			targert.style.display="none";
			targert_p.textContent="+";
			targert_p.style.color="rgba(0,0,0,.5)";
			targert_main_head.style.fontWeight="400";
			targert_main_head.style.color="rgba(0,0,0,.5)";
		}
	}

	// Get the canvas element form the page
var canvas = document.getElementById("c_f_s");
 
/* Rresize the canvas to occupy the full page, 
   by getting the widow width and height and setting it to canvas*/
 
canvas.width  = window.innerWidth;
canvas.height = window.innerHeight;
 
//Done! Enjoy full page canvas!
// Get the canvas element form the page
var canvas = document.getElementById("c_f_s");
 
function fullscreen(){
           var el = document.getElementsByTagName("html")[0];
 
           if(el.webkitRequestFullScreen) {
               el.webkitRequestFullScreen();
           }
          else {
             el.mozRequestFullScreen();
          }            
}
 
canvas.addEventListener("click",fullscreen)

//canvasjs graph chart start
     var app = {
  settings: {
    container: $('.calendar'),
    calendar: $('.front'),
    days: $('.weeks span'),
    form: $('.back'),
    input: $('.back input'),
    buttons: $('.back button')
  },

  init: function() {
    instance = this;
    settings = this.settings;
    this.bindUIActions();
  },

  swap: function(currentSide, desiredSide) {
    settings.container.toggleClass('flip');

    currentSide.fadeOut(900);
    currentSide.hide();

    desiredSide.show();
  },

  bindUIActions: function() {
    settings.days.on('click', function(){
      instance.swap(settings.calendar, settings.form);
      settings.input.focus();
    });

    settings.buttons.on('click', function(){
      instance.swap(settings.form, settings.calendar);
    });
  }
}

app.init();

</script>
</body>
</html>
