<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> CMS | Sub Page Edit </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="../../assets/css/vendor.css">
        <!-- Theme initialization -->
        <script>
            var themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
            {};
            var themeName = themeSettings.themeName || '';
            if (themeName)
            {
                document.write('<link rel="stylesheet" id="theme-style" href="../../assets/css/app-' + themeName + '.css">');
            }
            else
            {
                document.write('<link rel="stylesheet" id="theme-style" href="../../assets/css/app.css">');
            }
        </script>
    </head>

    <body>
        <div class="main-wrapper">
            <div class="app" id="app">
                <header class="header">
                    <div class="header-block header-block-collapse hidden-lg-up"> <button class="collapse-btn" id="sidebar-collapse-btn">
                <i class="fa fa-bars"></i>
            </button> </div>
                    <div class="header-block header-block-search hidden-sm-down">
                        <form role="search">
                            <div class="input-container"> <i class="fa fa-search"></i> <input type="search" placeholder="Search">
                                <div class="underline"></div>
                            </div>
                        </form>
                    </div>
                    <div class="header-block header-block-buttons">
                        <a href="#" class="btn btn-oval btn-sm rounded-s header-btn"> <i class="fa fa-home"></i> DASHBOARD - HOME </a>
                    </div>
                    <div class="header-block header-block-nav">
                        <ul class="nav-profile">
                            <li class="notifications new">
                                <a href="" data-toggle="dropdown"> <i class="fa fa-bell-o"></i> <sup>
                      <span class="counter">0</span>
                    </sup> </a>
                                <div class="dropdown-menu notifications-dropdown-menu">
                                    <ul class="notifications-container">
                                        <li>
                                            <a href="" class="notification-item">
                                                <div class="img-col">
                                                    <div class="img" style="background-image: url('assets/faces/3.jpg')"></div>
                                                </div>
                                                <div class="body-col">
                                                    <p> <span class="accent">Test Name</span> pushed new commit: <span class="accent">Test Comment</span>. </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="notification-item">
                                                <div class="img-col">
                                                    <div class="img" style="background-image: url('assets/faces/5.jpg')"></div>
                                                </div>
                                                <div class="body-col">
                                                    <p> <span class="accent">Test Name</span> pushed new commit: <span class="accent">Test Comment</span>. </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="notification-item">
                                                <div class="img-col">
                                                    <div class="img" style="background-image: url('assets/faces/8.jpg')"></div>
                                                </div>
                                                <div class="body-col">
                                                    <p> <span class="accent">Test Name</span> pushed new commit: <span class="accent">Test Comment</span>. </p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <footer>
                                        <ul>
                                            <li> <a href="">
                            View All
                          </a> </li>
                                        </ul>
                                    </footer>
                                </div>
                            </li>
                            <li class="profile dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <div class="img" style="background-image: url('https://avatars3.githubusercontent.com/u/3959008?v=3&s=40')"> </div> <span class="name">
                      Zubair Khan
                    </span> </a>
                                <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <a class="dropdown-item" href="#"> <i class="fa fa-user icon"></i> Profile </a>
                                    <a class="dropdown-item" href="#"> <i class="fa fa-bell icon"></i> Notifications </a>
                                    <a class="dropdown-item" href="#"> <i class="fa fa-gear icon"></i> Settings </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="login.html"> <i class="fa fa-power-off icon"></i> Logout </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </header>
                <aside class="sidebar">
                    <div class="sidebar-container">
                        <div class="sidebar-header">
                            <div class="brand">
                                Designist CMS </div>
                        </div>
                        <nav class="menu">
                            <ul class="nav metismenu" id="sidebar-menu">
                                <li>
                                    <a href="index.html"> <i class="fa fa-home"></i> Dashboard </a>
                                </li>
                                <li>
                                    <a href=""> <i class="fa fa-th-large"></i> Pages <i class="fa arrow"></i> </a>
                                    <ul>
                                        <li> <a href="list_page">
                                    View Page
                                </a> </li>
                                        <li> <a href="edit_page">
                                    Add Page
                                </a> </li>
                                    </ul>
                                </li>
                                 <li class="active">
                                    <a href=""> <i class="fa fa-file-text-o"></i> Sub Pages <i class="fa arrow"></i> </a>
                                    <ul>
                                        <li> <a href="list_subpage">
                                    View Sub Page
                                </a> </li>
                                        <li> <a href="edit_subpage">
                                    Add Sub Page
                                </a> </li>
                                    </ul>
                                </li>
                                <!-- <li>
                                    <a href=""> <i class="fa fa-bar-chart"></i> Menus <i class="fa arrow"></i> </a>
                                    <ul>
                                        <li> <a href="list_menu">
                                    Menus List
                                </a> </li>
                                        <li> <a href="edit_menu">
                                    Menus Editor
                                </a> </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href=""> <i class="fa fa-table"></i> Sub Menus <i class="fa arrow"></i> </a>
                                    <ul>
                                        <li> <a href="list_submenu">
                                    Sub Menus List
                                </a> </li>
                                        <li> <a href="edit_submenu">
                                    Sub Menus Editor
                                </a> </li>
                                    </ul>
                                </li> -->


                                <li>
                                    <a href=""> <i class="fa fa-gear"></i> Settings <i class="fa arrow"></i> </a>
                                    <ul>
                                        <li> <a href="login.html">
                                    Login
                                </a> </li>
                                        <li> <a href="signup.html">
                                    Sign Up
                                </a> </li>
                                        <li> <a href="reset.html">
                                    Reset
                                </a> </li>
                                        <li> <a href="error-404.html">
                                    Error 404 App
                                </a> </li>
                                        <li> <a href="error-404-alt.html">
                                    Error 404 Global
                                </a> </li>
                                        <li> <a href="error-500.html">
                                    Error 500 App
                                </a> </li>
                                        <li> <a href="error-500-alt.html">
                                    Error 500 Global
                                </a> </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <footer class="sidebar-footer">
                        <ul class="nav metismenu" id="customize-menu">
                            <li>
                                <ul>
                                    <li class="customize">
                                        <div class="customize-item">
                                            <div class="row customize-header">
                                                <div class="col-xs-4"> </div>
                                                <div class="col-xs-4"> <label class="title">fixed</label> </div>
                                                <div class="col-xs-4"> <label class="title">static</label> </div>
                                            </div>
                                            <div class="row hidden-md-down">
                                                <div class="col-xs-4"> <label class="title">Sidebar:</label> </div>
                                                <div class="col-xs-4"> <label>
                                            <input class="radio" type="radio" name="sidebarPosition" value="sidebar-fixed" >
                                            <span></span>
                                        </label> </div>
                                                <div class="col-xs-4"> <label>
                                            <input class="radio" type="radio" name="sidebarPosition" value="">
                                            <span></span>
                                        </label> </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-4"> <label class="title">Header:</label> </div>
                                                <div class="col-xs-4"> <label>
                                            <input class="radio" type="radio" name="headerPosition" value="header-fixed">
                                            <span></span>
                                        </label> </div>
                                                <div class="col-xs-4"> <label>
                                            <input class="radio" type="radio" name="headerPosition" value="">
                                            <span></span>
                                        </label> </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-4"> <label class="title">Footer:</label> </div>
                                                <div class="col-xs-4"> <label>
                                            <input class="radio" type="radio" name="footerPosition" value="footer-fixed">
                                            <span></span>
                                        </label> </div>
                                                <div class="col-xs-4"> <label>
                                            <input class="radio" type="radio" name="footerPosition" value="">
                                            <span></span>
                                        </label> </div>
                                            </div>
                                        </div>
                                        <div class="customize-item">
                                            <ul class="customize-colors">
                                                <li> <span class="color-item color-red" data-theme="red"></span> </li>
                                                <li> <span class="color-item color-orange" data-theme="orange"></span> </li>
                                                <li> <span class="color-item color-green" data-theme="green"></span> </li>
                                                <li> <span class="color-item color-seagreen" data-theme="seagreen"></span> </li>
                                                <li> <span class="color-item color-blue active" data-theme=""></span> </li>
                                                <li> <span class="color-item color-purple" data-theme="purple"></span> </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                                <a href=""> <i class="fa fa-cog"></i> Customize </a>
                            </li>
                        </ul>
                    </footer>
                </aside>
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <article class="content responsive-tables-page">
                    <div class="title-block">
                        <h1 class="title">
		Update Sub Page Details
	</h1>
                        <p class="title-description"> Enter the new details for the sub page or update the existing one </p>
                    </div>
                    <section class="section">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title">
						  Sub Page Information
						</h3> </div>
                                        <section class="section">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">

                                        <div class="card-title-block">

                                            <?php if (isset($message)) { ?>
                                                <div class="row" id="alertMsg">
                                                    <div class="col-md-6">
                                                        <center class="alert alert-success">
                                                            <p>
                                                                <?php echo $message; ?>
                                                            </p>
                                                        </center>
                                                    </div>
                                                </div>
                                            <?php } ?>

                                            <section class="example">
                                                <div class="container">
                                                    <div class="row">

                                                        <?php echo form_open('main/addSubPage'); ?>
                                                        <?php echo form_label('Page Name :'); ?>
                                                        <?php echo form_error('dname'); ?><br />
                                                        <?php echo form_input(array('id' => 'page_name', 'name' => 'page_name', 'placeholder' => 'Page Name', 'class' => 'form-control')); ?><br />
                                                        <?php echo form_label('Page Slug :'); ?> <?php echo form_error('dslug'); ?><br />
                                                        <?php echo form_input(array('id' => 'page_slug', 'name' => 'page_slug', 'placeholder' => 'Page Slug', 'class' => 'form-control')); ?><br />

                                                        <?php echo form_label('Page URL :'); ?> <?php echo form_error('durl'); ?><br />
                                                        <?php echo form_input(array('id' => 'page_url', 'name' => 'page_url', 'placeholder' => 'Page URL', 'class' => 'form-control')); ?><br />

                                                        <?php echo form_label('Page Excerpt :'); ?> <?php echo form_error('dexcerpt'); ?><br />
                                                        <?php echo form_input(array('id' => 'page_excerpt', 'name' => 'page_excerpt', 'placeholder' => 'Page Excerpt', 'class' => 'form-control')); ?><br />

                                                        <?php echo form_label('Page Content :'); ?> <?php echo form_error('dcontent'); ?><br />
                                                        <?php echo form_textarea(array('id' => 'page_content', 'name' => 'page_content', 'placeholder' => 'Page Content', 'class' => 'form-control')); ?><br />

                                                        <?php echo form_submit(array('id' => 'submit', 'value' => 'Submit', 'class' => 'btn btn-default btn-success')); ?>
                                                        <?php echo form_close(); ?>

                                                    </div>
                                                </div>
                                            </section>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </article>
                <footer class="footer">

                    <div class="footer-block author">
                        <ul>
                            <li> Created by <a href="https://designist.io">Designist</a> </li>
                            <li> <a href="https://designist.io/contact">Get in touch</a> </li>
                        </ul>
                    </div>
                </footer>
                <div class="modal fade" id="modal-media">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
    					<span class="sr-only">Close</span>
    				</button>
                                <h4 class="modal-title">Media Library</h4> </div>
                            <div class="modal-body modal-tab-container">
                                <ul class="nav nav-tabs modal-tabs" role="tablist">
                                    <li class="nav-item"> <a class="nav-link" href="#gallery" data-toggle="tab" role="tab">Gallery</a> </li>
                                    <li class="nav-item"> <a class="nav-link active" href="#upload" data-toggle="tab" role="tab">Upload</a> </li>
                                </ul>
                                <div class="tab-content modal-tab-content">
                                    <div class="tab-pane fade" id="gallery" role="tabpanel">
                                        <div class="images-container">
                                            <div class="row"> </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade active in" id="upload" role="tabpanel">
                                        <div class="upload-container">
                                            <div id="dropzone">
                                                <form action="/" method="POST" enctype="multipart/form-data" class="dropzone needsclick dz-clickable" id="demo-upload">
                                                    <div class="dz-message-block">
                                                        <div class="dz-message needsclick"> Drop files here or click to upload. </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer"> <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> <button type="button" class="btn btn-primary">Insert Selected</button> </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
                <div class="modal fade" id="confirm-modal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
    				</button>
                                <h4 class="modal-title"><i class="fa fa-warning"></i> Alert</h4> </div>
                            <div class="modal-body">
                                <p>Are you sure want to do this?</p>
                            </div>
                            <div class="modal-footer"> <button type="button" class="btn btn-primary" data-dismiss="modal">Yes</button> <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button> </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
            </div>
        </div>
        <!-- Reference block for JS -->
        <div class="ref" id="ref">
            <div class="color-primary"></div>
            <div class="chart">
                <div class="color-primary"></div>
                <div class="color-secondary"></div>
            </div>
        </div>
        <script src="../../assets/js/vendor.js"></script>
        <script src="../../assets/js/app.js"></script>
    </body>

</html>