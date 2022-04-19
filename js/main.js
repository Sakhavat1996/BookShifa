// ul link
$('.nav-pills li a').on('click',function(){
  var data = $(this).data('tab');
  var li = $('.courses li');
  if(!data){
      li.css('display','flex');
  }
  else{
      li.css('display','none');
      for(i=0;i<li.length;i++){
          var dataId = $(li[i]).data('id');
          if (data==dataId) $(li[i]).css('display','flex'); 
      }
  }    
})


$('.notification').on('click',function(){
    $('.notification-info').toggleClass('active')
})

$('.close').on('click',function(){
    $('.notification-info').removeClass('active')
})

$('.mobile-chart-open').on('click',function(){
  $('#line-chart').addClass('open')
})

new Chart(document.getElementById("line-chart"), {
    type: 'line',
    data: {
      labels: ['mon','tue','wed','thrs','fri','sat','sun'],
      datasets: [{ 
          data: [95,150,16,100,182,11,90],
          borderColor: "#000000",
          fill: false
        }
      ]
    },
    options: {
      legend: {
          display: false
      }
    }
  });