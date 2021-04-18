
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kanban Board</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style type="text/css">

<style>
/* Style the tab */
.tab 
{
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    margin-left : 10px;
    margin-right : 10px;
}

/* Style the buttons inside the tab */
.tab button 
{
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}

tr:hover{
    cursor: pointer;
    background-color: #ccc;
}

div.one 
{
    border: 1px;
    border-style: solid;
    border-color: black;
    margin: 25px 50px;
    background-color: white;
}
div.button
{
    margin: 25px 50px;
    text-align: right; 
}
div.two 
{
    border: 10px;
    margin: 25px 50px;
    background-color: white;
}
div.tax 
{
    margin: 10px 10px;
    background-color: white;
}

    section{
      width: 1000px;
      height: 360px;
      margin: 100px auto;
      display: flex;
      justify-content: space-around;
    }
    h1{
      text-align: center;
    }
    div{
      width: 200px;
      height: 90%;
      padding: 20px;
      margin:10px;
      background: #fafafa;
      box-sizing:border-box;
    }
    p{
      background: grey;
      padding: 5px;
      border-radius: 5px;
      color:white;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <br>
  <h1>KANBAN BOARD</h1>

  
  <div class="input-group mb-3">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    <div class="input-group-prepend">
     <button type="button"   id="btnaddTask" class="btn btn-success btn-sm ml-3">Add New</button>  
    </div> 
    <input type="text"  id="addplanname" placeholder="Add Task Here!!!">

     <div class="input-group-prepend">
      <button <a href="#" data-toggle="modal" data-target="#add-new-task-modal" id="search" class="btn btn-primary btn-sm ml-3">Search</a></button>  
    </div> 
    <input type="text"  id="SeachTask" placeholder="Search Task Here!!!">
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     
    <body onload="startTime()">
      <div id="txt"></div>
</div>

  

  <section>
    <div class="choice">
      <p draggable="true">Reserch</p>
      <p draggable="true">Task 1</p>
      <p draggable="true">Plan 2</p>
      <p draggable="true">Report</p>
    </div>

    <div class="choice" style="background-color: yellow; text-align: center;"> TO-DO List</div>
    <div class="choice" style="background-color: blue;text-align: center;"> On Process</div>
    <div class="choice" style="background-color: green;text-align: center;"> Done</div>
    
  </section>
</body>
</html>
<script type="text/javascript">
  var p = document.getElementsByTagName('p');
  var choice = document.getElementsByClassName('choice');
  var dragItem= null;

//fill listeners
   for (var i of p){
    i.addEventListener('dragstart',dragStart);
    i.addEventListener('dragend',dragEnd);

   }
   // Drag Function

   function dragStart(){
    console.log('start');
    dragItem = this;
    setTimeout(()=>this.style.display="none", 0);
   }
   function dragEnd(){
    console.log('end')
    setTimeout(()=>this.style.display ="block",0);
    dragItem = null;
   }

 for(j of choice){
  j.addEventListener('dragover',dragOver);
  j.addEventListener('dragenter',dragEnter);
  j.addEventListener('dragleave',dragLeave);
  j.addEventListener('drag',Drop);
 }

 function Drop(){
  this.append(dragItem);
}

 function dragOver(e){
     e.preventDefault();
 }
 
 function dragEnter(e){
     e.preventDefault();
 }

  function dragLeave(e){
    }
</script>

<script type="text/javascript">
  
function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =
  h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 500);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>




</body>
</script>
  
   
   




   