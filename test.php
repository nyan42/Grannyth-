<!DOCTYPE html>
<html lang="fr">
<head>
 <meta charset="UTF-8">
 <title>Document</title>
 <style>
   #preview{
     width: 200px;
     display: inline-block;
   }
   #preview img{
     width: 100%;
   }
 </style>
</head>
<body>
   <form action="my-script.php" enctype="multipart/form-data" method="post">
     <div><input type="file" onchange="handleFiles(files)" id="upload" multiple name="file"></div>
     <div><label for="upload"><span id="preview"></span></label></div>
     <div><input type="submit" value="Envoyer"></div>
   </form>
 <script>
 function handleFiles(files) {
   var imageType = /^image\//;
   for (var i = 0; i < files.length; i++) {
   var file = files[i];
   if (!imageType.test(file.type)) {
     alert("veuillez sélectionner une image");
   }else{
     if(i == 0){
       preview.innerHTML = '';
     }
     var img = document.createElement("img");
     img.classList.add("obj");
     img.file = file;
     preview.appendChild(img); 
     var reader = new FileReader();
     reader.onload = ( function(aImg) { 
     return function(e) { 
     aImg.src = e.target.result; 
   }; 
  })(img);

 reader.readAsDataURL(file);
 }
 
 }
}
 </script>
</body>
</html>