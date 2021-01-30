<!--

=========================================================
* Volt - Bootstrap 5 Admin Dashboard
=========================================================

* Product Page: https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard
* Copyright 2020 Themesberg (https://www.themesberg.com)

* Designed and coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Please contact us to request a removal.

-->
<!DOCTYPE html>
<html lang="en">

<head> 
    @@include('./_head.html', {
        "path": ".",
        "title": "Volt - Free Bootstrap 5 Admin Dashboard"
    })
</head>

<body>
    @@include('./_navigation.html', {
        "path": ".",
        "classes": "navbar-dark"
    })
    <main>

        @@include('./_preloader.html', {
            "path": "."
        })

        <!-- Hero -->
        <section class="section-header pb-9 pb-lg-12 bg-primary text-white">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <img class="navbar-brand-dark mb-4" src="./assets/img/brand/light.svg" height="120" alt="Logo light">
                        <h1 class="display-1">Volt</h1>
                        <div class="mb-5">
                            <h2 class="h3 text-muted mr-3">Free Bootstrap 5 Dashboard</h2>
                        </div>
                        <!-- Button Modal -->
                        <div class="d-flex justify-content-center align-items-end flex-wrap mb-6">
                            <a href="./pages/dashboard/dashboard.html" class="btn btn-secondary text-dark mr-4 mb-3 mb-lg-0"><span class="fas fa-chart-line mr-2 d-none d-sm-inline"></span> Dashboard Demo</a>
                            <div class="mb-3 mb-lg-0">
                                <a class="github-button" href="https://github.com/themesberg/volt-bootstrap-5-dashboard" data-color-scheme="no-preference: dark; light: light; dark: light;" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star themesberg/volt-bootstrap-5-dashboard on GitHub">Star</a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center flex-column mb-6">
                            <a href="https://themesberg.com" target="_blank">
                                <img src="./assets/img/themesberg.svg" class="d-block mx-auto mb-3" height="25" width="25" alt="Themesberg Logo">
                                <span class="text-muted font-small">A Themesberg production</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <figure class="position-absolute bottom-0 left-0 w-100 d-none d-md-block mb-n2"><svg class="fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 185.4"><path d="M3000,0v185.4H0V0c496.4,115.6,996.4,173.4,1500,173.4S2503.6,115.6,3000,0z"></path></svg></figure>       
        </section>
        <div class="section pt-0">
            <div class="container mt-n10 mt-lg-n12 z-2">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <img src="./assets/img/mockup-presentation.png" alt="Mockup presentation">
                    </div>
                </div>
            </div>
        </div>
        <section class="section section-sm pt-0">
            <div class="container">
                <div class="row justify-content-center mb-5 mb-lg-6">
                    <div class="col-12 text-center">
                        <h2 class="h1 px-lg-5">10 hand-crafted pages</h2>
                        <p class="lead px-lg-10">Every page from Volt has been carefully built to provide all the necessary pages your startup will require</p>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-6 mb-5">
                        <a href="./pages/dashboard/dashboard.html" class="page-preview page-preview-lg scale-up-hover-2">
                            <img class="shadow-lg rounded scale" src="./assets/img/pages/overview.jpg" alt="Dashboard page preview">
                            <div class="text-center show-on-hover">
                                <h6 class="m-0 text-center text-white">Overview <i class="fas fa-external-link-alt ml-2"></i></h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 mb-5">
                        <a href="./pages/transactions.html" class="page-preview page-preview-lg scale-up-hover-2">
                            <img class="shadow-lg rounded scale" src="./assets/img/pages/transactions.jpg" alt="Transactions page preview">
                            <div class="text-center show-on-hover">
                                <h6 class="m-0 text-center text-white">Transactions <i class="fas fa-external-link-alt ml-2"></i></h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 mb-5">
                        <a href="./pages/settings.html" class="page-preview page-preview-lg scale-up-hover-2">
                            <img class="shadow-lg rounded scale" src="./assets/img/pages/settings.jpg" alt="Settings page preview">
                            <div class="text-center show-on-hover">
                                <h6 class="m-0 text-center text-white">Settings <i class="fas fa-external-link-alt ml-2"></i></h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 mb-5">
                        <a href="./pages/examples/sign-in.html" class="page-preview page-preview-lg scale-up-hover-2">
                            <img class="shadow-lg rounded scale" src="./assets/img/pages/sign-in.jpg" alt="Sign In page preview">
                            <div class="text-center show-on-hover">
                                <h6 class="m-0 text-center text-white">Sign In <i class="fas fa-external-link-alt ml-2"></i></h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 mb-5">
                        <a href="./pages/examples/sign-up.html" class="page-preview page-preview-lg scale-up-hover-2">
                            <img class="shadow-lg rounded scale" src="./assets/img/pages/sign-up.jpg" alt="Sign Up page preview">
                            <div class="text-center show-on-hover">
                                <h6 class="m-0 text-center text-white">Sign Up <i class="fas fa-external-link-alt ml-2"></i></h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 mb-5">
                        <a href="./pages/examples/lock.html" class="page-preview page-preview-lg scale-up-hover-2">
                            <img class="shadow-lg rounded scale" src="./assets/img/pages/lock.jpg" alt="Lock page preview">
                            <div class="text-center show-on-hover">
                                <h6 class="m-0 text-center text-white">Sign Up <i class="fas fa-external-link-alt ml-2"></i></h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 mb-5">
                        <a href="./pages/examples/forgot-password.html" class="page-preview page-preview-lg scale-up-hover-2">
                            <img class="shadow-lg rounded scale" src="./assets/img/pages/forgot-password.jpg" alt="Forgot password preview">
                            <div class="text-center show-on-hover">
                                <h6 class="m-0 text-center text-white">Forgot password <i class="fas fa-external-link-alt ml-2"></i></h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 mb-5">
                        <a href="./pages/examples/reset-password.html" class="page-preview page-preview-lg scale-up-hover-2">
                            <img class="shadow-lg rounded scale" src="./assets/img/pages/reset-password.jpg" alt="Reset password preview">
                            <div class="text-center show-on-hover">
                                <h6 class="m-0 text-center text-white">Reset password <i class="fas fa-external-link-alt ml-2"></i></h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 mb-5">
                        <a href="./pages/examples/404.html" class="page-preview page-preview-lg scale-up-hover-2">
                            <img class="shadow-lg rounded scale" src="./assets/img/pages/404.jpg" alt="404 error preview">
                            <div class="text-center show-on-hover">
                                <h6 class="m-0 text-center text-white">404 <i class="fas fa-external-link-alt ml-2"></i></h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 mb-5">
                        <a href="./pages/examples/500.html" class="page-preview page-preview-lg scale-up-hover-2">
                            <img class="shadow-lg rounded scale" src="./assets/img/pages/500.jpg" alt="500 error preview">
                            <div class="text-center show-on-hover">
                                <h6 class="m-0 text-center text-white">500 <i class="fas fa-external-link-alt ml-2"></i></h6>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-6 col-md-3 text-center mb-4">
                        <div class="icon icon-shape icon-lg bg-white shadow-lg border-light rounded-circle icon-secondary mb-4">
                            <span class="fas fa-pager"></span>
                        </div>
                        <h3 class="font-weight-bolder">20</h3>
                        <p class="text-gray">Dashboard Pages</p>
                    </div>
                    <div class="col-6 col-md-3 text-center mb-4">
                        <div class="icon icon-shape icon-lg bg-white shadow-lg border-light rounded-circle icon-secondary mb-4">
                            <span class="fas fa-puzzle-piece"></span>
                        </div>
                        <h3 class="font-weight-bolder">800+</h3>
                        <p class="text-gray">Premium Components</p>
                    </div>
                    <div class="col-6 col-md-3 text-center">
                        <div class="icon icon-shape icon-lg bg-white shadow-lg border-light rounded-circle icon-secondary mb-4">
                            <span class="fab fa-sass"></span>
                        </div>
                        <h3 class="font-weight-bolder">Workflow</h3>
                        <p class="text-gray">Sass & Gulp</p>
                    </div>
                    <div class="col-6 col-md-3 text-center">
                        <div class="icon icon-shape icon-lg bg-white shadow-lg border-light rounded-circle icon-secondary mb-4">
                            <span class="fab fa-js-square"></span>
                        </div>
                        <h3 class="font-weight-bolder">Vanilla</h3>
                        <p class="text-gray">Javascript</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-lg bg-primary text-white">
            <div class="container">
                <div class="row justify-content-center mb-5 mb-lg-6">
                    <div class="col-12 text-center">
                        <h2 class="h1 px-lg-5">Awesome Features</h2>
                        <p class="lead px-lg-8">You get all Bootstrap components fully customized. Besides, you receive numerous plugins out of the box and ready to use.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card bg-white shadow-soft text-primary rounded mb-4">
                            <div class="px-3 px-lg-4 py-5 text-center">
                                <span class="icon icon-lg mb-4"><span class="fab fa-bootstrap"></span></span>
                                <h5 class="font-weight-bold text-primary">Bootstrap 5</h5>
                                <p>Built with the most popular CSS Framework</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card bg-white shadow-soft text-primary rounded mb-4">
                            <div class="px-3 px-lg-4 py-5 text-center">
                                <span class="icon icon-lg mb-4"><span class="fab fa-sass"></span></span>
                                <h5 class="font-weight-bold text-primary">Sass</h5>
                                <p>Variables and mixins to empower development</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card bg-white shadow-soft text-primary rounded mb-4">
                            <div class="px-3 px-lg-4 py-5 text-center">
                                <span class="icon icon-lg mb-4"><span class="fas fa-mobile-alt"></span></span>
                                <h5 class="font-weight-bold text-primary">Responsive</h5>
                                <p>All pages and components are 100% responsive</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card bg-white shadow-soft text-primary rounded mb-4">
                            <div class="px-3 px-lg-4 py-5 text-center">
                                <span class="icon icon-lg mb-4"><span class="fab fa-gulp"></span></span>
                                <h5 class="font-weight-bold text-primary">Gulp</h5>
                                <p>Gulp & BrowserSync for a flawless workflow</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card bg-white shadow-soft text-primary rounded mb-4">
                            <div class="px-3 px-lg-4 py-5 text-center">
                                <span class="icon icon-lg mb-4"><span class="far fa-images"></span></span>
                                <h5 class="font-weight-bold text-primary">Creative rights</h5>
                                <p>All images, icons and fonts are licensed & free to use</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card bg-white shadow-soft text-primary rounded mb-4">
                            <div class="px-3 px-lg-4 py-5 text-center">
                                <span class="icon icon-lg mb-4"><span class="far fa-file-alt"></span></span>
                                <h5 class="font-weight-bold text-primary">Documentation</h5>
                                <p>Everything that comes with Volt is well documented</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card bg-white shadow-soft text-primary rounded mb-4">
                            <div class="px-3 px-lg-4 py-5 text-center">
                                <span class="icon icon-lg mb-4"><span class="fab fa-js-square"></span></span>
                                <h5 class="font-weight-bold text-primary">Vanilla JS</h5>
                                <p>jQuery is not a required dependency for Volt</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card bg-white shadow-soft text-primary rounded mb-4">
                            <div class="px-3 px-lg-4 py-5 text-center">
                                <span class="icon icon-lg mb-4"><span class="fas fa-pen-fancy"></span></span>
                                <h5 class="font-weight-bold text-primary">Design</h5>
                                <p>Crafted by professional UI/UX designers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-lg line-bottom-soft">
            <div class="container">
                <div class="row justify-content-center mb-5 mb-lg-6">
                    <div class="col-12 text-center">
                        <h2 class="h1 px-lg-5">What's inside?</h2>
                        <p class="lead px-lg-8">We have carefully crafted the perfect folder structure to ensure that finding the files you're looking for are easily reachable and well organized.</p>
                    </div>
                </div>
                <div class="row d-flex align-items-center">
                    <div class="col-12 col-lg-6 mb-4">
                        <div class="d-none d-lg-block mt-5">
                            <h4>You need only HTML, CSS and Javascript?</h4>
                            <p class="lead mb-4">Don't worry, we got you covered. We have a folder called <code class="text-danger">html&css</code> which includes only the basic HTML5, CSS3 and Javascript technologies.</p>
                            <a href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/getting-started/file-structure/" target="_blank" class="btn btn-md btn-secondary text-dark"><i class="fas fa-book mr-2"></i> Docs v1.0</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 order-lg-first d-flex justify-content-center">
                        <ul class="d-block fmw-100 list-style-none folder-structure">
                            <li data-toggle="tooltip" data-placement="left" title="Main folder that you will be working with"><i class="fas fa-folder mr-2"></i>src</li>
                            <li>
                                <ul class="list-style-none pl-4">
                                    <li data-toggle="tooltip" data-placement="left" title="CSS, Images, Fonts and Javascript"><i class="fas fa-folder mr-2"></i> assets</li>
                                    <li data-toggle="tooltip" data-placement="left" title="HTML templates"><i class="fas fa-folder mr-2"></i> pages</li>
                                    <li data-toggle="tooltip" data-placement="left" title="Partials are HTML snippets that are included in multiple pages, such as the menu or footer"><i class="fas fa-folder mr-2"></i> partials</li>
                                    <li data-toggle="tooltip" data-placement="left" title="Sass source files"><i class="fas fa-folder mr-2"></i> scss</li>
                                    <li data-toggle="tooltip" data-placement="left" title="The page you're looking at right now. Call it inception."><i class="fab fa-html5 mr-2 text-secondary"></i> index.html</li>
                                </ul>
                            </li>
                            <li data-toggle="tooltip" data-placement="left" title="Volt with only HTML, CSS and Javascript"><i class="fas fa-folder mr-2 text-muted"></i> html&css</li>
                            <li data-toggle="tooltip" data-placement="left" title="Temporary folder that is created when serving files with BrowserSync"><i class="fas fa-folder text-muted mr-2"></i>.temp</li>
                            <li data-toggle="tooltip" data-placement="left" title="Minified version of the project"><i class="fas fa-folder mr-2 text-muted"></i> dist</li>
                            <li data-toggle="tooltip" data-placement="left" title="Project dependencies from package.json"><i class="fas fa-folder text-muted mr-2"></i> node_modules
                            </li>
                            <li data-toggle="tooltip" data-placement="left" title="Development workflow commands. We have them well documented."><i class="fab fa-js-square mr-2 text-warning"></i> gulpfile.js</li>
                            <li data-toggle="tooltip" data-placement="left" title="Project details and dependencies."><i class="fas fa-file-code mr-2 text-tertiary"></i> package.json</li>
                            <li data-toggle="tooltip" data-placement="left" title="No project can miss a README :)"><i class="fas fa-file-code mr-2 text-tertiary"></i> README.md</li>
                            <li data-toggle="tooltip" data-placement="left" title="This file ensures that generated files and folder are ignored by Git. (eg. node_modules)">
                                <i class="fas fa-file-code mr-2 text-tertiary"></i> .gitignore</li>
                        </ul>
                    </div>
                    <div class="col-12 mt-5 d-lg-none">
                        <h5>You need only HTML, CSS and Javascript?</h5>
                        <p>Don't worry, we got you covered. We have a folder called <code class="text-danger">html&css</code> which includes only the basic HTML5, CSS3 and Javascript technologies.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-lg bg-primary">
            <div class="container">
                <div class="row justify-content-center text-center text-white mb-5">
                    <div class="col-12">
                        <h2 class="h1 font-weight-light mb-3">Less <span class="font-weight-bold">work</span>, more <span class="font-weight-bold">flow</span>.</h2>
                        <p class="lead px-lg-8">
                            Boost productivity with BrowserSync. Sass changes are reflected instantly and pages scroll and refresh on devices as you work.
                        </p>
                    </div>
                </div>
                <div class="row justify-content-center mb-6">
                    <div class="col-md-10 col-xl-9">
                        <div class="position-relative">
                            <div class="rounded bg-white p-4 text-dark mb-2">
                                <div class="mb-3">
                                    <div class="font-weight-bold">&gt; $ npm install</div>
                                    <div class="text-gray">Everything’s installed!</div>
                                </div>
                                <div class="mb-3">
                                    <div class="font-weight-bold">&gt; $ gulp</div>
                                    <div class="text-gray">SCSS watching</div>
                                    <div class="text-gray">LiveReload started</div>
                                    <div class="text-gray">Opening localhost:3000</div>
                                </div>
                                <div>
                                    <div class="font-weight-bold">&gt; $ that's it?</div>
                                    <div class="text-gray">It's that simple!</div>
                                </div>
                            </div>
                        </div>
                        <p class="mt-4 text-white text-center">Looks unfamiliar? Don’t worry! Our <a class="text-white text-underline font-weight-bold" href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/getting-started/quick-start/" target="_blank">documentation</a> has got you covered.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-lg bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <h2 class="h1 font-weight-light mb-3">Open source</h2>
                        <p class="lead mb-4">Volt is an open source project under the MIT License. Give us a lucky star to spread the open source love ❤️</p>
                        <div class="d-flex align-items-center">
                            <a href="https://github.com/themesberg/volt-bootstrap-5-dashboard" target="_blank" class="btn btn-dark mr-4">
                                View on GitHub
                            </a>
                            <!-- Place this tag where you want the button to render. -->
                            <div class="mt-2">
                                <!-- Place this tag where you want the button to render. -->
                                <a class="github-button" href="https://github.com/themesberg/volt-bootstrap-5-dashboard" data-color-scheme="no-preference: dark; light: light; dark: light;" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star /themesberg/volt-bootstrap-5-dashboard on GitHub">Star</a>                            
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="github-big-icon">
                            <span class="fab fa-github"></span>
                        </div>
                      </div>
                </div>
                <div class="row mt-6">
                    <div class="col-12 col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="card border-light p-4">
                            <!-- Header -->
                            <div class="card-header bg-white border-0 pb-0">
                                <span class="d-block">
                                    <span class="h2 text-primary font-weight-bold align-top">Free Demo</span>
                                </span>
                            </div>
                            <!-- End Header -->
                            <!-- Content -->
                            <div class="card-body">
                                <ul class="list-group list-group-flush price-list">
                                    <li class="list-group-item bg-white border-0 pl-0"><strong>100</strong> Components</li>
                                    <li class="list-group-item bg-white border-0 pl-0"><strong>11</strong> Example Pages</li>
                                    <li class="list-group-item bg-white border-0 pl-0"><span class="icon-danger mr-2"><span class="fas fa-times-circle"></span></span> MapBox</li>
                                    <li class="list-group-item bg-white border-0 pl-0"><span class="icon-danger mr-2"><span class="fas fa-times-circle"></span></span> Calendar</li>
                                    <li class="list-group-item bg-white border-0 pl-0"><span class="icon-danger mr-2"><span class="fas fa-times-circle"></span></span> SVG Map</li>
                                    <li class="list-group-item bg-white border-0 pl-0"><span class="icon-danger mr-2"><span class="fas fa-times-circle"></span></span> Widgets</li>
                                    <li class="list-group-item bg-white border-0 pl-0 pb-0"><span class="icon-danger mr-2"><span class="fas fa-times-circle"></span></span> Premium Support</li>
                                </ul>
                            </div>
                            <!-- End Content -->
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="card border-light p-4 pt-5 pb-4 mt-lg-n5">
                            <!-- Header -->
                            <div class="card-header bg-white border-0 pb-0">
                                <span class="d-block">
                                    <span class="h2 text-primary font-weight-bold align-top">Pro Version</span>
                                </span>
                            </div>
                            <!-- End Header -->
                            <!-- Content -->
                            <div class="card-body">
                                <ul class="list-group list-group-flush price-list">
                                    <li class="list-group-item bg-white border-0 pl-0"><strong>1000+</strong> Components</li>
                                    <li class="list-group-item bg-white border-0 pl-0"><strong>20</strong> Example Pages</li>
                                    <li class="list-group-item bg-white border-0 pl-0">Dashboard included</li>
                                    <li class="list-group-item bg-white border-0 pl-0"><span class="icon-success mr-2"><span class="fas fa-check-circle"></span></span> MapBox</li>
                                    <li class="list-group-item bg-white border-0 pl-0"><span class="icon-success mr-2"><span class="fas fa-check-circle"></span></span> Calendar</li>
                                    <li class="list-group-item bg-white border-0 pl-0"><span class="icon-success mr-2"><span class="fas fa-check-circle"></span></span> SVG Map</li>
                                    <li class="list-group-item bg-white border-0 pl-0"><span class="icon-success mr-2"><span class="fas fa-check-circle"></span></span> Widgets</li>
                                    <li class="list-group-item bg-white border-0 border-0 pl-0 pb-0"><span class="icon-success mr-2"><span class="fas fa-check-circle"></span></span> Premium Support</li>
                                </ul>
                                <a href="https://themesberg.com/product/admin-dashboard/volt-premium-bootstrap-5-dashboard" target="_blank" class="btn btn-secondary text-dark mt-4 btn-block">
                                    Volt Pro <i class="fas fa-external-link-alt ml-2"></i>
                                </a>
                            </div>
                            <!-- End Content -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @@include('./_footer.html', {
        "path": ".",
        "classes": "bg-primary text-white"
    })

    @@include('./_scripts.html', {
        "path": "."
    })
</body>

</html>