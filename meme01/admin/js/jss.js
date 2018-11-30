
user();

$(document).ready(function() {
  validate();
  $('input').on('keyup', validate);
    $('input').on('keydown', validate);
    $('input').on('click', validate);
    $('input').on('change', validate);
});


function validate() {
  var inputsWithValues = 0;
  
  // get all input fields except for type='submit'
  var myInputs = $('input').not(':input[type=file]');  
  myInputs.each(function(e) {
    // if it has a value, increment the counter
    if ($(this).val()) {
      inputsWithValues += 1;
    }
  });

  if (inputsWithValues == myInputs.length) {
    $("input[type=submit]").prop("disabled", false);
  } else {
    $("input[type=submit]").prop("disabled", true);
  }
};





/*

if ( ! $('#answer').validate({
    ignore: "input:hidden:not(input:hidden.required)",
    rules: {
        editor1: {
            required: true,
            minlength: 2
        }
    },
    messages: {
        editor1: {
            required: "Please enter a reply"
        }
    },
    errorElement: "span",
    errorPlacement: function (error, element) {
        error.appendTo(element.prev());
    }
}).form()) {
    console.log('Form errors');
    return false;
}



*/













/*
var flag = true;

$('#answer').each(function() 
   {  
       if($(this).val() == "")  
       { 
              $('input[type="submit"]').attr('disabled'); may be you will need this if you are checking form on every form element
              flag = false;
       }
   }
if(flag) {
        $('input[type="submit"]').removeAttr('disabled');
}
*/




/*

// disable new post submit button if the new post ckeditor is empty
function disableNewPost() {
    var value = CKEDITOR.instances['#reply1'].getData();
    if ($(value).text() == "") {
        $("#submitt").prop("disabled", false);
    } else {
        $("#submitt").prop("disabled", true);
    }
}


*/






/*function trimfield(str) 
{ 
    return str.replace(/^\s+|\s+$/g,''); 
}

function ans()
{
     var obj1 = document.getElementById('reply1');
         if(trimfield(obj1.value) == '') 
         {      
              document.getElementById('reply_error').style.display = 'block';
                  return false; 
         } else {
             return true;
         }*/



/*const device = device.default

window.onload

$(document).ready(function(){
        $("#device").modal('show');
    });
        
device.type*/



var isMobile = false; //initiate as false
// device detection
if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
    || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) { 
    isMobile = true;
    
    if(isMobile = true) {
      $("#mobile").css("display","block");  
      $("#desktop").css("display","none");    
    } else {
        $("#mobile").css("display","none");
        $("#desktop").css("display","block");
    }
}



//js components
$( function() {
    $( "#reledate" ).datepicker();
  } );

 $(document).ready(function(){
        $("#loginerr").modal('show');
    });
        
        
        $(document).ready(function () {
            $('#check1').click(function () {
                
                $.ajax({
                    url: 'check_availability.php',
                    type: 'POST',
                    data: {
                        username: $('#username').val()
                    },
                    beforeSend: function(){
                  $("#loader").show(); 
                  $("#status").css("display","none")
                },
                    
                   complete: function(){
                       setTimeout(function() { 
        $("#loader").css("display","none");
    }, 2000);
                setTimeout(function() { 
        $("#status").css("display","block");
    }, 2000);       }, 
                    
                    
                    success: function (data) {
                        $('#status').html(data);
                    }
                       
            
                });
                    
            });
            
        });
          $(document).ready(function () {
            $('#sub1').click(function () {
                
                $.ajax({
                    url: 'check_availability.php',
                    type: 'POST',
                    data: {
                        username: $('#username').val()
                    },
                    beforeSend: function(){
                  $("#loader").show(); 
                  $("#status").css("display","none")
                },
                    
                   complete: function(){
                       setTimeout(function() { 
        $("#loader").css("display","none");
    }, 2000);
                setTimeout(function() { 
        $("#status").css("display","block");
    }, 2000);       }, 
                    
                    
                    success: function (data) {
                        $('#status').html(data);
                    }
                       
            
                });
                    
            });
            
        });
        
         
        
        $(document).ready(function () {
            $('#userc').click(function () {
                
                $.ajax({
                    url: 'check_availability.php',
                    type: 'POST',
                    data: {
                        username: $('#username').val()
                    },
                    beforeSend: function(){
                  $("#loader").show(); 
                  $("#status").css("display","none")
                },
                    
                   complete: function(){
                       setTimeout(function() { 
        $("#loader").css("display","none");
    }, 2000);
                setTimeout(function() { 
        $("#status").css("display","block");
    }, 2000);       }, 
                    
                    
                    success: function (data) {
                        $('#status').html(data);
                    }
                       
            
                });
                    
            });
            
        });
        












$(document).ready(function () {
            $('#check4').click(function () {
    $.ajax({
        type: "get",
        url: "emailCheck.php",
        data: {
            'email' : $('#email').val()
        },
        dataType: 'json',
        success: function(email) {
            if(data.exists) {
                 $("#status2").css("display","block");
            }
            else {
                $("#status3").css("display","block");
            }
        }
       
    });
});
});



function user() {
    var pubURL = "profile.php?getData=user";
    $.ajax({
        url: pubURL,
        method: 'get',
        dataType: 'json',
        success: function(res) {
            listuser(res);
        },
        error: function(err) {
            console.log(err);
        }
    });
}






