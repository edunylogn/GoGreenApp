import React, { Component } from 'react';

import logo from '../../img/logo.svg';
import bg from '../../img/body-bg.jpg';

//Components
import TopMenu              from './Home/Components/TopMenu';

class App extends Component {
    render() {
        return (
            <div>
                <TopMenu/>
                <div className="splash">
                    <div className="container">
                        <div className="row">
                            <div className="col-md-8">
                                <div id="myCarousel" className="carousel slide">
                                    <ol className="carousel-indicators">
                                        <li data-target="#myCarousel" data-slide-to="0" className="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                        <li data-target="#myCarousel" data-slide-to="2"></li>
                                    </ol>
                                    <div className="carousel-inner">
                                        <div className="item active">
                                            <img className="img-responsive img-full" src="http://placehold.it/900x350&text=Slide One" alt=""/>
                                            <div className="carousel-caption">
                                                <h2>Caption 1</h2>
                                            </div>
                                        </div>
                                        <div className="item">
                                            <img className="img-responsive img-full" src="http://placehold.it/900x350&text=Slide Two" alt=""/>
                                            <div className="carousel-caption">
                                                <h2>Caption 2</h2>
                                            </div>
                                        </div>
                                        <div className="item">
                                            <img className="img-responsive img-full" src="http://placehold.it/900x350&text=Slide Three" alt=""/>
                                            <div className="carousel-caption">
                                                <h2>Caption 3</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <a className="left carousel-control" href="#myCarousel" data-slide="prev">
                                        <span className="icon-prev"></span>
                                    </a>
                                    <a className="right carousel-control" href="#myCarousel" data-slide="next">
                                        <span className="icon-next"></span>
                                    </a>
                                </div>
                            </div>
                            <div className="col-md-4">
                                <h1>Business Name or Tagline</h1>
                                <p>This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!</p>
                                <a className="btn btn-primary btn-lg" href="#">Call to Action!</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="container">
                    <hr/>
                        <div className="row">
                            <div className="col-lg-12">
                                <div className="well text-center">
                                    This is a well that is a great spot for a business tagline or phone number for easy access!
                                </div>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-md-4">
                                <h2>Heading 1</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                                <a className="btn btn-default" href="#">More Info</a>
                            </div>
                            <div className="col-md-4">
                                <h2>Heading 2</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                                <a className="btn btn-default" href="#">More Info</a>
                            </div>
                            <div className="col-md-4">
                                <h2>Heading 3</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                                <a className="btn btn-default" href="#">More Info</a>
                            </div>
                        </div>
                        <footer>
                            <div className="row">
                                <div className="col-lg-12">
                                    <p>Copyright &copy; Your Website 2014</p>
                                </div>
                            </div>
                        </footer>
                </div>
            </div>
        );
    }
}

export default App;
