@extends('layouts.master')

@section('top-script')

  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link href="/css/offcanvas.css" rel="stylesheet">
  <link href="/css/resume.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Dosis:400,600,800,200' rel='stylesheet' type='text/css'>
  <title>jim.loch&lthead&gt | designer | coder</title>

@stop

@section('content')

    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">jim.loch&lthead&gt | designer | coder</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/res_index.html">Resume<span class="sr-only">(current)</span></a></li>
            <li><a href="/res_about_me.html">About Me</a></li>
            <li><a href="/res_blog.html">Blog</a></li>
            <li><a href="/res_contact.html">Contact Me</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Portfolio<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Publication Design</a></li>
                <li><a href="#">Illustration</a></li>
                <li><a href="#">Photography</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">HTML &amp CSS</a></li>
                <li><a href="#">JavaScript</a></li>
                <li><a href="#">MySQL and PHP</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">One more separated link</a></li>              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h2>Career Summary</h2>
            <p>Utilizing the skills and insights I’ve gained over a diverse career working in the communications field to manage a team successfully balancing creativity and productivity in a high achievement environment.</p>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-lg-4">
              <h3>San Antonio Business Journal</h3>
              <h4>Director of Creative / Production <br><span id="date">2006-2015</span></h4>
              <p>Director of Production, with primary responsibilities in managing interdepartmental workflow, budget planning, and marketing strategy.</p>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-sabj">
                View details &raquo
              </button>

              <!-- Modal -->
              <div class="modal fade" id="modal-sabj" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">SABJ - Director of Creative / Production</h4>
                    </div>
                    <div class="modal-body">
                      <p>Director of Production, with primary responsibilities in managing interdepartmental workflow, budget planning, and marketing strategy.</p>
                      <p>Supervised 3.5 FTE designers when hired, rearranging job duties and streamlining workflow to ultimately eliminate one full time and one part time position through attrition.</p>
                      <p>Determined the structure of each publication, balancing the required editorial space with advertising, while keeping production costs on budget. Innovated a new digital method of displaying the mock-up of a publication to reflect the actual pages going to press, replacing the legacy hand-written process that lead to advertising omissions and version problems.</p>
                      <p>Also served as hands-on designer, including laying out over 500 weekly newspapers and 150 special publications during tenure, and coordinated all aspects of production for 10 annual Book of Lists, averaging 200 pages each.</p>
                      <p>Coordinated and consulted on 3 different redesigns of the weekly newspaper; this included standardizing master pages, paragraph styles and object libraries to automate formatting, increasing efficiency.</p>
                      <p>Assumed responsibilities for advertising and event marketing, including ad copywriting and design, and implementing a HTML email strategy. Utilizing corporate Content Management System, builds event and product promotional web pages, utilizing URL tracking codes to analyze marketing effectiveness.</p>
                      <p>Upgraded event collateral to coordinate with the design of companion publication, and utilizing advanced PowerPoint techniques, animated the presentation during the event. 
                      Instrumental in planning and implementing first Small Business Expo, which drew 90+ exhibitors.</p>
                      <p>Served as production liaison to web offset printer in Dallas, as well as local contact for information technology services from corporate headquarters.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" href="#">Portfolio</button>
                    </div>
                  </div>
                </div>
              </div>            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-12 col-sm-6 col-lg-4">
              <h3>Austin Business Journal</h3>
              <h4>Editorial Graphic Designer<br><span id="date">2004-2006</span></h4>
              <p>Sole graphic designer in editorial department responsible for assembling and laying out weekly newspaper.</p>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-abj">
                View details &raquo
              </button>

              <!-- Modal -->
              <div class="modal fade" id="modal-abj" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">ABJ - Editorial Graphic Designer</h4>
                    </div>
                    <div class="modal-body">
                    <p>Sole graphic designer in editorial department responsible for assembling and laying out weekly newspaper including selecting and optimizing photographs, designing maps, graphs and other informational graphics, designing feature pages, and conceiving graphical themes for special projects. Worked with management in transition during hardware and software upgrades and redesign process. Worked with managing editor to develop and refine quantitative tools measuring progress in achieving content goals. Created template from scratch in Adobe InDesign and coordinated transition from Quark and NewsEdit Pro to the Adobe workflow including InCopy. Highly intensive environment requiring excellent time-management skills and efficient methodology.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" href="#">Portfolio</button>
                    </div>
                  </div>
                </div>
              </div>
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-12 col-sm-6 col-lg-4">
              <h3>Texas Bankers Association</h3>
              <h4>Graphic Designer<br><span id="date">1999-2004</span></h4>
              <p>Served as sole Graphic Designer for statewide trade association, working with multiple departments with conflicting deadlines.</p>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-tba">
                View details &raquo
              </button>

              <!-- Modal -->
              <div class="modal fade" id="modal-tba" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">TBA - Graphic Designer</h4>
                    </div>
                    <div class="modal-body">
                    <p>Served as sole Graphic Designer for statewide trade association, working with multiple departments with conflicting deadlines. Responsible for managing the design and production of dozens of brochures monthly and collaborated with Communications Director and President to evaluate the branding of the association. Designed the cover, in-house ads and occasional features for a full-color monthly magazine. Coordinated with an in-house print shop to produce 2 and 3 spot-color pieces, and collected bids and served as liaison with outside service providers for 4-color process work. Designed PowerPoint presentations for statewide convention and advocacy tours. Researched and made recommendations for equipment purchase, and served as in-house photographer for publication in monthly magazine.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" href="#">Portfolio</button>
                    </div>
                  </div>
                </div>
              </div>
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-12 col-sm-6 col-lg-4">
              <h3>Lockheed Martin IMS <br>Welfare Reform Services</h3>
              <h4>Graphic Designer<br><span id="date">1998-1999</span></h4>
              <p>High intensity environment with an average of three to four 200+ page proposals being submitted per month.</p>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-lm">
                View details &raquo
              </button>

              <!-- Modal -->
              <div class="modal fade" id="modal-lm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">LM IMS - Graphic Designer</h4>
                    </div>
                    <div class="modal-body">
                    <p>High intensity environment with an average of three to four 200+ page proposals being submitted per month. Was responsible for layout and production of 1,000+ page full-color curriculum.  Converted department to a PostScript environment; researched and made recommendations on software and hardware solutions.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" href="#">Portfolio</button>
                    </div>
                  </div>
                </div>
              </div>
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-12 col-sm-6 col-lg-4">
              <h3>Texas Association for the <br>Education of Young Children</h3>
              <h4>Central Office Manager<br><span id="date">1997-1998</span></h4>
              <p>Worked with Executive Director to administer central office of a statewide early childcare and education association with a membership of over 4,000. </p>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-taeyc">
                View details &raquo
              </button>

              <!-- Modal -->
              <div class="modal fade" id="modal-taeyc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">TAEYC - Central Office Manager</h4>
                    </div>
                    <div class="modal-body">
                    <p>Worked with Executive Director to administer central office of a statewide early childcare and education association with a membership of over 4,000 individuals and 35 chapters.  Assisted in organizing of annual conference with 2,000 participants and 75 vendors in Houston. Supervised temporary workers in processing membership and registration forms, designed and maintained database. Produced layout and design for quarterly newsletters and an 8-page conference mailer and 30-page program, working with State of Texas HHS and UT print shop to produce 8,000 two-color pieces.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" href="#">Portfolio</button>
                    </div>
                  </div>
                </div>
              </div>
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-12 col-sm-6 col-lg-4">
              <h3>Mental Health Association<br>in Texas</h3>
              <h4>Program Assistant<br><span id="date">1994-1997</span></h4>
              <p>Worked with the Program Director to administer a statewide early-childhood parenting education program.</p>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-mhat">
                View details &raquo
              </button>

              <!-- Modal -->
              <div class="modal fade" id="modal-mhat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">MHAT - Program Assistant</h4>
                    </div>
                    <div class="modal-body">
                    <p>Worked with the Program Director to administer a statewide early-childhood parenting education program. Assisted in marketing and conducting a home-visiting professional seminar. Made hotel and catering arrangements for fund-raising dinner. Designed and produced newsletters, brochures, educational materials, programs, and logos. Prepared materials and recorded minutes for board meetings. Assisted in organization of a four-day training for over 100 AmeriCorps volunteers. Organized a retreat for consumer advocates. Provided information and referrals for consumers of mental health services and their families across the state.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" href="#">Portfolio</button>
                    </div>
                  </div>
                </div>
              </div>
            </div><!--/.col-xs-6.col-lg-4-->
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->

@stop

@section('bottom-script')

	<script src="/js/offcanvas.js"></script>

@stop
