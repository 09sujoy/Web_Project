

function showUser(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","Model/emailduplicationcheck.php?q="+str,true);
    xmlhttp.send();
  }
}




function showUser_name(str) {
  if (str == "") {
    document.getElementById("txtHint_2").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint_2").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","Model/usernameduplication.php?q="+str,true);
    xmlhttp.send();
  }
}


function showUser_phonenumber(str) {
  if (str == "") {
    document.getElementById("txtHint_3").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint_3").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","Model/phonenumberduplication.php?q="+str,true);
    xmlhttp.send();
  }
}


function showUser_doctorid(str) {
  if (str == "") {
    document.getElementById("txtHint_4").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint_4").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","Model/doctoridduplication.php?q="+str,true);
    xmlhttp.send();
  }
}




function current_retype()
{
    let current_password = document.getElementById('current_password').value;
    let new_password = document.getElementById('new_password').value;
    let retype_new_password = document.getElementById('retype_new_password').value;

  
    if(current_password!="" && new_password!="" )
    {
      //document.getElementById("txtHint_6").innerHTML = " hellow boss!!!";
    const json = {
        'current_password':current_password,
        'new_password' : new_password
   
        
    };

    //document.getElementById("txtHint_7").innerHTML = json.new_password;
if(json.current_password==json.new_password)
{




 const data = JSON.stringify(json);

     const xhttp = new XMLHttpRequest();
   //  document.getElementById('txtHint_8').innerHTML='. !!!Please Check';


     xhttp.onreadystatechange = function(){

         if(this.readyState == 4 && this.status == 200){
            
          window.alert(" please type other password  , same  password is not allowed");
                document.getElementById('txtHint_6').innerHTML = this.responseText;

              


         }
        //  else{
        //   document.getElementById('txtHint_6').innerHTML = " not  !!!";
       
        // }
         
     }
     
 
     xhttp.open("POST", "Model/current_and_retype_password_duplication.php",true);

     xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

     xhttp.send(`mydata=${data}`);
     
 

}
else{
  document.getElementById('txtHint_6').innerHTML = "";
}


}
else
{
    document.getElementById('txtHint_6').innerHTML='Information Missing. Please Check' ;
}


}
