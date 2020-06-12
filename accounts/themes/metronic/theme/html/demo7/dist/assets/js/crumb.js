'use strict'
//start crumbinate'n
function crumbinate(data) {



  //get itemd className
  const itemClassName = data.app
  //button container className fro each crumbin8t*r instance
  const btnClassName = data.contain
  //get total number of items in an instance
  const itemCount = $('.' + itemClassName).length
  //items visible per page
  const itemVisible = data.items
  //pages count
  let pages = Math.ceil(itemCount / itemVisible);
 
  //auto generate page buttons className for each instance of crumb
  let letters = ['a', 'f', 'g', 'x', 1, 2, 9, 3, 8, 5];
  let autoBtnClass = letters[Math.floor(Math.random() * 4)] + letters[Math.floor(Math.random() * 10)] + letters[Math.floor(Math.random() * 10)] + letters[Math.floor(Math.random() * 10)] + letters[Math.floor(Math.random() * 10)] + letters[Math.floor(Math.random() * 10)]
  console.log(autoBtnClass)

  //hide all items to be crumbled
  $('.' + itemClassName).hide();

  //assign specific className as id's to the items items
  const items = $('.' + itemClassName)
  for (let i = 0; i < items.length; i++) {
    items[i].classList += (' ' + itemClassName + '-' + Number(i + 1))
  }



  //unload pagination buttons.   assign a "data-to" attribute which holds the page id to be controlled by ech button
  for (let i = 1; i <= pages; i++) {
    $('.' + btnClassName).append('<button class="btn btn-primary ' + autoBtnClass + ' crumble" data-to=' + i + '>' + i + '</button>')
    //$('.btns').append(i)
    // console.log(i)
  }

  //create an element for page details
  $('.' + btnClassName).append('<div class="crumbDetail-' + autoBtnClass + '"></div>')

  //main paginator function. loads item within page boundary
  function paginate(param) {
    $('.' + itemClassName).hide() //hide all items
    for (let i = param.start; i <= param.stop; i++) {
      $('.' + itemClassName + '-' + i).show() // show items within the page boundary
    }

    // shown page details eg. items-boundary in page total
    if (data.pageDetail === true) {
      $('.crumbDetail-' + autoBtnClass).html('<p>showing items ' + param.start + ' - ' + param.stop + ' of ' + itemCount + '</p>')
    }
  }

  //get items within page boundary and pass it to the paginate  function
  $('.' + autoBtnClass).click(function () {

    let buttonID = Number($(this).attr("data-to"));
    console.log('button ' + buttonID)

    $('.crumble').removeClass('active');
    $(this).addClass('active');

    //minimun item in pageBoundary
    let startPoint = (itemVisible * buttonID - itemVisible + 1)
    let endPoint = itemVisible * buttonID

    console.log(startPoint + " " + endPoint)
    paginate({
      start: startPoint,
      stop: endPoint
    })
  })

  // launch first page
  paginate({
    start: 1,
    stop: data.items
  })
}

