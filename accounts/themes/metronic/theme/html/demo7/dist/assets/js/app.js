$('.ajax').submit(function(e){
    console.log('mock start')
    e.preventDefault();
    $.ajax({
        url:'model/controller.php',
        method:'post',
        data:$(this).serialize()
    }).done(function(data){
        data = JSON.parse(data)
       console.log(data)


       //toast msg controler
       if(jQuery.inArray('toast',data.action)>-1){
           
           if(data.blob.toast === 'green'){
            toastr.success(data.msg);
           }else {
            toastr.warning(data.msg);
           }
        
       }

       //alerts controler
       if(jQuery.inArray('alert',data.action)>-1){
        Swal.fire({
            icon: data.blob.alert,
            title: data.msg,
            // text: data.msg,
            // footer: '<a href>Why do I have this issue?</a>'
          })
       }
       
       //ports controler
       if(jQuery.inArray('port',data.action)>-1){
        setTimeout(function(){location.assign(data.blob.port.location)},data.blob.port.time)
       } 


       //loader controler
       if(jQuery.inArray('loader',data.action)>-1){
        loader()
       }

    //    $('.ajax').children().attr('value','');

    }).fail(function(){
        toastr.error('pls check your internet connection')
    })
})



$('#usdamt').change(function(){
    amx = $(this).val()
    $.ajax({
        url:"https://blockchain.info/ticker",
        method:"POST"
    }).done(function(data){
        btc = data.USD.last
        $('#btcequiv').attr('value',amx/btc)
    }).fail(function(){
        console.log('failed to load btc price')
    })
})

$('#usdamtx').change(function(){
    amx = $(this).val()
    $.ajax({
        url:"https://blockchain.info/ticker",
        method:"POST"
    }).done(function(data){
        btc = data.USD.last
        $('#btcequivx').attr('value',amx/btc)
    }).fail(function(){
        console.log('failed to load btc price')
    })
})


function loader(){
    $.ajax({
        url:"model/controller.php",
        method:"POST",
        data:"control=transactions&fetch=mytrans"
    }).done(function(data){
        data = JSON.parse(data);
        console.log(data.data)
        
        $('.mytable').html('');
        for(i=0; i<data.data.length; i++){
            if(data.data[i].type === 'd'){
                ic = 'fas fa-suitcase'
            }else {
                ic = 'far fa-money-bill-alt'
            }
            if(data.data[i].status === "0"){
                ix = '<span class="text-danger">Pending</span>'
            }else {
                ix = '<span class="text-success">Complete</span>'
            }
            $('.mytable').prepend('\
            <tr class=item> \
            <td class="pl-0 py-5"> \
                <div class="symbol symbol-50 symbol-light mr-2"> \
                    <i class=" '+ic+'"></i> \
                </div> \
            </td> \
            <td class="pl-0"> \
                <a href="#" \
                    class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg"> \
               '+data.data[i].ref+' </a> \
                <span \
                    class="text-muted font-weight-bold d-block">'+data.data[i].date+'</span> \
            </td> \
            <td class="text-right"> \
                <span class="text-muted font-weight-bold"> \
                    $ '+data.data[i].amt+' \
                </span> \
            </td> \
            <td class="text-right"> \
                <span class="text-muted font-weight-bold"> \
                    '+ix+' \
                </span> \
            </td> \
        </tr> \
            ')
        }
        $('btns').html(' ');
        crumbinate({
            app: 'item', // className of items to be paginated. .note they should be in one parent container
            contain: 'btns', // className of page buttons parent Container
            items: 5, // items to be displayed per page
            pageDetail: false // toggle page location details
          })

    }).fail(function(){
        toasty.error("failed to fetch table data")
    })
}

loader();