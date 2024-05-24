<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB SMK WIKRAMA BOGOR</title>
    <link rel="stylesheet" href="css/bukti.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   
<center>
   <body>
    <div class="container" style="padding: 0 40px; align-items: center; justify-content: center;">
         <div class="card" style="  height: 280px;  max-width: 350px;  margin: 0 20px; background: white; transition: 0.4s; box-shadow: 2px 2px 5px rgba(0,0,0,0.2);">
            <div class="img" style="  height: 200px;  width: 100%;">
                {{-- @if($tampilbukti->image) --}}
               <img src="{{asset('images/'.$tampilbukti->image)}}" style="  height: 100%; width: 100%; object-fit: cover;">
                {{-- @endif --}}
          </div>
            <div class="top-text" style="  padding: 5px; ">
                @foreach($bukti as $bt)
             <div class="name" style="font-size: 15px; font-weight: 600; color: #202020;" >
             {{$bt->rekening}}
               </div>
               <p style="font-size: 15px; font-weight: 600; color: #e74c3c; line-height: 20px;">
                Bank: {{$bt->rekening}}
                <br>
                Nominal: {{$bt->nominal}}
               </p>
            </div>
            @endforeach
            </div>
         </div>
      </div>
   </body>
  </center>

  <style>
  @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
html,body{
  height: 100%;
  display: grid;
  place-items: center;
  background: #f2f2f2;
  text-align: center;
}
.container{
  padding: 0 40px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.card{
  height: 280px;
  max-width: 350px;
  margin: 0 20px;
  background: white;
  transition: 0.4s;
  box-shadow: 2px 2px 5px rgba(0,0,0,0.2);
}
.card:hover{
  height: 470px;
  box-shadow: 5px 5px 10px rgba(0,0,0,0.2);
}
.card .img{
  height: 200px;
  width: 100%;
}
.card .img img{
  height: 100%;
  width: 100%;
  object-fit: cover;
}
.card .top-text{
  padding: 5px;
}
.card .top-text .name{
  font-size: 25px;
  font-weight: 600;
  color: #202020;
}
.card .top-text p{
  font-size: 20px;
  font-weight: 600;
  color: #e74c3c;
  line-height: 20px;
}
.card .bottom-text{
  padding: 0 20px 10px 20px;
  margin-top: 5px;
  background: white;
  opacity: 0;
  visibility: hidden;
  transition: 0.1s;
}
.card:hover .bottom-text{
  opacity: 1;
  visibility: visible;
}
.card .bottom-text .text{
  text-align: justify;
}
.card .bottom-text .btn{
  margin: 10px 0;
  text-align: left;
}
.card .bottom-text .btn a{
  text-decoration: none;
  background: #e74c3c;
  color: #f2f2f2;
  padding: 5px 8px;
  border-radius: 3px;
  display: inline-flex;
  transition: 0.2s;
}
.card .bottom-text .btn a:hover{
  transform: scale(0.9);
}
@media screen and (max-width: 978px) {
  .container{
    flex-wrap: wrap;
    flex-direction: column;
  }
  .card{
    max-width: 700px;
    margin: 20px 0;
  }
}
  
  </style>
</html>
</html>