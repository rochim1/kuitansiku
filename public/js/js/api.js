
$(document).ready(function(){
 updateData('pokok', '000000');

 $(".data-wilayah select").change(function(){
  var id_wilayah = $(this).attr('id');
  var kode_wilayah = $(this).val();

  if(id_wilayah!='kelurahan') {
   updateData(id_wilayah, kode_wilayah);
 }    
})
});

function updateData(id_wilayah, kode_wilayah) {
 if(id_wilayah=='pokok') {
  $("#propinsi").empty().prepend('<option value="">-- Pilih Propinsi --</option>');
}

if(id_wilayah=='pokok' || id_wilayah=='propinsi') {
  $("#kota").empty().prepend('<option value="">-- Pilih Kabupaten/Kota --</option>');
}

if(id_wilayah=='pokok' || id_wilayah=='propinsi' || id_wilayah=='kota') {
  $("#kecamatan").empty().prepend('<option value="">-- Pilih Kecamatan --</option>');
}

if(id_wilayah=='pokok' || id_wilayah=='propinsi' || id_wilayah=='kota' || id_wilayah=='kecamatan') {
  $("#kelurahan").empty().prepend('<option value="">-- Pilih Desa/Kelurahan --</option>');
}

if(kode_wilayah!="") {
  $.post('update.php',{
   update: kode_wilayah
 }, function(data) {
   var data = jQuery.parseJSON(data);

   if(data.status==1) {
    var obj = '#propinsi';
    var content = '';

    if(id_wilayah=='propinsi') {
     obj = '#kota';
   } else if(id_wilayah=='kota') {
     obj = '#kecamatan';
   } else if(id_wilayah=='kecamatan') {
     obj = '#kelurahan';
   }

   $.each(data.content.data, function(i,d) {
     content += '<option value="'+d.kode_wilayah+'">'+d.nama+'</option>';
   });

   $(obj).append(content);
 }
});
}
}