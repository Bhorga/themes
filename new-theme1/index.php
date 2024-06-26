
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java 7 day challange</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fileStyle.css">
    <script>
    (function () {
  const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

  //I'm adding this section so I don't have to keep updating this pen every year :-)
  //remove this if you don't need it
  let today = new Date(),
      dd = String(today.getDate()).padStart(2, "0"),
      mm = String(today.getMonth() + 1).padStart(2, "0"),
      yyyy = today.getFullYear(),
      nextYear = yyyy + 1,
      dayMonth = "09/30/",
      birthday = dayMonth + yyyy;
  
  today = mm + "/" + dd + "/" + yyyy;
  if (today > birthday) {
    birthday = dayMonth + nextYear;
  }
  //end
  
  const countDown = new Date(birthday).getTime(),
      x = setInterval(function() {    

        const now = new Date().getTime(),
              distance = countDown - now;

        document.getElementById("days").innerText = Math.floor(distance / (day)),
          document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
          document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
          document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

        //do something later when date is reached
        if (distance < 0) {
          document.getElementById("headline").innerText = "It's my birthday!";
          document.getElementById("countdown").style.display = "none";
          document.getElementById("content").style.display = "block";
          clearInterval(x);
        }
        //seconds
      }, 0)
  }()); 
    </script>
    
</head>
<body class="dottedBack">
<div class="w-10/12 m-auto ">
<div class="">
    <div class="px-10">
    
    <?php get_header(); ?>
    <main class="">
        <h2 class="w-fit m-auto border-2 border-grey-600 shadow py-2 px-24 rounded-lg bg-white mb-8 font-semibold">Become a Job Ready <span class="text-orange-600 font-black"><b>JAVA DEVELOPER IN NEXT 7 DAYS</b></span></h2>		
        
        <div class="grid grid-cols-2 gap-6 border">
            <div>
            <iframe class="w-full h-72 rounded-lg" src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allowfullscreen></iframe>

            </div>
           
            <div>

            <div class="space-4">
                <div class="grid grid-cols-2 gap-4">
                    <div class="p-2 border border-grey-600 shadow-md">
                        <button class=" py-2 px-4 rounded w-full">Button 1</button>
                    </div>
                    <div class="p-2 border border-grey-600 shadow-md">
                        <button class=" py-2 px-4 rounded w-full">Button 1</button>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="p-2 border border-grey-600 shadow-md">
                        <button class=" py-2 px-4 rounded w-full">Button 1</button>
                    </div>
                    <div class="p-2 border border-grey-600 shadow-md">
                        <button class=" py-2 px-4 rounded w-full">Button 1</button>
                    </div>
                </div>
               
                <div class="p-2 border border-grey-600 shadow-md">
                    <button class=" py-2 px-4 rounded w-full">Button 1</button>
                </div>
                
            </div>

            </div>
        </div>
        

          
    </main>
    </div>
    </div>

<?php get_footer(); ?>

</div>

    

</body>
</html>
