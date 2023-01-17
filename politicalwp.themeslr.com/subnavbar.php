<nav class="navbar navbar-default" id="theme-main-head">
                <div class="container">
                    <div class="row">
                        <div class="navbar-header col-md-3"> <button type="button" class="navbar-toggle collapsed"
                                data-toggle="collapse" data-target="#navbar" aria-expanded="false"
                                aria-controls="navbar"> <span class="sr-only"></span> <span class="icon-bar"></span>
                                <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                            <h1 class="logo"> <a href="../index.php"> <img
                                        src="../wp-content/themes/politicalwp/images/theme_logo_dark.png"
                                        alt="SKM-logo" /> </a></h1>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse col-md-9">
                            <ul class="menu nav navbar-nav nav-effect nav-menu pull-right">
                                <li id="menu-item-6286"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6286 "><a
                                        href="../index.php">Home</a></li>
                                <li id="menu-item-6286"
                                    class="menu-item menu-item-type-post_type menu-item-object-page mega1column menu-item-6286">
                                    <a href="#">Goals</a>
                                    <div class="cf-mega-menu sub-menu">
                                        <div data-vc-full-width="true" data-vc-full-width-init="false"
                                            class="vc_row wpb_row vc_row-fluid no-margin vc_custom_1279687900012">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="vc_empty_space" style="height: 20px"><span
                                                                class="vc_empty_space_inner"></span></div>
                                                        <div class="mt-icon-list-item"><a href="../what-we-fight-for/index.php">
                                                                <p class="mt-icon-list-text"
                                                                    style="font-size: 12px; color: #232331">What We
                                                                    Fight for</p>
                                                            </a></div>
                                                        <div class="mt-icon-list-item"><a
                                                                href="../goals-achieved/index.php">
                                                                <p class="mt-icon-list-text"
                                                                    style="font-size: 12px; color: #232331">Goals
                                                                    Achieved</p>
                                                            </a></div>
                                                        <div class="mt-icon-list-item"><a
                                                                href="../goals-set/index.php">
                                                                <p class="mt-icon-list-text"
                                                                    style="font-size: 12px; color: #232331">Goals Set
                                                                </p>
                                                            </a></div>
                                                        <div class="vc_empty_space" style="height: 20px"><span
                                                                class="vc_empty_space_inner"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_row-full-width vc_clearfix"></div>
                                    </div>
                                </li>
                                <li id="menu-item-6286"
                                    class="menu-item menu-item-type-post_type menu-item-object-page mega1column menu-item-6286">
                                    <a href="#">About Us</a>
                                    <div class="cf-mega-menu sub-menu">
                                        <div data-vc-full-width="true" data-vc-full-width-init="false"
                                            class="vc_row wpb_row vc_row-fluid no-margin vc_custom_1279687900012">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="vc_empty_space" style="height: 20px"><span
                                                                class="vc_empty_space_inner"></span></div>
                                                        <div class="mt-icon-list-item"><a href="../about-us/index.php">
                                                                <p class="mt-icon-list-text"
                                                                    style="font-size: 12px; color: #232331">About the
                                                                    Party</p>
                                                            </a></div>
                                                            <?php 
							if (isset($_SESSION['isLoggedIn']) == true && isset($_SESSION['userDegree']) == true) {
																if ($_SESSION['userDegree'] == 0 || $_SESSION['userDegree'] == 1) {
															?>
                                                        <div class="mt-icon-list-item"><a
                                                                href="../cabinet-members/index.php">
                                                                <p class="mt-icon-list-text"
                                                                    style="font-size: 12px; color: #232331">Party
                                                                    Members
                                                                </p>
                                                            </a></div>
                                                            <?php
                                                                }
                                                            }

                                                            ?>
                                                        <div class="mt-icon-list-item"><a
                                                                href="../clc-body/index.php">
                                                                <p class="mt-icon-list-text"
                                                                    style="font-size: 12px; color: #232331">CLC body</p>
                                                            </a></div>
                                                        <div class="mt-icon-list-item"><a
                                                                href="../blc-body/index.php">
                                                                <p class="mt-icon-list-text"
                                                                    style="font-size: 12px; color: #232331">BLC body
                                                                </p>
                                                            </a></div>
                                                        <div class="mt-icon-list-item"><a
                                                                href="../wlc-body/index.php">
                                                                <p class="mt-icon-list-text"
                                                                    style="font-size: 12px; color: #232331">WLC body
                                                                </p>
                                                            </a></div>
                                                        <div class="vc_empty_space" style="height: 20px"><span
                                                                class="vc_empty_space_inner"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_row-full-width vc_clearfix"></div>
                                    </div>
                                </li>
                                <li id="menu-item-6286"
                                    class="menu-item menu-item-type-post_type menu-item-object-page mega1column menu-item-6286">
                                    <a href="#">Party Wings</a>
                                    <div class="cf-mega-menu sub-menu">
                                        <div data-vc-full-width="true" data-vc-full-width-init="false"
                                            class="vc_row wpb_row vc_row-fluid no-margin vc_custom_1279687900012">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="vc_empty_space" style="height: 20px"><span
                                                                class="vc_empty_space_inner"></span></div>
                                                        <div class="mt-icon-list-item"><a href="#">
                                                                <p class="mt-icon-list-text"
                                                                    style="font-size: 12px; color: #232331">Youth Wing
                                                                </p>
                                                            </a></div>
                                                        <div class="mt-icon-list-item"><a href="../nari-wing/index.php">
                                                                <p class="mt-icon-list-text"
                                                                    style="font-size: 12px; color: #232331">Nari Wing
                                                                </p>
                                                            </a></div>
                                                        <div class="mt-icon-list-item"><a
                                                                href="../student-wing/index.php">
                                                                <p class="mt-icon-list-text"
                                                                    style="font-size: 12px; color: #232331">Student wing
                                                                </p>
                                                            </a></div>
                                                        <div class="vc_empty_space" style="height: 20px"><span
                                                                class="vc_empty_space_inner"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_row-full-width vc_clearfix"></div>
                                    </div>
                                </li>
                                <li id="menu-item-6286"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6286">
                                    <a href="../constituencies/index.php">Constituencies</a>
                                </li>
                                <li id="menu-item-6286"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6286"><a
                                        href="../gallery/party-gallery/index.php">Gallery</a></li>
                                        <!--  -->
										<?php
											if (isset($_SESSION['isLoggedIn']) == true && isset($_SESSION['userDegree']) == true) {
												if ($_SESSION['userDegree'] == 0 || $_SESSION['userDegree'] == 1) {
											?>
											<li id="menu-item-6286"
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6286"><a
										href="../event-form/index.php">Add events</a></li>
											<?php
												}
											}

											?>


										<!--  -->
                                     <?php
                            if (isset($_SESSION['isLoggedIn']) == true && isset($_SESSION['userDegree']) == true) {
								?>
                                        <li id="menu-item-6286"
                                    class="menu-item menu-item-type-post_type menu-item-object-page mega1column menu-item-6286">
                                    <a href="#">Settings</a>
                                    <div class="cf-mega-menu sub-menu">
                                        <div data-vc-full-width="true" data-vc-full-width-init="false"
                                            class="vc_row wpb_row vc_row-fluid no-margin vc_custom_1279687900012">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="vc_empty_space" style="height: 20px"><span
                                                                class="vc_empty_space_inner"></span></div>
                                                                <?php
                                                                if ($_SESSION['userDegree'] == 0 || $_SESSION['userDegree'] == 1) {
                                                                    ?>
                                                                     <div class="mt-icon-list-item"><a
                                                                href="../news-form/index.php">
                                                                <p class="mt-icon-list-text"
                                                                    style="font-size: 12px; color: #232331">Add News
                                                                </p>
                                                            </a></div>

                                                                    <?php
                                                                }

                                                                ?>
                                                       
                                                       <?php
                                                                if ($_SESSION['userDegree'] == 0 || $_SESSION['userDegree'] == 1 || $_SESSION['userDegree'] == 2) {
                                                                    ?>
                                                                     <div class="mt-icon-list-item"><a
                                                                href="../member/index.php">
                                                                <p class="mt-icon-list-text"
                                                                    style="font-size: 12px; color: #232331">Member List
                                                                </p>
                                                            </a></div>

                                                                    <?php
                                                                }

                                                                ?>

                                                                
                                                            
                                                            <?php
															if ($_SESSION['userDegree'] == 0 || $_SESSION['userDegree'] == 2) {
                                                            
                                                            ?>
                                                        <div class="mt-icon-list-item"><a
                                                        
                                                        href="<?php echo ($_SESSION['userDegree'] == 0 || $_SESSION['userDegree'] == 2)? "../voter-registeration/index.php": ""; ?>">
                                                               
                                                                <p class="mt-icon-list-text"
                                                                    style="font-size: 12px; color: #232331">Add Member
                                                                </p>
                                                            </a></div>
                                                            <?php
                                                            }

                                                            ?>
                                                        <div class="vc_empty_space" style="height: 20px"><span
                                                                class="vc_empty_space_inner"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_row-full-width vc_clearfix"></div>
                                    </div>
                                </li>

                                <?php
                            }
                                ?>
                                
                                <?php
										if (isset($_SESSION['isLoggedIn']) == true && isset($_SESSION['userDegree']) == true) {
												?>

									
									<li id="menu-item-6286"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6286"><a
                                        href="../logout/logout.php">
                                        <span class="login-logout-button">Logout</span>
                                    </a></li>

												<?php
										} else {
											?>
									<li id="menu-item-6286"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6286"><a
                                        href="../login.php">
                                        <span class="login-logout-button">Login</span>
                                    </a></li>

<?php
											
										}
									?>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>