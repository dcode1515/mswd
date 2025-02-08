<div class="container-fluid">


                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                       
                        <li class="nav-item">
                            <a href="{{route('barangay.dashboard')}}" class="nav-link menu-link" href="widgets.html">
                                <i class="ri-dashboard-2-line"></i> <span data-key="t-widgets">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('create.profile')}}" class="nav-link menu-link" href="widgets.html">
                                <i class="fas fa-user-plus"></i> <span data-key="t-widgets">Create Profile</span>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                                <i class="ri-apps-2-line"></i> <span data-key="t-apps">Barangay</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarApps">
                                <ul class="nav nav-sm flex-column">
                                    
                                    <li class="nav-item">
                                        <a href="{{route('all.records')}}" class="nav-link" data-key="t-chat"> All Records </a>
                                        <a href="{{route('britania.records')}}" class="nav-link" data-key="t-chat"> BRITANIA </a>
                                        <a href="{{route('buhisan.records')}}" class="nav-link" data-key="t-chat"> BUHISAN </a>
                                        <a href="{{route('buatong.records')}}" class="nav-link" data-key="t-chat"> BUATONG </a>
                                        <a href="{{route('hornasan.records')}}" class="nav-link" data-key="t-chat"> HORNASAN </a>
                                        <a href="{{route('janipaan.records')}}" class="nav-link" data-key="t-chat"> JANIPAAN </a>
                                        <a href="{{route('kauswagan.records')}}" class="nav-link" data-key="t-chat"> KAUSWAGAN </a>
                                        <a href="{{route('gata.records')}}" class="nav-link" data-key="t-chat"> GATA </a>
                                        <a href="{{route('otieza.records')}}" class="nav-link" data-key="t-chat"> OTIEZA </a>
                                        <a href="{{route('poblacion.records')}}" class="nav-link" data-key="t-chat"> POBLACION </a>
                                        <a href="{{route('pungtod.records')}}" class="nav-link" data-key="t-chat"> PUNGTOD </a>
                                        <a href="{{route('pongon.records')}}" class="nav-link" data-key="t-chat"> PONG-ON </a>
                                        <a href="{{route('salvacion.records')}}" class="nav-link" data-key="t-chat"> SALVACION </a>
                                        <a href="{{route('santonino.records')}}" class="nav-link" data-key="t-chat"> STO. NINO </a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                                <i class="ri-layout-3-line"></i> <span data-key="t-layouts">Other Functions</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarLayouts">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{route('is')}}" class="nav-link" data-key="t-horizontal">IN SCHOOL YOUTH</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('os')}}"  class="nav-link" data-key="t-detached">OUT OF SCHOOL YOUTH</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('category1')}}" class="nav-link" data-key="t-two-column">0-2 CATEGORY</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('category2')}}"  class="nav-link" data-key="t-hovered">3-4 CATEGORY</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('category3')}}"  class="nav-link" data-key="t-hovered">5-12 CATEGORY</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('category4')}}"  class="nav-link" data-key="t-hovered">13-18 CATEGORY</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a href="layouts-vertical-hovered.html" target="_blank" class="nav-link" data-key="t-hovered">ARCHIVED</a>
                                    </li> -->
                                    <li class="nav-item">
                                        <a href="{{route('reporting')}}"  class="nav-link" data-key="t-hovered">REPORTS</a>
                                    </li>
                                </ul>
                            </div>
                        </li> <!-- end Dashboard Menu -->

                        <!-- <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Reporting</span></li>

                       

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                                <i class="ri-pages-line"></i> <span data-key="t-pages">Pages</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarPages">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="pages-starter.html" class="nav-link" data-key="t-starter"> Starter </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#sidebarProfile" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProfile" data-key="t-profile"> Profile
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarProfile">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="pages-profile.html" class="nav-link" data-key="t-simple-page">
                                                        Simple Page </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="pages-profile-settings.html" class="nav-link" data-key="t-settings"> Settings </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages-team.html" class="nav-link" data-key="t-team"> Team </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages-timeline.html" class="nav-link" data-key="t-timeline"> Timeline </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages-faqs.html" class="nav-link" data-key="t-faqs"> FAQs </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages-pricing.html" class="nav-link" data-key="t-pricing"> Pricing </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages-gallery.html" class="nav-link" data-key="t-gallery"> Gallery </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages-maintenance.html" class="nav-link" data-key="t-maintenance"> Maintenance
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages-coming-soon.html" class="nav-link" data-key="t-coming-soon"> Coming Soon
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages-sitemap.html" class="nav-link" data-key="t-sitemap"> Sitemap </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages-search-results.html" class="nav-link" data-key="t-search-results"> Search Results </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages-privacy-policy.html" class="nav-link" data-key="t-privacy-policy">Privacy Policy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages-term-conditions.html" class="nav-link" data-key="t-term-conditions">Term & Conditions</a>
                                    </li>
                                </ul>
                            </div>
                        </li> -->

                       

                     
                        

                      
                       

                        

                      

                        
                    </ul>
                </div>