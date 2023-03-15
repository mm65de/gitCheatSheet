
      function initEventHandler() {
        var boxes = document.getElementsByTagName('h1');
        for (let box of boxes) {
          box.addEventListener('click', toggleBoxClosed);
        }
        // Easteregg: Click on the top left corner of the first headline: Open all boxes
        document.getElementsByTagName('body')[0].addEventListener('click', openAllBoxesEasteregg);
      }
      
      function closeAllBoxes() {
        var boxes = document.getElementsByTagName('div');
        for (let box of boxes) {
          box.classList.add('closed')
        }
      }
      
      function openAllBoxesEasteregg(event) {
        console.log(event)  
        if (event.clientX > 20 || event.clientY > 20) {
            return;
        }
        var boxes = document.getElementsByTagName('div');
        for (let box of boxes) {
          box.classList.remove('closed')
        }
      }
      
      function toggleBoxClosed(event) {
        this.parentElement.classList.toggle('closed');
        console.log(event);
      }
      
      function onLoad() {
        //alert('in onLoad');
        //alert(document.getElementsByTagName('div'));
        initEventHandler();
        closeAllBoxes();
      }
      
      document.addEventListener('DOMContentLoaded', onLoad);
      
      
