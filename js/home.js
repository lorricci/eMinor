const img  = ['pianoBg.png', 'bassBg.png', 'drumBg.png', 'guitarBg.png'];
const col = ['#04BF8A','#18298C','#F2CF1D','#F29F05']
const instrument = ['pianoOver.png', 'bassOver.png', 'drumOver.png', 'guitarOver.png']
const imgPath = 'img/home/'
let currentDot = '.dot:first';
let numDot = 0;


$(document).ready(() => {
  $('.dot:first').css('background-color', '#a1a1a1')
  let timer = setInterval(() => changeSlide((numDot + 1) % 4), 4000);

  /*$('.dot').click(event => {
    resetInterval();
    changeSlide($(event.currentTarget).index());
  });*/

  changeSlide2 = (num) => {
    $(currentDot).css('background-color', '#dbdbdb');
    currentDot = '.dot:eq(' + num + ')';
    $('.slide').fadeOut(700, function() {
      $(this).attr('src', imgPath + img[num]).fadeIn(700);
      $(currentDot).animate({'background-color': '#a1a1a1'}, 700);
      $('.bg-colored').animate({'background-color': col[num]}, 700);
      $('.colored').animate({'color': col[num]}, 700);
    });
    numDot = num
  };

  changeSlide = (num) => {
    $(currentDot).css('background-color', '#dbdbdb');
    currentDot = '.dot:eq(' + num + ')';
    let pos = ((num - numDot) >= 0 && !(num == 3 && numDot == 0)) || (num == 0 && numDot == 3)  ? 'left': 'right';
    const bgImg = $(document.createElement('img')).appendTo('.carosello').addClass('next-slide').attr('src', imgPath + img[num]).css(pos, '100%');
    const obj = {};
    obj[pos] = '0%';
    const currOver = $('.over-slide');
    $(document.createElement('img')).appendTo('.carosello').addClass('over-slide').attr('src', imgPath + instrument[num]).css('left', 'auto').css(pos, '150%').animate({left: '0px', right: ''}, 1500);
    $('.next-slide').animate(obj, 1500, () => {
      $('.slide').remove();
      bgImg.removeClass('next-slide').addClass('slide');
      currOver.remove();
    });
    $(currentDot).animate({'background-color': '#a1a1a1'}, 1500);
    $('.bg-colored').animate({'background-color': col[num]}, 1500);
    $('.colored').animate({'color': col[num]});
    numDot = num;
  }

  resetInterval = () => {
    clearInterval(timer);
    timer = setInterval(() => changeSlide(numDot = ++numDot % 4), 5000);
  };
});
