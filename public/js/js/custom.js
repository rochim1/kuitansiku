
var theToggle = document.getElementById('toggle');function hasClass(elem, className) {return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');}
// addClass
function addClass(elem, className) {
  if (!hasClass(elem, className)) {
   elem.className += ' ' + className;
 }
}
// removeClass
function removeClass(elem, className) {
  var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, ' ') + ' ';
  if (hasClass(elem, className)) {
    while (newClass.indexOf(' ' + className + ' ') >= 0 ) {
      newClass = newClass.replace(' ' + className + ' ', ' ');
    }
    elem.className = newClass.replace(/^\s+|\s+$/g, '');
  }
}
// toggleClass
function toggleClass(elem, className) {
  var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, " " ) + ' ';
  if (hasClass(elem, className)) {
    while (newClass.indexOf(" " + className + " ") >= 0 ) {
      newClass = newClass.replace( " " + className + " " , " " );
    }
    elem.className = newClass.replace(/^\s+|\s+$/g, '');
  } else {
    elem.className += ' ' + className;
  }
}

theToggle.onclick = function() 
{
  var side = $('#side');
  if(side.hasClass('showing')){
    // side.className = side.className.replace("showing","hiding");
    side.removeClass('showing').addClass('hiding');
  }else{
    $("#side").show();
    // side.className = side.className.replace("hiding","showing");
    side.removeClass('hiding').addClass('showing');
    $("#profil").css({"display":"none"});
    $("#profil").delay(500).slideDown("slow");
    $(".ganti-profil").css({"display":"none"});
    $(".ganti-profil").delay(1000).show("slow");
  }
  toggleClass(this, 'on');
  return false;
}
if ($('#side').hasClass('showing'))
{
  $("#isi").click(function()
  {
    $('#toggle')[0].click();
  })
}
function siap()
{
  // buat back
  if (window.history && window.history.pushState) 
  {
    $(window).on('popstate', function() 
    {
      alert('Back button was pressed.');
    });
  }
  // ambil();

  if (sessionStorage.getItem('#tengah') !== 'true') 
  {
    $("#tengah").show(1000);
    $("#tclose").show(1000);
    sessionStorage.setItem('#tengah','true');
  }

  $("#tclose").click(function()
  {
    $("#tengah").hide();
  });

  $(".tooltp").removeClass("tp");
  $("#profil").delay(500).animate({"margin-left":"20px"}); 

  if ($(window).outerWidth() < 768)
  {
    $("#side").hide();
    $(".ganti-profil").css({"left":"35%"}); 
    skrol();
  }
  else if ($(window).outerWidth() >= 768)
  {
    $(".ganti-profil").delay(500).animate({"left":"20px"}); 
    skrol();
  }
}


$(document).ready(function()
{
  siap();
})

$(window).resize(function()
{
  var wit = $(this).outerWidth();
  if (wit < 768)/*moile GUI berarti 767*/
    {   $("#profil").css({"margin-left":"20px"});
  $(".navigasi-kiri").removeClass("navScrol"); /*untuk scroll dimatikan*/
  $(".navigasi-kiri").css({"width":"100%"}); /*agar waktu mobile width 100%*/
  $("#side").hide();
  $(".option").show();
  $("#navbar").css({"top":"0px"});
  $("#side").css({"margin-left":"0px","width":"100%"});
  $("#page-wrapper").css({"margin-left":"0px"});
  $(".ganti-profil").css({"left":"35%"});

} 
if (wit >= 768)/*PC GUI berarti dari 768 keatas*/
{
  $(".ganti-profil").css({"left":"20px"});
  $(".navigasi-kiri").addClass("navScrol");
  skrol();
  if ($("#side").hasClass("showing"))
  {
    $('#toggle')[0].click();
  }        
  if ($("#side").hasClass("tanda"))//maksudnya ketika navkiri diperkecil
  {  
   $("#side").show().css({"margin-left":"-180px","width":"220px"});
   $("#page-wrapper").css({"margin-left":"40px"});
   $("#besar").hide();
   $(".option").hide();
   $(".navigasi-kiri").animate({"width":"100%"});
   $("#kecil").css({"margin-left":"200px"}).show()
   $("#profil").css({"margin-left":"-340px"});
 }else
 {
  $("#side").show().css({"width":"220px"});
  $("#page-wrapper").css({"margin-left":"220px"});
  $(".navigasi-kiribar-side").css({"width":"220px"});
  $("#profil").css({"margin-left":"20px"});
  $(".option").show();
  $(".navigasi-kiri").css({"width":"100%"});/*ukuran parent option, UL-nya*/
}
}
})

