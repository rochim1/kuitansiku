$("#dsb").click(function(){
  window.history.pushState("", "", "index.php?halaman=index");
  $(".page-content").load("../konten/index_dashboard.php");
  if ($(window).outerWidth() < 768) 
  {
    $("#side").hasClass("showing")
    {
      $("#toggle")[0].click();
    }
  }
})
function ambil()
{
  $('#table_id').DataTable(function()
  {
    onload();
    // "processing": true,
    // "serverSide": true,
    // "ajax"     :     "konten/outlet/tampil_usaha_owner.php"


  });
}

$("#Out").click(function(){
  // $.get("konten/outlet/outlet.php",function(data)
  // {
  //  $(".page-content").prepend(data);

  // });
  window.history.pushState("", "", "index.php?halaman=outlet");
  $(".page-content").load("../konten/outlet/outlet.php", ambil);
  if ($(window).outerWidth() < 768) 
  {
    $("#side").hasClass("showing")
    {
      $("#toggle")[0].click();
    }
  }
})
$("#prd").click(function(){
  window.history.pushState("", "", "index.php?halaman=produk");
  $(".page-content").load("../konten/produk/prdk.php");
  if ($(window).outerWidth() < 768) 
  {
    $("#side").hasClass("showing")
    {
      $("#toggle")[0].click();
    }
  }
})
$("#kui").click(function(){
  window.history.pushState("", "", "index.php?halaman=kuitansi");
  $(".page-content").load("../konten/kuitansi/kuitansi.php");
  if ($(window).outerWidth() < 768) 
  {
    $("#side").hasClass("showing")
    {
      $("#toggle")[0].click();
    }
  } 
})
$("#adm").click(function(){
  window.history.pushState("", "", "index.php?halaman=admin");
  $(".page-content").load("../konten/admin/adm.php");
  if ($(window).outerWidth() < 768) 
  {
    $("#side").hasClass("showing")
    {
      $("#toggle")[0].click();
    }
  }
})
$("#prm").click(function(){
  window.history.pushState("", "", "index.php?halaman=promo");
  $(".page-content").load("../konten/promo/prm.php");
  if ($(window).outerWidth() < 768) 
  {
    $("#side").hasClass("showing")
    {
      $("#toggle")[0].click();
    }
  }
})
$("#hst").click(function(){
  window.history.pushState("", "", "index.php?halaman=histori");
  $(".page-content").load("../konten/history/hst.php");
  if ($(window).outerWidth() < 768) 
  {
    $("#side").hasClass("showing")
    {
      $("#toggle")[0].click();
    }
  }
})
$("#rkp").click(function(){
  window.history.pushState("", "", "index.php?halaman=rekap");
  $(".page-content").load("../konten/rekap/rkp.php");
  if ($(window).outerWidth() < 768) 
  {
    $("#side").hasClass("showing")
    {
      $("#toggle")[0].click();
    }
  }
})
$("#tmp").click(function(){
  window.history.pushState("", "", "index.php?halaman=temporary");
  $(".page-content").load("../konten/tmp/temporary.php");
  if ($(window).outerWidth() < 768) 
  {
    $("#side").hasClass("showing")
    {
      $("#toggle")[0].click();
    }
  }
})
$("#set").click(function(){
  window.history.pushState("", "", "index.php?halaman=setting");
  $(".page-content").load("../konten/setting/set.php");
  if ($(window).outerWidth() < 768) 
  {
    $("#side").hasClass("showing")
    {
      $("#toggle")[0].click();
    }
  }
})