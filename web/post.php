<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="post.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
      <script src="https://www.gstatic.com/firebasejs/5.10.0/firebase.js"></script>
    

    <script type="text/javascript">
        var config = {
    apiKey: "AIzaSyBW1CfEngjzTGTVFwBiwIEuTzl-wpMmimk",
    authDomain: "ngocc-bd7a3.firebaseapp.com",
    databaseURL: "https://ngocc-bd7a3.firebaseio.com",
    projectId: "ngocc-bd7a3",
    storageBucket: "ngocc-bd7a3.appspot.com",
    messagingSenderId: "1019720918087"
  };
  firebase.initializeApp(config);


function gtdata(){
var emailc = Math.floor(Math.random() * 1000) + 1;
console.log(emailc);
firebase.database().ref("Ngo/post/"),child(emailc).set({
      Text : document.getElementById("post").value,
      
     
  });
alert('successfully posted');
}


    </script>

      <script type="text/javascript">
        

      </script>
    <title>Post</title>
</head>
<body id="body">
    <section id="sec1">
        <div class="conatiner-fluid">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#"><img src="donation.png"style="height:100px;width:100px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="home.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="home.html">Logout</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="ngolist.html">NGO's</a>
                    </li>
                   
                  </ul>
                </div>
              </nav>

        </div>
     </section>
     <section id="sec2">
         <div class="container">
         

<form >
    <input type="file" class="form-control" id="document">
    <h2 id="post">Make Post</h2>
    <input type="text" id="post" placeholder="Post" required>
    <br>
    <center><button type="button" onclick="gtdata()" class="btn btn-outline-dark">Post</button></center>
  </form>

         </div>
     </section>
    

     <section id="sec3">
       <div class="container">
          <img src="edu.jpg"class="rounded" id="image">
          <h5 id="head1">Education</h5>
        <a href="#"> <i class="fas fa-user"id="usericon"></i><h5 id="head2">Asit Dhaware</h5> </a> 
        <a href="#"><i class="far fa-calendar-alt" id="calender"></i><h5 id="head3">30 May 2018</h5></a>
        <a href="#"><i class="far fa-thumbs-up"id="likeicon"></i> <span id="like">Like</span></a>
      
     
        <h6 id="head4"> Education truly is a privilege. With more than 70 <br>
          million children who have no access to primary education,<br>
           it becomes obvious that not all are guaranteed the right to education.<br>
           As a result, more than 700 million adults around the world cannot read or write.</h6>
     
           <img src="hungry.jpg"class="rounded" id="image">
           <h5 id="head1">Food Feeding</h5>
         <a href="#"> <i class="fas fa-user"id="usericon2"></i><h5 id="head2">Sahil Hatankar</h5> </a> 
         <a href="#"><i class="far fa-calendar-alt" id="calender2"></i><h5 id="head3">25 Jan 2018</h5></a>
         <a href="#"><i class="far fa-thumbs-up"id="likeicon"></i> <span id="like2">Like</span></a>
        
     
         <h6 id="head4"> Education truly is a privilege. With more than 70 <br>
           million children who have no access to primary education,<br>
            it becomes obvious that not all are guaranteed the right to education.<br>
            As a result, more than 700 million adults around the world cannot read or write.</h6>
     
            <img src="cloth.jpg"class="rounded" id="image">
            <h5 id="head1">Cloths</h5>
          <a href="#"> <i class="fas fa-user"id="usericon3"></i><h5 id="head2">Akash Fulmali</h5> </a> 
          <a href="#"><i class="far fa-calendar-alt" id="calender3"></i><h5 id="head3">16 Oct 2018</h5></a>
          <a href="#"><i class="far fa-thumbs-up"id="likeicon"></i> <span id="like3">Like</span></a>
          
     
          <h6 id="head4"> Education truly is a privilege. With more than 70 <br>
            million children who have no access to primary education,<br>
             it becomes obvious that not all are guaranteed the right to education.<br>
             As a result, more than 700 million adults around the world cannot read or write.</h6>
     
             <script src="post.js"></script>
       </div>

     </section>
</body>
</html>

