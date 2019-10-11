 <?php
  session_start(); 
  include 'colib/db_lib.php';
  include('colib/sys_lib.php');
  ?> 


<!DOCTYPE html>
<html lang="en">  
<head>
    <title>Padhai Adda</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="assets/lib/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font/flaticon/flaticon.css">
    <link rel="stylesheet" type="text/css" href="assets/lib/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/lib/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Lacquer&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  </head>
  <body class="home02">

    <header class="header-content">
      <div class="header-top hidden-sm hidden-xs" id="header-top">
        <div class="container">
          <nav class="navbar navbar-inverse header-top__top">
      <div class="navbar-header">
<a class="navbar-brand logo__link" href="" style="font-size: 25px;color: black;padding-top: 20px;font-family: 'Bree Serif', serif;">
      Padhai Adda</a></div>
            <div class="nav navbar-nav navbar-left categories"><a class="dropdown-toggle categories__button">
    <i class="glyph-icon flaticon-signs-1 categories__icon" style="color: black"></i><span class="categories__text" style="color: black">categories</span></a>
              <div class="dropdown-catagories">
                    <ul class="dropdown-catagories__list ">
                      <li class="dropdown-catagories__item"><a class="dropdown-catagories__link " href="#">Kg - Grade 12</a><span class="glyph-icon flaticon-arrows-3 dropdown-catagories__icon"></span>
                        <div class="cate-sub">
                          <ul class="cate-sub__list">
                            <li class="cate-sub__item"><a class="cate-sub__link" href="#">ICSE</a></li>
                            <li class="cate-sub__item"><a class="cate-sub__link" href="#">CBSE</a></li>
                            <li class="cate-sub__item"><a class="cate-sub__link" href="#">UP Board</a></li>
                          </ul>
                        </div>
                      </li>
                      <li class="dropdown-catagories__item"><a class="dropdown-catagories__link " href="#">Exam Prepration</a><span class="glyph-icon flaticon-arrows-3 dropdown-catagories__icon"></span>
                        <div class="cate-sub">
                          <ul class="cate-sub__list">
                            <li class="cate-sub__item"><a class="cate-sub__link" href="#">Banking & Insurance</a></li>
                            <li class="cate-sub__item"><a class="cate-sub__link" href="#">Business</a></li>
                            <li class="cate-sub__item"><a class="cate-sub__link" href="#">Engineering</a></li>
                            <li class="cate-sub__item"><a class="cate-sub__link" href="#">Government</a></li>
                            <li class="cate-sub__item"><a class="cate-sub__link" href="#">GRE & GMAT</a></li>
                            <li class="cate-sub__item"><a class="cate-sub__link" href="#">Language (English)</a></li>
                            <li class="cate-sub__item"><a class="cate-sub__link" href="#">Language (Other)</a></li>
                            <li class="cate-sub__item"><a class="cate-sub__link" href="#">Law</a></li>
                            <li class="cate-sub__item"><a class="cate-sub__link" href="#">Management</a></li>
                            <li class="cate-sub__item"><a class="cate-sub__link" href="#">Medical</a></li>
                            <li class="cate-sub__item"><a class="cate-sub__link" href="#">Military</a></li>
                            <li class="cate-sub__item"><a class="cate-sub__link" href="#">Science</a></li>
                          </ul>
                        </div>
                      </li>
                      <li class="dropdown-catagories__item"><a class="dropdown-catagories__link " href="#">Higher Education</a><span class="glyph-icon flaticon-arrows-3 dropdown-catagories__icon"></span>
                        <div class="cate-sub">
                          <ul class="cate-sub__list">
                            <li class="cate-sub__item"><a class="cate-sub__link" href="#">Career Development</a></li>
                            <li class="cate-sub__item"><a class="cate-sub__link" href="#">Human Resource</a></li>
                            <li class="cate-sub__item"><a class="cate-sub__link" href="#">Management & Leadership</a></li>
                            <li class="cate-sub__item"><a class="cate-sub__link" href="#">Project Management</a></li>
                            <li class="cate-sub__item"><a class="cate-sub__link" href="#">Sales & Marketing</a></li>
                            <li class="cate-sub__item"><a class="cate-sub__link" href="#">Design</a></li>
                            <li class="cate-sub__item"><a class="cate-sub__link" href="#">Graphic Design</a></li>
                            <li class="cate-sub__item"><a class="cate-sub__link" href="#">Interior Design</a></li>
                            <li class="cate-sub__item"><a class="cate-sub__link" href="#">Web Design </a></li>

                          </ul>
                        </div>
                      </li>
                      <li class="dropdown-catagories__item"><a class="dropdown-catagories__link " href="#">Heath &amp; Fitness</a><span class="glyph-icon flaticon-arrows-3 dropdown-catagories__icon"></span>
                        <div class="cate-sub">
                          <ul class="cate-sub__list">
                            <li class="cate-sub__item"><a class="cate-sub__link" href="#">Dance</a></li>
                            <li class="cate-sub__item"><a class="cate-sub__link" href="#">Fitness</a></li>
                          </ul>
                        </div>
                      </li>
                      <li class="dropdown-catagories__item"><a class="dropdown-catagories__link " href="#">IT &amp; Software</a><span class="glyph-icon flaticon-arrows-3 dropdown-catagories__icon"></span>
                        <div class="cate-sub">
                          <ul class="cate-sub__list">
                            <li class="cate-sub__item"><a class="cate-sub__link" href="#">AI &amp; Big Data</a></li>
                            <li class="cate-sub__item"><a class="cate-sub__link" href="#">Hardware</a></li>
                          </ul>
                        </div>
                      </li>
                      <li class="dropdown-catagories__item"><a class="dropdown-catagories__link " href="#">Language</a><span class="glyph-icon flaticon-arrows-3 dropdown-catagories__icon"></span>
                        <div class="cate-sub">
                          <ul class="cate-sub__list">
                            <li class="cate-sub__item"><a class="cate-sub__link" href="#">Chinese</a></li>
                            <li class="cate-sub__item"><a class="cate-sub__link" href="#">English</a></li>
                            <li class="cate-sub__item"><a class="cate-sub__link" href="#">French</a></li>
                          </ul>
                        </div>
                      </li>
                      <li class="dropdown-catagories__item"><a class="dropdown-catagories__link " href="#">Lifestyle</a><span class="glyph-icon flaticon-arrows-3 dropdown-catagories__icon"></span>
                        <div class="cate-sub">
                          <ul class="cate-sub__list">
                            <li class="cate-sub__item"><a class="cate-sub__link" href="#">Art &amp; Crafts</a></li>
                            <li class="cate-sub__item"><a class="cate-sub__link" href="#">Gaming</a></li>
                          </ul>
                        </div>
                      </li>
                      <li class="dropdown-catagories__item"><a class="dropdown-catagories__link " href="#">Office Productivity</a><span class="glyph-icon flaticon-arrows-3 dropdown-catagories__icon"></span>
                        <div class="cate-sub">
                          <ul class="cate-sub__list">
                            <li class="cate-sub__item"><a class="cate-sub__link" href="#">Apple</a></li>
                            <li class="cate-sub__item"><a class="cate-sub__link" href="#">Google</a></li>
                            <li class="cate-sub__item"><a class="cate-sub__link" href="#">Oracle</a></li>
                          </ul>
                        </div>
                      </li>
                    </ul>


              </div>
            </div>
            <form class="navbar-form navbar-left form-search">
              <div class="form-search__input-group">
                <input class="form-control form-search__input" type="text" placeholder="Search your course...">
                <div class="form-search__btn-group">
                  <button class="btn form-search__button" type="submit"><i class="glyph-icon flaticon-search form-search__icon"></i></button>
                </div>
              </div>
            </form>

            <div class="nav navbar-nav navbar-right nav-right--notlogin">
                <div class="nav-right__notifications" style="color: black"><a class="nav-right__item" href="#"><i class="glyph-icon flaticon-shapes nav-right__item__icon" style="color: black"></i><span class="nav-right__item__notification">02</span></a><a class="nav-right__item" href="#"><i class="glyph-icon flaticon-commerce-1 nav-right__item__icon" style="color: black"></i><span class="nav-right__item__notification">02</span></a></div>
                <button class="btn btn-default button-default nav-right__become" type="submit">become an Instructor</button>

                <?php
                  if(isset($_SESSION['username']))
                  {
                  $myuser =  $_SESSION['username'];
                  $sel = "select * from aws_user where user_id = $myuser";
                  $query = db_lib::db_execute_select($sel);

                ?>

                  <div class="nav-right__profile"><img class="profile__image" src="videodir/user_image/<?php echo $query[0]['user_image'] ;?>" alt="image"><span class="nav-right__profile__status"></span>
                  <div class="profile">
                    <div class="profile__avarta"><img class="profile__image" src="videodir/user_image/<?php echo $query[0]['user_image'] ;?>" alt="image"></div><a class="profile__user-name" href="#"><?php echo $query[0]['username'];?></a>
                    <a class="profile__course" href="dashboard.php"><i class="fa fa-tachometer profile__icon"></i><span class="profile__text"> Dashboard</span></a>
                    <a class="profile__course" href="profile.php"><i class="glyph-icon flaticon-profile profile__icon"></i><span class="profile__text"> My profile</span></a>

                    <a class="profile__course" href="news-events.php"><i class="fa fa-newspaper-o profile__icon"></i><span class="profile__text"> News & Events</span></a>

                    <a class="profile__course" href="#"><i class="glyph-icon flaticon-shield profile__icon"></i><span class="profile__text"> My course</span></a>
                    <a class="btn btn-default button-default profile__btn" href="logout.php">Log out</a>
                  </div>
                </div>

              <?php 
                  }else{
              ?>
                  
              <div class="nav-right__signin"><a class="nav-right__signin__link" href="login.html"  style="color: black">Sign in</a><span>|</span><a class="nav-right__signin__link" href="login.html" style="color: black">sign up</a></div>

              <?php
                }
               ?>

            </div>
          </nav>
        </div>
      </div>
      <div class="bottom-header hidden-sm hidden-xs" id="scrollspy" data-spy="affix" data-offset-top="112">
        



        
        <div class="container">
          <div class="logo--menu"><a class="logo__link" href="" style="color: black;font-size: 20px">Padhai Adda</a></div>
          <nav class="menu-main">
                <ul class="nav navbar-nav menu-main__list ">
                  <li class="menu-main__item "><a class="menu-main__link " href="#" id="elements">Course</a>
                    <div class="dropdown-catagories dropdown-catagories--menu">
                      <ul class="dropdown-catagories__list">
                        <li class="dropdown-catagories__item"><a class="dropdown-catagories__link" href="#">Subject Tutorial</a><span class="glyph-icon flaticon-arrows-3 menu-main__icon"></span>
                          <div class="cate-sub">
                          <ul class="cate-sub__list">
                          <li class="cate-sub__item"><a class="cate-sub__link" href="#">CBSE</a></li>
                          <li class="cate-sub__item"><a class="cate-sub__link" href="#">Uttar Pradesh State Board</a></li>
                          </ul>
                          </div>
                        </li>
                        <li class="dropdown-catagories__item "><a class="dropdown-catagories__link" href="#">Language Course</a><span class="glyph-icon flaticon-arrows-3 menu-main__icon"></span>
                          <div class="cate-sub">
                            <ul class="cate-sub__list">
                              <li class="cate-sub__item"><a class="cate-sub__link" href="#">Spoken English</a></li>
                            </ul>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </li>
                  
                  <li class="menu-main__item "><a class="menu-main__link " href="#" id="elements">Govt. Exames</a>
                    <div class="dropdown-catagories dropdown-catagories--menu">
                      <ul class="dropdown-catagories__list">
                        <li class="dropdown-catagories__item"><a class="dropdown-catagories__link" href="#">SCC</a><span class="glyph-icon flaticon-arrows-3 menu-main__icon"></span>
                          <div class="cate-sub">
                          <ul class="cate-sub__list">
                          <li class="cate-sub__item"><a class="cate-sub__link" href="#">SSC- CGL</a></li>
                          <li class="cate-sub__item"><a class="cate-sub__link" href="#">SSC- CHSL</a></li>
                          <li class="cate-sub__item"><a class="cate-sub__link" href="#">SSC- JE</a></li>
                          <li class="cate-sub__item"><a class="cate-sub__link" href="#">SSC- STENOGRAPHER</a></li>
                          <li class="cate-sub__item"><a class="cate-sub__link" href="#">SSC- MTS</a></li>
                          <li class="cate-sub__item"><a class="cate-sub__link" href="#">SSC- CPO</a></li>
                          <li class="cate-sub__item"><a class="cate-sub__link" href="#">SSC- GD</a></li>
                          </ul>
                          </div>
                        </li>

                        <li class="dropdown-catagories__item "><a class="dropdown-catagories__link" href="#">BANKING</a><span class="glyph-icon flaticon-arrows-3 menu-main__icon"></span>
                          <div class="cate-sub">
                            <ul class="cate-sub__list">
                              <li class="cate-sub__item"><a class="cate-sub__link" href="#">IBPS EXAMS</a>

                                  <span class="glyph-icon flaticon-arrows-3 menu-main__icon"></span>
                                    <div class="cate-sub">
                                      <ul class="cate-sub__list">
                                        <li class="cate-sub__item"><a class="cate-sub__link" href="#">IBPS - PO</a></li>
                                        <li class="cate-sub__item"><a class="cate-sub__link" href="#">IBPS - SO</a></li>
                                        <li class="cate-sub__item"><a class="cate-sub__link" href="#">IBPS- CLERK</a></li>
                                        <li class="cate-sub__item"><a class="cate-sub__link" href="#">IBPS - RRB</a></li>
                                        <li class="cate-sub__item"><a class="cate-sub__link" href="#">IBPS- RRB Assistant</a></li>
                                        <li class="cate-sub__item"><a class="cate-sub__link" href="#">IBPS- RRB PO</a></li>
                                        
                                      </ul>
                                  </div>
                                </li>
                              <li class="cate-sub__item"><a class="cate-sub__link" href="#">SBI EXAMS</a>
                                  <span class="glyph-icon flaticon-arrows-3 menu-main__icon"></span>
                                    <div class="cate-sub">
                                      <ul class="cate-sub__list">
                                        <li class="cate-sub__item"><a class="cate-sub__link" href="#">SBI - PO</a></li>
                                        <li class="cate-sub__item"><a class="cate-sub__link" href="#">IBPS - SO</a></li>
                                        <li class="cate-sub__item"><a class="cate-sub__link" href="#">IBPS- CLERK</a></li>
                                        <li class="cate-sub__item"><a class="cate-sub__link" href="#">IBPS - RRB</a></li>
                                        <li class="cate-sub__item"><a class="cate-sub__link" href="#">IBPS- RRB Assistant</a></li>
                                        <li class="cate-sub__item"><a class="cate-sub__link" href="#">IBPS- RRB PO</a></li>
                                        
                                      </ul>
                                  </div>
                              </li>
                            </ul>
                          </div>
                        </li>

                        <li class="dropdown-catagories__item "><a class="dropdown-catagories__link" href="#">RAILWAYS</a><span class="glyph-icon flaticon-arrows-3 menu-main__icon"></span>
                          <div class="cate-sub">
                            <ul class="cate-sub__list">
                              <li class="cate-sub__item"><a class="cate-sub__link" href="#">Spoken English</a></li>
                            </ul>
                          </div>
                        </li>

                        <li class="dropdown-catagories__item "><a class="dropdown-catagories__link" href="#">DEFENCE</a><span class="glyph-icon flaticon-arrows-3 menu-main__icon"></span>
                          <div class="cate-sub">
                            <ul class="cate-sub__list">
                              <li class="cate-sub__item"><a class="cate-sub__link" href="#">Spoken English</a></li>
                            </ul>
                          </div>
                        </li>

                        <li class="dropdown-catagories__item "><a class="dropdown-catagories__link" href="#">TEACHING</a><span class="glyph-icon flaticon-arrows-3 menu-main__icon"></span>
                          <div class="cate-sub">
                            <ul class="cate-sub__list">
                              <li class="cate-sub__item"><a class="cate-sub__link" href="#">Spoken English</a></li>
                            </ul>
                          </div>
                        </li>

                        <li class="dropdown-catagories__item "><a class="dropdown-catagories__link" href="#">STATE LEVEL EXAMS</a><span class="glyph-icon flaticon-arrows-3 menu-main__icon"></span>
                          <div class="cate-sub">
                            <ul class="cate-sub__list">
                              <li class="cate-sub__item"><a class="cate-sub__link" href="#">Spoken English</a></li>
                            </ul>
                          </div>
                        </li>

                      </ul>
                    </div>
                  </li>

                  <li class="menu-main__item "><a class="menu-main__link " href="#" id="course">Study Material</a>
                    <div class="dropdown-catagories dropdown-catagories--menu">
                      <ul class="dropdown-catagories__list">
                        <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="categories.html">Test Series</a></li>
                        <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="course-listing.html">Publication</a></li>
                        <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="course-grid.html">E-Books</a></li>
                        <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="course-single.html">Video Course</a></li>
                        <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="course-detail.html">Online Live Classes</a></li>
                  
                      </ul>
                    </div>
                  </li>


                   <li class="menu-main__item "><a class="menu-main__link " href="#" id="course">Video Course</a></li>

                    <li class="menu-main__item "><a class="menu-main__link " href="#" id="course">Quiz</a></li>

                     <li class="menu-main__item "><a class="menu-main__link " href="#" id="course">Current Affairs</a></li>

                     <li class="menu-main__item "><a class="menu-main__link " href="#" id="course">Test Series</a></li>

                     <li class="menu-main__item "><a class="menu-main__link " href="#" id="course">Online Support</a></li>


                      </ul>




                    </div>
                  </li>
              </ul>


          </nav>
        </div>
      </div>
      <div class="header__mobile hidden-lg hidden-md">
        <div class="header-top">
          <div class="container">
              <div class="nav-right--notlogin nav-right--notlogin--mobile pull-right" >
              <div class="nav-right__notifications"><a class="nav-right__item" href="#"><i class="glyph-icon flaticon-shapes nav-right__item__icon"></i><span class="nav-right__item__notification">02</span></a><a class="nav-right__item" href="#"><i class="glyph-icon flaticon-commerce-1 nav-right__item__icon"></i><span class="nav-right__item__notification">02</span></a></div>
              <button class="form-search__button--mobile" type="submit" data-toggle="collapse" data-target="#form-search-mobile"><i class="glyph-icon flaticon-search form-search__icon"></i></button>
              <button class="button-default nav-right__become" type="submit">become an Instructor</button>

              <div class="nav-right__signin">
            <a class="nav-right__signin__link" href="login.html" >Sign in</a><span>|</span><a class="nav-right__signin__link" href="login.html" >sign up</a></div>

            </div>
            <form class="navbar-form form-search--mobile" id="form-search-mobile">
              <div class="container">
                <div class="form-search__input-group">
                  <input class="form-control form-search__input" type="text" placeholder="Search your course...">
                  <div class="form-search__btn-group">
                    <button class="btn form-search__button" type="submit"><i class="glyph-icon flaticon-search form-search__icon"></i></button>
                  </div>
                </div>
                <button class="dropdown-toggle form-search__button form-search__button--close" type="submit" data-toggle="collapse" data-target="#form-search-mobile"><i class="glyph-icon flaticon-access-denied form-search__icon"></i></button>
              </div>
            </form>
          </div>
        </div>


        <nav class="navbar" id="header-mobile" data-spy="affix" data-offset-top="75">

          <div class="container">
            <div class="categories--mobile pull-left"><a class="dropdown-toggle categories--mobile__buttonsm" id="menu-categories" data-toggle="collapse" data-target="#dropdown-categories"><i class="glyph-icon flaticon-signs-1 categories--mobile__icon"></i></a></div>
            <button class="navbar-toggle nav-icon pull-right collapsed visible-sm visible-xs" id="menu-hamberger" data-toggle="collapse" data-target="#menu-main"><span class="bar"></span></button>
            <div class="logo--mobile text-center"><a class="logo__link" href="http://swlabs.co/"><img class="logo__image" src="assets/img/logo/Logo-header.png" alt="Logo Educef"></a></div>
          </div>

          <div class="menu-mobile">
              <ul class="menu-mobile__list ">
                  <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">home</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                    <ul class="dropdown-menu dropdown-mobile">
                      <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="index-2.html">home 1</a></li>
                      <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="index-3.html">home 2</a></li>
                    </ul>
                  </li>
                  <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">course</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                    <ul class="dropdown-menu dropdown-mobile">
                      <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="categories.html">course categories</a></li>
                      <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="course-listing.html">course list</a></li>
                      <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="course-grid.html">course grid</a></li>
                      <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="course-single.html">course single</a></li>
                      <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="course-detail.html">course details</a></li>
                      <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="search-result.html">course search result</a></li>
                      <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="instructor-details.html">instructor details</a></li>
                    </ul>
                  </li>
                  <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">bundle</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                    <ul class="dropdown-menu dropdown-mobile">
                      <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="course-bundle.html">course bundle</a></li>
                      <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="bundle-details.html">course bundle details</a></li>
                    </ul>
                  </li>
                  <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">partner</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                    <ul class="dropdown-menu dropdown-mobile">
                      <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="partner-listing.html">partner list</a></li>
                      <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="partner-details.html">partner details</a></li>
                    </ul>
                  </li>
                  <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">blog</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                    <ul class="dropdown-menu dropdown-mobile">
                      <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="blog-grid.html">blog grid</a></li>
                      <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="blog-details-sidebar.html">blog details with sidebar</a></li>
                      <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="blog-details.html">blog details</a></li>
                    </ul>
                  </li>
                  <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">pages</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                    <ul class="dropdown-menu dropdown-mobile">
                      <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="pricing-table.html">pricing table</a></li>
                      <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="contact.html">contact</a></li>
                      <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="coming-soon.html">coming soon</a></li>
                      <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="404.html">404 page</a></li>
                    </ul>
                  </li>
                  <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">elements</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                    <ul class="dropdown-menu dropdown-mobile">
                      <li class="dropdown-submenu"><a class="dropdown-mobile__link" href="#">sub level 1</a><span class="glyph-icon flaticon-arrows-3 menu-mobile__icon"></span>
                        <ul class="dropdown-menu dropdown-mobile">
                          <li class="dropdown-mobile__item"><a class="dropdown-mobile__link" href="#">sub level 1.1</a></li>
                          <li class="dropdown-mobile__item"><a class="dropdown-mobile__link" href="#">sub level 1.2</a></li>
                        </ul>
                      </li>
                      <li class="dropdown-submenu"><a class="dropdown-mobile__link" href="#">sub level 2</a><span class="glyph-icon flaticon-arrows-3 menu-mobile__icon"></span>
                        <ul class="dropdown-menu dropdown-mobile">
                          <li class="dropdown-mobile__item"><a class="dropdown-mobile__link" href="#">sub level 2.1</a></li>
                          <li class="dropdown-mobile__item"><a class="dropdown-mobile__link" href="#">sub level 2.2</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
          </div>

          <div class="menu-mobile-dropdown menu-mobile--categories">
                <ul class="menu-mobile__list ">
                  <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">KG - GRADE 12</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                    <ul class="dropdown-menu dropdown-mobile">
                      <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Finance</a></li>
                      <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Industry</a></li>
                      <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Management</a></li>
                      <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Media</a></li>
                      <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Sales</a></li>
                    </ul>
                  </li>
                  <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">Design</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                    <ul class="dropdown-menu dropdown-mobile">
                      <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Design Thinking</a></li>
                      <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Fashion</a></li>
                    </ul>
                  </li>
                  <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">Development</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                    <ul class="dropdown-menu dropdown-mobile">
                      <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Databases</a></li>
                      <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Mobie Apps</a></li>
                    </ul>
                  </li>
                  <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">Heath &amp; Fitness</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                    <ul class="dropdown-menu dropdown-mobile">
                      <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Dance</a></li>
                      <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Fitness</a></li>
                    </ul>
                  </li>
                  <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">IT &amp; Software</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                    <ul class="dropdown-menu dropdown-mobile">
                      <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">AI &amp; Big Data</a></li>
                      <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Hardware</a></li>
                    </ul>
                  </li>
                  <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">Language</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                    <ul class="dropdown-menu dropdown-mobile">
                      <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Chinese</a></li>
                      <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">English</a></li>
                      <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">French</a></li>
                    </ul>
                  </li>
                  <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">Lifestyle</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                    <ul class="dropdown-menu dropdown-mobile">
                      <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Art &amp; Crafts</a></li>
                      <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Gaming</a></li>
                    </ul>
                  </li>
                  <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">Office Productivity</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                    <ul class="dropdown-menu dropdown-mobile">
                      <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Apple</a></li>
                      <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Google</a></li>
                      <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Oracle</a></li>
                    </ul>
                  </li>
                </ul>
          </div>
        </nav>
      </div>
     <div class="button-default btn-ontop" id="on-top"><span class="glyph-icon flaticon-arrows-5"></span></div>
    </header>

    <div class="modal fade signin-form" id="modal-signin" role="dialog">
      <div class="modal-dialog signin-form__dialog">
        <div class="signin-form__button-close hidden-lg hidden-md hidden-sm">
          <button class="close signin-form__button-close__btn" type="button" data-dismiss="modal">&times;</button>
        </div>
        <div class="signin-form__header"><a class="signin-form__header__logo" href="#"><img src="assets/img/logo/Logo-form.png" alt=""></a>
          <p class="signin-form__sub">Universal access to the world’s best education.</p>
        </div>
        <div class="modal-content signin-form__content">
          <div class="modal-body signin-form__body">

            <ul class="">
              <li class="active signin-form__tabs__items"><a class="signin-form__tabs__link" href="login.html">Sign In</a></li>
              <li class="signin-form__tabs__items"><a class="signin-form__tabs__link"  href="login.html">Sign Up</a></li>
            </ul>

            <div class="tab-content" style="background-color: #F5F5F5"> 
              <div class="tab-pane fade in active" id="sign-in">
                <h3 class="signin-form__body__title">Log In Your Account</h3>

                <p class="signin-form__body__sub"> Your student account is your portal to all things Educef: your classroom, projects, forums, career resources, and more!</p>

                <form class="signin-form__form" action="login_db.php" method="post">
                  <div class="signin-form__form__inputs">
                    <input class="input-item" type="text" placeholder="User Name" name="username" id="username">
                    <input class="input-item" type="password" placeholder="Password" name="password" id="password" >
                  </div>
                  <button class="btn-green list-link__btn">Sign In</button><a class="signin-form__link" href="#">Forgot your password?</a>
                </form>
                <div class="group-btn-socials">
                  <p class="group-btn-socials__sub">or sign in with one of these services</p>
                  <div class="btn-social btn-social--facebook"><i class="glyph-icon flaticon-social-1"></i><i>facebook</i></div>
                  <div class="btn-social btn-social--twitter"><i class="glyph-icon flaticon-twitter-logo-silhouette"></i><i>twitter</i></div>
                </div>
              </div>
              <div class="tab-pane fade" id="sign-up" >
                <h3 class="signin-form__body__title">Create Your Account</h3>
                <p class="signin-form__body__sub">Your student account is your portal to all things Educef: your classroom, projects, forums, career resources, and more!</p>
                <form class="signin-form__form" action="account_db.php?register=save" method="post" name="form" onSubmit="return check();" enctype="multipart/form-data">
                  <div class="signin-form__form__inputs">
                    <input class="input-item" type="text" placeholder="User name" name="username" required>
                    <input class="input-item" type="email" placeholder="Email" name="email" autocomplete="off" onKeyUp="livesearch('email','[^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$]')" onKeyDown="livesearch('email','[^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$]')" required>
                    <input class="input-item" type="text" placeholder="Mobile No." name="contact_no"maxlength="10" required>
                    <input class="input-item" type="password" placeholder="Password" name="password" required>
                    <input class="input-item" type="password" placeholder="Confirm Password" name="cpassword" required>
                  </div>
                  <button type="submit" class="btn-green list-link__btn">Sign Up </button>
                </form>
                <div class="group-btn-socials">
                  <p class="group-btn-socials__sub">or sign up with one of these services</p>
                  <div class="btn-social btn-social--facebook"><i class="glyph-icon flaticon-social-1"></i><i>facebook</i></div>
                  <div class="btn-social btn-social--twitter"><i class="glyph-icon flaticon-twitter-logo-silhouette"></i><i>twitter</i></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="signin-form__footer"><a class="signin-form__footer__link" href="#">Having trouble logging in?</a></div>
      </div>
    </div>


<script type="text/javascript">

  function livesearch(e,r)
      {
          var textfield= document.getElementById(e);
          var regx= new RegExp(r, 'g');
          textfield.value= textfield.value.replace(regx,'');
          
      }

  function check(){

    if(document.form.password.value!=document.form.cpassword.value)
      {
        alert("Confirm Password does not matched");
      document.form.cpassword.focus();
      return false;
      }
  }

</script>