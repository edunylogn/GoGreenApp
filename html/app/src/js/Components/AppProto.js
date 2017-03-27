import React, { Component } from 'react';
//Helpers
import Carousel             from './Presentation/Carousel';
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
                            <div className="col-md-7">
                                {Carousel}
                            </div>
                            <div className="col-md-5">
                                <div className="well user-space">
                                    <h1>Business Name or Tagline</h1>
                                    <p>This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!</p>
                                    <a className="btn btn-success btn-lg" href="#">Call to Action!</a>
                                </div>
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
