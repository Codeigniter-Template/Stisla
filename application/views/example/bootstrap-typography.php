<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_layout/header');
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Typography</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active">
          <a href="#">Dashboard</a>
        </div>
        <div class="breadcrumb-item">
          <a href="#">UI Kit</a>
        </div>
        <div class="breadcrumb-item">
          Typography
        </div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Typography</h2>
      <p class="section-lead">
        Documentation and examples for Bootstrap typography, including global settings, headings, body text, lists, and more.
      </p>
      <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card">
            <div class="card-header">
              <h4>Text</h4>
            </div>
            <div class="card-body">
              <h1>Heading 1</h1>
              <h2>Heading 2</h2>
              <h3>Heading 3</h3>
              <h4>Heading 4</h4>
              <h5>Heading 5</h5>
              <h6>Heading 6</h6>
              <h3 class="mt-4">
                Fancy display heading
                <small class="text-muted">With faded secondary text</small>
              </h3>
              <p class="lead mt-4">
                Lead &mdash; Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.
              </p>
              <p class="mt-4 mb-4">
                Paragraph &mdash; Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
              </p>
              <a href="#">You can click me!</a>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <h4>Text Colors</h4>
            </div>
            <div class="card-body">
              <div class="text-primary mb-2">
                Text Primary
              </div>
              <div class="text-secondary mb-2">
                Text Secondary
              </div>
              <div class="text-success mb-2">
                Text Success
              </div>
              <div class="text-info mb-2">
                Text Info
              </div>
              <div class="text-warning mb-2">
                Text Warning
              </div>
              <div class="text-light mb-2">
                Text Light
              </div>
              <div class="text-dark mb-2">
                Text Dark
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <h4>Inline Text Element</h4>
            </div>
            <div class="card-body">
              <p>
                You can use the mark tag to <mark>highlight</mark> text.
              </p>
              <p>
                <del>This line of text is meant to be treated as deleted text.</del>
              </p>
              <p>
                <s>This line of text is meant to be treated as no longer accurate.</s>
              </p>
              <p>
                <ins>This line of text is meant to be treated as an addition to the document.</ins>
              </p>
              <p>
                <u>This line of text will render as underlined</u>
              </p>
              <p>
                <small>This line of text is meant to be treated as fine print.</small>
              </p>
              <p>
                <strong>This line rendered as bold text.</strong>
              </p>
              <p>
                <em>This line rendered as italicized text.</em>
              </p>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <h4>Abbreviations</h4>
            </div>
            <div class="card-body">
              <p>
                <abbr title="attribute">attr</abbr>
              </p>
              <p>
                <abbr title="HyperText Markup Language" class="initialism">HTML</abbr>
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card">
            <div class="card-header">
              <h4>Color</h4>
            </div>
            <div class="card-body">
              <div class="colors">
                <div class="color bg-primary text-white">
                  <div>
                    Primary
                  </div>
                </div>
                <div class="color bg-secondary text-white">
                  <div>
                    Secondary
                  </div>
                </div>
                <div class="color bg-success text-white">
                  <div>
                    Success
                  </div>
                </div>
                <div class="color bg-info text-white">
                  <div>
                    Info
                  </div>
                </div>
                <div class="color bg-warning text-white">
                  <div>
                    Warning
                  </div>
                </div>
                <div class="color bg-danger text-white">
                  <div>
                    Danger
                  </div>
                </div>
                <div class="color bg-light">
                  <div>
                    Light
                  </div>
                </div>
                <div class="color bg-dark text-white">
                  <div>
                    Dark
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <h4>Text Block</h4>
            </div>
            <div class="card-body">
              <div class="section-title mt-0">
                Blockquote
              </div>
              <blockquote>
                Stisla made with hand
              </blockquote>
              <div class="section-title">
                Inline Code
              </div>
              <p>
                Lorem ipsum dolor sit amet, <code>consectetur</code> adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud <code>exercitation</code> ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
              </p>
              <div class="section-title">
                Code Block
              </div>
              <p>
                We use PrismJS to do this, you can adjust themes, syntax and more. <a href="http://prismjs.com">Visit their documentation</a>.
              </p>
              <pre class="language-javascript"><code>var code = 'Hello';</code></pre>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <h4>Display</h4>
            </div>
            <div class="card-body">
              <div class="display-1">
                Display 1
              </div>
              <hr>
              <div class="display-2">
                Display 2
              </div>
              <hr>
              <div class="display-3">
                Display 3
              </div>
              <hr>
              <div class="display-4">
                Display 4
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <h4>Naming a Source</h4>
            </div>
            <div class="card-body">
              <blockquote class="blockquote">
                <p class="mb-0">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                </p>
                <footer class="blockquote-footer">
                  Someone famous in <cite title="Source Title">Source Title</cite>
                </footer>
              </blockquote>
            </div>
          </div>
        </div>
      </div>

      <h2 class="section-title">List</h2>
      <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card">
            <div class="card-header">
              <h4>Unordered List</h4>
            </div>
            <div class="card-body">
              <p>
                Sunt in culpa qui officia deserunt mollit anim id est laborum:
              </p>
              <ul>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</li>
                <li>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</li>
                <li>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</li>
                <li>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</li>
                <li>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</li>
                <li>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card">
            <div class="card-header">
              <h4>Ordered List</h4>
            </div>
            <div class="card-body">
              <p>
                Sunt in culpa qui officia deserunt mollit anim id est laborum:
              </p>
              <ol>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</li>
                <li>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</li>
                <li>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</li>
                <li>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</li>
                <li>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</li>
                <li>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
                <li>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php $this->load->view('_layout/footer'); ?>