<script>
    var request= new XMLHttpRequest();
    request.open('GET', 'data.json',true);
    request.onload=function(){
        var data=JSON.parse(this.reponse);

        for(var i=0; i<data.length; i++){
            console.log("The voltage is "+ data[i].voltage +".");
        }
    }
    request.send();
</script>
