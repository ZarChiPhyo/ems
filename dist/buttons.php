  <?php 
        include_once 'layout/header.php';
    ?>
    <?php 
        include_once 'layout/sidebar.php';
    ?>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
      <header class="header header-sticky mb-4">
        <div class="container-fluid">
          <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
            <svg class="icon icon-lg">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
            </svg>
          </button><a class="header-brand d-md-none" href="#">
            <svg width="118" height="46" alt="CoreUI Logo">
              <use xlink:href="assets/brand/coreui.svg#full"></use>
            </svg></a>
          <ul class="header-nav d-none d-md-flex">
            <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Users</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
          </ul>
          <ul class="header-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="icon icon-lg">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                </svg></a></li>
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="icon icon-lg">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-list-rich"></use>
                </svg></a></li>
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="icon icon-lg">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                </svg></a></li>
          </ul>
          <ul class="header-nav ms-3">
            <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/8.jpg" alt="user@email.com"></div>
              </a>
              <div class="dropdown-menu dropdown-menu-end pt-0">
                <div class="dropdown-header bg-light py-2">
                  <div class="fw-semibold">Account</div>
                </div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                  </svg> Updates<span class="badge badge-sm bg-info ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                  </svg> Messages<span class="badge badge-sm bg-success ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-task"></use>
                  </svg> Tasks<span class="badge badge-sm bg-danger ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-comment-square"></use>
                  </svg> Comments<span class="badge badge-sm bg-warning ms-2">42</span></a>
                <div class="dropdown-header bg-light py-2">
                  <div class="fw-semibold">Settings</div>
                </div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                  </svg> Profile</a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                  </svg> Settings</a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-credit-card"></use>
                  </svg> Payments<span class="badge badge-sm bg-secondary ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-file"></use>
                  </svg> Projects<span class="badge badge-sm bg-primary ms-2">42</span></a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                  </svg> Lock Account</a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                  </svg> Logout</a>
              </div>
            </li>
          </ul>
        </div>
        <div class="header-divider"></div>
        <div class="container-fluid">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
              <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><a href="#">Home</a>
              </li>
              <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><a href="#">Components</a>
              </li>
              <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><a href="#">Buttons</a>
              </li>
              <li class="breadcrumb-item active"><span>Buttons</span></li>
            </ol>
          </nav>
        </div>
      </header>
      <div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="card mb-4">
            <div class="card-header"><strong>Buttons</strong></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">CoreUI includes a bunch of predefined Bootstrap buttons, each serving its own semantic purpose. CoreUI also offers some unique buttons styles.</p>
              <p class="text-medium-emphasis small">Buttons show what action will happen when the user clicks or touches it. Bootstrap buttons are used to initialize operations, both in the background or foreground of an experience.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1000" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/buttons/#examples" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1000">
                    <div class="row align-items-center">
                      <div class="col-12 col-xl-2 mb-3 mb-xl-0">Normal</div>
                      <div class="col-auto">
                        <button class="btn btn-primary" type="button">Primary</button>
                        <button class="btn btn-secondary" type="button">Secondary</button>
                        <button class="btn btn-success" type="button">Success</button>
                        <button class="btn btn-danger" type="button">Danger</button>
                        <button class="btn btn-warning" type="button">Warning</button>
                        <button class="btn btn-info" type="button">Info</button>
                        <button class="btn btn-light" type="button">Light</button>
                        <button class="btn btn-dark" type="button">Dark</button>
                        <button class="btn btn-link" type="button">Link</button>
                      </div>
                    </div>
                    <div class="row align-items-center mt-3">
                      <div class="col-12 col-xl-2 mb-3 mb-xl-0">Active State</div>
                      <div class="col-auto">
                        <button class="btn btn-primary active" type="button" aria-pressed="true">Primary</button>
                        <button class="btn btn-secondary active" type="button" aria-pressed="true">Secondary</button>
                        <button class="btn btn-success active" type="button" aria-pressed="true">Success</button>
                        <button class="btn btn-danger active" type="button" aria-pressed="true">Danger</button>
                        <button class="btn btn-warning active" type="button" aria-pressed="true">Warning</button>
                        <button class="btn btn-info active" type="button" aria-pressed="true">Info</button>
                        <button class="btn btn-light active" type="button" aria-pressed="true">Light</button>
                        <button class="btn btn-dark active" type="button" aria-pressed="true">Dark</button>
                        <button class="btn btn-link active" type="button" aria-pressed="true">Link</button>
                      </div>
                    </div>
                    <div class="row align-items-center mt-3">
                      <div class="col-12 col-xl-2 mb-3 mb-xl-0">Disabled</div>
                      <div class="col-auto">
                        <button class="btn btn-primary active" type="button" disabled="">Primary</button>
                        <button class="btn btn-secondary active" type="button" disabled="">Secondary</button>
                        <button class="btn btn-success active" type="button" disabled="">Success</button>
                        <button class="btn btn-danger active" type="button" disabled="">Danger</button>
                        <button class="btn btn-warning active" type="button" disabled="">Warning</button>
                        <button class="btn btn-info active" type="button" disabled="">Info</button>
                        <button class="btn btn-light active" type="button" disabled="">Light</button>
                        <button class="btn btn-dark active" type="button" disabled="">Dark</button>
                        <button class="btn btn-link active" type="button" disabled="">Link</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header"><strong>Buttons</strong><span class="small ms-1">with icons</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">You can combine button with our <a href="https://icons.coreui.io/">CoreUI Icons</a>.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1001" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/buttons/#with-icons" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1001">
                    <div class="row align-items-center">
                      <div class="col-12 col-xl-2 mb-3 mb-xl-0">Normal</div>
                      <div class="col-auto">
                        <button class="btn btn-primary" type="button">
                          <svg class="icon me-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-contrast"></use>
                          </svg>Primary
                        </button>
                        <button class="btn btn-secondary" type="button">
                          <svg class="icon me-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-contrast"></use>
                          </svg>Secondary
                        </button>
                        <button class="btn btn-success" type="button">
                          <svg class="icon me-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-contrast"></use>
                          </svg>Success
                        </button>
                        <button class="btn btn-danger" type="button">
                          <svg class="icon me-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-contrast"></use>
                          </svg>Danger
                        </button>
                        <button class="btn btn-warning" type="button">
                          <svg class="icon me-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-contrast"></use>
                          </svg>Warning
                        </button>
                        <button class="btn btn-info" type="button">
                          <svg class="icon me-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-contrast"></use>
                          </svg>Info
                        </button>
                        <button class="btn btn-light" type="button">
                          <svg class="icon me-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-contrast"></use>
                          </svg>Light
                        </button>
                        <button class="btn btn-dark" type="button">
                          <svg class="icon me-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-contrast"></use>
                          </svg>Dark
                        </button>
                        <button class="btn btn-link" type="button">
                          <svg class="icon me-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-contrast"></use>
                          </svg>Link
                        </button>
                      </div>
                    </div>
                    <div class="row align-items-center mt-3">
                      <div class="col-12 col-xl-2 mb-3 mb-xl-0">Active State</div>
                      <div class="col-auto">
                        <button class="btn btn-primary active" type="button" aria-pressed="true">
                          <svg class="icon me-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-contrast"></use>
                          </svg>Primary
                        </button>
                        <button class="btn btn-secondary active" type="button" aria-pressed="true">
                          <svg class="icon me-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-contrast"></use>
                          </svg>Secondary
                        </button>
                        <button class="btn btn-success active" type="button" aria-pressed="true">
                          <svg class="icon me-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-contrast"></use>
                          </svg>Success
                        </button>
                        <button class="btn btn-danger active" type="button" aria-pressed="true">
                          <svg class="icon me-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-contrast"></use>
                          </svg>Danger
                        </button>
                        <button class="btn btn-warning active" type="button" aria-pressed="true">
                          <svg class="icon me-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-contrast"></use>
                          </svg>Warning
                        </button>
                        <button class="btn btn-info active" type="button" aria-pressed="true">
                          <svg class="icon me-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-contrast"></use>
                          </svg>Info
                        </button>
                        <button class="btn btn-light active" type="button" aria-pressed="true">
                          <svg class="icon me-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-contrast"></use>
                          </svg>Light
                        </button>
                        <button class="btn btn-dark active" type="button" aria-pressed="true">
                          <svg class="icon me-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-contrast"></use>
                          </svg>Dark
                        </button>
                        <button class="btn btn-link active" type="button" aria-pressed="true">
                          <svg class="icon me-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-contrast"></use>
                          </svg>Link
                        </button>
                      </div>
                    </div>
                    <div class="row align-items-center mt-3">
                      <div class="col-12 col-xl-2 mb-3 mb-xl-0">Disabled</div>
                      <div class="col-auto">
                        <button class="btn btn-primary active" type="button" disabled="">
                          <svg class="icon me-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-contrast"></use>
                          </svg>Primary
                        </button>
                        <button class="btn btn-secondary active" type="button" disabled="">
                          <svg class="icon me-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-contrast"></use>
                          </svg>Secondary
                        </button>
                        <button class="btn btn-success active" type="button" disabled="">
                          <svg class="icon me-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-contrast"></use>
                          </svg>Success
                        </button>
                        <button class="btn btn-danger active" type="button" disabled="">
                          <svg class="icon me-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-contrast"></use>
                          </svg>Danger
                        </button>
                        <button class="btn btn-warning active" type="button" disabled="">
                          <svg class="icon me-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-contrast"></use>
                          </svg>Warning
                        </button>
                        <button class="btn btn-info active" type="button" disabled="">
                          <svg class="icon me-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-contrast"></use>
                          </svg>Info
                        </button>
                        <button class="btn btn-light active" type="button" disabled="">
                          <svg class="icon me-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-contrast"></use>
                          </svg>Light
                        </button>
                        <button class="btn btn-dark active" type="button" disabled="">
                          <svg class="icon me-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-contrast"></use>
                          </svg>Dark
                        </button>
                        <button class="btn btn-link active" type="button" disabled="">
                          <svg class="icon me-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-contrast"></use>
                          </svg>Link
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header"><strong>Button</strong><span class="small ms-1">tags</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">The <code>.btn</code> classes are designed for <code> &lt;button&gt;</code> , <code> &lt;a&gt;</code> or <code> &lt;input&gt;</code> elements (though some browsers may apply a slightly different rendering).</p>
              <p class="text-medium-emphasis small">If you’re using <code>.btn</code> classes on <code> &lt;a&gt;</code> elements that are used to trigger functionality ex. collapsing content, these links should be given a <code>role="button"</code> to adequately communicate their meaning to assistive technologies such as screen readers.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1002" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/buttons/#button-tags" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1002"><a class="btn btn-primary" href="#" role="button">Link</a>
                    <button class="btn btn-primary" type="submit">Button</button>
                    <input class="btn btn-primary" type="button" value="Input">
                    <input class="btn btn-primary" type="submit" value="Submit">
                    <input class="btn btn-primary" type="reset" value="Reset">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header"><strong>Buttons</strong><span class="small ms-1">outline</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">If you need a button, but without the strong background colors. Replace the default modifier classes with the <code>.btn-outline-*</code> ones to remove all background colors on any element with <code>.btn</code> class.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1003" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/buttons/#outline-buttons" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1003">
                    <div class="row align-items-center">
                      <div class="col-12 col-xl-2 mb-3 mb-xl-0">Normal</div>
                      <div class="col-auto">
                        <button class="btn btn-outline-primary" type="button">Primary</button>
                        <button class="btn btn-outline-secondary" type="button">Secondary</button>
                        <button class="btn btn-outline-success" type="button">Success</button>
                        <button class="btn btn-outline-danger" type="button">Danger</button>
                        <button class="btn btn-outline-warning" type="button">Warning</button>
                        <button class="btn btn-outline-info" type="button">Info</button>
                        <button class="btn btn-outline-light" type="button">Light</button>
                        <button class="btn btn-outline-dark" type="button">Dark</button>
                      </div>
                    </div>
                    <div class="row align-items-center mt-3">
                      <div class="col-12 col-xl-2 mb-3 mb-xl-0">Active State</div>
                      <div class="col-auto">
                        <button class="btn btn-outline-primary active" type="button" aria-pressed="true">Primary</button>
                        <button class="btn btn-outline-secondary active" type="button" aria-pressed="true">Secondary</button>
                        <button class="btn btn-outline-success active" type="button" aria-pressed="true">Success</button>
                        <button class="btn btn-outline-danger active" type="button" aria-pressed="true">Danger</button>
                        <button class="btn btn-outline-warning active" type="button" aria-pressed="true">Warning</button>
                        <button class="btn btn-outline-info active" type="button" aria-pressed="true">Info</button>
                        <button class="btn btn-outline-light active" type="button" aria-pressed="true">Light</button>
                        <button class="btn btn-outline-dark active" type="button" aria-pressed="true">Dark</button>
                      </div>
                    </div>
                    <div class="row align-items-center mt-3">
                      <div class="col-12 col-xl-2 mb-3 mb-xl-0">Disabled</div>
                      <div class="col-auto">
                        <button class="btn btn-outline-primary active" type="button" disabled="">Primary</button>
                        <button class="btn btn-outline-secondary active" type="button" disabled="">Secondary</button>
                        <button class="btn btn-outline-success active" type="button" disabled="">Success</button>
                        <button class="btn btn-outline-danger active" type="button" disabled="">Danger</button>
                        <button class="btn btn-outline-warning active" type="button" disabled="">Warning</button>
                        <button class="btn btn-outline-info active" type="button" disabled="">Info</button>
                        <button class="btn btn-outline-light active" type="button" disabled="">Light</button>
                        <button class="btn btn-outline-dark active" type="button" disabled="">Dark</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header"><strong>Buttons</strong><span class="small ms-1">ghost</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Use <code>.btn-ghost-*</code> class for ghost buttons.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1004" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/buttons/#ghost-buttons" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1004">
                    <div class="row align-items-center">
                      <div class="col-12 col-xl-2 mb-3 mb-xl-0">Normal</div>
                      <div class="col-auto">
                        <button class="btn btn-ghost-primary" type="button">Primary</button>
                        <button class="btn btn-ghost-secondary" type="button">Secondary</button>
                        <button class="btn btn-ghost-success" type="button">Success</button>
                        <button class="btn btn-ghost-danger" type="button">Danger</button>
                        <button class="btn btn-ghost-warning" type="button">Warning</button>
                        <button class="btn btn-ghost-info" type="button">Info</button>
                        <button class="btn btn-ghost-light" type="button">Light</button>
                        <button class="btn btn-ghost-dark" type="button">Dark</button>
                      </div>
                    </div>
                    <div class="row align-items-center mt-3">
                      <div class="col-12 col-xl-2 mb-3 mb-xl-0">Active State</div>
                      <div class="col-auto">
                        <button class="btn btn-ghost-primary active" type="button" aria-pressed="true">Primary</button>
                        <button class="btn btn-ghost-secondary active" type="button" aria-pressed="true">Secondary</button>
                        <button class="btn btn-ghost-success active" type="button" aria-pressed="true">Success</button>
                        <button class="btn btn-ghost-danger active" type="button" aria-pressed="true">Danger</button>
                        <button class="btn btn-ghost-warning active" type="button" aria-pressed="true">Warning</button>
                        <button class="btn btn-ghost-info active" type="button" aria-pressed="true">Info</button>
                        <button class="btn btn-ghost-light active" type="button" aria-pressed="true">Light</button>
                        <button class="btn btn-ghost-dark active" type="button" aria-pressed="true">Dark</button>
                      </div>
                    </div>
                    <div class="row align-items-center mt-3">
                      <div class="col-12 col-xl-2 mb-3 mb-xl-0">Disabled</div>
                      <div class="col-auto">
                        <button class="btn btn-ghost-primary active" type="button" disabled="">Primary</button>
                        <button class="btn btn-ghost-secondary active" type="button" disabled="">Secondary</button>
                        <button class="btn btn-ghost-success active" type="button" disabled="">Success</button>
                        <button class="btn btn-ghost-danger active" type="button" disabled="">Danger</button>
                        <button class="btn btn-ghost-warning active" type="button" disabled="">Warning</button>
                        <button class="btn btn-ghost-info active" type="button" disabled="">Info</button>
                        <button class="btn btn-ghost-light active" type="button" disabled="">Light</button>
                        <button class="btn btn-ghost-dark active" type="button" disabled="">Dark</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header"><strong>Button</strong><span class="small ms-1">sizes</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Larger or smaller buttons? Add <code>.btn-lg</code> or <code>.btn-sm</code> for additional sizes.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1005" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/buttons/#sizes" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1005">
                    <button class="btn btn-primary btn-lg" type="button">Large button</button>
                    <button class="btn btn-secondary btn-lg" type="button">Large button</button>
                  </div>
                </div>
              </div>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1006" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/buttons/#sizes" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1006">
                    <button class="btn btn-primary btn-sm" type="button">Small button</button>
                    <button class="btn btn-secondary btn-sm" type="button">Small button</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header"><strong>Button</strong><span class="small ms-1">pill</span></div>
            <div class="card-body">
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1007" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/buttons/#pill-buttons" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1007">
                    <button class="btn btn-primary rounded-pill" type="button">Primary</button>
                    <button class="btn btn-secondary rounded-pill" type="button">Secondary</button>
                    <button class="btn btn-success rounded-pill" type="button">Success</button>
                    <button class="btn btn-danger rounded-pill" type="button">Danger</button>
                    <button class="btn btn-warning rounded-pill" type="button">Warning</button>
                    <button class="btn btn-info rounded-pill" type="button">Info</button>
                    <button class="btn btn-light rounded-pill" type="button">Light</button>
                    <button class="btn btn-dark rounded-pill" type="button">Dark</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header"><strong>Button</strong><span class="small ms-1">square</span></div>
            <div class="card-body">
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1008" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/buttons/#square-buttons" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1008">
                    <button class="btn btn-primary rounded-0" type="button">Primary</button>
                    <button class="btn btn-secondary rounded-0" type="button">Secondary</button>
                    <button class="btn btn-success rounded-0" type="button">Success</button>
                    <button class="btn btn-danger rounded-0" type="button">Danger</button>
                    <button class="btn btn-warning rounded-0" type="button">Warning</button>
                    <button class="btn btn-info rounded-0" type="button">Info</button>
                    <button class="btn btn-light rounded-0" type="button">Light</button>
                    <button class="btn btn-dark rounded-0" type="button">Dark</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header"><strong>Button</strong><span class="small ms-1">disabled state</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Add the <code>disabled</code> boolean attribute to any <code> &lt;button&gt;</code> element to make buttons look inactive. Disabled button has <code>pointer-events: none</code> applied to, disabling hover and active states from triggering.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1009" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/buttons/#disabled-state" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1009">
                    <button class="btn btn-lg btn-primary" type="button" disabled="">Primary button</button>
                    <button class="btn btn-secondary btn-lg" type="button" disabled="">Button</button>
                  </div>
                </div>
              </div>
              <p class="text-medium-emphasis small">Disabled buttons using the <code> &lt;a&gt;</code> element act a little different:</p>
              <p class="text-medium-emphasis small"><code> &lt;a&gt;</code>s don’t support the <code>disabled</code> attribute, so you have to add <code>.disabled</code> class to make buttons look inactive. The disabled bootstrap button must have the <code>aria-disabled="true"</code> attribute to show the state of the element to assistive technologies.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1010" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/buttons/#disabled-state" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1010"><a class="btn btn-primary btn-lg disabled" href="#" tabindex="-1" role="button" aria-disabled="true">Primary link</a><a class="btn btn-secondary btn-lg disabled" href="#" tabindex="-1" role="button" aria-disabled="true">Link</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header"><strong>Button</strong><span class="small ms-1">block</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Create buttons that span the full width of a parent—by using utilities.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1011" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/buttons/#block-buttons" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1011">
                    <div class="d-grid gap-2">
                      <button class="btn btn-primary" type="button">Button</button>
                      <button class="btn btn-primary" type="button">Button</button>
                    </div>
                  </div>
                </div>
              </div>
              <p class="text-medium-emphasis small">Here we create a responsive variation, starting with vertically stacked buttons until the <code>md</code> breakpoint, where <code>.d-md-block</code> replaces the <code>.d-grid</code> class, thus nullifying the <code>gap-2</code> utility. Resize your browser to see them change.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1012" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/buttons/#block-buttons" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1012">
                    <div class="d-grid gap-2 d-md-block">
                      <button class="btn btn-primary" type="button">Button</button>
                      <button class="btn btn-primary" type="button">Button</button>
                    </div>
                  </div>
                </div>
              </div>
              <p class="text-medium-emphasis small">You can adjust the width of your block buttons with grid column width classes. For example, for a half-width “block button”, use <code>.col-6</code>. Center it horizontally with <code>.mx-auto</code>, too.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1013" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/buttons/#block-buttons" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1013">
                    <div class="d-grid gap-2 col-6 mx-auto">
                      <button class="btn btn-primary" type="button">Button</button>
                      <button class="btn btn-primary" type="button">Button</button>
                    </div>
                  </div>
                </div>
              </div>
              <p class="text-medium-emphasis small">Additional utilities can be used to adjust the alignment of buttons when horizontal. Here we’ve taken our previous responsive example and added some flex utilities and a margin utility on the button to right align the buttons when they’re no longer stacked.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1014" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/buttons/#block-buttons" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1014">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                      <button class="btn btn-primary me-md-2" type="button">Button</button>
                      <button class="btn btn-primary" type="button">Button</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php 
      include_once 'layout/footer.php';
      ?>