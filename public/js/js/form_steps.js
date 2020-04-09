
var currentTab = 0;
showTab(currentTab);
$(".phone").inputmask({ "mask": "(9999) 999-999-999" });
function showTab(n) {
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  if (n === 0) {
    document.getElementById("prevBtn").style.display = "none";
    $('#skipp').hide();
  } else {
    document.getElementById("prevBtn").style.display = "inline";
    $('#skipp').show();
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
    $('#skipp').show();
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
    $('#skipp').hide();
  }
  fixStepIndicator(n)
}

$("form").nextAll("small").hide();
$(".phone").focusout(function () {
  nmor_telp = $(this).val();
  if (nmor_telp.length < 8) {
    $(".phone").next("small").hide();
  }
  else if (nmor_telp.length >= 8) {
    $(".phone").nextAll("small").hide();
  }

});
var x, y, i, validsecond, validmail = true;
// $("#email-input").focusout(function () {
//   email = $("#email-input").val();
//   var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
//   if (email.match(mailformat)) {
//     $.ajax({
//       type: "POST",
//       data: "mail=" + email,
//       url: "cekmail.php",
//       success: function (hasil) {
//         if (hasil == "available") {
//           $(".mail-warn").hide();
//           $("#email-input").removeClass("invalid", "masih-invalid");
//           $("#email-input").nextAll("i").remove();
//           validmail = true;
//         } else {
//           $(".mail-warn").show().html("maaf, email sudah dipakai");
//           $("#email-input").addClass("invalid");
//           $(".invalid").after("<i class='fas fa-exclamation-circle harus'></i>");
//           validmail = false;
//         }
//       }
//     })
//   }
//   else {
//     $(".mail-warn").show().html("*masukkan alamat email yang valid");
//     validmail = false;
//   }
// });

function nextPrev(n) {
  var x = document.getElementsByClassName("tab");
  if (n == 1) {
    if (validateForm() === false) {
      if (validasi() === false) {
        if (validmail === false) {
          alert("masukkan alamat e-mail yang valild");
        }
        return false;
      }
      else if (validsecond === true) {
        if (validmail === true) {
          if (validsecond === false) {
            return false;
          }
          else if (validsecond === true) {
            if (value === false) {
              return false
            }
            else {

              document.getElementsByClassName("step")[currentTab].className += " finish";
              currentTab = currentTab + n;
              if (currentTab >= x.length) {
                $("#regForm").submit();
                return false;
              }
              x[currentTab - 1].style.display = "none";
              showTab(currentTab);
            }
          }
        }
        else if (validmail === false) {
          alert("masukkan alamat e-mail yang valild");
          return false;
        }
      }
    }
    else {
      if (validasi() === true) {
        if (validmail === true) {
          document.getElementsByClassName("step")[currentTab].className += " finish";
          currentTab = currentTab + n;
          if (currentTab >= x.length) {
            $("#regForm").submit();
            return false;
          }
          x[currentTab - 1].style.display = "none";
          showTab(currentTab);
        }
        else if (validmail === false) {
          alert("masukkan alamat e-mail yang valild");
        }
      }
    }
  }
  else if (n == -1) {
    x[currentTab].style.display = "none";
    currentTab = currentTab + n;
    showTab(currentTab);
  }
}

$(".input").focusout(function () {
  var frek = $(this).val().length;
  if (frek >= 1) {
    $(this).removeClass("invalid");
    $(this).nextAll("i").remove();
  }
  else {
    if (!$(this).next().is('i')) {
      $(this).addClass("invalid");
      $(this).after("<i class='fas fa-exclamation-circle harus'></i>");
    }
  }
});
function validasi() {
  validsecond = true;
  pass = $("#pwd1").val();
  panjang = pass.length;
  pass1 = $("#re-pwd1").val();
  // notelp = $("#phone").val();

  if (pass !== "" && panjang !== 0) {
    if (panjang < 8) {
      alert("password harus 8 karakter atau lebih");
      validsecond = false;
    }
    else {
      validsecond = true;
    }
  }
  else {
    validsecond = false;
  }
  if (pass1 == pass) {
    if (pass1.length !== 0) {
      if ($(".must").val().length == 0) {
        validsecond = false;
      }
    }
  }
  else {
    validsecond = false;
    if (!$("#re-pwd1").next().is('i')) {
      $("#re-pwd1").addClass("invalid");
      $("#re-pwd1").after("<i class='fas fa-exclamation-circle harus'></i>");
    }
  }
  // alert("validate scond says = "+validsecond);
  return validsecond;
}

function validateForm() {
  valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByClassName("must");
  for (i = 0; i < y.length; i++) {
    if (y[i].value == "") {
      if (!$(y[i]).next().is('i')) {
        $(y[i]).addClass("invalid");
        $(y[i]).after("<i class='fas fa-exclamation-circle harus'></i>");
      }
      $(".invalid")[0].focus();
      valid = false;
    }
  }
  if (valid == false) { alert("mohon, isi formulir dengan benar"); }
  // alert("validateForm says = "+valid);
  return valid;
}

function fixStepIndicator(n) {
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  x[n].className += " active";
}
