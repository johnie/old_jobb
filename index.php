<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE]>           <html class="no-js ie-shit"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="sv" prefix="og: http://ogp.me/ns#"> <!--<![endif]-->
<head>

  <meta name="author" content="Johnie Hjelm">
  <meta name="description" content="Jobba som personlig assistent åt Johnie Hjelm">
  <meta name="keywords" content="Personlig, Assistent, Jobb, Johnie, Hjelm">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui" />
  <meta property="og:title" content="Johnie Hjelm &middot; Jag söker en personlig assistent." />
  <meta property="og:description" content="Jag är en passionerad Webbdesigner och söker en personlig assistent." />
  <meta property="og:image" content="images/social.png" />

  <link rel="stylesheet" type="text/css" href="style.css">

  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
  <script type="text/javascript" src="http://www.google.com/jsapi"></script>
  <script type="text/javascript">google.load("jquery", "1");</script>
  <script type="text/javascript" src="//use.typekit.net/wja3aze.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

  <!--[if lt IE 9]>
   <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

<title>Johnie Hjelm &middot; Jag söker en personlig assistent.</title>

<meta charset="UTF-8" />
</head>
<body ng-app="jobb" ng-controller="JobbController">
  <div class="site">
    <figure class="presentation" role="presentation">
      <div class="social">
        <!--<script type="text/javascript"
        src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>-->
        <script type="text/javascript" src="http://cdn.getshar.es/lib/0.8.0.min.js"></script>
        <link type="text/css" rel="stylesheet" href="http://cdn.getshar.es/lib/0.8.0.min.css"/>

        <script type="text/javascript">
          new GetShare({
            /*root: jQueryElement*/
            network: "twitter",
            button: {text: "Tweet"},
            share: {
              url: "http://jobb.johnie.se/",
              message: "Jobba som personlig assistent åt @johniehjelm | http://jobb.johnie.se/"
            }
          });
          new GetShare({
            network: "facebook",
            button: {text: "Dela"},
            share: {
              url: "http://jobb.johnie.se/",
              message: "Jobba som personlig assistent åt Johnie!"
            }
          });
        </script>
      </div>
    </figure>
    <main class="main" role="main" ng-class="{ true: 'night-mode'}[isNightMode]">
      <label class="night-mode__btn">
        <input type="checkbox" ng-model="isNightMode">
        <span ng-class="{ true: 'moon'}[isNightMode]"></span>
      </label>
      <div class="container">
        <header class="header" role="header">
          <h1 class="site-name">Johnie Hjelm</h1>
          <h2 class="site-title"><span>Godmorgon! </span> Jag är en driven utvecklare och designer som söker en personlig assistent.</h2>
          <small class="open-positions">1 plats, deltid.</small>
        </header>
        <article class="article" role="article">
          <p>
            Johnie Hjelm heter jag och är en driven och social 22 åring bosatt i Sigtuna. Jag får dagligen förlika mig med min muskelsjukdom; <a href="http://www.socialstyrelsen.se/ovanligadiagnoser/spinalmuskelatrofi">SMA Typ 2</a>. Är en kaffe-, öldrickande och sportintresserad tekniknörd som älskar design, musik och Apple. Jag jobbar idag som Software Engineer hos <a href="http://startups.symbio.com">Symbio</a> men driver även ett <a href="http://johnie.se">eget företag</a>. Har designat och utvecklat webbplatser och applikationer för webben i över sex år, stationära som mobila. Håller även på med diverse andra projekt, sköter en <a href="http://crip.io">Podcast</a> och en <a href="http://johniehjelm.me">Blogg</a>.
          </p>

          <p>Du som söker skall vara mellan 18-30år. Social, initiativrik/spontan, driftig och ha humor. Jag behöver hjälp med det mesta, så ditt arbete kommer att vara varierat. Då jag är rullstolsburen kommer du att vara mina armar och ben och assistera mig med allt jag inte kan göra själv, både i hemmet och utanför. Det innebär t.ex hjälp med förflyttningar, personlig omvårdnad, matlagning, samt att följa med till mitt arbete och på andra aktiviteter. Du bör ha lätt att anpassa dig till det situationen kräver och har god samarbetsförmåga.</p>

          <p>Din arbetsplats kommer mestadels vara hemma hos mig i Sigtuna eller i centrala Stockholm. Du ska kunna jobba morgon/förmiddag, eftermiddag/kväll, samt vissa helger. Du ska gärna kunna vara flexibel vad det gäller arbetstider.</p>

          <h3>Krav:</h3>

          <ul>
            <li>Körkort</li>
            <li>Rökfri</li>
            <li>Ej Pälsallergiker</li>
          </ul>

          <p><em>Timlön enligt överenskommelse. Kollektivavtal finns.</em></p>

          <p>Skicka ditt CV och ett personligt brev till <em class="spam-email">jobb [at] johnie [dot] se</em> där du beskriver dig själv närmare. Eller kontakta mig via <a href="http://twitter.com/johniehjelm">Twitter</a>, <a href="http://facebook.com/johniehjelm">Facebook</a> eller använd kontaktformuläret här nedanför.</p>
        </article>
        <footer class="footer" role="contentinfo">
          <div class="flexbox">
            <div class="flexbox__item one-half">
              <small class="disclaimer">
              The goal is to have a job that you don't refer as "work".
              </small>
            </div>
            <div class="flexbox__item one-half">
              <a href="http://nordstromassistans.se" class="nordstrom" target="_blank">Nordström Assistans</a>
            </div>
          </div>
        </footer>
      </div>
    </main>
  </div>
  <script src="js/main.js"></script>
  <?php include 'analytics.php'; ?>
</body>
</html>
