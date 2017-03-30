import React, {PropTypes} from 'react';

const HotelList = ({hotels}) => {
    return (
        <ul>
            {hotels.map(hotel =>
                <li className="col-md-3 col-sm-6 hero-feature" key={hotel.id}>
                    <div className="thumbnail">
                        <img src="http://placehold.it/800x500" alt=""/>
                        <div className="caption">
                            <h4 className="pull-right">$100</h4>
                            <h3>{hotel.name}</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <p>
                                <a href="/hotel" className="btn btn-primary btn-block">Go to Details!</a>
                            </p>
                            <div className="ratings">
                                <p className="text-left">
                                    <span className="fa fa-star"></span>
                                    <span className="fa fa-star"></span>
                                    <span className="fa fa-star"></span>
                                    <span className="fa fa-star"></span>
                                    <span className="fa fa-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
            )}
        </ul>
    );
};

HotelList.propTypes = {
    cats: PropTypes.array.isRequired
};

export default HotelList;