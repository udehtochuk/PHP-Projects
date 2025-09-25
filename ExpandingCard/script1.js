         
      // selecting all sections with class of section
      const panels = document.querySelectorAll(".panel");
  
      // Foreach section when clicked
      panels.forEach(panel => {
        panel.addEventListener('click', () => {
            
          // remove active class from all another section and
          // add it to the selected section
          panels.forEach((panel) => {
            panel.classList.remove("active");
          });
          panel.classList.add("active");
        });
      });
 