import React, { Component } from 'react';
import Select from 'react-select';
import DatePicker from 'react-bootstrap-date-picker';
import '../../styles/react-select/default.scss';
import '../../styles/_search.scss';


class Hotels extends Component {
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
                            <div className="col-md-10 col-md-offset-1">
                                <h1 className="page-header">
                                    Hotels <small>searching</small>
                                </h1>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-md-10 col-md-offset-1 search-filters-container">
                                <div className="row">
                                    <div className="control-group form-group col-md-5 col-md-offset-2">
                                        <label>Hotel or destiny</label>
                                        <input type="text" placeholder="search by name" className="form-control"/>
                                    </div>
                                    <div className="control-group form-group col-md-3">
                                        <label>Country</label>
                                        <Select
                                            name="form-field-name"
                                            value={this.state.value}
                                            options={this.state.options}
                                            multi={true}
                                            simpleValue={true}
                                            onChange={this.logChange}
                                        />
                                    </div>
                                </div>
                                <div className="row">
                                    <div className="control-group form-group col-md-2 col-md-offset-2">
                                        <label>From</label>
                                        <DatePicker id="example-datepicker" clearButtonElement={<i className="fa fa-calendar"></i>}/>
                                    </div>
                                    <div className="control-group form-group col-md-2">
                                        <label>To</label>
                                        <DatePicker id="example-datepicker" clearButtonElement={<i className="fa fa-calendar"></i>}/>
                                    </div>
                                    <div className="control-group form-group col-md-1">
                                        <label>Rooms</label>
                                        <input type="number" className="form-control"/>
                                    </div>
                                    <div className="col-md-1 text-right">
                                        <p><br/>R. 1 <i className="fa fa-long-arrow-right"></i></p>
                                    </div>
                                    <div className="control-group form-group col-md-1">
                                        <label>Adults</label>
                                        <input type="number" className="form-control"/>
                                    </div>
                                    <div className="control-group form-group col-md-1">
                                        <label>Childs</label>
                                        <input type="number" className="form-control"/>
                                    </div>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
                <div className="container search-results-container">
                    <div className="row">
                        <div className="col-md-10 col-md-offset-1">
                            <div className="row text-center">
                                <h2>18 hotels found</h2>
                                <div className="col-md-3 col-sm-6 hero-feature">
                                    <div className="thumbnail">
                                        <img src="http://placehold.it/800x500" alt=""/>
                                        <div className="caption">
                                            <h3>Hotel Name</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            <p>
                                                <a href="#" className="btn btn-primary btn-block">Go to Details!</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div className="col-md-3 col-sm-6 hero-feature">
                                    <div className="thumbnail">
                                        <img src="http://placehold.it/800x500" alt=""/>
                                        <div className="caption">
                                            <h3>Hotel Name</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            <p>
                                                <a href="#" className="btn btn-primary btn-block">Go to Details!</a> 
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div className="col-md-3 col-sm-6 hero-feature">
                                    <div className="thumbnail">
                                        <img src="http://placehold.it/800x500" alt=""/>
                                        <div className="caption">
                                            <h3>Hotel Name</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            <p>
                                                <a href="#" className="btn btn-primary btn-block">Go to Details!</a> 
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div className="col-md-3 col-sm-6 hero-feature">
                                    <div className="thumbnail">
                                        <img src="http://placehold.it/800x500" alt=""/>
                                        <div className="caption">
                                            <h3>Hotel Name</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            <p>
                                                <a href="#" className="btn btn-primary btn-block">Go to Details!</a> 
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div className="col-md-3 col-sm-6 hero-feature">
                                    <div className="thumbnail">
                                        <img src="http://placehold.it/800x500" alt=""/>
                                        <div className="caption">
                                            <h3>Hotel Name</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            <p>
                                                <a href="#" className="btn btn-primary btn-block">Go to Details!</a> 
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div className="col-md-3 col-sm-6 hero-feature">
                                    <div className="thumbnail">
                                        <img src="http://placehold.it/800x500" alt=""/>
                                        <div className="caption">
                                            <h3>Hotel Name</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            <p>
                                                <a href="#" className="btn btn-primary btn-block">Go to Details!</a> 
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div className="col-md-3 col-sm-6 hero-feature">
                                    <div className="thumbnail">
                                        <img src="http://placehold.it/800x500" alt=""/>
                                        <div className="caption">
                                            <h3>Hotel Name</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            <p>
                                                <a href="#" className="btn btn-primary btn-block">Go to Details!</a> 
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div className="col-md-3 col-sm-6 hero-feature">
                                    <div className="thumbnail">
                                        <img src="http://placehold.it/800x500" alt=""/>
                                        <div className="caption">
                                            <h3>Hotel Name</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            <p>
                                                <a href="#" className="btn btn-primary btn-block">Go to Details!</a> 
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div className="col-md-3 col-sm-6 hero-feature">
                                    <div className="thumbnail">
                                        <img src="http://placehold.it/800x500" alt=""/>
                                        <div className="caption">
                                            <h3>Hotel Name</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            <p>
                                                <a href="#" className="btn btn-primary btn-block">Go to Details!</a> 
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div className="col-md-3 col-sm-6 hero-feature">
                                    <div className="thumbnail">
                                        <img src="http://placehold.it/800x500" alt=""/>
                                        <div className="caption">
                                            <h3>Hotel Name</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            <p>
                                                <a href="#" className="btn btn-primary btn-block">Go to Details!</a> 
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div className="col-md-3 col-sm-6 hero-feature">
                                    <div className="thumbnail">
                                        <img src="http://placehold.it/800x500" alt=""/>
                                        <div className="caption">
                                            <h3>Hotel Name</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            <p>
                                                <a href="#" className="btn btn-primary btn-block">Go to Details!</a> 
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div className="col-md-3 col-sm-6 hero-feature">
                                    <div className="thumbnail">
                                        <img src="http://placehold.it/800x500" alt=""/>
                                        <div className="caption">
                                            <h3>Hotel Name</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            <p>
                                                <a href="#" className="btn btn-primary btn-block">Go to Details!</a> 
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div className="col-md-3 col-sm-6 hero-feature">
                                    <div className="thumbnail">
                                        <img src="http://placehold.it/800x500" alt=""/>
                                        <div className="caption">
                                            <h3>Hotel Name</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            <p>
                                                <a href="#" className="btn btn-primary btn-block">Go to Details!</a> 
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div className="col-md-3 col-sm-6 hero-feature">
                                    <div className="thumbnail">
                                        <img src="http://placehold.it/800x500" alt=""/>
                                        <div className="caption">
                                            <h3>Hotel Name</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            <p>
                                                <a href="#" className="btn btn-primary btn-block">Go to Details!</a> 
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div className="col-md-3 col-sm-6 hero-feature">
                                    <div className="thumbnail">
                                        <img src="http://placehold.it/800x500" alt=""/>
                                        <div className="caption">
                                            <h3>Hotel Name</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            <p>
                                                <a href="#" className="btn btn-primary btn-block">Go to Details!</a> 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div className="col-md-3 col-sm-6 hero-feature">
                                    <div className="thumbnail">
                                        <img src="http://placehold.it/800x500" alt=""/>
                                        <div className="caption">
                                            <h3>Hotel Name</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            <p>
                                                <a href="#" className="btn btn-primary btn-block">Go to Details!</a> 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}
export default Hotels;