function listuser(userArray) {
    outHTML = '';
    for(var loop=0;loop<userArray.length;loop++) {
        outHTML += '<div class="userlist">';
        outHTML += '<table style="table-layout: fixed" class="table table-hover table-bordered">';
        outHTML += '<tr>';
        outHTML += '<th>Username:</th>';
        outHTML += '<th>Full Name:</th>';
        outHTML += '<th>Email:</th>';
        outHTML += '<th>Gender:</th>';
        outHTML += '<th></th>'
        outHTML += '</tr>';
        outHTML += '<tr>';
        outHTML += '<td>' + userArray[loop].USERNAME + '</td>';
        outHTML += '<td>' + userArray[loop].FULL_NAME + '</td>';
        outHTML += '<td>' + userArray[loop].EMAIL + '</td>';
        outHTML += '<td>' + userArray[loop].GENDER + '</td>';
        outHTML += '<td><a href="deleteuser.php?userid=' + userArray[loop].USER_ID + '">Delete User</a></td>'
        outHTML += '</tr>'
        outHTML += '</table>';
        outHTML += '</div>';
    }
    document.getElementById('userinfo').innerHTML = outHTML;
}




function myFunction(nav) {
    
           var x = document.getElementById("nav");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}



$(document).ready(function() {

        var remember = $.cookie('remember');
        if (remember == 'true') 
        {
            var username = $.cookie('username');
            var password = $.cookie('password');
            // autofill the fields
            $('#uname').val(username);
            $('#pwd').val(password);
        }


    $("#login").submit(function() {
        if ($('#remember').is(':checked')) {
            var username = $('#uname').val();
            var password = $('#pwd').val();

            // set cookies to expire in 14 days
            $.cookie('username', username, { expires: 14 });
            $.cookie('password', password, { expires: 14 });
            $.cookie('remember', true, { expires: 14 });                
        }
        else
        {
            // reset cookies
            $.cookie('username', null);
            $.cookie('password', null);
            $.cookie('remember', null);
        }
  });
});















       /*  $(document).ready(function () {
            $('#check4').click(function () {
                $.ajax({
                    url: 'emailCheck.php',
                    type: 'GET',
                    data: {
                        email: $('#email').val()
                    },
                    beforeSend: function(){
                  $("#loader").show();
                 $("#status2").css("display","none")
                },
                   complete: function(){
                  setTimeout(function() { 
        $("#loader").css("display","none");
    }, 2000);
                setTimeout(function() { 
        $("#status2").css("display","block");
    }, 2000);       }, 
                   
                    success: function (data) {
                        $('#status2').html(data);
                    }
                });
            });
            
        });
        */






/*
function contact(){

var name = document.getElementById('name1').value;
var email = document.getElementById('email1').value;
var message = document.getElementById('msg').value;
    
     name1_error.innerHTML = '';
    email1_error.innerHTML = '';
    msg_error.innerHTML = '';

if(name.contact() == false || name.value == '') {
     document.getElementById('contsub').disabled=true;
    }
    
    if(email.contact() == false || email.value == '') {
        document.getElementById('contsub').disabled=true;
    }
    
    if(message.contact() == false || message.value == '') {
       document.getElementById('contsub').disabled=true;
    }

    
if(document.getElementById('contsub').disabled=true){
document.getElementById('contsub').disabled=true;
}else{
document.getElementById('contsub').disabled=false;   
}

}

*/




/*
function contact() {
    name1_error.innerHTML = '';
    email1_error.innerHTML = '';
    msg_error.innerHTML = '';
    
if(name1.checkValidity() == false || name1.value == '') {
     document.getElementById('name1_error').style.display = 'block';
    }
    
    if(email1.checkValidity() == false || email1.value == '') {
        document.getElementById('email1_error').style.display = 'block';
    }
    
    if(msg.checkValidity() == false || msg.value == '') {
        document.getElementById('msg_error').style.display = 'block';
    }
    
    if(name1.value != '' && email1.value != '' && msg.value != '') {
        
//        window.location = 'localhost/meme01/view/enquiry.php';
    }
    
}


*/

function function1() {
    
    var checkBox = document.getElementById("check1");
    
    var text = document.getElementById("p1");
    
    var button = document.getElementById("userc")

    if (checkBox.checked == true){
        text.style.display = "block";
        checkBox.style.display = "none";
        button.style.display = "block";
        
    } else {
        text.style.display = "none";
    }
}

function function2() {

    var checkBox = document.getElementById("check2");

    var text = document.getElementById("p2");

    if (checkBox.checked == true){
        text.style.display = "block";
        checkBox.style.display = "none";
    } else {
        text.style.display = "none";
    }
}

function function3() {

    var checkBox = document.getElementById("check3");

    var text = document.getElementById("p3");

    if (checkBox.checked == true){
        text.style.display = "block";
        checkBox.style.display = "none";
    } else {
        text.style.display = "none";
    }
}

function function4() {

    var checkBox = document.getElementById("check4");

    var text = document.getElementById("p4");

    if (checkBox.checked == true){
        text.style.display = "block";
        checkBox.style.display = "none";
    } else {
        text.style.display = "none";
    }
}

function function5() {

    var checkBox = document.getElementById("check5");

    var text = document.getElementById("p5");

    if (checkBox.checked == true){
        text.style.display = "block";
        checkBox.style.display = "none";
    } else {
        text.style.display = "none";
    }
}

function function6() {

    var checkBox = document.getElementById("check6");

    var text = document.getElementById("p6");

    if (checkBox.checked == true){
        text.style.display = "block";
        checkBox.style.display = "none";
    } else {
        text.style.display = "none";
    }
}






function ans() {
reply_error.innerHTML = '';


     if(reply.checkValidity() == false || reply.value == '') {
     document.getElementById('reply_error').style.display = 'block';
    }

}

function forgot() {
    forg_error.innerHTML = '';


     if(forg.checkValidity() == false || forg.value == '') {
     document.getElementById('forgerror').style.display = 'block';
    }

}

