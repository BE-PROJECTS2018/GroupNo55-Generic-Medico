<? php
include 'config.php'
 ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Generic Medico- An Online Drug Reference</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">
    
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="img/header-bg (2).jpg" alt="Mountain View" width="300" height="250"></a>
        
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#About">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="signup08.html"><?php 
			  require_once 'satish_login.php';
			  echo "$username";?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#Services">Services</a>
            </li>
            <li class="nav-item">
              
              <a class="nav-link js-scroll-trigger" href="#References">References</a>
            </li>
           
          </ul></font>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <body bgcolor="#E6E6FA">
</body>
    <header class="masthead">
      <div class="container">
<font color="black">
        <div class="intro-text">
          <div class="intro-lead-in"></div>
          <div class="intro-heading text-uppercase">Generic Medico</div>
          <p>The main objective is to build generic Medicine Recommender System for Doctors/patients which basically maps and recommends Generic Medicines having the same constituents as that of branded medicine prescribed by the doctor.Along with this it also builds awareness about Side effects,Dosage and cost of the medicines.

This also has a Socio- economic impact on society in general by bringing transparency to the patient and also increase the awareness about the medicines. when the name of Brand Medicine is either scanned or searched manually which is useful to doctors and patients. To build awareness about the Dosage,Side effects and cost of the Medicines which is useful to General public.


</p>
        </div></font>
      </div>
    </header>

    <!-- About -->

    <section id="About">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">About</h2>
            <h3 class="section-subheading text-muted"></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/modi.png" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>March 2017</h4>
                    <h4 class="subheading">Motivation</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">On 17th April 2017, Prime Minister Narendra Modi hints at rules for doctors to prescribe Generic Medicines. As Name of generic medicines having the same constituents as that of brand medicine is not known to all the doctors and patients, a recommender system is necessary. So Online Generic Medicine Recmmender should be Built.
</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/images..jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>April 2017</h4>
                    <h4 class="subheading">An Agency is Born</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Jan Aushadi powered by National Infomatrics Center which has list of all generic drugs.As it is Started recently it has very less number of medicines and        Recommendation system is also not there.
 </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/header-bg (2).jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>December 2017</h4>
                    <h4 class="subheading">Transition to Full Service</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Generic Medico a website which helps users to find generic medicines having the same constituents as that of brand Medicines giving the dosage,indegrients,price ,seide effects,etc. It is a Free Service Website</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/t.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    
                    <h4 class="subheading">Our Team</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Our Team members are Dr. Nupur Giri, Satish Fulwani, Rahul Nagdev, Nisha Megnani, Meenu Bhatia. We have done this project as our Final Year Project.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <h4>Be Part
                    <br>Of Our
                    <br>Story!</h4>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Your Website 2018</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
   

 
   

    <!-- Services -->
    <section id="Services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Services</h2>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <<i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class=" fa fa-search
fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading"><a href="searchsec.html">Search The Medicine</a></h4>
            <p class="text-muted">Here you can search Generic Medicines having the same constituents as of Brand Medicine.Doctors,Patients and General public all can easily search the required information .</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-group fa-stack-1x fa-inverse"></i>
            
              </span>
            <h4 class="service-heading">General Awareness</h4>
            <p class="text-muted">Here You can Search for Dosage and Side effects of a medicine without a doctor and systems recommends all the required information.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading"><a href="updated bot.html">Chat With Us</a></h4>
            <p class="text-muted">Here You can get information about the medicine from a doctor/bot.</p>
          </div>
        </div>
      </div>
    </section>

   <!-- References -->s
   
 <section class="bg-light" id="References">
<center>
 <div class="container">
<center>
              <h2 class="section-heading text-uppercase">References</h2>
                
        </div></center>
      
	  <div class="row">
        

       <h1>1 mg</h1>
      <p><img class="img-fluid" src="img/portfolio/1mg.png" alt="" height="100" width="150" align= "left" hspace="25">1mg is an android application which has a list of generic medicines.But this system does not have any recommender system.The System only lists the names of the generic medicines.1 mg is an e-commerce health care company based in Gurgaon, Haryana, India. The company was founded in 2012 as HealthkartPlus, a subsidiary of HealthKart, by Prashant Tandon, Sameer Maheshwari, Gaurav Agarwal and Vikas Chauhan.In April 2015, HealthkartPlus spun off into a separate entity and rebranded itself as 1 mg. </p>
            
          </div></br>

              ><h4>MedClik</h4>
           <p> <img class="img-fluid" src="img/portfolio/medclik_.jpg" alt="" height="100" width="150" align="right" hspace="25"> MedCLIK is India's first and #1 solution developed exclusively for Doctors, Hospitals and Pharmacies.Provides user friendly instant access to accurate, authoritative, updated, reliable drug information. Features: - search drug content by Generic or Brand names, or by Index, Drug Groups and Diseases, .. It is quality-controlled sites that provide free information on essential topics. These resources are widely used by health-care professionals but in most cases are freely accessible to the general public. To access any of these websites, go to the dictionary's web page at http://www.oup.comluk/reference/resources/med</p>
          <br/>
            
          </div>
          <h4>Jan Aushadi</h4>
             <p> <img class="img-fluid" src="img/portfolio/jan.jpg" alt="" height="100" width="150" align="left" hspace="25">Over the years India, has developed a strong capability in producing quality branded and generic medicines in most of the therapeutic categories, evolving from an mere Rs 1,500 crores industry in 1980 to a more than Rs 1,19,000 crores industry in 2012. However, although these medicines are reasonably priced, as compared to the prices of their equivalent medicines in most other countries, yet a large population of poor people in the country, find it difficult to afford the more expensive branded category of medicines. Accordingly, 'ensuring availability of quality medicines at affordable prices to all', has been a key objective of the Government. </p>
        <br/>
            
          </div>
         
            <right><h4>MIMS</h4>
             <p> <img class="img-fluid" src="img/portfolio/mims.jpg" alt="" height="100" width="150" align="right" hspace="25" >MIMS provides a Clinical Decision Support Knowledge bases to help healthcare professionals in electronic prescribing and dispensing environment make better informed prescribing & therapeutic decisions.

MIMS provides a comprehensive knowledge base of locally approved drug information powered with internationally referenced clinical decision support tools. Itâs embedded in the clinical application system, supplying up to date drug information and interacting intelligently with the patientâs profile to maximize healthcare professionalsâ time.
            </right>
                   </div>
        
        </div>
      </div>
    </section> -->


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

  </body>

</html>