/*mengatur tombol slide kiri*/
$("#besar").click(function(){
  $(".tooltp").addClass("tp");
  $("#side").addClass("tanda");
  $("#side").delay(300).animate({"margin-left":"-180px"});
  $("#page-wrapper").delay(500).animate({"margin-left":"40px"});
  $("#besar").delay(450).fadeOut();
  $(".option").fadeOut(250);
  $(".navigasi-kiri").animate({"width":"40px"},700);
  $("#kecil").animate({"margin-left":"200px"}, function()
  {
    $(this).fadeIn()
  })
  $("#profil").animate({"margin-left":"-340px"});

    // function popup()
    // {
    //     $(".navigasi-kiri i").hover(function(event)
    //     {

    //         $(".pop").appendTo("body").fadeIn("slow");

    //     },function()
    //     {
    //         $(".pop").remove();
    //     }).mousemove(function(event){
    //         $(".pop")
    //        .css('top', (event.pageY - 20) + 'px')
    //        .css('left', (event.pageX + 30) + 'px');
    //    });

    // }
    // popup();
  })
$("#kecil").click(function(){
  $("#side").removeClass("tanda");
  $(".option").delay(300).show(300);
  $("#side").animate({"margin-left":"0px"});
  $(".navigasi-kiri").animate({"width":"100%"});
  $("#page-wrapper").animate({"margin-left":"220px"});
  $("#kecil").delay(450).fadeOut();
  $("#besar").delay(500).fadeIn();
  $("#profil").delay(200).animate({"margin-left":"20px"});
  $(".tooltp").removeClass("tp");
})

$("#profil").after("<i class='fas fa-camera ganti-profil'></i>"); 
$(".ganti-profil").hover(function(){
  $(this).css({"background":"white"});
},function(){
  $(this).css({"background":"rgb(221,221,221,0.5)"});
}); 

$(".ganti-profil").click(function()
{
  $(".horden-transparan").slideDown("slow");
  $(window).show();
  $(".upload-image").delay(500).slideDown("slow");

})
$(".cancel-upload").click(function()
{
  $(".horden-transparan",".upload-image").slideUp();

})

function skrol(){
  $(".navScrol").mCustomScrollbar({
    autoHideScrollbar:true,
    theme:"minimal-dark",
    scrollInertia: 1000,
    setWidth:"100%",
    scrollbarPosition:"outside",
  })
}   

///////////////////////////////////////////buat upload foto////////////////////////////////////////////////
function readFile(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      var htmlPreview =
      '<img width="200" src="' + e.target.result + '" />' +
      '<p>' + input.files[0].name + '</p>';
      var wrapperZone = $(input).parent();
      var previewZone = $(input).parent().parent().find('.preview-zone');
      var boxZone = $(input).parent().parent().find('.preview-zone').find('.box').find('.box-body');

      wrapperZone.removeClass('dragover');
      previewZone.removeClass('hidden');
      boxZone.empty();
      boxZone.append(htmlPreview);
    };

    reader.readAsDataURL(input.files[0]);
  }
}

function reset(e) {
  e.wrap('<form>').closest('form').get(0).reset();
  e.unwrap();
}

$(".dropzone").change(function() {
  readFile(this);
});

$('.dropzone-wrapper').on('dragover', function(e) {
  e.preventDefault();
  e.stopPropagation();
  $(this).addClass('dragover');
});

$('.dropzone-wrapper').on('dragleave', function(e) {
  e.preventDefault();
  e.stopPropagation();
  $(this).removeClass('dragover');
});

$('.remove-preview').on('click', function() {
  var boxZone = $(this).parents('.preview-zone').find('.box-body');
  var previewZone = $(this).parents('.preview-zone');
  var dropzone = $(this).parents('.form-group').find('.dropzone');
  boxZone.empty();
  previewZone.addClass('hidden');
  reset(dropzone);
});
///////////////////////////////////////////////////////////////////////////////////
// function user()
// {
//   $("#user , #user i").css({"cursor":"pointer","color":"#666"});
// }
