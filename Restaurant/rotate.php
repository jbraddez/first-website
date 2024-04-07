[code=html]
 <?php 
 $images=array( // list of files to rotate - add as needed 
 "./images/img1.jpeg",
 "./images/img2.png", 
 "./images/img3.png", 
 "./images/img4.jpeg", 
 "./images/img5.jpeg" ); 
 $total=count($images); 
 $secondsFixed=10; // seconds to keep list the same 
 $seedValue=(int)(time()/$secondsFixed); 
 srand($seedValue); 

 $index=(int)($_GET['i']); // image index passed in 
 $i=$index%$total; // make sure index always in bounds 
 $file=$images[$i]; 
 header("Location: $file"); // and pass file reference back 
 ?>
 [/code]