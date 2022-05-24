<?php
  require './connection/connect.php';
  session_start();
  if (!isset($_SESSION['user'])) {
    header('Location: index.html');
    exit();
  }
  $user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Main</title>
    <!-- Bootstrap and jquery -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha384-ZvpUoO/+PpLXR1lu4jmpXWu80pZlYUAfxl5NsBMWOEPSjUn/6Z/hRTt8+pR6L4N2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/color/jquery.color-2.1.2.min.js" integrity="sha384-Dmia8eQq5QAVU5VL95mpXzGE2n2oYxIv9aFwn+JAtQ3Y/4bWeHSjKUgYSJi/BovQ" crossorigin="anonymous"></script>
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
    <!-- My css and scripts-->
    <link rel="stylesheet" href="css/filters.css">
    <script src="js/main.js" charset="utf-8"></script>
    <link rel="stylesheet" href="css/cards.css">

    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <header>
      <div class="navbar bg-colored">
        <div class="sinistra">
          <span id="sidebar-btn">&#9776;</span>
          <a id="logo" href="#">E minor</a>
        </div>
        <div class="destra">
          <div class="dropdown" id="instruments">
            <button type="button" class="dropdown-toggle" data-toggle="dropdown">Piano</button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Bass</a>
              <a class="dropdown-item" href="#">Drum</a>
              <a class="dropdown-item" href="#">Guitar</a>
            </div>
          </div>
          <div class="dropdown">
            <button type="button" class="dropdown-toggle" data-toggle="dropdown"><?=$user?></button>
            <div class="dropdown-menu" id="userDrop">
              <a class="dropdown-item" href="#">Profile</a>
              <a class="dropdown-item" href="logout.php">Logout</a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <div id="mySidenav" class="sidenav">
      <a>
        <img src="img/main/courses.png" alt="">
      </a>
      <a>
        <img src="img/main/rank.png" alt="">
      </a>
      <a>
        <img src="img/main/articles.png" alt="">
      </a>
      <a>
        <img src="img/main/support.png" style="padding:5px" alt="">
      </a>
    </div>

    <!--Il contenuto della pagina effettiva va qui dentro per permettere il collapse dovuto all'apertura della sidebar-->
    <div id="main">
      <div id="ranking">
        <h2 class="colored">Musicians Ranking!</h2>
      </div>

      <div id="courses">
        <div class="flexdiv">
          <div class="levels">
            <div>
              <h1 class="colored">Here you are, <?=$user?>!</h1>
              <div class="section">
                <h2 class="colored">1st Course - Elementary level</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <button type="button" class="bg-colored">Let's start!</button>
              </div>
              <div class="dropmenu">
                <ul class="colored">
                  <li><a class="colored">Text</a></li>
                  <li><a class="colored">Text</a></li>
                  <li><a class="colored">Text</a></li>
                </ul>
              </div>
            </div>

            <div>
              <div class="section">
                <h2 class="colored">2nd Course - Intermediate level</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <button type="button" class="bg-colored">Let's start!</button>
              </div>
              <div class="dropmenu">
                <ul class="colored">
                  <li><a class="colored">Text</a></li>
                  <li><a class="colored">Text</a></li>
                  <li><a class="colored">Text</a></li>
                </ul>
              </div>
            </div>
            <div>
              <div class="section">
                <h2 class="colored">3rd Course - Advanced level</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <button type="button" class="bg-colored">Let's start!</button>
              </div>
              <div class="dropmenu">
                <ul class="colored">
                  <li><a class="colored">Text</a></li>
                  <li><a class="colored">Text</a></li>
                  <li><a class="colored">Text</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="right">
            <div class="status">
              <h2 class="colored">Recap</h2>
              <p>Level Reached: <span class="colored level">3</span></p>
              <p>Score: <span class="colored score">3</span></p>
              <p>Ranking: <span class="colored rank">#3</span></p>
            </div>
            <div class="prof">
              <img src="img/main/prof1.png" alt="professor">
              <div class="description">
                <h2 class="colored">Teacher</h2>
                <p>asdfasdf sadf sadf sadfasdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="articles">
        <h1 class="colored">Hey <?=$user?>, here's the best place to keep updated!</h1>
        <div class="riga">
          <div class="colonna">
            <div class="articolo">
              <img src="img/main/news/abba.jpg" alt="Abba">
              <h2 class="titoletto">Abba returns with a new album</h2>
              <p>Swedish supergroup Abba returns to the music scenes after over 30 years of inactivity. After releasing two new singles, the band announced the album release for the upcoming year.</p>
            </div>
            <div class="articolo">
              <img src="img/main/news/thedoo.jpg" alt="TheDoo thumbnail">
              <h2 class="titoletto">TheDoo releases new single Ascend</h2>
              <p>Famous Youtuber and streamer TheDoo is releasing a new single called Eclipse on the wave of success of his previous single Ascend</p>
            </div>
            <div class="articolo">
              <img src="img/main/news/bonjovi.jpg" alt="Bon Jovi Limitless">
              <h2 class="titoletto">Bon Jovi's new single is officially out!</h2>
              <p>After a strong comeback of the band in the previous years, Bon Jovi prepares the coming of his new album with a new single called Limitless</p>
            </div>
          </div>
          <div class="colonna">
            <div class="articolo">
              <img src="img/main/news/soadfnmk.jpg" alt="Concert frontmen">
              <h2 class="titoletto">System of a Down's new tour dates announced</h2>
              <p>After the covid emergency stopping all of the events in 2020, System of a Down announces the official dates for their next concert headlining with Faith No More and Korn</p>
            </div>
            <div class="articolo">
              <img src="img/main/news/eurovision.jpg" alt="Eurovision">
              <h2 class="titoletto">E-Minor's review of this year's Eurovision is out</h2>
              <p>Check our media team's personal review of this year's Eurovision's setlist as well as our own personal ranking of the participating artists</p>
            </div>
            <div class="articolo">
              <img src="img/main/news/synmasterclass.jpg" alt="Synyster Gates">
              <h2 class="titoletto">Avenged Sevenfold's lead guitarist delivers new composition inspired masterclass</h2>
              <p>After the huge success of their newest album The Stage, lead guitarists Synyster Gates held a pretty interesting masterclass about composition and inspiration</p>
            </div>
          </div>
          <div class="colonna">
            <div class="articolo">
              <img src="img/main/news/streamingvsradio.jpg" alt="Streaming Vs Radio">
              <h2 class="titoletto">The online streaming vs radio service debate continues</h2>
              <p>The debate about the pros and cons of online music streaming continues tomorrow on our official podcast, come join the talk and analyze it with us from the musician's point of view</p>
            </div>
            <div class="articolo">
              <img src="img/main/news/studiorecording.jpg" alt="Studio Recording">
              <h2 class="titoletto">Let's Talk - Recording your music during the covid outbreak</h2>
              <p>In this episode of our weekly series "Let's Talk" we talk how you can keep recording your music during the covid outbreak, easy, high quality and most importantly at home!</p>
            </div>
            <div class="articolo">
              <img src="img/main/news/Davie504.jpg" alt="Davie504">
              <h2 class="titoletto">The great number of 'hidden' talented musicians</h2>
              <p>Youtube hosts milions of content creators and quite a big number of it consists of incredibly talented musicians that struggle to become known to the public. We actually got interviews with some of them, come check their side of the story</p>
            </div>
          </div>
        </div>
      </div>

      <div id="support">
        <h1 class="colored">Contact us!</h1>
        <textarea name="name" rows="1" cols="80" placeholder="Object" maxlength="30"></textarea>
        <textarea rows="8" cols="80" placeholder="Type here..." maxlength="200"></textarea>
        <button type="button" class="bg-colored">Send</button>
        <table>
          <tr>
            <th>Id</th>
            <th>Object</th>
            <th>Status</th>
          </tr>
          <tr>
            <td>#4392</td>
            <td>Houston, we have a problem!</td>
            <td>Accepted</td>
          </tr>
          <tr>
            <td>#5264</td>
            <td>I'm tired</td>
            <td>Pending</td>
          </tr>
        </table>
      </div>

      <div id="profile">
        <h1 class="colored">Check your progress, <?=$user?>!</h1>
        <div class="propic bg-colored">
          <img src="img/main/profile.png" alt="profile">
        </div>
        <div class="statusContainer">
          <div>
            <div class="status Piano">
              <h2 class="colored">Piano</h2>
              <p>Level Reached: <span class="colored level">3</span></p>
              <p>Score: <span class="colored score">7</span></p>
              <p>Ranking: <span class="colored rank">#1</span></p>
            </div>
          </div>
          <div>
            <div class="status Bass">
              <h2 class="colored">Bass</h2>
              <p>Level Reached: <span class="colored level">3</span></p>
              <p>Score: <span class="colored score">7</span></p>
              <p>Ranking: <span class="colored rank">#1</span></p>
            </div>
          </div>
          <div>
            <div class="status Drum">
              <h2 class="colored">Drum</h2>
              <p>Level Reached: <span class="colored level">3</span></p>
              <p>Score: <span class="colored score">7</span></p>
              <p>Ranking: <span class="colored rank">#1</span></p>
            </div>
          </div>
          <div>
            <div class="status Guitar">
              <h2 class="colored">Guitar</h2>
              <p>Level Reached: <span class="colored level">3</span></p>
              <p>Score: <span class="colored score">7</span></p>
              <p>Ranking: <span class="colored rank">#1</span></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
