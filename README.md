# Stisla Admin Dashboard Template

**Stisla**  Stisla is a Free Bootstrap Admin Template which will help you to speed up your project and design your own dashboard UI. Users will love it.

-------------------

# Preview

### Screenshot

![Stisla admin dashboard template preview](https://camo.githubusercontent.com/2135e0f6544a7286a3412cdc3df32d47fc91b045/68747470733a2f2f692e6962622e636f2f3674646d6358302f323031382d31312d31312d31352d33352d676574737469736c612d636f6d2e706e67)

## Table of contents

- [Link Stisla](https://github.com/stisla/stisla)
- [Installation](#installation)
- [Usage](#usage)
- [Tips](#tips)
- [License](#License)

## Installation

**Here is how :**

- Fork the repository
- Clone with ```git clone https://github.com/Codeigniter-Template/Stilsa.git```
- Or Download zip

## Usage

- Create a new Controller at `view/views` then put like this:
```
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_layout/header'); ?>

<!-- Main Content -->

<?php
$this->load->view('_layout/footer'); ?>
```

- Create a new Controller at `application/controllers` then put like this:
```
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Control extends CI_Controller
{
public function __construct()
{
parent::__construct();
}

public function index()
{
$data['title'] = 'Dashboard';


$this->load->view('example/index', $data);
}
}
```
## Tips
You Need Modification Header.php , Js.php to include css and js on new your viewcontrol if you change view name


### License

Stisla is under the [MIT License](LICENSE).