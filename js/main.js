const imgPath = "img/main/"

const instr = {
  Piano : '#04BF8A',
  Bass: '#18298C',
  Drum: '#F2CF1D',
  Guitar: '#F29F05'
};

const instrSide = {
  Piano : 'rgba(4, 191, 138, 0.54)',
  Bass: 'rgba(24, 41, 140, 0.54)',
  Drum: 'rgba(242, 207, 29, 0.54)',
  Guitar: 'rgba(242, 159, 5, 0.54)'
};

const profImg = strumento => {
  const i = ["Piano", "Bass", "Drum", "Guitar"].indexOf(strumento) + 1;
  return imgPath + 'prof' + i + '.png';
};

const sections = ['#courses', '#ranking', '#articles', '#support'];

$(document).ready(() => {
  const loadCoursStatus = () => {
    $.getJSON('status.php', {strumento: currentInstr}).done(obj => {
      $('#courses .status .level').text(obj.level);
      $('#courses .status .rank').text('#' + obj.rank);
      $('#courses .status .score').text(obj.score);
    })
    .fail((jqxhr, textStatus, error) => {
      const err = textStatus + ", " + error;
      console.log( "Request Failed: " + err );
    });
  };

  const changeProf = () => {
    $.getJSON('courses.php', {strumento: currentInstr}).done(obj => {
      const lessons = Object.keys(obj.lessons).sort();
      $('#courses li > a').each((ind, el)  => {
        let titolo = lessons[ind].split(' ');
        titolo.shift();
        titolo = titolo.join(' ');
        $(el).text(lessons[ind]);
        $(el).attr('href', 'lesson.php?strumento=' + currentInstr + '&video=' + obj.lessons[lessons[ind]] + '&titolo=' + titolo);
      });
      $('#courses .section > p').each((ind, el) => $(el).text(obj.descriptionC[ind]));
      $('#courses .description > p').text(obj.descriptionT);
      $('#courses .prof > img').attr('src', profImg(currentInstr));
    });
  };

  const loadRanking = () => {
    $.getJSON('rank.php', {"strumento": currentInstr})
      .done(obj => {
        $('#ranking table').remove();
        const table = $(document.createElement('table')).appendTo('#ranking');
        for (let i = 0; i < obj.length; i++) {
          const tr = $(document.createElement('tr'));
          if (i === 0) {
            tr.append('<td>1. <img src="img/main/crown.png"/></td>');
          } else {
            tr.append('<td>' + (i + 1) + '.</td>');
          }
          tr.append('<td>' + obj[i][0] + '</td>');
          tr.append('<td>' + obj[i][1] + '</td>');
          table.append(tr);
        }
      })
      .fail((jqxhr, textStatus, error) => {
        const err = textStatus + ', ' + error;
        console.log( 'Request Failed: ' + err );
      });
  };

  const loadProfileStatus = () => {
    $.getJSON('status.php').done(obj => {
      Object.keys(obj).forEach(key => {
        $('#profile ' + '.' + key + ' .level').text(obj[key].level);
        $('#profile ' + '.' + key + ' .rank').text('#' + obj[key].rank);
        $('#profile ' + '.' + key + ' .score').text(obj[key].score);
      });
    })
    .fail((jqxhr, textStatus, error) => {
      const err = textStatus + ", " + error;
      console.log( "Request Failed: " + err );
    });
  };




  let sideSelect = $('#mySidenav a').first().addClass('bg-colored');
  let currentPag = $('#courses').show();
  const tmp = $('#courses .dropmenu').css('height', 'auto');
  const dropmenuHeight = tmp.height();
  tmp.css('height', 0);
  let currentInstr = 'Piano';
  loadCoursStatus();
  changeProf();

  let open = false;
  $('#sidebar-btn').click(e => {
    const dim = open ? '0': '90px';
    $('#mySidenav').css('width', dim);
    $('#main').css('margin-left', dim);
    open = !open;
  });

  $('#instruments').find('a').click(e => {
    const btn = $('#instruments').find('button');
    const str = btn.text();
    btn.text($(e.currentTarget).text());
    currentInstr = btn.text();
    $(e.currentTarget).text(str);
    $('.colored').animate({color: instr[currentInstr]}, 400);
    $('.bg-colored').animate({'background-color': instr[currentInstr]}, 400);
    $('.sidenav').animate({'background-color': instrSide[currentInstr]}, 400);
    changeProf();
    loadCoursStatus();
    loadRanking();
  });

  $('#courses .section > button').click(e => {
    const drop = $(e.currentTarget).parent().parent().find('.dropmenu');
    const str = drop.height() == 0 ? dropmenuHeight : 0;
    drop.animate({height: str}, 300);
  });

  $('#userDrop a').first().click(e => {
    sideSelect.removeClass('bg-colored');
    sideSelect.css('background-color', '');
    sideSelect = $(e.currentTarget);
    currentPag.hide();
    loadProfileStatus();
    currentPag = $('#profile').show();
  });

  $('#mySidenav a').click(e => {
    sideSelect.removeClass('bg-colored');
    sideSelect.css('background-color', '');
    sideSelect = $(e.currentTarget).addClass('bg-colored');
    sideSelect.css('background-color', instr[currentInstr]);
    currentPag.hide();
    currentPag = $(sections[$(e.currentTarget).index()]).show();
  });

  $('#mySidenav a').first().click(e => {
    loadCoursStatus();
  });

  $('#mySidenav a:eq(1)').click(e => {
    loadRanking();
  });

  $('#support button').click(e => {
    const txt = $('#support textarea');
    if (txt.eq(0).val() === '' || txt.eq(1).val() === '') {
      return;
    }
    const tr = $(document.createElement('tr'));
    tr.append('<td>#' + Math.floor(Math.random() * 5000) + '</td>');
    tr.append('<td>' + txt.eq(0).val() + '</td>');
    txt.each((ind, el) => {
      $(el).val('');
    });
    tr.append('<td>Pending</td>');
    $('#support table').append(tr);
  });
});
