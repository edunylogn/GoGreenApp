import React, { Component } from 'react';
import Select from 'react-select';
import DatePicker from 'react-bootstrap-date-picker';
import '../../styles/react-select/default.scss';
import '../../styles/_search.scss';


class Hotel extends Component {
    constructor(props) {
        super(props);
        this.state = {
            options: [
                { value: 1, label: 'Costa Rica' },
                { value: 2, label: 'Guatemala' }
            ],
            value: null
        };
        // This binding is necessary to make `this` work in the callback
        this.logChange = this.logChange.bind(this);
    }
    logChange(val) {
        this.setState({
            value: val
        });
        console.log("Selected: " + val);
    }

    render () {
        return (
            <div className="page-wrapper">
                <div className="container-fluid search-container">
                    <div className="page-bg-extra"></div>
                    <div className="container">
                        <div className="row">
                            <div className="col-md-10 col-md-offset-1 search-filters-min-container">
                                <div className="row">
                                    <div className="control-group form-group col-md-3 col-md-offset-1">
                                        <input type="text" placeholder="Hotel or destiny" className="input-sm form-control"/>
                                    </div>
                                    <div className="control-group form-group col-md-2">
                                        <DatePicker id="example-datepicker" placeholder='From' bsSize='sm' clearButtonElement={<i className="fa fa-calendar"></i>}/>
                                    </div>
                                    <div className="control-group form-group col-md-2">
                                        <DatePicker id="example-datepicker" placeholder='To' bsSize='sm' clearButtonElement={<i className="fa fa-calendar"></i>}/>
                                    </div>
                                    <div className="control-group form-group col-md-1">
                                        <input type="number" placeholder="Rooms" className="input-sm form-control"/>
                                    </div>
                                    <div className="control-group form-group col-md-1">
                                        <input type="number" placeholder="Adults" className="input-sm form-control"/>
                                    </div>
                                    <div className="control-group form-group col-md-1">
                                        <input type="number" placeholder="Childs" className="input-sm form-control"/>
                                    </div>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
                <div className="container search-results-container">
                    <div className="row">
                        <div className="col-md-10 col-md-offset-1">
                            <div className="row">
                                <div className="col-sm-7">
                                    <legend><h1>Hotel Name</h1></legend>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?
                                    </p>
                                </div>
                                <div className="col-sm-5">
                                    <div id="carousel-example-generic" className="carousel slide" data-ride="carousel">
                                        <ol className="carousel-indicators">
                                            <li data-target="#carousel-example-generic" data-slide-to="0" className=""></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="1" className=""></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="2" className="active"></li>
                                        </ol>
                                        <div className="carousel-inner">
                                            <div className="item">
                                                <img className="slide-image" src="http://placehold.it/400x300" alt=""/>
                                            </div>
                                            <div className="item">
                                                <img className="slide-image" src="http://placehold.it/400x300" alt=""/>
                                            </div>
                                            <div className="item active">
                                                <img className="slide-image" src="http://placehold.it/400x300" alt=""/>
                                            </div>
                                        </div>
                                        <a className="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                            <span className="glyphicon glyphicon-chevron-left"></span>
                                        </a>
                                        <a className="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                            <span className="glyphicon glyphicon-chevron-right"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr/>
                    <div className="row">
                        <div className="col-md-10 col-md-offset-1">
                            <ul className="nav nav-tabs">
                                <li className="active"><a href="#tab1">Basic Information</a></li>
                                <li><a href="#">Location</a></li>
                                <li><a href="#">Features</a></li>
                                <li><a href="#">Prices</a></li>
                            </ul>
                            <div id="tab1" className="tab_content">
                                <h2 className="sub_encabezado"> The Balmoral Hotel </h2>
                                The newly renovated Balmoral Hotel is a very special and unique hotel. The Balmoral Hotel is a pleasant four-star hotel located in the heart of downtown San José. The Balmoral is the perfect place to stay for business or pleasure.
                                It is within walking distance of the main business district, government agencies, restaurants, cultural, commercial and historical landmarks of Costa Rica´s capital.            &nbsp;<div>
                                It combines the essence of friendly Costa Rica and careful hospitality with a wide range of comfortable and pleasant facilities and services, all offered in the best location in San Jose, Costa Rica at a great value for your money - truly "The Hotel Full of Life! "</div>
                                <div>
                                    &nbsp;</div>
                                <div>
                                    Since we hosted our first guests in the 1950s, the Balmoral has been one of San Jose's favorite hotels for locals and international visitors alike. The Balmoral is located right on Central Avenue, San Jose's most famous and visited pedestrian boulevard and offers unrivaled access to local attractions, shopping, restaurants and nightlife.</div>
                                <div>
                                    &nbsp;</div>
                                <div>
                                    Enjoy beautiful rooms and reimagined suites designed to serve as reassurance urban oasis. Savor authentic Costa Rican dishes, international cuisine and beverages in our stunning tropical garden overlooking Central Avenue in our award-winning El Patio del Balmoral Restaurant, Bar &amp; Café. El Patio del Balmoral is a lively meeting place to enjoy delicious food, delicious cocktails and even free live music.</div>
                                <div>
                                    &nbsp;</div>
                                <div>
                                    Amenities:</div>
                                <div>
                                    - 100% smoke-free accommodation</div>
                                <div>
                                    - Comfortable beds and bedding</div>
                                <div>
                                    - Wood or fine ceramic floors</div>
                                <div>
                                    - Flat screen TV with cable</div>
                                <div>
                                    &nbsp;-Air conditioner</div>
                                <div>
                                    - Work desks with lamps (except standard room)</div>
                                <div>
                                    - Minibars</div>
                                <div>
                                    - Telephone for local and international calls (free calls to the United States)</div>
                                <div>
                                    - Coffee maker in all rooms Superior, Deluxe, Junior Suite and Suites</div>
                                <div>
                                    - Free WIFI</div>
                                <div>
                                    - Cabinets with hangers</div>
                                <div>
                                    - Iron (on request)</div>
                                <div>
                                    - Alarm clocks in all rooms Superior, Deluxe, Junior Suite and Suites</div>
                                <div>
                                    - Hair Dryers</div>
                                <div>
                                    - Biodegradable bath articles</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}
export default Hotel;