  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyBW1CfEngjzTGTVFwBiwIEuTzl-wpMmimk",
    authDomain: "ngocc-bd7a3.firebaseapp.com",
    databaseURL: "https://ngocc-bd7a3.firebaseio.com",
    projectId: "ngocc-bd7a3",
    storageBucket: "ngocc-bd7a3.appspot.com",
    messagingSenderId: "1019720918087"
  };
  firebase.initializeApp(config);


function writedata(){
firebase.database().ref("Ngo/11").set({
      name : document.getElementById("namefield").value,
      type : document.getElementById("type").value,
      state : document.getElementById("state").value,
      contact : document.getElementById("contact").value,
  });
getdata();
}

function getdata(){
firebase.database().ref('/Ngo/1/').once('value', function(snapshot){

  snapshot.forEach(function(childSnapshot){

    var childkey = childSnapshot.key;
    var childdata = childSnapshot.val();

    document.getElementById("data").innerHTML = childdata['name']+"," + childdata['type']+"," + childdata['state']+"," + childdata['contact'];
  });
});}
getdata();

function get1data(){

  var starCountRef = firebase.database().ref();
starCountRef.on('value', function(snapshot) {
 //updateStarCount(postElement, snapshot.val());
 var childdata = snapshot.val();

    document.getElementById("data").innerHTML = childdata['name']+"," + childdata['type']+"," + childdata['state']+"," + childdata['contact'];

});
}


function get2data(){


  var html = "<table class='table table-dark table-hover' id='tb'><tr><th style='width:40%;  font-family: 'Poppins', sans-serif;'>Name</th> <th style='width:40%;  font-family: 'Poppins', sans-serif;'>Cause</th><th style='width:40%;  font-family: 'Poppins', sans-serif;'>State</a> </tr>";
                               
var ftype= "children";                        
var fstate = "Delhi";                       
 ftype = document.getElementById("type").value;
 fstate = document.getElementById("state").value;
 
  for(var i =0 ; i< 12 ; i++){
 var ref = firebase.database().ref().child('Ngo').child(i);

ref.on("value", function(snapshot) {
   
   var childdata = snapshot.val();
   //alert(childdata);
   //var key = Object.keys(childdata);
  
   /*for(var i=0;i<key.legth;i++){
    var k = key[i];
    var name=[k].name;
    var type=Ngo[k].type;
    var state=Ngo[k].state;
    console.log(name,type,state);
       }*/
   if(childdata["type"]==ftype&&childdata["state"]==fstate){
    console.log(childdata["state"],childdata["name"],childdata["type"]);
      html +="<tr><td><a href='#'style='color:#69bbbb' data-toggle='collapse' data-target='#sixth'>" +childdata["name"] + "<img src='downarrow.png' class='image1'></a><div class='collapse'id='sixth'> " + childdata["contact"]+ "</div></td><td >" + childdata['type'] +"</td><td >"+ childdata['state'] + " </td></tr> ";
                       }

}, function (error) {
   console.log("Error: " + error.code);
});}
document.getElementById("tb").innerHTML = html;
$('#myTable').on('click', 'input[type="button"]', function () {
    $(this).closest('tr').remove();
})
$('p input[type="button"]').click(function () {
    $('#myTable').append(html);
});
}
function ob2arr(data){
 var returnLOB = []; //array init
        for (var i1r= 0; i1r < data.length; i1r++) { 
                var lob = new LOBslist(); //new object
                var cLob = data[i1r];
                lob.name = cLob.name;
                lob.id = cLob.id;

                returnLOB.push(lob); //adding to array?
                console.log(lob); //right here

        }

        console.log(returnLOB);
}


