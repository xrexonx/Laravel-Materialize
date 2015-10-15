<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="{!! asset('css/app.css') !!}" media="screen,projection" rel="stylesheet" type="text/css" />
        <link href="{!! asset('css/materialize.css') !!}" media="screen,projection" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="container">
            <div class="content">
                <nav>
                    <div class="nav-wrapper">
                        <a href="#" class="brand-logo">Logo</a>
                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                            <li><a href="sass.html">Sass</a></li>
                            <li><a href="badges.html">Components</a></li>
                            <li><a href="collapsible.html">JavaScript</a></li>
                        </ul>
                    </div>
                </nav>
                <br>
                <div class="row">
                    <div class="col s12">
                        <ul class="tabs">
                            <li class="tab col s3"><a  class="active"  href="#test1">Sample Table</a></li>
                            <li class="tab col s3"><a href="#test2">Sample Collapsible</a></li>
                            <li class="tab col s3"><a href="#test3">Sample Forms</a></li>
                            <li class="tab col s3"><a href="#test4">Others</a></li>
                        </ul>
                    </div>
                    <div id="test1" class="col s12">
                        <br>
                        <div class="card-panel teal lighten-2">This is a card panel with a teal lighten-2 class</div>
                        <br>
                        {{--Sample Table--}}
                        <table class="bordered">
                            <thead>
                            <tr>
                                <th data-field="id">Name</th>
                                <th data-field="name">Item Name</th>
                                <th data-field="price">Item Price</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Alvin</td>
                                <td>Eclair</td>
                                <td>$0.87</td>
                            </tr>
                            <tr>
                                <td>Alan</td>
                                <td>Jellybean</td>
                                <td>$3.76</td>
                            </tr>
                            <tr>
                                <td>Jonathan</td>
                                <td>Lollipop</td>
                                <td>$7.00</td>
                            </tr>
                            </tbody>
                        </table>
                        <br>
                        {{--Sample Buttons--}}
                        <a class="waves-effect waves-light btn">Stuff</a>
                        <a class="waves-effect waves-light btn">Stuff</a>
                        <a class="waves-effect waves-light btn"><i class="material-icons left">cloud</i>button</a>
                        <a class="waves-effect waves-light btn"><i class="material-icons right">cloud</i>button</a>
                        <a class="waves-effect waves-light btn"><i class="material-icons right">cloud</i>button</a>
                        <a class="waves-effect waves-light btn"><i class="material-icons right">cloud</i>button</a>
                        <a class="waves-effect waves-light btn"><i class="material-icons right">cloud</i>button</a>
                    </div>
                    <div id="test2" class="col s12">
                        <br>
                        <ul class="collapsible" data-collapsible="accordion">
                            <li>
                                <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
                                <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                            </li>
                            <li>
                                <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
                                <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                            </li>
                            <li>
                                <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
                                <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                            </li>
                        </ul>

                    </div>
                    <div id="test3" class="col s12">
                        <br>
                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                                        <label for="first_name">First Name</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="last_name" type="text" class="validate">
                                        <label for="last_name">Last Name</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input disabled value="I am not editable" id="disabled" type="text" class="validate">
                                        <label for="disabled">Disabled</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="password" type="password" class="validate">
                                        <label for="password">Password</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="email" type="email" class="validate">
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="icon_prefix" type="text" class="validate">
                                        <label for="icon_prefix">First Name</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <i class="material-icons prefix">phone</i>
                                        <input id="icon_telephone" type="tel" class="validate">
                                        <label for="icon_telephone">Telephone</label>
                                    </div>
                                </div>
                            </form>
                        </div>

                        {{--Sample Buttons--}}
                        <a class="waves-effect waves-light btn">Stuff</a>
                        <a class="waves-effect waves-light btn">Stuff</a>
                        <a class="waves-effect waves-light btn"><i class="material-icons left">cloud</i>button</a>
                        <a class="waves-effect waves-light btn"><i class="material-icons right">cloud</i>button</a>
                        <a class="waves-effect waves-light btn"><i class="material-icons right">cloud</i>button</a>
                        <a class="waves-effect waves-light btn"><i class="material-icons right">cloud</i>button</a>
                        <a class="waves-effect waves-light btn"><i class="material-icons right">cloud</i>button</a>
                    </div>
                    <div id="test4" class="col s12">
                        <br>
                        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                            <i class="material-icons right">send</i>
                        </button>
                        <a class='dropdown-button btn' href='#' data-activates='dropdown1'>Drop Me!</a>

                        <!-- Dropdown Structure -->
                        <ul id='dropdown1' class='dropdown-content'>
                            <li><a href="#!">one</a></li>
                            <li><a href="#!">two</a></li>
                            <li class="divider"></li>
                            <li><a href="#!">three</a></li>
                        </ul>

                        <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>

                        <div class="progress">
                            <div class="indeterminate"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <footer class="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Footer Content</h5>
                        <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Links</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2014 Copyright Text
                    <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
                </div>
            </div>
        </footer>
        <script type="text/javascript" src="{!! asset('js/vendor/jquery.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('js/vendor/materialize.js') !!}"></script>
        <script>
            $(function(){
                $('.collapsible').collapsible({
                    accordion : false
                });
            });
        </script>
    </body>
</html>
