function colorchange(id){
  var background=document.getElementById(id).style.backgroundColor;
  var conf=confirm("Are you sure you want to toggle "+id+" breaker?");

  if(conf){
      //var valueContainer=document.getElementById(id);
      var btn =document.getElementById(id);
      btn.addEventListener("click", function(){
          var xml= new XMLHttpRequest();
          xml.open('GET', 'data1.json', true);
          xml.onload=function(){
              console.log(xml.responseText);
              var myData = JSON.parse(xml.responseText);
              myValue(myData);
          }
          xml.send();
      });
      function myValue(data){

          for (var i=0; i<data.length; i++){
              var valueContainer=document.getElementById(id);
              valueContainer.value=data[0].status;
              //console.log(data[i].status);
              if(valueContainer.value=="1"){
                document.getElementById(id).style.background="red";
              }
              else if (valueContainer.value=="0"){
                document.getElementById(id).style.background="green";
              }
              else{
                document.getElementById(id).style.background="yellow";
              }
          }
          //valueContainer.insertAdjacentHTML('beforeend', myString);
      }
  }
  else {
      alert("nothing");
  }
}
