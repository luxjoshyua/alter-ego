

// we can only load the js once the page has loaded 
// the function occurs between the curly brackets
window.onload = () => {
    // here we grab our marquee element using class name marquee
    const marquee = document.querySelector('.marquee')
    // only run the code if we find a marquee element
    if (marquee) {
        // here we create an empty array with 40 spaces
      const marquees = new Array(40).fill(null)
        // here we go over our array and do a loop
      marquees.forEach(el => {
        // here it clones the element 40 times and adds each one
        // to the content of the page
        marquee.parentNode.append(marquee.cloneNode(true));
      })
    }
  }