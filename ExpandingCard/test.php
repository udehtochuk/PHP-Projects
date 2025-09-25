<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" 
          content="width=device-width, initial-scale=1.0" />
    <style>
        
      /* Setting container to flex and 
         width to 80% of view port */
      .container {
        display: flex;
        width: 80%;
      }
      /*Adding background image to each section*/
      .one {
        background:url(Image/1.jpg);
      }
      .two {
        background: url(Image/2.jpg);
      }
      .three {
        background: url(Image/3.jpg);
      }
      .four {
        background: url(Image/4.jpg);
      }
        
      /* Background properties and 
         transition effect to section */
      .section {
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 80vh;
        cursor: pointer;
        flex: 0.2;
        margin: 8px;
        position: relative;
        transition: all 0.7s ease-out;
      }
  
      /* section with active class will
         grow flex to 3 times */
      .section.active {
        flex: 3;
      }
    </style>
    <title>Expanding Cards</title>
  </head>
  <body>
      
    <!-- Container -->
    <div class="container">
        
      <!-- Div with section and active -->
      <div class="section one active"></div>
        
      <!-- All another div with section -->
      <div class="section two"></div>
      <div class="section three"></div>
      <div class="section four"></div>
    </div>
  
    <script>
        
      // selecting all sections with class of section
      const sections = document.querySelectorAll(".section");
  
      // Foreach section when clicked
      sections.forEach((section) => {
        section.addEventListener("click", () => {
            
          // remove active class from all another section and
          // add it to the selected section
          sections.forEach((section) => {
            section.classList.remove("active");
          });
          section.classList.add("active");
        });
      });
    </script>
  </body>
</html>